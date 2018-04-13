<?php
/**
 * _ExampleAsset.php
 *
 * @author Pedro Plowman
 * @copyright Copyright &copy; Pedro Plowman, 2017
 * @link https://github.com/p2made
 * @package p2made/yii2-startbootstrap-themes
 * @license MIT
 */

/**
 * Load this asset with...
 * p2m\SB\assets\_ExampleAsset::register($this);
 *
 * or specify as a dependency with...
 *     'p2m\SB\assets\_ExampleAsset',
 */

namespace p2m\SB\assets;

class _ExampleAsset extends \p2m\assets\base\P2AssetBundle
{
	protected $resourceData = array(

		'published' => [
			'sourcePath' => '@vendor/p2made/yii2-startbootstrap-themes/assets/lib/__THEME_NAME__',
			'css' => [
				'css/__THEME_NAME__.min.css',
			],
			'js' => [
				'js/jqBootstrapValidation.min.js', // not always used
				'js/contact.min.js', // not always used
				'js/__THEME_NAME__.min.js',
			],
		],

		'cssOptions' => [
			// cssOptions like any other assets
			// or leave out if no cssOptions
		],
		'jsOptions' => [
			// jsOptions like any other assets
			// or leave out if no jsOptions
		],

		'depends' => [
			'p2m\assets\P2CoreAsset', // __OR__
			'p2m\SB\assets\_ExampleFontsAsset',
		],
	);

	public function init()
	{
		$this->configureAsset($this->resourceData);
		parent::init();
	}
}

/* dependency lines for all yii2-p2y2-things assets... */
/**
		'p2m\assets\_ExampleAsset',
		'p2m\assets\AnimateAsset',
		'p2m\assets\BootstrapAsset',
		'p2m\assets\BootstrapSocialAsset',
		'p2m\assets\BootstrapSweetalertAsset',
		'p2m\assets\BootstrapSwitchAsset',
		'p2m\assets\CircleButtonsAsset',
		'p2m\assets\ColorHelpersAsset',
		'p2m\assets\DataTablesBundleAsset',
		'p2m\assets\datatables\DataTablesAsset',
		'p2m\assets\datatables\DataTablesAutoFillAsset',
		'p2m\assets\datatables\DataTablesButtonsAsset',
		'p2m\assets\datatables\DataTablesColReorderAsset',
		'p2m\assets\datatables\DataTablesFiles',
		'p2m\assets\datatables\DataTablesFixedColumnsAsset',
		'p2m\assets\datatables\DataTablesFixedHeaderAsset',
		'p2m\assets\datatables\DataTablesKeyTableAsset',
		'p2m\assets\datatables\DataTablesResponsiveAsset',
		'p2m\assets\datatables\DataTablesRowReorderAsset',
		'p2m\assets\datatables\DataTablesScrollerAsset',
		'p2m\assets\datatables\DataTablesSelectAsset',
		'p2m\assets\EkkoLightboxAsset',
		'p2m\assets\FitvidsAsset',
		'p2m\assets\FlagIconCssAsset',
		'p2m\assets\FlotBundleAsset',
		'p2m\assets\flot\FlotAsset',
		'p2m\assets\flot\FlotCanvasAsset',
		'p2m\assets\flot\FlotCategoriesAsset',
		'p2m\assets\flot\FlotChartsAsset',
		'p2m\assets\flot\FlotCrosshairAsset',
		'p2m\assets\flot\FlotErrorbarsAsset',
		'p2m\assets\flot\FlotFillbetweenAsset',
		'p2m\assets\flot\FlotImageAsset',
		'p2m\assets\flot\FlotNavigateAsset',
		'p2m\assets\flot\FlotPieAsset',
		'p2m\assets\flot\FlotResizeAsset',
		'p2m\assets\flot\FlotSelectionAsset',
		'p2m\assets\flot\FlotStackAsset',
		'p2m\assets\flot\FlotSymbolAsset',
		'p2m\assets\flot\FlotThresholdAsset',
		'p2m\assets\flot\FlotTimeAsset',
		'p2m\assets\flot\FlotTooltipAsset',
		'p2m\assets\FontAwesomeAsset',
		'p2m\assets\FullCalendarAsset',
		'p2m\assets\FullCalendarPrintAsset',
		'p2m\assets\GMapsApiAsset',
		'p2m\assets\GMapsAsset',
		'p2m\assets\HolderAsset',
		'p2m\assets\IsotopeAsset',
		'p2m\assets\JqueryAsset',
		'p2m\assets\JqueryCountToAsset',
		'p2m\assets\JqueryMigrateAsset',
		'p2m\assets\JuiAsset',
		'p2m\assets\Lightbox2Asset',
		'p2m\assets\MasonryAsset',
		'p2m\assets\MetisMenuAsset',
		'p2m\assets\MomentAsset',
		'p2m\assets\MomentTimezoneAsset',
		'p2m\assets\MorrisAsset',
		'p2m\assets\PrettyPhotoAsset',
		'p2m\assets\QunitAsset',
		'p2m\assets\RaphaelAsset',
		'p2m\assets\SweetAlertAsset',
		'p2m\assets\TimelineAsset',
		'p2m\assets\TimelineCssAsset',
		'p2m\assets\WowAsset',
 */

/* register lines for all yii2-p2y2-things assets... */
/**
p2m\assets\_ExampleAsset::register($this);
p2m\assets\AnimateAsset::register($this);
p2m\assets\BootstrapAsset::register($this);
p2m\assets\BootstrapSocialAsset::register($this);
p2m\assets\BootstrapSweetalertAsset::register($this);
p2m\assets\BootstrapSwitchAsset::register($this);
p2m\assets\CircleButtonsAsset::register($this);
p2m\assets\ColorHelpersAsset::register($this);
p2m\assets\DataTablesBundleAsset::register($this);
p2m\assets\datatables\DataTablesAsset::register($this);
p2m\assets\datatables\DataTablesAutoFillAsset::register($this);
p2m\assets\datatables\DataTablesButtonsAsset::register($this);
p2m\assets\datatables\DataTablesColReorderAsset::register($this);
p2m\assets\datatables\DataTablesFiles::register($this);
p2m\assets\datatables\DataTablesFixedColumnsAsset::register($this);
p2m\assets\datatables\DataTablesFixedHeaderAsset::register($this);
p2m\assets\datatables\DataTablesKeyTableAsset::register($this);
p2m\assets\datatables\DataTablesResponsiveAsset::register($this);
p2m\assets\datatables\DataTablesRowReorderAsset::register($this);
p2m\assets\datatables\DataTablesScrollerAsset::register($this);
p2m\assets\datatables\DataTablesSelectAsset::register($this);
p2m\assets\EkkoLightboxAsset::register($this);
p2m\assets\FitvidsAsset::register($this);
p2m\assets\FlagIconCssAsset::register($this);
p2m\assets\FlotBundleAsset::register($this);
p2m\assets\flot\FlotAsset::register($this);
p2m\assets\flot\FlotCanvasAsset::register($this);
p2m\assets\flot\FlotCategoriesAsset::register($this);
p2m\assets\flot\FlotChartsAsset::register($this);
p2m\assets\flot\FlotCrosshairAsset::register($this);
p2m\assets\flot\FlotErrorbarsAsset::register($this);
p2m\assets\flot\FlotFillbetweenAsset::register($this);
p2m\assets\flot\FlotImageAsset::register($this);
p2m\assets\flot\FlotNavigateAsset::register($this);
p2m\assets\flot\FlotPieAsset::register($this);
p2m\assets\flot\FlotResizeAsset::register($this);
p2m\assets\flot\FlotSelectionAsset::register($this);
p2m\assets\flot\FlotStackAsset::register($this);
p2m\assets\flot\FlotSymbolAsset::register($this);
p2m\assets\flot\FlotThresholdAsset::register($this);
p2m\assets\flot\FlotTimeAsset::register($this);
p2m\assets\flot\FlotTooltipAsset::register($this);
p2m\assets\FontAwesomeAsset::register($this);
p2m\assets\FullCalendarAsset::register($this);
p2m\assets\FullCalendarPrintAsset::register($this);
p2m\assets\GMapsApiAsset::register($this);
p2m\assets\GMapsAsset::register($this);
p2m\assets\HolderAsset::register($this);
p2m\assets\IsotopeAsset::register($this);
p2m\assets\JqueryAsset::register($this);
p2m\assets\JqueryCountToAsset::register($this);
p2m\assets\JqueryMigrateAsset::register($this);
p2m\assets\JuiAsset::register($this);
p2m\assets\Lightbox2Asset::register($this);
p2m\assets\MasonryAsset::register($this);
p2m\assets\MetisMenuAsset::register($this);
p2m\assets\MomentAsset::register($this);
p2m\assets\MomentTimezoneAsset::register($this);
p2m\assets\MorrisAsset::register($this);
p2m\assets\PrettyPhotoAsset::register($this);
p2m\assets\QunitAsset::register($this);
p2m\assets\RaphaelAsset::register($this);
p2m\assets\SweetAlertAsset::register($this);
p2m\assets\TimelineAsset::register($this);
p2m\assets\TimelineCssAsset::register($this);
p2m\assets\WowAsset::register($this);
 */
