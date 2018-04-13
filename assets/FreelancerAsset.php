<?php
/**
 * FreelancerAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\FreelancerAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\FreelancerAsset',
 */

namespace p2m\SB\assets;

class FreelancerAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/freelancer',
			'css' => [
				'css/freelancer.min.css',
			],
			'js' => [
				'js/jqBootstrapValidation.min.js',
				'js/contact.min.js',
				'js/freelancer.min.js',
			],
		],

		'depends' => [
			'p2m\SB\assets\FreelancerFontsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
