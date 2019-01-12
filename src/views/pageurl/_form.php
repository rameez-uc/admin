<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Pages */
/* @var $form ActiveForm */
?>
<div class="form">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'page_name') ?>
        <?= $form->field($model, 'page_slug') ?>
        <?= $form->field($model, 'meta_description') ?>
        <?= $form->field($model, 'meta_title') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'layout') ?>
        <?= $form->field($model, 'body_class') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- _form -->
