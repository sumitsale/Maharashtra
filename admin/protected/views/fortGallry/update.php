<?php
/* @var $this FortGallryController */
/* @var $model FortGallry */

$this->breadcrumbs=array(
	'Fort Gallries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FortGallry', 'url'=>array('index')),
	array('label'=>'Create FortGallry', 'url'=>array('create')),
	array('label'=>'View FortGallry', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FortGallry', 'url'=>array('admin')),
);
?>

<h1>Update FortGallry <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>