<?php
/* @var $this FortGallryController */
/* @var $model FortGallry */

$this->breadcrumbs=array(
	'Fort Gallries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FortGallry', 'url'=>array('index')),
	array('label'=>'Manage FortGallry', 'url'=>array('admin')),
);
?>

<h1>Create FortGallry</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'id'=>$id)); ?>