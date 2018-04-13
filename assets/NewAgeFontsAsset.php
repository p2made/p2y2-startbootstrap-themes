<?php
/**
 * NewAgeFontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\NewAgeFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\NewAgeFontsAsset',
 */

namespace p2m\SB\assets;

class NewAgeFontsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

		'static' => [
			'baseUrl' => '//fonts.googleapis.com',
			'css' => [
				'css?family=Lato',
				'css?family=Catamaran:100,200,300,400,500,600,700,800,900',
				'css?family=Muli',
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
