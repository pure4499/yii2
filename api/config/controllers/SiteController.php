<?php
/**
 * Created by PhpStorm.
 * User: kjeon
 * Date: 10/24/17
 * Time: 5:19 PM
 */

class SiteController
{
  public function actionIndex() {
    \Yii::app()->end();
  }
}