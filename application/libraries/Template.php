<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template {
		var $template_data = array();
		
		function set($name, $value)
		{
			$this->template_data[$name] = $value;
		}
	
		function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
		{               
			$this->CI =& get_instance();
			$user_template = ($this->CI->settings_model->get_setting('theme_path') != '' ? $this->CI->settings_model->get_setting('theme_path') : 'default');             
			$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));            
			return $this->CI->load->view($user_template.'/'.$template, $this->template_data, $return);
		}
}

/* End of file Template.php */
/* Location: ./system/application/libraries/Template.php */