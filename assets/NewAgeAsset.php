<?php
/**
 * NewAgeAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\NewAgeAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\NewAgeAsset',
 */

namespace p2made\SB\assets;

class NewAgeAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/__THEME_NAME__',
			//'baseUrl' => '//fonts.googleapis.com',	insteadt of sourcePath for google fonts assets
			'css' => [
				'css/__THEME_NAME__.min.css',
			],
			'js' => [
				'js/jqBootstrapValidation.min.js', // not always used
				'js/contact.min.js', // not always used
				'js/__THEME_NAME__.min.js',
			],
		],

		'cssOptions' => [
			// cssOptions like any other assets
			// or leave out if no cssOptions
		],
		'jsOptions' => [
			// jsOptions like any other assets
			// or leave out if no jsOptions
		],

		'depends' => [
			'p2made\assets\P2CoreAsset', // __OR__
			'p2made\SB\assets\_ExampleFontsAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
