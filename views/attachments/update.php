<?php

/**
* @copyright Copyright &copy; Gogodigital Srls
* @company Gogodigital Srls - Wide ICT Solutions 
* @website http://www.gogodigital.it
* @github https://github.com/cinghie/yii2-articles
* @license GNU GENERAL PUBLIC LICENSE VERSION 3
* @package yii2-articles
* @version 0.6.2
*/

use yii\helpers\Html;

// Set Title and Breadcrumbs
$this->title = Yii::t('articles', 'Update {modelClass}: ', ['modelClass' => 'Attachments',]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('articles', 'Attachments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

// Render Yii2-Articles Menu
echo Yii::$app->view->renderFile('@vendor/cinghie/yii2-articles/views/default/_menu.php');

?>
<div class="attachments-update">

    <?php if(Yii::$app->getModule('articles')->showTitles): ?>
        <div class="page-header">
            <h1><?= Html::encode($this->title) ?></h1>
        </div>
    <?php endif ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
