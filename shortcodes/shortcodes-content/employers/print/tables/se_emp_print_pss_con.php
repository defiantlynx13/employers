<?php
$pid=intval($_GET['p_id']);
$pss_id=intval($_GET['pss_id']);
$table = $wpdb->prefix .'psituation_status_con';
$query = "SELECT * FROM {$table} WHERE pss_id<={$pss_id} AND  p_id={$pid} ";
$query.=" ORDER BY  pss_id DESC ";

$results=$wpdb->get_results($query);
?>

<table class="table table-hover table_sm table-bordered mb-0">
    <?php
    $table = $wpdb->prefix .'projects';
    $query = "SELECT * FROM {$table} WHERE id={$pid}";
    $result=$wpdb->get_row($query);
    $employee=get_userdata($result->eid);
    ?>
    <tr>
        <td  class="text-xs-left align-middle no-border" style="width: 30% !important;">کارفرما :  <b><?php echo $employee->first_name .  " " .$employee->last_name?></td>
        <td  class="text-xs-center align-middle no-border "><h2>صورت وضعیت موقت پیمانکار جزء</h2></td>
        <?php
        $table = $wpdb->prefix .'psituation_status';
        $query = "SELECT * FROM {$table} WHERE num={$pss_id} AND  pid={$pid} ";
        $result_temp_sj=$wpdb->get_row($query);
        ?>
        <td  class="text-xs-right align-middle no-border" id="se_pfb_date_print"  style="width: 30% !important;">تاریخ : &nbsp;<?php echo jdate('d / m / Y',strtotime($result_temp_sj->date));?></td>
    </tr>

    <tr>
        <td  class="text-xs-left align-middle no-border" style="width: 30% !important;">پیمانکار :  <b><?php echo $result->cname?></td>
        <td  class="text-xs-center align-middle no-border "><h4> پروژه : <?php echo $result->pname.'  ';?></h4></td>
        <td  class="text-xs-right align-middle no-border" id="se_pfb_page_number_print"  style="width: 30% !important;"> صورت وضعیت شماره : <?php echo $pss_id.'  ';?></td>
    </tr>
</table>
<table id="pfb_tbl" class="table table_sm table-bordered mb-0">

    <thead class="thead-default">
        <tr>
            <th class="text-xs-center align-middle" rowspan="2">#</th>
            <th class="text-xs-center align-middle" rowspan="2">شرح عملیات</th>
            <th class="text-xs-center align-middle" rowspan="2">تعداد</th>
            <th class="text-xs-center align-middle" colspan="2">سطح - حجم - وزن</th>
            <th class="text-xs-center align-middle" rowspan="2">واحد</th>
            <th class="text-xs-center align-middle" rowspan="2">بهای واحد</th>
            <th class="text-xs-center align-middle" rowspan="2">بهای کل</th>
            <th class="text-xs-center align-middle" rowspan="2">توضیحات</th>
        </tr>
        <tr>
            <th>جزئی</th>
            <th>جمع کل</th>
        </tr>

    </thead>
    <tbody>
        <?php
            $count=1;
            foreach ($results as $result)
            {
                echo '<tr role="row">';
                    echo '<td class=" text-xs-center align-middle">'.$count.'</td>';
                    echo '<td class=" text-xs-center align-middle">'.$result ->title.'</td>';
                    echo '<td class=" text-xs-center align-middle">'.$result ->count.'</td>';
                    echo '<td class=" text-xs-center align-middle">'.$result ->vol_area_weight_minor.'</td>';
                    echo '<td class=" text-xs-center align-middle">'.$result ->vol_area_weight_total.'</td>';
                    echo '<td class=" text-xs-center align-middle">'.$result ->unit.'</td>';
                    echo '<td class=" text-xs-center align-middle">'.$result ->unit_price.'</td>';
                    echo '<td class=" text-xs-center align-middle">'.$result ->r_total.'</td>';
                    echo '<td class=" text-xs-center align-middle">'.$result ->description.'</td>';

                echo '</tr>';
                $count++;
            }
        ?>
    </tbody>
</table>

<table class="table table_sm table-bordered mb-0">
    <tfoot id="se_pfb_footer_print">
    <?php
    $pid=intval($_GET['p_id']);
    $pss_id=intval($_GET['pss_id']);
    $table = $wpdb->prefix .'psituation_status_con';
    $query = "SELECT sum(r_total) as pss_total FROM {$table} WHERE pss_id<={$pss_id} AND  p_id={$pid} ";
    $result_total=$wpdb->get_results($query);

    $table = $wpdb->prefix .'projects';
    $query = "SELECT * FROM {$table} WHERE id={$pid}";
    $result=$wpdb->get_row($query);

    $temp1=($result_total[0]->pss_total)*($result->cprofit/100);
    $temp2=$result_total[0]->pss_total + $temp1;
    ?>
    <tr>
        <td class="text-xs-center">سود پیمانکار</td>
        <td  class="text-xs-center"> <b id="pfb_total">&nbsp;&nbsp;<?php echo $temp1;?></b> </td>
        <td  class="text-xs-center"> <b id="pfb_total">&nbsp;&nbsp;<?php echo $result->cprofit; ?></b>  درصد</td>
    </tr>
    <tr>
        <td class="text-xs-center" >جمع کل</td>
        <td  class="text-xs-center" colspan="2"> <b id="pfb_total">&nbsp;&nbsp;<?php echo $temp2 ?></b> </td>
    </tr>
    </tfoot>
</table>


