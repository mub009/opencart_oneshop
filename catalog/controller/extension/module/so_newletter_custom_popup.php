<?php
class ControllerExtensionModuleSonewlettercustompopup extends Controller {
	public function index($setting) {
		$cookie_name = "so_newletter_custom_popup";
		if(!isset($_COOKIE[$cookie_name])|| $setting['layout'] == 'layout_default') {
		$this->load->language('extension/module/so_newletter_custom_popup');
		$data['input_check'] 			= $this->language->get('input_check');
		$data['label_email'] 			= $this->language->get('label_email');
		$data['newsletter_placeholder'] = $this->language->get('newsletter_placeholder');
		$data['label_fullname'] 		= $this->language->get('label_fullname');
		$data['placeholder_fullname']   = $this->language->get('placeholder_fullname');
		$data['newsletter_button'] 		= $this->language->get('newsletter_button');
		
		/*Config Default*/
		if(!isset($setting['pre_text']))
		{
			$setting['pre_text'] = '';
		}
		if(!isset($setting['post_text']))
		{
			 $setting['post_text'] = '';
		}
		
		$this->load->model('design/banner');
		$this->load->model('tool/image');
		$this->load->model('extension/module/so_newletter_custom_popup');
		$this->document->addStyle('catalog/view/javascript/so_newletter_custom_popup/css/style.css');

		if (isset($setting['module_description'][$this->config->get('config_language_id')])) {
			$data['head_name'] = html_entity_decode($setting['module_description'][$this->config->get('config_language_id')]['head_name'], ENT_QUOTES, 'UTF-8');
		}else{
			$data['head_name']  =html_entity_decode($setting['head_name'], ENT_QUOTES, 'UTF-8');
		}

		$data['disp_title_module']= (int)$setting['disp_title_module'] ;
		//General
		$data['class_suffix'] 	= $setting['class_suffix'];
		$data['moduleid']  		= $setting['moduleid'];
		$data['expired'] 		= $setting['expired'];
		$data['width'] 			= $setting['width'];
		$data['image_bg_display'] = $setting['image_bg_display'];
		$data['image'] 			= $setting['image'] ? $setting['image'] : '';
		$data['title_display'] 	= $setting['title_display'];
		$data['color_bg'] 		= $setting['color_bg'];
		//=== Theme Custom Code====
		
		if(!isset($setting['layout'])) $setting['layout'] = 'layout_default';
		$data['layout'] 		= $setting['layout'];
		$data['theme_directory'] = $this->config->get('theme_default_directory');
		if (isset($setting['post_text'])) $data['post_text']  = html_entity_decode($setting['post_text'], ENT_QUOTES, 'UTF-8');
		if (isset($setting['pre_text']))  $data['pre_text']  = html_entity_decode($setting['pre_text'], ENT_QUOTES, 'UTF-8');
		$data['txtemail_id'] = 'txtemail' . rand() . time();
		
		//Tab Advanced
		//$data['pre_text'] 				= $setting['pre_text'];
		//$data['post_text'] 				= $setting['post_text'];

		//Popup content Option
		if (isset($setting['description_content'][$this->config->get('config_language_id')])) {
			$data['title'] = html_entity_decode($setting['description_content'][$this->config->get('config_language_id')]['title'], ENT_QUOTES, 'UTF-8');
			$data['newsletter_promo'] = html_entity_decode($setting['description_content'][$this->config->get('config_language_id')]['newsletter_promo'], ENT_QUOTES, 'UTF-8');
		}else{
			$data['title']  = isset($setting['title']) ? $setting['title'] : '';
			$data['newsletter_promo']  = isset($setting['newsletter_promo']) ? $setting['newsletter_promo'] : '';
		}
			// caching
			$use_cache = (int)$setting['use_cache'];
			$cache_time = (int)$setting['cache_time'];
			$folder_cache = DIR_CACHE.'so/Newletter_custom_popup/';
			if(!file_exists($folder_cache))
				mkdir ($folder_cache, 0777, true);
			if (!class_exists('Cache_Lite'))
				require_once (DIR_SYSTEM . 'library/so/newletter_custom_popup/Cache_Lite/Lite.php');

			$options = array(
				'cacheDir' => $folder_cache,
				'lifeTime' => $cache_time
			);
			$Cache_Lite = new Cache_Lite($options);
			if ($use_cache){
				$this->hash = md5( serialize($setting));
				$_data = $Cache_Lite->get($this->hash);
				if (!$_data && $showFooter) {
					// Check Version
					
					$_data = $this->load->view('extension/module/so_newletter_custom_popup/default', $data);
					$Cache_Lite->save($_data);
					return  $_data;
				} else {
					return  $_data;
				}
			}else{
				if(file_exists($folder_cache))
					$Cache_Lite->_cleanDir($folder_cache);
				// Check Version
					return $this->load->view('extension/module/so_newletter_custom_popup/default', $data);
				
			}
			
		} else {
			echo "";
		}
	}
	

	public function newsletter()
	{
		$this->load->model('extension/module/so_newletter_custom_popup');

		$json = array();
		$json['message'] = $this->model_extension_module_so_newletter_custom_popup->subscribes($this->request->post);
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}
}