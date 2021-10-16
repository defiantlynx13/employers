<?php
$pid=intval($_GET['p_id']);
$table = $wpdb->prefix .'pfinancial_bills';
$query = "SELECT * FROM {$table} WHERE pid={$pid} ";
$query.=" ORDER BY pfb_title ASC ";

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
        <td  class="text-xs-center align-middle no-border "><h2>صورت حساب مالی</h2></td>
        <td  class="text-xs-right align-middle no-border" id="se_pfb_date_print"  style="width: 30% !important;"></td>
    </tr>

    <tr>
        <td  class="text-xs-left align-middle no-border" style="width: 30% !important;">پیمانکار :  <b><?php echo $result->cname?></td>
        <td  class="text-xs-center align-middle no-border "><h4> پروژه : <?php echo $result->pname.'  ';?></h4></td>
        <td  class="text-xs-right align-middle no-border" id="se_pfb_page_number_print"  style="width: 30% !important;"></td>
    </tr>
</table>
<table id="pfb_tbl" class="table table_sm table-bordered mb-0">

    <thead class="thead-default">
    <tr>
        <th class="text-xs-center">#</th>
        <th  class="text-xs-center">موضوع</th>
        <th  class="text-xs-center">تاریخ</th>
        <th  class="text-xs-center">مبلغ(ریال)</th>
        <th  class="text-xs-center">توضیحات</th>
    </tr>
    </thead>
    <tbody>
        <?php
            $count=1;
            foreach ($results as $result)
            {
                echo '<tr role="row">';
                    echo '<td class=" text-xs-center align-middle">'.$count.'</td>';
                $pfb_title=$result ->pfb_title;
                if (strpos($result ->pfb_title, 'pss')!== false)
                {
                    $str_arr = explode ("pss", $result ->pfb_title);
                    echo '<td class=" text-xs-center align-middle">'.'صورت وضعیت '.$str_arr[1].'</td>';
                }
                else
                {
                    echo '<td class=" text-xs-center align-middle">'.$pfb_title.'</td>';
                }

                echo '<td class=" text-xs-center align-middle">'.jdate("Y/m/d", strtotime($result ->pfb_date)).'</td>';
                echo '<td class=" text-xs-center align-middle" style="direction: ltr">'.$result ->pfb_amount.'</td>';
                echo '<td class=" text-xs-center align-middle">'.$result ->pfb_description.'</td>';

                echo '</tr role="row">';
                $count++;
            }
        ?>
    </tbody>
</table>

<table class="table table_sm table-bordered mb-0">
    <tfoot id="se_pfb_footer_print">
    <?php
    $table = $wpdb->prefix .'pfinancial_bills';
    $query = "SELECT * FROM {$table} WHERE pid={$pid} AND pfb_title LIKE 'pss%' ORDER BY pfb_title DESC ";
    $result_fb_pss=$wpdb->get_row($query);
    $fb_pss_sum=$result_fb_pss->pfb_amount;

    $query = "SELECT * FROM {$table} WHERE pid={$pid} AND pfb_title NOT LIKE 'pss%' ";
    $result_fbs=$wpdb->get_results($query);

    $temp_sum=0;
    foreach ($result_fbs as $result_fb)
    {
        $temp_sum+=$result_fb->pfb_amount;
    }
    $fpb_total = $temp_sum + $fb_pss_sum;
    ?>
    <tr>
        <td class="text-xs-center" width="60.6% !important" >جمع کل</td>
        <td  class="text-xs-center" width="19.7% !important" style="direction: ltr"> <b id="pfb_total">&nbsp;&nbsp;<?php echo $fpb_total; ?></b> </td>
        <?php
        if ($fpb_total>0)
        {
            echo '<td class="text-xs-center" style="color: green;" >کارفرما بستانکار است !</td>';
        }
        elseif ($fpb_total < 0)
        {
            echo '<td  class="text-xs-center"   style="color: red;" >کارفرما بدهکار است !</td>';
        }
        else
        {
            echo '<td  class="text-xs-center"  style="color: green;" >کارفرما تسویه کرده است !</td>';
        }
        ?>
    </tr>
    </tfoot>
</table>

<div class="modal  fade text-xs-left" id="se_pfb_get_date" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <label class="modal-title text-text-bold-600" id="myModalLabel33">تنظیم تاریخ صورت حساب مالی</label>
            </div>


            <div class="card-block">
                <form class="form" method="post" action="">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="pss_edit_date2">تاریخ</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="text" id="se_pfb_set_date2" class="form-control" name="se_pfb_set_date2" style="direction: ltr;text-align: center">
                                        <input type="hidden" id="se_pfb_set_date" class="form-control" name="se_pfb_set_date">
                                        <div class="form-control-position">
                                            <i class="icon-calendar5"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions right">
                            <button type="button" class="btn btn-primary" name="se_pfb_set_date_submit" id="se_pfb_set_date_submit">
                                <i class="icon-check2"></i> تنظیم
                            </button>
                        </div>
                </form>






            </div>


        </div>
    </div>
</div>
