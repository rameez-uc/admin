<?php
/* @var $this yii\web\View */

namespace app\models;
namespace yii\admin\models;
use Yii;
use yii\web\models;
?>
<h1>Create Page</h1>
<hr />

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model yii\admin\models\Pages */
/* @var $form ActiveForm */

// echo Yii::getAlias('@yii/admin');
// echo Yii::getAlias('@app');
// echo Yii::getAlias('@webroot');
// echo Yii::getAlias('@web');
?>

<style type="text/css">
    .twoColumns{
        -webkit-column-gap: 20px;
           -moz-column-gap: 20px;
                column-gap: 20px;
        -webkit-column-count: 2;
           -moz-column-count: 2;
                column-count: 2;
    }
</style>
<div class="pages">

        <?php $form = ActiveForm::begin(); ?>

        <div class="row">
            <div class="col-lg-6">
                <?= $form->field($model, 'url') ?>
                <?= $form->field($model, 'canonical_url') ?>
                <?= $form->field($model, 'tbl_sitemap_file_id') ?>
                <?= $form->field($model, 'sitemap_include') ?>
                <?= $form->field($model, 'sitemap_priority') ?>
                <?= $form->field($model, 'sitemap_changefreq')->dropDownList(
                                        ['always' => 'Always', 'hourly' => 'Hourly', 'daily' => 'Daily', 'weekly' => 'Weekly', 'month' => 'Month' ],
                                        ['prompt'=>'Select Change Frequency']    // options
                                    );
                ?>
            </div>
            <div class="col-lg-6">
                <?= $form->field($model, 'meta_title') ?>
                <?= $form->field($model, 'meta_description')->textarea(['rows' => '4'])  ?>
                <?= $form->field($model, 'meta_keywords') ?>
                <?= $form->field($model, 'no_follow') ?>
                <?= $form->field($model, 'no_index') ?>
            </div>
        </div>

        
        <?= $form->field($model, 'sitemap_last_updated_date') ?>
        <?= $form->field($model, 'created_date') ?>
        <?= $form->field($model, 'last_modified_date') ?>

        
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- pages -->
