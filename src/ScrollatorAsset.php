<?php
/**
 * Created by PhpStorm.
 * User: Haqqi
 * Date: 10/21/2016
 * Time: 9:37 PM
 */

namespace mimicreative\assets;


use yii\web\AssetBundle;

class ScrollatorAsset extends AssetBundle {
  /**
   * @inherit
   */
  public $sourcePath = '@mimicreative/assets';

  public $depends = [
    'yii\web\JqueryAsset'
  ];

  public $css = [
    'scrollator/fm.scrollator.jquery.css'
  ];

  /**
   * @inherit
   */
  public $js = [
    'scrollator/fm.scrollator.jquery.js',
  ];

  /**
   * @inherit
   */
  public $publishOptions = [
    'only' => [
      'scrollator/**'
    ]
  ];
}