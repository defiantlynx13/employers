<?php


//add base menu plugin ----------------------
add_menu_page(
    'مدیریت کارفرمایان',
    'مدیریت کارفرمایان',
    'administrator',
    'employers_administration',
    'all_employers_function',
    'dashicons-analytics',
    4
);


//add all-route menu ------------------------
add_submenu_page(
    'employers_administration',
    'همه کارفرمایان',
    'همه کارفرمایان',
    'administrator',
    'all_employers',
    'all_employers_function'
);
function all_employers_function(){
    require_once( ROOT . '/pages/all_employers.php' );
}


?>