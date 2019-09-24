<?php
/******************************************************
 * @package	SO Theme Framework for Opencart 2.3.x
 * @author	http://www.magentech.com
 * @license	GNU General Public License
 * @copyright(C) 2008-2015 Magentech.com. All rights reserved.
*******************************************************/


require_once (DIR_APPLICATION.'view/template/extension/soconfig/class/so_field.php');
require_once (DIR_APPLICATION.'view/template/extension/soconfig/class/soconfig.php');

class ControllerExtensionModuleSoconfig extends Controller {

    private $error = array();
	
	private $typeheader = array();
	private $typefooter = array();
	public $typelayout = array();
	 
	public function  __construct($registry) { 
		parent::__construct($registry);
		$this->soconfig = new Soconfig($registry);
		if(!defined('DIR_SOCONFIG')) define('DIR_SOCONFIG','view/template/extension/soconfig/');
		
		//Dev Custom Theme
		$this->demos = array(
			array('key'=>'default', 'title'=>'Default','link'=>'#'),
			array('key'=>'layout2', 'title'=>'Home Layout2','link'=>'#'),
			array('key'=>'layout3', 'title'=>'Home Layout3','link'=>'#'),			
		);
		
		$this->listColor= array(
			'red' => '#f44336',
			'orange'    =>'#fe5722',
			'yellow' => '#ffaa01',
			'blue'   =>'#0083c1',											
			'green' => '#5bb300',
		);
		
		$this->typelayouts = array(
			array(
			'key'=>'1',
			'typelayout'=>'<p>Layout 1</p> <p class="font-small">(Header Type 1,Footer Type 1)</p>',
			'typeheader'=> array('key'=>'1', 'title'=>'Header 1 (used in Layout 1)'),
			'typefooter'=> array('key'=>'1', 'title'=>'Footer 1 (used in Layout 1)'),
			),
			// array(
			// 'key'=>'2',
			// 'typelayout'=>'<p>Layout 2</p> <p class="font-small">(Header Type 2,Footer Type 2)</p>',
			// 'typeheader'=> array('key'=>'2', 'title'=>'Header 2 (used in Layout 2)'),
			// 'typefooter'=> array('key'=>'2', 'title'=>'Footer 2 (used in Layout 2)'),
			// ),
			// array(
			// 'key'=>'3',
			// 'typelayout'=>'<p>Layout 3 </p><p class="font-small">(Header Type 3,Footer Type 3)</p>',
			// 'typeheader'=> array('key'=>'3', 'title'=>'Header 3 (used in Layout 3)'),
			// 'typefooter'=> array('key'=>'3', 'title'=>'Footer 3 (used in Layout 3)'),
			// ),
			
		);
		//End Dev Custom Theme
	}
    public function index() {
				

		/*===== Load language ========== */
		$this->load->language('extension/module/soconfig');
		$data['direction'] = $this->language->get('direction');
		$data['objlang'] = $this->language;

		/*===== Load Title Module ========== */
		$this->document->setTitle($this->language->get('heading_title_normal'));
		
		/*===== Load CSS & JS ========== */
		$this->document->addScript(DIR_SOCONFIG.'asset/plugin/bs-colorpicker/js/colorpicker.js');
		$this->document->addScript(DIR_SOCONFIG.'asset/js/jquery.cookie.js');
		$this->document->addScript(DIR_SOCONFIG.'asset/js/jquery.sticky-kit.min.js');
		$this->document->addScript(DIR_SOCONFIG.'asset/js/theme.js');

        $this->document->addStyle(DIR_SOCONFIG.'asset/plugin/bs-colorpicker/css/colorpicker.css');
        $this->document->addScript('view/javascript/summernote/summernote.js');
		$this->document->addScript('view/javascript/summernote/summernote-image-attributes.js');
		$this->document->addScript('view/javascript/summernote/opencart.js');
		$this->document->addStyle('view/javascript/summernote/summernote.css');
		
        if ($data['direction'] != 'rtl') $this->document->addStyle(DIR_SOCONFIG.'asset/css/theme.css');
		else $this->document->addStyle(DIR_SOCONFIG.'asset/css/theme-rtl.css');
        $this->document->addStyle(DIR_SOCONFIG.'asset/css/banner-effect.css');
		
		/*===== Load model ========== */
		$this->load->model('setting/store');
        $this->load->model('setting/setting');
		$this->load->model('extension/module/soconfig/setting');
		$this->load->model('design/layout');
		$this->load->model('tool/image');
		$this->load->model('localisation/language');
		
		/*===== Load Stores========== */
		$store_id = isset($this->request->get['store_id']) ? $this->request->get['store_id'] : 0;
        $stores = $this->model_setting_store->getStores();
		array_unshift($stores, array('store_id' => '0','name'     => $this->config->get('config_name'),));
		foreach ($stores as $store) {
			$store_data[] = array(
				'name'   => $store['name'],
				'store_id' =>  $store['store_id'],
				'status' => $this->model_setting_setting->getSettingValue('theme_default_status', $store['store_id']) 
			);
		}
		$data['stores'] = $store_data;
		$data['active_store'] = $store_id;
		/*===== End Load Stores========== */
	
		if (  $this->request->server['REQUEST_METHOD'] == 'POST' && $this->validate() ) {
			$this->model_extension_module_soconfig_setting->editSetting($this->request->post, $store_id);
			
            // ButtonForm apply
			if($this->request->post['buttonForm'] == 'color' ){
				$scsscompile = $this->request->post['soconfig_advanced_store']['scsscompile'];
				if($scsscompile != 1){
					unset($this->request->post['buttonForm']);
					$this->session->data['success'] = 'Success Compile Sass File To Css';
					$this->soconfig->scss_compass($this->request->post['soconfig_advanced_store']['theme_color'],$this->request->post['soconfig_advanced_store']['name_color'],$this->request->post['soconfig_general_store']['typelayout'],$this->request->post['soconfig_advanced_store']['compileMutiColor'],$this->listColor);
					$this->response->redirect($this->url->link('extension/module/soconfig','user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id, true));
				}else{
					$this->session->data['success'] = 'Error: Compile Sass File To Css, Select Performace -> SCSS Compile = Off';
				}
				
			}else if ($this->request->post['buttonForm'] == 'apply') {
				$this->session->data['success'] = $this->language->get('text_success');
                $this->response->redirect($this->url->link('extension/module/soconfig', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id, true));
				
            }else if ($this->request->post['buttonForm'] == 'install-data') {
				$install_layout = isset($this->request->post['required_layout'] ) ? $this->request->post['required_layout']  : '';
				$home_layout = isset($this->request->post['home_layout']) ? (int)$this->request->post['home_layout'] : 1;
				$blog_install = isset($this->request->post['blog_install']) ? (int)$this->request->post['blog_install'] : 0;
				
				$ret = $this->install_demo_data($stores, $store_id,$install_layout,$home_layout);
				if ($ret)
				  $this->response->redirect($this->url->link('extension/module/soconfig', 'user_token=' . $this->session->data['user_token'] .'&store_id='.$store_id.'&do=install-success', 'SSL'));
				else
				  $this->response->redirect($this->url->link('extension/module/soconfig', 'user_token=' . $this->session->data['user_token'] .'&store_id='.$store_id.'&do=install-failed', 'SSL'));  
				
			} else {
				$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
            }
			
		}
		
		
        if (isset($this->session->data['success'])) {$data['success'] = $this->session->data['success'];unset($this->session->data['success']);} else {$data['success'] = '';}
		if (isset($this->error['warning'])) {$data['error_warning'] = $this->error['warning'];} 
		else {$data['error_warning'] = '';}
		
		// Dev Add New
		/*$data['clear_cache_href'] = $this->url->link('extension/module/soconfig/clearcache', 'user_token='. $this->session->data['user_token'].'&store_id='.$store_id, true);
		$data['clear_css_href'] 	= $this->url->link('extension/module/soconfig/clearcss', 'user_token='. $this->session->data['user_token'].'&store_id='.$store_id, true);
		$data['compiled_css'] 		= $this->url->link('extension/module/soconfig/compiled_css', 'user_token=' . $this->session->data['user_token'].'&store_id='.$store_id, true);*/
		
		$data['typelayouts'] = $this->typelayouts;
		$data['dir_soconfig'] = DIR_SOCONFIG;
		$data['base_href'] = $this->url->link('extension/module/soconfig', 'user_token=' . $this->session->data['user_token'], 'SSL');
		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		$data['action'] = $this->url->link('extension/module/soconfig', 'user_token=' . $this->session->data['user_token'] . '&store_id=' . $store_id, true);

		
		/*===== Default Config Theme Stores========== */
		$default = array(
			'soconfig_advanced_store'	=> array(
				'name_color'	=>'blue',
				'theme_color'	=>'#1f83cf',
				'scsscompile'	=>1,
				'scssformat'	=>'Nested',
				'compileMutiColor'		=>0,
				'minify_css'	=>0,
				'minify_js'	=>0,
			),
			'soconfig_general_store'	=> array(
				'typelayout'	=>1,
				'themecolor'	=>'blue',
				'toppanel_status'	=>1,
				'toppanel_type'	=>1,
				'phone_status'		=>1,
				'contact_number' 	=> array(
					'1'=>'(84+) 1234455669',
					'2'=>'(84+) 1234455667',
			   	),
				'welcome_message_status'	=>1,
				'welcome_message' 	=> array(
					'1'=>'Welcome Message English',
					'2'=>'Welcome Message Arabic',
			   	),
				'wishlist_status'	=>1,
				'checkout_status'	=>1,
				'lang_status'	=>1,
				'preloader'	=>1,
				'preloader_animation'	=>'double-loop',
				'backtop'	=>1,
				'imgpayment_status'	=>1,
				'imgpayment'	=>'catalog/demo/payment/payment.png',
				'copyright'	=>'SO Revo Â© 2015 - {year}. All Rights Reserved. Designed by &lt;a href="magentech.com"&gt;MagenTech.Com&lt;/a&gt;',
				'typeheader'	=>1,
				'typefooter'	=>1,
				'type_banner'	=>4,
			),
			'soconfig_layout_store'	=> array(
				'layoutstyle'	=>'full',
				'theme_bgcolor'	=>'#7a167a',
				'pattern'	=>6,
				'contentbg'	=>'',
				'content_bg_mode'	=>'repeat',
				'content_attachment'		=>'scroll',
			),
			'soconfig_pages_store'	=> array(
				'product_catalog_refine'	=>0,
				'catalog_refine_devices_lg'	=>4,
				'catalog_refine_devices_md'	=>3,
				'catalog_refine_devices_sm'	=>2,
				'catalog_refine_devices_xs'	=>1,
				'lstimg_cate_status'	=>1,
				'product_catalog_mode'	=>0,
				'product_catalog_column_lg'	=>3,
				'product_catalog_column_md'	=>2,
				'product_catalog_column_sm'	=>2,
				'product_catalog_column_xs'	=>1,
				'other_catalog_column_lg'	=>4,
				'other_catalog_column_md'	=>3,
				'other_catalog_column_sm'	=>2,
				'other_catalog_column_xs'	=>1,
				'new_status'			=>1,
				'days'					=>30,
				'quick_status'			=>1,
				'discount_status'		=>1,
				'countdown_status'		=>1,
				'secondimg'				=>2,
				'rating_status'			=>1,
				'radio_style'			=>1,
				'check_style'			=>1,
				'product_gallerysize'	=>1,
				'thumbnails_position'	=>'bottom',
				'product_enablezoom'	=>1,
				'product_zoommode'		=>'inner',
				'product_zoomlenssize'  =>250,
				'tabs_position'  =>2,
				'product_page_button'  =>1,
				'product_socialshare' 	=> array(
					'1'=>'Custom block Html',
					'2'=>'Custom block Html',
			   	),
				'related_status'  =>1,
				'related_position'  =>'horizontal',
				'product_related_column_lg'	=>4,
				'product_related_column_md'	=>3,
				'product_related_column_sm'	=>2,
				'product_related_column_xs'	=>1,
			),
			'soconfig_fonts_store'	=> array(
				'body_status'	=>'standard',
				'normal_body'	=>'Arial, Helvetica, sans-serif',
				'url_body'	=>'',
				'family_body'	=>'',
				'selector_body'	=>'body',
				'menu_status'		=>'standard',
				'normal_menu'	=>'inherit',
				'url_menu'	=>'',
				'family_menu'	=>'',
				'selector_menu'	=>'',
				'heading_status'		=>'standard',
				'normal_heading'	=>'inherit',
				'url_heading'	=>'',
				'family_heading'	=>'',
				'selector_heading'	=>'',
			),
			'soconfig_social_store'	=> array(
				'social_fb_status'	=>1,
				'facebook'	=>'magentech',
				'social_twitter_status'	=>1,
				'social_custom_status'	=>1,
				'twitter'	=>'smartaddons',
				'video_code' 	=> array(
					'1'=>'Custom block Html',
					'2'=>'Custom block Html',
			   	),
				
			),
		);

		if (($this->request->server['REQUEST_METHOD'] != 'POST') || $this->request->server['REQUEST_METHOD'] == 'POST' && !$this->validate() ) {
			$soconfig_setting = $this->model_extension_module_soconfig_setting->getSetting($store_id);
			$soconfig_setting =  array_merge($default,$soconfig_setting);//check data empty database
		}
				
		//Get Variables Theme Config 
		if ($this->config->get('theme_default_directory')) $data['theme_directory'] = $this->config->get('theme_default_directory'); // Remove được
		else $data['theme_directory'] = 'default';
		
		$typelayout 				= $soconfig_setting['soconfig_general_store']['typelayout'];
		$data['scsscompile'] 		= $soconfig_setting['soconfig_advanced_store']['scsscompile'];
		$data['compileMutiColor'] 	= $soconfig_setting['soconfig_advanced_store']['compileMutiColor'];
		$data['allThemeColor'] 		=  $this->soconfig->getColorScheme($typelayout) ? $this->soconfig->getColorScheme($typelayout) : array('none' => 'None');
        $data['user_token'] 		= $this->session->data['user_token'];
       
        $data['languages'] = $this->model_localisation_language->getLanguages();
        /*end variables for theme */

        $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$fields = new So_Fields($soconfig_setting);
		$data['fields'] = $fields;
		$this->response->setOutput($this->load->view('extension/soconfig/soconfig', $data));
	}
	
	public function uninstall() {
        $this->load->model('extension/module/soconfig/setting');
        $this->model_extension_module_soconfig_setting->deleteSetting();
    }
	
    public function install(){
		$this->load->model('setting/setting');
		$this->load->model('extension/module/soconfig/setting');
		
		/* stores adding */
        $this->load->model('setting/store');
        $stores = $this->model_setting_store->getStores();
		array_unshift($stores, array(
			'store_id' => '0',
			'name'     => $this->config->get('config_name'),
		));
		$data['stores'] = $stores;
        /* end stores adding */
		
		$this->model_extension_module_soconfig_setting->createTableSoconfig();
		
		//Import sample data current theme
		$install_layout='default'; $store_id = 0;$home_layout =1; 
		$main_sql = DIR_TEMPLATE.'extension/soconfig/demo/'.$install_layout.'/install.php';
		if (!file_exists($main_sql)) return false;   
		include($main_sql);
		
		$this->session->data['success'] = $this->language->get('text_success');
    }
	
	
	public function clearcache(){
      $this->soconfig->cache->clear();
      $this->session->data['success'] = 'Cache cleared';
      $this->response->redirect($this->url->link('extension/module/soconfig', 'user_token=' . $this->session->data['user_token'], 'SSL'));
    }
	
	public function clearcss(){
      $this->soconfig->cache->clear_css();
      $this->session->data['success'] = 'Cache cleared';
      $this->response->redirect($this->url->link('extension/module/soconfig', 'user_token=' . $this->session->data['user_token'], 'SSL'));
	 
    }
	
	public function install_demo_data($stores, $store_id,$install_layout,$home_layout){
		if ($home_layout == 0) return false;
		
		$install_layout_exists = false;
		foreach($this->demos as $demo){
		if ($demo['key'] == $install_layout)
		  $install_layout_exists = true;
		}

		if (!$install_layout_exists) return false;
		$main_sql = DIR_TEMPLATE.'extension/soconfig/demo/'.$install_layout.'/install.php';
		if (!file_exists($main_sql)) return false;   
		
		include($main_sql);
		return true;  
    }
	
	public function gettypelayouts(){
		return $this->typelayouts;
	}
	public function ColorScheme() {
		
		$json = array();
		if (isset($this->request->get['keylayout'])) {
			$filter_data = $this->request->get['keylayout'];
			$results = $this->soconfig->getColorScheme($filter_data);
			
			if(!empty($results)){
				foreach ($results as $result) {
					$json[] = array(
						'name'        => html_entity_decode($result, ENT_QUOTES, 'UTF-8')
					);
				}
			}else{
				$json[] = array(
					'name'        => 'No Value'
				);
			}
			
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
	
    protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/soconfig')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		return !$this->error;
	}
}
