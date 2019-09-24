<?php
class ControllerCommonFooter extends Controller {
	public function index() {

		/*======Show Themeconfig=======*/
		$data['soconfig'] = $this->soconfig;
		$this->load->language('extension/soconfig/compare');
		$data['objlang'] = $this->language;
		$data['theme_directory'] = $this->config->get('theme_default_directory');
		$data['url_layoutbox'] = isset($this->request->get['layoutbox']) ? $this->request->get['layoutbox'] : '' ;
		$data['url_pattern'] = isset($this->request->get['pattern']) ? $this->request->get['pattern'] : '' ;
		$data['account_fb'] = isset($this->request->get['account_fb']) ? $this->request->get['account_fb'] : '' ;
		$data['compare'] = $this->url->link('product/compare', '', true);
		// add position
		$data['content_menu1'] = $this->load->controller('extension/soconfig/content_menu1');
		$data['content_menu2'] = $this->load->controller('extension/soconfig/content_menu2');
		$data['header_block'] = $this->load->controller('extension/soconfig/header_block');
		$data['search_block'] = $this->load->controller('extension/soconfig/search_block');
		
		$data['footer_block1'] = $this->load->controller('extension/soconfig/footer_block1');
		$data['footer_block2'] = $this->load->controller('extension/soconfig/footer_block2');
	    $data['footer_block3'] = $this->load->controller('extension/soconfig/footer_block3');
		// For page specific css
		if (isset($this->request->get['route'])) {
			if (isset($this->request->get['product_id'])) {
				$class = '-' . $this->request->get['product_id'];
			} elseif (isset($this->request->get['path'])) {
				$class = '-' . $this->request->get['path'];
			} elseif (isset($this->request->get['manufacturer_id'])) {
				$class = '-' . $this->request->get['manufacturer_id'];
			} elseif (isset($this->request->get['information_id'])) {
				$class = '-' . $this->request->get['information_id'];
			} else {
				$class = '';
			}

			$data['class'] = str_replace('/', '-', $this->request->get['route']) . $class;
		} else {
			$data['class'] = 'common-home';
		}
		
		//Decodes HTML Entities
         $data['selector_body'] = html_entity_decode($data['soconfig']->get_settings('selector_body'), ENT_QUOTES, 'UTF-8');
         $data['selector_menu'] = html_entity_decode($data['soconfig']->get_settings('selector_menu'), ENT_QUOTES, 'UTF-8');
         $data['selector_heading'] = html_entity_decode($data['soconfig']->get_settings('selector_heading'), ENT_QUOTES, 'UTF-8');

		
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		
		return $this->load->view('common/footer', $data);
	}
}
