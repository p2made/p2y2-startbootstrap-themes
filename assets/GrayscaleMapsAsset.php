<?php
/**
 * GrayscaleMapsAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\GrayscaleMapsAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\GrayscaleMapsAsset',
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

namespace p2m\SB\assets;

class GrayscaleMapsAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

		'static' => [
			'baseUrl' => '//maps.googleapis.com/maps',
			'css' => [],
			'js' => [
				'js?key=AIzaSyAja-swTo8YpCxouhLq9WaPDNXgZZItHPo&sensor=false',
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
