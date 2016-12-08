<?php
/* @var $this KingsController */
/* @var $model Kings */

$this->breadcrumbs=array(
	'Kings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Kings', 'url'=>array('index')),
	array('label'=>'Manage Kings', 'url'=>array('admin')),
);
?>

<h1>Create Kings</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'state' => $state,
			'district' =>$district)); ?>