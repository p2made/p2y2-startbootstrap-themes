<?php
/**
 * GrayscaleMapsAsset.php
 *
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @author Pedro Plowman
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2made\SB\assets\GrayscaleMapsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2made\SB\assets\GrayscaleMapsAsset',
 */

/**
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####                                                   ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####              ¡¡¡¡¡ IMPORTANT !!!!!                ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####                                                   ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####               Google Maps API Key                 ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####  Use your own API key to enable the map feature.  ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####     More information on the Google Maps API       ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####               can be found at                     ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####        https://developers.google.com/maps/        ##### ^ ##### ^ #####
 * ##### ^ ##### ^ #####                                                   ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 * ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ ##### ^ #####
 */

namespace p2made\SB\assets;

class GrayscaleMapsAsset extends \p2made\assets\base\P2AssetBundle
{
	private $resourceData = array(

		'static' => [
			'baseUrl' => '//maps.googleapis.com/maps',
			'css' => [],
			'js' => [
				'js?key=AIzaSyBUZR09a3hu5WUVcX95Apah6uAzBsWrvzk&sensor=false',
			],
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
