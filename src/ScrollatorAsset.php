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
  public $sourcePath = '@mimicreative/scrollator';

  public $depends = [
    'yii\web\JqueryAsset'
  ];

  public $css = [
    'assets/fm.scrollator.jquery.css'
  ];

  /**
   * @inherit
   */
  public $js = [
    'assets/fm.scrollator.jquery.js',
  ];

  /**
   * @inherit
   */
  public $publishOptions = [
    'only' => [
      'assets/**'
    ]
  ];
}