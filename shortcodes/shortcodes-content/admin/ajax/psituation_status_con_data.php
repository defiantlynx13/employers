<?php
defined("ABSPATH") || exit;

add_action("wp_ajax_psituation_status_con_data","psituation_status_con_data_server_side_callback");
add_action("wp_ajax_pss_add_con","pss_add_con_server_side_callback");
add_action("wp_ajax_pss_con_update","pss_con_update_server_side_callback");
add_action("wp_ajax_pss_con_delete","pss_con_delete_server_side_callback");


function psituation_status_con_data_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;
    $pss_id=$request['pss_id'];
    $p_id=$request['p_id'];

    $column = array(
        'pss_id',
        'pss_id',
        'title',
        'count',
        'vol_area_weight_minor',
        'vol_area_weight_total',
        'unit',
        'unit_price',
        'r_total',
        'description'
    );

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    global $wpdb;
    $table = $wpdb->prefix .'psituation_status_con';
    $query = "SELECT * FROM {$table} WHERE pss_id<={$pss_id} AND  p_id={$p_id} ";

     if (isset($request["search"]["value"]) )
     {
         $query.="AND  title LIKE '%".$request["search"]["value"]."%' ";

     }


    if(isset($request['order']))
    {
        $query .= 'ORDER BY '.$column[$request['order']['0']['column']].' '.$request['order']['0']['dir'].' ';
    }
    else
    {
        $query.=" ORDER BY  pss_id DESC ";
    }
    $results2 = $wpdb->get_results($query);
    $number_filter_row=$wpdb -> num_rows;
    $query1 = '';

    if($request['length'] != -1)
    {
        $query1 = ' LIMIT ' . $request['start'] . ', ' . $request['length'];
    }


    $results = $wpdb->get_results($query.$query1);


    $data = array();
    $count=1;
    foreach($results as $result)
    {
        $sub_array = array();
        $sub_array[] = $count;
        if ($result ->pss_id != $pss_id)
        {
            $pss_uri=home_url('se_project_situation_status_con/?p_id='.$p_id.'&pss_id='.$result ->pss_id);
            $pss_name='صورت وضعیت شماره'.$result ->pss_id;
            $sub_array[]='<a href="'.$pss_uri.'">'.$pss_name.'</a>';
        }
        else
        {
            $sub_array[] = '<button type="button" id="se_pss_con_delete" name="se_pss_con_delete" class="btn btn-sm btn-danger btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"><i class="icon-android-delete fa-lg"></i></button>'.
                '<button type="button" id="se_pss_con_edit" name="se_pss_con_edit" class="btn btn-sm btn-info btn-rounded  mr-1 mb-1" data-id="'.$result->id.'"  data-pps-id="'.$result->pss_id.'"  data-title="'.$result->title.'"   data-count="'.$result->count.'"   data-vol_area_weight_minor="'.$result->vol_area_weight_minor.'" data-unit="'.$result->unit.'" data-unit-price="'.$result->unit_price.'" data-description="'.$result->description.'" ><i class="icon-pencil3 fa-lg"></i></button>';
        }
        $sub_array[] = $result ->title;
        $sub_array[] = $result ->count;
        $sub_array[] = $result ->vol_area_weight_minor;
        $sub_array[] = $result ->vol_area_weight_total;
        $sub_array[] = $result ->unit;
        $sub_array[] = $result ->unit_price;
        $sub_array[] = $result ->r_total;
        $sub_array[] = $result ->description;


        $data[] = $sub_array;
        $count++;

    }


    function get_all_data()
    {
        $pss_id=$_GET['pss_id'];
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'psituation_status_con';
        $query = "SELECT * FROM {$table} WHERE pss_id={$pss_id}";
        $results = $wpdb->get_results($query);
        return $wpdb -> num_rows;
    }
//    $output=array();
//    $output[0] = array(
//        "draw"    => intval($_GET["draw"]),
//        "recordsTotal"  =>  get_all_data(),
//        "recordsFiltered" => $number_filter_row,
//        "data" => $data
//    );
//    $output[1]=$query.$query1;

    $output = array(
        "draw"    => intval($_GET["draw"]),
        "recordsTotal"  =>  get_all_data(),
        "recordsFiltered" => $number_filter_row,
        "data" => $data
    );


    echo json_encode($output);

    wp_die();
}


function pss_add_con_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['pss_add_con_p_id'],$request['pss_add_con_pss_id'],$request['pss_add_con_title'],$request['pss_add_con_count'],$request['pss_add_con_vol_area_weight_minor'],$request['pss_add_con_unit'],$request['pss_add_con_unit_price']))
    {
        $p_id=intval($request['pss_add_con_p_id']);
        $pss_id=intval($request['pss_add_con_pss_id']);
        $pss_add_con_title=sanitize_text_field($request['pss_add_con_title']);
        $pss_add_con_count=intval($request['pss_add_con_count']);
        $pss_add_con_vol_area_weight_minor=intval($request['pss_add_con_vol_area_weight_minor']);
        $pss_add_con_unit=sanitize_text_field($request['pss_add_con_unit']);
        $pss_add_con_unit_price=intval($request['pss_add_con_unit_price']);
        $pss_add_con_description=sanitize_text_field($request['pss_add_con_description']);


        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'psituation_status_con';
        $c=$pss_add_con_count * $pss_add_con_vol_area_weight_minor;
        $f=$c*$pss_add_con_unit_price;

        $output=array();
        if ($wpdb->insert($table,array('p_id'=>$p_id,'pss_id' => $pss_id,'title' => $pss_add_con_title,'count'=>$pss_add_con_count,'vol_area_weight_minor'=>$pss_add_con_vol_area_weight_minor,'vol_area_weight_total'=>$c,'unit'=>$pss_add_con_unit,'unit_price'=>$pss_add_con_unit_price,'r_total'=>$f,'description'=>$pss_add_con_description))=== false)
        {
            $output[0]=$wpdb->last_error;
            $output[1]=null;
            $output[2]=null;
            $output[3]=false;
            echo json_encode($output);
            wp_die();
        }
        else
        {
            $output[0]='ایتم مدنظر شما با موفقیت ثبت گردید!';

            $request= $_GET;
            $p_id=intval($request['pss_add_con_p_id']);
            $pss_id=intval($request['pss_add_con_pss_id']);
//                calc cprofit and pss_total
            $table = $wpdb->prefix .'psituation_status_con';
            $query = "SELECT sum(r_total) as pss_total FROM {$table} WHERE pss_id<={$pss_id} AND  p_id={$p_id} ";
            $result_total=$wpdb->get_results($query);

            $table = $wpdb->prefix .'projects';
            $query = "SELECT * FROM {$table} WHERE id={$p_id}";
            $result=$wpdb->get_row($query);
            $output[2]=($result_total[0]->pss_total)*($result->cprofit/100);

            $output[1]=$result_total[0]->pss_total + $output[2];
            $output[3]=true;


            $table = $wpdb->prefix .'psituation_status';
            $query = "SELECT num FROM {$table} ORDER BY num DESC LIMIT 1;";
            $max_pss_id=$wpdb->get_row($query);
            for ($i=$pss_id;$i<=$max_pss_id->num;$i++)
            {
                //                calc cprofit and pss_total
                $table = $wpdb->prefix .'psituation_status_con';
                $query = "SELECT sum(r_total) as pss_total FROM {$table} WHERE pss_id<={$i} AND  p_id={$p_id} ";
                $tot1=$wpdb->get_results($query);

                $table = $wpdb->prefix .'projects';
                $query = "SELECT * FROM {$table} WHERE id={$p_id}";
                $tot2=($tot1[0]->pss_total)*($wpdb->get_row($query)->cprofit/100);
                $tot=$tot1[0]->pss_total+$tot2;
                //                update  total filed in pss table
                $table = $wpdb->prefix .'psituation_status';
                $wpdb->update( $table, array( 'total' => $tot),array('num' =>$i,'pid' =>$p_id));
            }

            echo json_encode($output);
            wp_die();
        }
    }
}

function pss_con_update_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['p_id'],$request['pss_edit_con_id'],$request['pss_edit_con_title'],$request['pss_edit_con_count'],$request['pss_edit_con_vol_area_weight_minor'],$request['pss_edit_con_unit'],$request['pss_edit_con_unit_price']))
    {
        $p_id=intval($request['p_id']);
        $pss_edit_con_id=intval($request['pss_edit_con_id']);
        $pss_edit_con_title=sanitize_text_field($request['pss_edit_con_title']);
        $pss_edit_con_count=intval($request['pss_edit_con_count']);
        $pss_edit_con_vol_area_weight_minor=intval($request['pss_edit_con_vol_area_weight_minor']);
        $pss_edit_con_unit=sanitize_text_field($request['pss_edit_con_unit']);
        $pss_edit_con_unit_price=intval($request['pss_edit_con_unit_price']);
        $pss_edit_con_description=sanitize_text_field($request['pss_edit_con_description']);



        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        global $wpdb;
        $table = $wpdb->prefix .'psituation_status_con';
        $c=$pss_edit_con_count * $pss_edit_con_vol_area_weight_minor;
        $f=$c*$pss_edit_con_unit_price;

            $output=array();
            if ($wpdb->update( $table, array( 'title' => $pss_edit_con_title,'count' => $pss_edit_con_count,'vol_area_weight_minor' => $pss_edit_con_vol_area_weight_minor,'vol_area_weight_total' => $c,'unit' => $pss_edit_con_unit,'unit_price' => $pss_edit_con_unit_price,'r_total' => $f,'description' => $pss_edit_con_description),array('id' =>  $pss_edit_con_id)) === false)
            {
                $output[0]=$wpdb->last_error;
                $output[1]=null;
                $output[2]=null;
                echo json_encode($output);
                wp_die();
            }
            else
            {
                $output[0]='ایتم مدنظر شما با موفقیت ویرایش گردید!';

                $request= $_GET;
                $pss_id=intval($request['pss_edit_id']);
                $p_id=intval($request['p_id']);
//                calc cprofit and pss_total
                $table = $wpdb->prefix .'psituation_status_con';
                $query = "SELECT sum(r_total) as pss_total FROM {$table} WHERE pss_id<={$pss_id} AND  p_id={$p_id} ";
                $result_total=$wpdb->get_results($query);

                $table = $wpdb->prefix .'projects';
                $query = "SELECT * FROM {$table} WHERE id={$p_id}";
                $result=$wpdb->get_row($query);
                $output[2]=($result_total[0]->pss_total)*($result->cprofit/100);

                $output[1]=$result_total[0]->pss_total + $output[2];


                $table = $wpdb->prefix .'psituation_status';
                $query = "SELECT num FROM {$table} ORDER BY num DESC LIMIT 1;";
                $max_pss_id=$wpdb->get_row($query);
                for ($i=$pss_id;$i<=$max_pss_id->num;$i++)
                {
                    //                calc cprofit and pss_total
                    $table = $wpdb->prefix .'psituation_status_con';
                    $query = "SELECT sum(r_total) as pss_total FROM {$table} WHERE pss_id<={$i} AND  p_id={$p_id} ";
                    $tot1=$wpdb->get_results($query);

                    $table = $wpdb->prefix .'projects';
                    $query = "SELECT * FROM {$table} WHERE id={$p_id}";
                    $tot2=($tot1[0]->pss_total)*($wpdb->get_row($query)->cprofit/100);
                    $tot=$tot1[0]->pss_total+$tot2;
                    //                update  total filed in pss table
                    $table = $wpdb->prefix .'psituation_status';
                    $wpdb->update( $table, array( 'total' => $tot),array('num' =>$i,'pid' =>$p_id));
                }

                echo json_encode($output);
                wp_die();
            }

    }
}

function pss_con_delete_server_side_callback()
{
    header("Content-Type: application/json");
    $request= $_GET;

    if (isset($request['id'])) {
        $id = intval($request['id']);

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        global $wpdb;
        $table = $wpdb->prefix .'psituation_status_con';
        $output=array();

        if ($wpdb->delete($table, array('id' => $id)) === false)
        {
            $output[0]=$wpdb->last_error;
            $output[1]=null;
            $output[2]=null;
            echo json_encode($output);
            wp_die();
        }
        else
        {
            $output[0]='ایتم مدنظر شما با موفقیت حذف گردید!';

            $request= $_GET;
            $pss_id=intval($request['pss_id']);
            $p_id=intval($request['p_id']);
//                calc cprofit and pss_total
            $table = $wpdb->prefix .'psituation_status_con';
            $query = "SELECT sum(r_total) as pss_total FROM {$table} WHERE pss_id<={$pss_id} AND  p_id={$p_id} ";
            $result_total=$wpdb->get_results($query);

            $table = $wpdb->prefix .'projects';
            $query = "SELECT * FROM {$table} WHERE id={$p_id}";
            $result=$wpdb->get_row($query);
            $output[2]=($result_total[0]->pss_total)*($result->cprofit/100);

            $output[1]=$result_total[0]->pss_total + $output[2];


            $table = $wpdb->prefix .'psituation_status';
            $query = "SELECT num FROM {$table} ORDER BY num DESC LIMIT 1;";
            $max_pss_id=$wpdb->get_row($query);
            for ($i=$pss_id;$i<=$max_pss_id->num;$i++)
            {
                //                calc cprofit and pss_total
                $table = $wpdb->prefix .'psituation_status_con';
                $query = "SELECT sum(r_total) as pss_total FROM {$table} WHERE pss_id<={$i} AND  p_id={$p_id} ";
                $tot1=$wpdb->get_results($query);

                $table = $wpdb->prefix .'projects';
                $query = "SELECT * FROM {$table} WHERE id={$p_id}";
                $tot2=($tot1[0]->pss_total)*($wpdb->get_row($query)->cprofit/100);
                $tot=$tot1[0]->pss_total+$tot2;
                //                update  total filed in pss table
                $table = $wpdb->prefix .'psituation_status';
                $wpdb->update( $table, array( 'total' => $tot),array('num' =>$i,'pid' =>$p_id));
            }
            echo json_encode($output);
            wp_die();
        }

    }
}
