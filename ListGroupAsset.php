<?php

namespace valiant\widgets;
use yii\web\AssetBundle;

/**
 * Class ListGroupAsset
 */
class ListGroupAsset extends AssetBundle
{
	public $css = [
		'list-group.css',
	];

	public $js = [
		'list-group.js',
	];

	public $depends = [
		'\yii\bootstrap\BootstrapAsset',
	];

	public function init()
	{
		$this->sourcePath = __DIR__ . '/assets';
		parent::init();
	}
}