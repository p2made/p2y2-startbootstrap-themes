<?php
/**
 * BusinessCasualAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\BusinessCasualAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\BusinessCasualAsset',
 */

namespace p2made\SB\assets;

class BusinessCasualAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/business-casual',
			'css' => [
				'css/business-casual.min.css',
			],
			'js' => [],
		],

		'depends' => [
			'p2made\SB\assets\BusinessCasualFontsAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
