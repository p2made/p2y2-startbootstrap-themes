<?php
/**
 * NewAgeFontsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\NewAgeFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\NewAgeFontsAsset',
 */

namespace p2made\SB\assets;

class NewAgeFontsAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

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
			'p2made\assets\P2CoreAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
