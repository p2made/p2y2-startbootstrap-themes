<?php
/**
 * AgencyAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\theme\Agency\assets\AgencyAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\theme\Agency\assets\AgencyAsset',
 */

namespace p2made\theme\Agency\assets;

class AgencyAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/agency',
			'css' => [
				'css/agency.min.css',
			],
			'js' => [
				'js/jqBootstrapValidation.min.js',
				'js/contact.min.js',
				'js/agency.min.js',
			],
		],

		'depends' => [
			'p2made\theme\Agency\assets\AgencyFontsAsset',
		],

	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
