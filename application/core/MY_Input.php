<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Input extends CI_Input {

    function form_data()
    {
        $array = array();
        foreach ( $_POST as $key => $value)
        {
            $array[$key] = $value;
        }
        return $array;
    }
}


 ?>