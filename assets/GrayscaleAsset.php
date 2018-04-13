<?php
/**
 * GrayscaleAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\GrayscaleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\GrayscaleAsset',
 */

namespace p2m\SB\assets;

class GrayscaleAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/grayscale',
			'css' => [
				'css/grayscale.min.css',
			],
			'js' => [],
		],

		'depends' => [
			'p2m\assets\JqueryEasingAsset',
			'p2m\SB\assets\GrayscaleFontsAsset',
			'p2m\SB\assets\GrayscaleMapsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
