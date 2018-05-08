<?php
/**
	* @file
	* Contains \Drupal\mymodule\Plugin\Block\Copyright.
*/

namespace Drupal\mymodule\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Database\Query;
use Drupal\node\Entity\Node;
/**
	* @Block(
	*
	id = "Blogtitle_block",
	*
	admin_label = @Translation("Blog title"),
	*
	category = @Translation("custom block")
	* )
*/
class Blogtitle extends BlockBase implements BlockPluginInterface
{
/**
	* {@inheritdoc}
*/	
	public function build(){
		$db = \Drupal::entityQuery('node')		
		->condition('type','Blogs');
		$data = $db->execute();
		$nodes = \Drupal::entityManager()->getStorage('node')->loadMultiple($data);
		$title = array();
		foreach ($nodes as $key => $value) {
			$title[] = array('title' => $value->getTitle(), 'url' => $value->url('canonical'));
		}
		$show = [
			'#theme' => 'blockitemlist',
			'#items' => $title,
		];
		return $show;
		// kint($title);
		// die();

	}
}
?>
 