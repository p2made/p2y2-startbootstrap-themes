<?php
/**
 * GrayscaleFontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\GrayscaleFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\GrayscaleFontsAsset',
 */

namespace p2m\SB\assets;

class GrayscaleFontsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

		'static' => [
			'baseUrl' => '//fonts.googleapis.com',
			'css' => [
				'css?family=Lora:400,700,400italic,700italic',
				'css?family=Montserrat:400,700',
			],
			'js' => [],
		],

		'depends' => [
			'p2m\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
