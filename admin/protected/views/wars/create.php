<?php
/* @var $this WarsController */
/* @var $model Wars */

$this->breadcrumbs=array(
	'Wars'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Wars', 'url'=>array('index')),
	array('label'=>'Manage Wars', 'url'=>array('admin')),
);
?>

<h1>Create Wars</h1>

<?php $this->renderPartial('_form', array('model'=>$model,
			'state' => $state,
			'district' =>$district)); ?>