<?php

class ControllerModuleMetallictheme extends Controller {
	private $error = array(); 
	
	public function install() {
		$this->recordSettings();
	}
	
	private function validate() {
		if (!$this->user->hasPermission('modify', 'module/metallictheme')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		if (!$this->error) {
			return true;
		} else {
			return false;
		}	
	}
	
	private function isort(&$a, $field, $dir = true) {
		$t = call_user_func_array('array_merge_recursive', $a);
		asort($t[$field]);
		$so = array_keys($t[$field]);
		asort($so);
		$so = array_keys($so);

		$a = array_combine($so, $a);
		$dir ? ksort($a) : krsort($a);
	}
	
	public function index() {   
		$this->load->language('module/metallictheme');

		$this->document->setTitle($this->language->get('heading_title'));
		
		$this->data['heading_title'] = $this->language->get('heading_title');
		$this->data['txt_social_links'] = $this->language->get('txt_social_links');
		$this->data['txt_title'] = $this->language->get('txt_title');
		$this->data['txt_phone'] = $this->language->get('txt_phone');
		$this->data['txt_contacts_copyright'] = $this->language->get('txt_contacts_copyright');
		$this->data['txt_address'] = $this->language->get('txt_address');
		$this->data['txt_contacts_block'] = $this->language->get('txt_contacts_block');
		$this->data['txt_about_block'] = $this->language->get('txt_about_block');
		$this->data['txt_about_text'] = $this->language->get('txt_about_text');
		$this->data['txt_add_soc_btns'] = $this->language->get('txt_add_soc_btns');
		$this->data['txt_order'] = $this->language->get('txt_order');
		$this->data['txt_icon_href'] = $this->language->get('txt_icon_href');
		$this->data['txt_icon_title'] = $this->language->get('txt_icon_title');
		$this->data['txt_css_class'] = $this->language->get('txt_css_class');
		
		$this->data['button_save'] = $this->language->get('button_save');
		$this->data['button_cancel'] = $this->language->get('button_cancel');
		$this->data['button_add_module'] = $this->language->get('button_add_module');
		$this->data['button_remove'] = $this->language->get('button_remove');
		
		
		$this->load->model('setting/setting');
				
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			
			if (isset($this->request->post['metallic_theme']['icon']) and !empty($this->request->post['metallic_theme']['icon'])) {
				$i = 0;
				foreach ($this->request->post['metallic_theme']['icon'] as $icon) {
					$this->request->post['metallic_theme']['icons'][$i++] = $icon;
				}
				$this->isort($this->request->post['metallic_theme']['icons'], 'order', 'ASC');
				unset($this->request->post['metallic_theme']['icon']);
			}
			
			$this->model_setting_setting->editSetting('metallictheme', $this->request->post);		
			
			$this->session->data['success'] = $this->language->get('text_success');
						
			$this->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}
		
		$this->data['metallic_theme'] = $this->config->get('metallic_theme');
		$this->data['language_id'] = (int)$this->config->get('config_language_id');
		
		if (isset($this->error['warning'])) {
			$this->data['error_warning'] = $this->error['warning'];
		} else {
			$this->data['error_warning'] = '';
		}
		
		$this->data['breadcrumbs'] = array();

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href'      => $this->url->link('common/home', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => false
   		);

   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_module'),
			'href'      => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);
		
   		$this->data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href'      => $this->url->link('module/metallictheme', 'token=' . $this->session->data['token'], 'SSL'),
      		'separator' => ' :: '
   		);
		
		$this->data['action'] = $this->url->link('module/metallictheme', 'token=' . $this->session->data['token'], 'SSL');
		
		$this->data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');
		
		$this->template = 'module/metallic_theme.tpl';
		$this->children = array(
			'common/header',
			'common/footer'
		);
		
		$this->load->model('localisation/language');
		
		$this->data['languages'] = $this->model_localisation_language->getLanguages();
		
		$this->response->setOutput($this->render());
		
	}

	/*
	* Add this methods to your controller
	*/
	private $_install = array();
	
	private function recordSettings() {
		
	$this->_install['module_settings'] = array (
  'account' => 
  array (
    'account_module' => 
    array (
      0 => 
      array (
        'layout_id' => '6',
        'position' => 'column_right',
        'status' => '1',
        'sort_order' => '1',
      ),
    ),
  ),
  'affiliate' => 
  array (
    'affiliate_module' => 
    array (
      0 => 
      array (
        'layout_id' => '10',
        'position' => 'column_right',
        'status' => '1',
        'sort_order' => '1',
      ),
    ),
  ),
  'banner' => 
  array (
    'banner_module' => 
    array (
      0 => 
      array (
        'banner_id' => '10',
        'width' => '177',
        'height' => '107',
        'layout_id' => '1',
        'position' => 'column_right',
        'status' => '1',
        'sort_order' => '10',
      ),
      1 => 
      array (
        'banner_id' => '6',
        'width' => '177',
        'height' => '107',
        'layout_id' => '1',
        'position' => 'column_right',
        'status' => '1',
        'sort_order' => '5',
      ),
      2 => 
      array (
        'banner_id' => '10',
        'width' => '177',
        'height' => '107',
        'layout_id' => '2',
        'position' => 'column_left',
        'status' => '1',
        'sort_order' => '99',
      ),
    ),
  ),
  'carousel' => 
  array (
    'carousel_module' => 
    array (
      0 => 
      array (
        'banner_id' => '8',
        'limit' => '5',
        'scroll' => '3',
        'width' => '80',
        'height' => '80',
        'layout_id' => '1',
        'position' => 'content_bottom',
        'status' => '1',
        'sort_order' => '100',
      ),
    ),
  ),
  'category' => 
  array (
    'category_module' => 
    array (
      0 => 
      array (
        'layout_id' => '3',
        'position' => 'column_left',
        'count' => '0',
        'status' => '1',
        'sort_order' => '1',
      ),
      1 => 
      array (
        'layout_id' => '2',
        'position' => 'column_left',
        'count' => '0',
        'status' => '1',
        'sort_order' => '1',
      ),
    ),
  ),
  'featured_nice' => 
  array (
    'featured_nice_product' => '48,33,44,32,29,46',
    'featured_nice_module' => 
    array (
      0 => 
      array (
        'limit' => '6',
        'image_width' => '205',
        'image_height' => '205',
        'layout_id' => '1',
        'title_fontsize' => 'auto',
        'price_fontsize' => 'auto',
        'position' => 'content_top',
        'status' => '1',
        'sort_order' => '30',
      ),
      1 => 
      array (
        'limit' => '2',
        'image_width' => '140',
        'image_height' => '140',
        'layout_id' => '2',
        'title_fontsize' => 'auto',
        'price_fontsize' => 'auto',
        'position' => 'column_left',
        'status' => '1',
        'sort_order' => '999',
      ),
    ),
    'product' => '',
  ),
  'information' => 
  array (
    'information_module' => 
    array (
      0 => 
      array (
        'layout_id' => '3',
        'position' => 'column_left',
        'status' => '1',
        'sort_order' => '100',
      ),
      1 => 
      array (
        'layout_id' => '2',
        'position' => 'column_left',
        'status' => '1',
        'sort_order' => '100',
      ),
      2 => 
      array (
        'layout_id' => '11',
        'position' => 'column_right',
        'status' => '1',
        'sort_order' => '100',
      ),
      3 => 
      array (
        'layout_id' => '8',
        'position' => 'column_right',
        'status' => '1',
        'sort_order' => '10',
      ),
      4 => 
      array (
        'layout_id' => '1',
        'position' => 'column_right',
        'status' => '1',
        'sort_order' => '100',
      ),
    ),
  ),
  'metallictheme' => 
  array (
    'metallic_theme' => 
    array (
      'about_title' => $this->getLoremIpsum(11),
      'about_text' => $this->getLoremIpsum(207),
      'contacts_title' => $this->getLoremIpsum(11),
      'contacts_address' => '<p>
	61128, Lorem ipsum Street 28,</p>
<p>
	Dolor, Sitamet D.C.</p>
',
      'contacts_skype' => 'skypeaccount',
      'contacts_copyright' => '<p>
	Designed by <a href="http://www.workshop200.com/" target="_blank">cmd</a> / Работает на <a href="http://myopencart.ru">OpenCart</a> / Your Store © 2013</p>
',
      'social_buttons_title' => 
      array (
        1 => 'Follow Us',
        2 => 'Следите за нами',
      ),
      'icons' => 
      array (
        0 => 
        array (
          'class' => 'icon-facebook',
          'title' => 'Facebook',
          'href' => 'http://www.facebook.com/zhenya.shevchenko',
          'order' => '10',
        ),
        1 => 
        array (
          'class' => 'icon-VK',
          'title' => 'vk',
          'href' => 'http://vk.com/commanddotcom',
          'order' => '20',
        ),
        2 => 
        array (
          'class' => 'icon-twitter',
          'title' => 'Twitter',
          'href' => 'https://twitter.com/workshop200',
          'order' => '30',
        ),
        3 => 
        array (
          'class' => 'icon-google',
          'title' => 'Google+',
          'href' => 'https://plus.google.com/u/0/113155344705396782231',
          'order' => '40',
        ),
      ),
    ),
  ),
  'slideshow' => 
  array (
    'slideshow_module' => 
    array (
      0 => 
      array (
        'banner_id' => '7',
        'width' => '780',
        'height' => '238',
        'layout_id' => '1',
        'position' => 'content_top',
        'status' => '1',
        'sort_order' => '1',
      ),
    ),
  ),
  'special' => 
  array (
    'special_module' => 
    array (
      0 => 
      array (
        'limit' => '2',
        'image_width' => '130',
        'image_height' => '130',
        'layout_id' => '1',
        'position' => 'column_right',
        'status' => '1',
        'sort_order' => '60',
      ),
    ),
  ),
  'welcome' => 
  array (
    'welcome_module' => 
    array (
      1 => 
      array (
        'description' => $this->getLoremIpsum(700),
        'layout_id' => '1',
        'position' => 'content_top',
        'status' => '1',
        'sort_order' => '300',
      ),
    ),
  ),
  'config' => 
  array (
    'config_template' => 'metalic',
    'config_image_category_width' => '80',
    'config_image_category_height' => '80',
    'config_image_thumb_width' => '300',
    'config_image_thumb_height' => '300',
    'config_image_popup_width' => '500',
    'config_image_popup_height' => '500',
    'config_image_product_width' => '200',
    'config_image_product_height' => '200',
    'config_image_additional_width' => '86',
    'config_image_additional_height' => '86',
    'config_image_related_width' => '80',
    'config_image_related_height' => '80',
    'config_image_compare_width' => '90',
    'config_image_compare_height' => '90',
    'config_image_wishlist_width' => '47',
    'config_image_wishlist_height' => '47',
    'config_image_cart_width' => '47',
    'config_image_cart_height' => '47',
  ),
); 
			
	$banner_settings = array (
  0 => 
  array (
    'banner_id' => '6',
    'name' => 'Delivery Information',
    'status' => '1',
    'banner_image' => 
    array (
      0 => 
      array (
        'banner_image_description' => $this->getLoremIpsum(11, "title"),
        'link' => 'index.php?route=information/information&information_id=6',
        'image' => 'data/banner_lorem_3.jpg',
      ),
    ),
  ),
  1 => 
  array (
    'banner_id' => '8',
    'name' => 'Manufacturers',
    'status' => '1',
    'banner_image' => 
    array (
      0 => 
      array (
        'banner_image_description' => $this->getLoremIpsum(11, "title"),
        'link' => 'index.php?route=product/manufacturer/info&manufacturer_id=5',
        'image' => 'data/demo/htc_logo.jpg',
      ),
      1 => 
      array (
        'banner_image_description' => $this->getLoremIpsum(11, "title"),
        'link' => 'index.php?route=product/manufacturer/info&manufacturer_id=8',
        'image' => 'data/demo/apple_logo.jpg',
      ),
      2 => 
      array (
        'banner_image_description' => $this->getLoremIpsum(11, "title"),
        'link' => 'index.php?route=product/manufacturer/info&manufacturer_id=9',
        'image' => 'data/demo/canon_logo.jpg',
      ),
      3 => 
      array (
        'banner_image_description' => $this->getLoremIpsum(11, "title"),
        'link' => 'index.php?route=product/manufacturer/info&manufacturer_id=10',
        'image' => 'data/demo/sony_logo.jpg',
      ),
      4 => 
      array (
        'banner_image_description' => $this->getLoremIpsum(11, "title"),
        'link' => 'index.php?route=product/manufacturer/info&manufacturer_id=6',
        'image' => 'data/demo/palm_logo.jpg',
      ),
      5 => 
      array (
        'banner_image_description' => $this->getLoremIpsum(11, "title"),
        'link' => 'index.php?route=product/manufacturer/info&manufacturer_id=7',
        'image' => 'data/demo/hp_logo.jpg',
      ),
    ),
  ),
  2 => 
  array (
    'banner_id' => '7',
    'name' => 'Samsung Tab',
    'status' => '1',
    'banner_image' => 
    array (
      0 => 
      array (
        'banner_image_description' => $this->getLoremIpsum(11, "title"),
        'link' => 'index.php?route=product/product&path=57&product_id=49',
        'image' => 'data/banner_lorem_4.jpg',
      ),
      1 => 
      array (
        'banner_image_description' => $this->getLoremIpsum(11, "title"),
        'link' => 'index.php?route=product/product&product_id=28',
        'image' => 'data/banner_lorem_6.jpg',
      ),
    ),
  ),
  3 => 
  array (
    'banner_id' => '10',
    'name' => 'Special Offers',
    'status' => '1',
    'banner_image' => 
    array (
      0 => 
      array (
        'banner_image_description' => $this->getLoremIpsum(11, "title"),
        'link' => 'index.php?route=product/special',
        'image' => 'data/banner_lorem_5.jpg',
      ),
    ),
  ),
); 
		$this->load->model('design/banner');
		$this->db->query("UPDATE `". DB_PREFIX ."banner` SET `status`=0");
		foreach ($banner_settings as $banner) {
			$this->addBanner($banner);
		}
		
		$this->db->query("DELETE FROM `". DB_PREFIX ."extension` WHERE `code`='featured' and `type`='module'"); // uninstall featured
		
		foreach ($this->_install['module_settings'] as $group => $array) {
			foreach ($array as $key => $settings) {
				$this->insertOrUpdateSettings($group, $key, $settings);
				$query = $this->db->query("SELECT * FROM `". DB_PREFIX ."extension` WHERE `code`='$group' and `type`='module'");
				if ($query->num_rows == 0) {
					$this->db->query("INSERT INTO `". DB_PREFIX ."extension` 
								(`code`, `type`) 
									VALUES 
								('$group', 'module')"
							);
				}
			}
		}
		}
	private function addBanner($banner) {
	
			$this->model_design_banner->addBanner($banner);
						$last = $this->db->query("SELECT `banner_id` FROM `". DB_PREFIX ."banner` ORDER BY banner_id DESC LIMIT 1");
			$this->replaceValue('banner_id', $banner['banner_id'], $last->row['banner_id']);
					
	}
	private function insertOrUpdateSettings($group, $key, $settings) {
		if ( is_array( $settings ) ) {
			 $value = serialize( $settings );
			 $serialized = 1;
		} else {
			$value =  $settings ;
			$serialized = 0;
		}
		$query = $this->db->query("SELECT * FROM `". DB_PREFIX ."setting` WHERE `group`='$group' AND `key`='$key'");
		if ($query->num_rows == 0) {
			$this->db->query("INSERT INTO `". DB_PREFIX ."setting` 
								(`group`, `key`, `value`, `serialized`) 
									VALUES 
								('$group', '$key', '$value', '$serialized')"
							);
		} else {
			$this->db->query("UPDATE `". DB_PREFIX ."setting` 
								SET `value`='$value' 
								WHERE `group`='$group' AND `key`='$key'");
		}
	}
	private function getLoremIpsum($length = 11, $key = false, $inserse = false) {
		$lorem_ipsum = 
			"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse risus nisi, luctus sed adipiscing non, congue sit amet eros. Nam adipiscing suscipit lacus nec auctor. Cras egestas congue consequat. Nunc sapien enim, lacinia vitae consectetur vel, faucibus quis lorem. Integer mattis eleifend pulvinar. Sed tincidunt egestas elit vitae accumsan. Ut sit amet mollis dolor. Nunc quis lectus arcu. Morbi congue sapien tortor, id lacinia elit.

			In porttitor nisl vel turpis mattis vitae mattis risus blandit. Aenean placerat tincidunt feugiat. Nulla facilisi. Nam ac mi purus, sed auctor justo. Aliquam non leo quis velit facilisis convallis eget sit amet est. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean sit amet enim libero. Sed aliquet sagittis augue blandit aliquet. Nam magna metus, blandit sit amet sagittis et, rutrum at justo. Nulla facilisi. Morbi et augue a nisi dapibus tempor a a augue. Nam eu tortor ut tortor aliquam pellentesque.

			Morbi viverra mollis nulla a convallis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras non nisl sit amet sem convallis volutpat luctus non urna. Nullam dictum quam eu mauris gravida imperdiet. Praesent id odio a justo consectetur convallis at non tellus. Donec eu ipsum metus, sed ultricies nisi. In egestas libero in tortor ultricies pulvinar. Donec blandit, libero in lacinia iaculis, lacus ipsum lacinia magna, et pellentesque purus dui interdum enim. Vivamus eget ante vel dui facilisis fringilla nec id odio. In dictum, enim a ornare pulvinar, nunc nisl consectetur nibh, a dignissim ante leo vitae diam. Morbi quis condimentum nunc. Vivamus nec enim nibh, ut varius augue. Nullam hendrerit commodo ullamcorper. Mauris accumsan ipsum orci, quis ornare neque. Nam posuere, magna in tempus consectetur, elit sem vulputate justo, eget ultrices ante est in odio.";
			
		$lorem_ipsum = mb_substr($lorem_ipsum, 0, $length, 'utf-8');
		static $i;
		$i++;
		$output = array();
		$this->load->model('localisation/language');
		$languages = $this->model_localisation_language->getLanguages();
		foreach($languages as $language) {
			if ($key) {
				if ($inserse === true) {
					$output[$key][$language['language_id']] = $lorem_ipsum .' - '. $language['name'] .' - '. $i;
				} else {
					$output[$language['language_id']][$key] = $lorem_ipsum .' - '. $language['name'] .' - '. $i;
				}
			} else {
				$output[$language['language_id']] = $lorem_ipsum .' - '. $language['name'] .' - '. $i;
			}
		}
		return $output;
	}
	private function replaceValue($key, $value, $new_value) {
	
		static $replaced;
		
		if (!is_array($this->_install['module_settings'])) {
			return false;			
		}
		
		foreach($this->_install['module_settings'] as $group_name => $group) {
			if (is_array($group)) {
				foreach($group as $group_key => $modules) {
					if (is_array($modules)) {
						foreach ($modules as $i => $module) {
							if (is_array($module) and array_key_exists($key, $module) and $module[$key] == $value and (!isset($replaced[$group_name][$group_key][$i][$key]) or empty($replaced[$group_name][$group_key][$i][$key]))) {
								$this->_install['module_settings'][$group_name][$group_key][$i][$key] = $new_value;
								$replaced[$group_name][$group_key][$i][$key] = 1;
							}
						}
					}
				}
			}
		}
	
	}
	
}