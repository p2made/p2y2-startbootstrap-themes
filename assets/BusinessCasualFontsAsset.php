<?php
/**
 * BusinessCasualFontsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\BusinessCasualFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\BusinessCasualFontsAsset',
 */

namespace p2m\SB\assets;

class BusinessCasualFontsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

		'static' => [
			'baseUrl' => '//fonts.googleapis.com',
			'css' => [
				'css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800',
				'css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic',
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
