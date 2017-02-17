<?php
/**
 * ModernBusinessAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\ModernBusinessAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\ModernBusinessAsset',
 */

namespace p2made\SB\assets;

class ModernBusinessAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/modern-business',
			'css' => [
				'css/modern-business.min.css',
			],
			'js' => [
				'js/jqBootstrapValidation.min.js',
				'js/contact.min.js',
			],
		],

		'depends' => [
			'p2made\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
