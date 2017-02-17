<?php
/**
 * CreativeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\CreativeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\CreativeAsset',
 */

namespace p2made\SB\assets;

class CreativeAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/creative',
			'css' => [
				'css/creative.min.css',
			],
			'js' => [
				'js/creative.min.js',
			],
		],

		'depends' => [
			'p2made\assets\JqueryEasingAsset',
			'p2made\assets\ScrollRevealAsset',
			'p2made\assets\MagnificPopupAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
