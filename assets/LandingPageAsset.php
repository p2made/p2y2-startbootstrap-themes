<?php
/**
 * LandingPageAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\LandingPageAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\LandingPageAsset',
 */

namespace p2m\SB\assets;

class LandingPageAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/landing-page',
			'css' => [
				'css/landing-page.min.css',
			],
			'js' => [],
		],

		'depends' => [
			'p2m\SB\assets\LandingPageFontsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
