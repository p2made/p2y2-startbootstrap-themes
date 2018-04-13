<?php
/**
 * CreativeAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\CreativeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\CreativeAsset',
 */

namespace p2m\SB\assets;

class CreativeAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

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
			'p2m\assets\JqueryEasingAsset',
			'p2m\assets\ScrollRevealAsset',
			'p2m\assets\MagnificPopupAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
