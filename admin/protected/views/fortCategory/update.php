<?php
/* @var $this FortCategoryController */
/* @var $model FortCategory */

$this->breadcrumbs=array(
	'Fort Categories'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FortCategory', 'url'=>array('index')),
	array('label'=>'Create FortCategory', 'url'=>array('create')),
	array('label'=>'View FortCategory', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FortCategory', 'url'=>array('admin')),
);
?>

<h1>Update FortCategory <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>