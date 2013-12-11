<?php 
if(!empty($settings) && isset($settings)) {
    echo '<form action="'.base_url().'settings/save" method="post">';
    foreach($settings as $setting) {
        switch($setting->type) {
            case 'text' :
                echo '<label for="">'.$setting->readable_name.'</label><br/>';
                echo '<input type="text" name="'.$setting->settings_name.'" value="'.$setting->settings_value.'" class=":required"/><br />';
                break;
            case 'select' :
                echo '<label for="">'.$setting->readable_name.'</label><br/>';
                echo '<select name="'.$setting->settings_name.'" id="">';
                $values = explode(',',$setting->options);
                foreach($values as $v) {
                    echo '<option value="'.$v.'" '.($setting->settings_value == $v?'Selected':'').'>'.$v.'</option>';
                } 
                echo '</select>';
                break;
            case 'textarea' :
                echo '<label for="">'.$setting->readable_name.'</label><br/>';
                echo '<textarea name="'.$setting->settings_name.'">'.$setting->settings_value.'</textarea><br />';
                break;
        }
        echo '<br/>';
    }
    $this->load->helper('directory');
    $this->load->helper('form');
    $map = directory_map(APPPATH.'views/', 1);
    //echo form_dropdown('theme_path',$map,$this->settings_model->get_setting('theme_path'));
    echo '<label for="">Theme</label><br/><select name="theme_path" id="">';
    foreach($map as $key=>$val){
        echo '<option value="'.$val.'" '.($this->settings_model->get_setting('theme_path') == $val? 'selected':'').'>'.$val.'</option>';
    }
    echo '</select>';
    echo '<br/><br/><br/><input type="submit" value="SAVE"/>';
    echo '</form>';
}