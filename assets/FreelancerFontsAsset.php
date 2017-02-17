<?php
/**
 * FreelancerFontsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\FreelancerFontsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\FreelancerFontsAsset',
 */

namespace p2made\SB\assets;

class FreelancerFontsAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'static' => [
			'baseUrl' => '//fonts.googleapis.com',
			'css' => [
				'css?family=Montserrat:400,700',
				'css?family=Lato:400,700,400italic,700italic',
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
