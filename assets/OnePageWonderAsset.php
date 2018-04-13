<?php
/**
 * OnePageWonderAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\OnePageWonderAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\OnePageWonderAsset',
 */

namespace p2m\SB\assets;

class OnePageWonderAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/one-page-wonder',
			'css' => [
				'css/one-page-wonder.min.css',
			],
			'js' => [
				'js/jqBootstrapValidation.min.js', // not always used
				'js/contact.min.js', // not always used
			],
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

