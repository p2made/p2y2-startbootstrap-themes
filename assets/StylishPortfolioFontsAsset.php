<?php
/**
 * StylishPortfolioFontsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\StylishPortfolioFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\StylishPortfolioFontsAsset',
 */

namespace p2made\SB\assets;

class StylishPortfolioFontsAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'static' => [
			'baseUrl' => '//fonts.googleapis.com',
			'css' => [
				'css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic',
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
