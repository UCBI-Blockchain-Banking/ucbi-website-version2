<?php
use app\Models\Setting;

if(!function_exists('getSettings')){
    function getSettings(){
        return Setting::find(1);
    }
}
?>
