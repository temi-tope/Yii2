<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>


    <?php $form = ActiveForm::begin([
        'id' => 'very-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email')?>


        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Verify', ['class' => 'btn btn-primary', 'name' => 'verify-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>