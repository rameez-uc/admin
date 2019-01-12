<?php
/* @var $this yii\web\View */

namespace app\models;
namespace yii\admin\models;

use yii\web\models;
?>
<h1>pages</h1>


<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model yii\admin\models\Pages */
/* @var $form ActiveForm */
?>
<div class="pages">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'tbl_sitemap_file_id') ?>
        <?= $form->field($model, 'sitemap_include') ?>
        <?= $form->field($model, 'no_follow') ?>
        <?= $form->field($model, 'no_index') ?>
        <?= $form->field($model, 'url') ?>
        <?= $form->field($model, 'canonical_url') ?>
        <?= $form->field($model, 'meta_title') ?>
        <?= $form->field($model, 'meta_description')->textarea(['rows' => '6'])  ?>
        <?= $form->field($model, 'meta_keywords') ?>
        <?= $form->field($model, 'sitemap_last_updated_date') ?>
        <?= $form->field($model, 'created_date') ?>
        <?= $form->field($model, 'last_modified_date') ?>
        <?= $form->field($model, 'sitemap_priority') ?>
        <?= $form->field($model, 'sitemap_changefreq') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- pages -->
