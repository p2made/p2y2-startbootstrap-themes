<?php
/**
 * StylishPortfolioAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\StylishPortfolioAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\StylishPortfolioAsset',
 */

namespace p2made\SB\assets;

class StylishPortfolioAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/stylish-portfolio',
			'css' => [
				'css/stylish-portfolio.min.css',
			],
			'js' => [
				'js/stylish-portfolio.min.js',
			],
		],

		'depends' => [
			'p2made\SB\assets\StylishPortfolioFontsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
