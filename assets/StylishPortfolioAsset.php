<?php
/**
 * StylishPortfolioAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\StylishPortfolioAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\StylishPortfolioAsset',
 */

namespace p2m\SB\assets;

class StylishPortfolioAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

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
			'p2m\SB\assets\StylishPortfolioFontsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}
