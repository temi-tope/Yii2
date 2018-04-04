<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Posts */

$this->title = 'Update Posts: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Posts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->posts_id, 'url' => ['view', 'posts_id' => $model->posts_id, 'author_id' => $model->author_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="posts-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
