<?php
/* @var $this FortCategoryController */
/* @var $model FortCategory */

$this->breadcrumbs=array(
	'Fort Categories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FortCategory', 'url'=>array('index')),
	array('label'=>'Manage FortCategory', 'url'=>array('admin')),
);
?>

<h1>Create FortCategory</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>