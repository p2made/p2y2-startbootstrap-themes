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
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/new-age',
			'css' => [
				'css/new-age.min.css',
			],
			'js' => [],
		],

		'depends' => [
			'p2made\assets\JqueryEasingAsset',
			'p2made\assets\SimpleLineIconsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
