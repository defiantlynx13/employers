<?php

class Employers{

    public function __construct(){

        $this->activate();

    }

    private function activate(){
        register_activation_hook( ROOT . '/index.php' , array( $this, 'SE_activate' ) );

    }

    public static function SE_activate(){

        require_once( ROOT . '/inc/se-class-install.php' );

    }


}



?>