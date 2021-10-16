<div class="main-menu-content">
    <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
        <li class=" nav-item"><a href="<?php echo home_url('se_panel');?>"><i class="icon-shop"></i><span data-i18n="nav.dash.main" class="menu-title">داشبورد</span></a></li>

        <li class=" nav-item"><a href="<?php echo home_url('se_employee_pdrs_list/?p_id='.$p_id);?>"><i class="icon-push"></i><span data-i18n="nav.page_layouts.main" class="menu-title">گزارش روزانه</span></a></li>

        <li class=" nav-item"><a href="<?php echo home_url('se_employee_pss_list/?p_id='.$p_id);?>"><i class="icon-presentation"></i><span data-i18n="nav.cards.main" class="menu-title">صورت وضعیت </span></a></li>

        <li class=" nav-item"><a href="<?php echo home_url('se_project_emp_financial_bills/?p_id='.$p_id);?>"><i class="icon-moneypig"></i><span data-i18n="nav.advance_cards.main" class="menu-title">صورت حساب مالی</span></a></li>

        <?php
            if ($p_not_count==0)
            {
                ?>
                <li class=" nav-item"><a href="<?php echo home_url('se_project_emp_notification/?p_id='.$p_id);?>"><i class="icon-bell"></i></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">اعلان ها</span></a></li>
                <?php
            }
            else
            {
                ?>
                <li class=" nav-item"><a href="<?php echo home_url('se_project_emp_notification/?p_id='.$p_id);?>"><i class="icon-bell"></i></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">اعلان ها</span><span class="tag tag tag-danger tag-pill float-xs-right mr-2"><?php echo $p_not_count;?></span></a></li>
                <?php
            }
        ?>
        <?php
            if ($p_message_count==0)
            {
                ?>
                <li class=" nav-item"><a  href="<?php echo home_url('se_project_emp_message/?p_id='.$p_id);?>"><i class="icon-chat2"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">پیام ها</span></a></li>
                <?php
            }
            else
            {
                ?>
                <li class=" nav-item"><a href="<?php echo home_url('se_project_emp_message/?p_id='.$p_id);?>"><i class="icon-chat2"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title">پیام ها</span><span class="tag tag tag-info tag-pill float-xs-right mr-2"><?php echo $p_message_count;?></span></a></li>
                <?php
            }
        ?>


        <li class=" nav-item"><a href="<?php echo wp_logout_url( home_url().'/se_login' ); ?>"><i class="icon-power3"></i><span data-i18n="nav.form_layouts.form_layout_basic" class="menu-title"> خروج</span></a></li>



    </ul>
</div>