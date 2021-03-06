<?php

/* @var $this yii\web\View */
/* @var $model \app\modules\fileManager\models\DirectoryForm */
/* @var $directory \app\modules\fileManager\models\Directory */

$this->title = Yii::t('filemanager', 'Create directory');

if (!isset($this->params['breadcrumbs'])) {
    $this->params['breadcrumbs'] = [];
}

$this->params['breadcrumbs'] = array_merge($this->params['breadcrumbs'], $directory->getBreadcrumbs(false));
$this->params['breadcrumbs'][] = $this->title;

?>


<?= $this->render('_form', ['model' => $model]) ?>

