<?php
$pid=intval($_GET['p_id']);
$pdr_id=intval($_GET['pdr_id']);

?>

<div class="row">
    <div class="col-xs-12">
        <table class="table table-bordered mb-1">
            <?php
            $table = $wpdb->prefix .'projects';
            $query = "SELECT * FROM {$table} WHERE id={$pid}";
            $result=$wpdb->get_row($query);
            $employee=get_userdata($result->eid);

            $table = $wpdb->prefix .'pdaily_reports';
            $query = "SELECT * FROM {$table} WHERE id={$pdr_id} AND pid={$pid} ";
            $results2 = $wpdb->get_row($query);

            ?>
            <thead>
            <tr>
                <th  class="text-xs-left align-middle no-border" style="width: 30% !important;">کارفرما :  <b><?php echo $employee->first_name .  " " .$employee->last_name?></th>
                <th  class="text-xs-center align-middle no-border"><h2>گزارش روزانه</h2></th>
                <th class="text-xs-right align-middle no-border" style="width: 30% !important;">تاریخ :  &nbsp; &nbsp;<?php echo jdate("Y/m/d", strtotime($results2 ->date))?></td>
            </tr>

            <tr>
                <th  class="text-xs-left align-middle no-border" style="width: 30% !important;">پیمانکار :  <b><?php echo $result->cname?></th>
                <th  class="text-xs-center align-middle no-border "><h4> پروژه : <?php echo $result->pname.'  ';?></h4></th>
                <th  class="text-xs-right align-middle no-border" id="se_pfb_page_number_print"  style="width: 15% !important;">حداکثر درجه حرارت : <?php echo $results2->max_temp;?> | حدااقل درجه حرارت : <?php echo $results2->max_temp;?></th>
            </tr>
            </thead>
        </table>
    </div>
</div>


<div class="row">
    <div class="col-xs-6">
        <table id="pdr_man_power_tbl" class="table-bordered  mb-1">
            <thead class="thead-default">
            <tr>
            <tr>
                <th class="text-xs-center align-middle" rowspan="3">#</th>
                <th class="text-xs-center" colspan="3"> نیروی انسانی</th>
            </tr>
            </tr>
            <tr>
                <th class="text-xs-center align-middle" rowspan="2">پرسنل کارگاهی</th>
                <th class="text-xs-center" colspan="2"> ساعت کارکرد</th>
            </tr>
            <tr>
                <th class="text-xs-center">ورود</th>
                <th class="text-xs-center"> خروج</th>
            </tr>
            </thead>

            <?php
            $table = $wpdb->prefix .'pdaily_reports_man_power';
            $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ORDER BY  personnel DESC ";
            $results = $wpdb->get_results($query);
            ?>
            <tbody>
            <?php
            $count=1;
            foreach ($results as $result)
            {
                echo '<tr role="row">';
                echo '<td class=" text-xs-center align-middle">'.$count.'</td>';
                echo '<td class=" text-xs-center align-middle ">'.$result ->personnel.'</td>';
                echo '<td class=" text-xs-center align-middle ">'.$result ->entrance_time.'</td>';
                echo '<td class=" text-xs-center align-middle ">'.$result ->exit_time.'</td>';
                echo '</tr role="row">';
                $count++;
            }
            ?>
            </tbody>
        </table>
    </div>

    <div class="col-xs-6">
        <table id="pdr_materials_tbl" class="table-bordered mb-1">

            <thead class="thead-default">
            <tr>
                <th class="text-xs-center align-middle" width="10%">#</th>
                <th class="text-xs-center align-middle" width="20%"> مصالح وارده</th>
                <th class="text-xs-center align-middle"> حامل</th>
                <th class="text-xs-center align-middle"> واحد </th>
                <th class="text-xs-center align-middle "> مقدار </th>
            </tr>

            </thead>
            <?php
            $table = $wpdb->prefix .'pdaily_reports_materials';
            $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ORDER BY  title DESC ";
            $results = $wpdb->get_results($query);
            ?>
            <tbody>
            <?php
            $count=1;
            foreach ($results as $result)
            {
                echo '<tr role="row">';
                echo '<td class=" text-xs-center align-middle">'.$count.'</td>';
                echo '<td class=" text-xs-center align-middle">'.$result ->title.'</td>';
                echo '<td class=" text-xs-center align-middle">'.$result ->carrier.'</td>';
                echo '<td class=" text-xs-center align-middle">'.$result ->unit.'</td>';
                echo '<td class=" text-xs-center align-middle">'.$result ->amount.'</td>';
                echo '</tr role="row">';
                $count++;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<div class="row">
    <div class="col-xs-6">
        <table id="pdr_machinery_tbl" class="table-bordered mb-1">
            <thead class="thead-default">
            <tr>
                <th class="text-xs-center align-middle" rowspan="3" style="width: 10%">#</th>
                <th class="text-xs-center align-middle" colspan="3">ماشین آلات و ابزار</th>
            </tr>
            <tr>
                <th class="text-xs-center align-middle" rowspan="2">شرح</th>
                <th class="text-xs-center align-middle" colspan="2">ساعت کارکرد</th>
            </tr>
            <tr>
                <th class="text-xs-center align-middle">ورود</th>
                <th class="text-xs-center align-middle">خروج</th>
            </tr>
            </thead>


            <?php
            $table = $wpdb->prefix .'pdaily_reports_machinery';
            $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ORDER BY  title DESC ";
            $results = $wpdb->get_results($query);
            ?>
            <tbody>
            <?php
            $count=1;
            foreach ($results as $result)
            {
                echo '<tr role="row">';
                echo '<td class=" text-xs-center align-middle">'.$count.'</td>';
                echo '<td class=" text-xs-center align-middle p-1">'.$result ->title.'</td>';
                echo '<td class=" text-xs-center align-middle p-1">'.$result ->entrance_time.'</td>';
                echo '<td class=" text-xs-center align-middle p-1">'.$result ->exit_time.'</td>';
                echo '</tr role="row">';
                $count++;
            }
            ?>
            </tbody>
        </table>
    </div>

    <div class="col-xs-6">
        <table id="pdr_peyments_tbl"  class="table-bordered mb-1">

            <thead class="thead-default">
            <tr>
                <th class="text-xs-center align-middle" rowspan="2" style="width: 10%">#</th>
                <th class="text-xs-center align-middle" colspan="3">پرداختی</th>
            </tr>
            <tr>
                <th class="text-xs-center align-middle">شرح</th>
                <th class="text-xs-center align-middle">مبلغ</th>
                <th class="text-xs-center align-middle">صندوق</th>
            </tr>
            </thead>


            <?php
            $table = $wpdb->prefix .'pdaily_reports_payments';
            $query = "SELECT * FROM {$table} WHERE pdr_id={$pdr_id} ORDER BY  title DESC ";
            $results = $wpdb->get_results($query);
            ?>
            <tbody>
            <?php
            $count=1;
            foreach ($results as $result)
            {
                echo '<tr role="row">';
                echo '<td class=" text-xs-center align-middle">'.$count.'</td>';
                echo '<td class=" text-xs-center align-middle p-1">'.$result ->title.'</td>';
                echo '<td class=" text-xs-center align-middle p-1">'.$result ->amount.'</td>';
                echo '<td class=" text-xs-center align-middle p-1">'.$result ->bin.'</td>';
                echo '</tr role="row">';
                $count++;
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

<h2 class="text-xs-center"> ملاحضات</h2>

<div class="row">
    <div class="col-xs-12">
        <?php
        $table = $wpdb->prefix .'projects';
        $query = "SELECT * FROM {$table} WHERE id={$pid}";
        $result=$wpdb->get_row($query);
        $employee=get_userdata($result->eid);

        $table = $wpdb->prefix .'pdaily_reports';
        $query = "SELECT * FROM {$table} WHERE id={$pdr_id} AND pid={$pid} ";
        $results2 = $wpdb->get_row($query);

        ?>
        <table class="table table-bordered mb-1">
            <tr>
                <td  class="text-xs-left align-middle no-border">شرح اهم فعالیت های صورت گرفته :  </td>
            </tr>
            <tr>
                <td  class="text-xs-left align-middle no-border "><?php echo $results2->important_works?></td>
            </tr>
        </table>

        <table class="table table-bordered mb-1">
            <tr>
                <td  class="text-xs-left align-middle no-border">برنامه روز اینده :  </td>
            </tr>
            <tr>
                <td  class="text-xs-left align-middle no-border "><?php echo $results2->next_day_plan?></td>
            </tr>
        </table>

        <table class="table table-bordered mb-1">
            <tr>
                <td  class="text-xs-left align-middle no-border">مشکلات و موانع :  </td>
            </tr>
            <tr>
                <td  class="text-xs-left align-middle no-border "><?php echo $results2->problems?></td>
            </tr>
        </table>
    </div>
</div>



