<?php
/* @var $this FortGallryController */
/* @var $model FortGallry */

$this->breadcrumbs=array(
	'Fort Gallries'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List FortGallry', 'url'=>array('index')),
	array('label'=>'Create FortGallry', 'url'=>array('create')),
	array('label'=>'Update FortGallry', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FortGallry', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FortGallry', 'url'=>array('admin')),
);
?>

<h1>View FortGallry #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'gallery_id',
		'thumbnail',
		'alt_thumbnail',
		'title',
		'date_added',
		'date_modified',
	),
)); ?>
