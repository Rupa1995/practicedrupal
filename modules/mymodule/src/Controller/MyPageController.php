<?php
/**
* @file
* Contains \Drupal\mymodule\Controller\MyPageController class.
*/
namespace Drupal\mymodule\Controller;
use Drupal\Core\Controller\ControllerBase;
/**
* Returns responses for My Module module.
*/
class MyPageController extends ControllerBase {

/**
* Returns markup for our custom page.
*/
	public function customPage() {
		$element = array(
			'#theme' => 'mypage',
			'#markup' => 'Hello World !!',
		);
		return $element;
	}
}
?>