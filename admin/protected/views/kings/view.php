<?php
/* @var $this KingsController */
/* @var $model Kings */

$this->breadcrumbs=array(
	'Kings'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Kings', 'url'=>array('index')),
	array('label'=>'Create Kings', 'url'=>array('create')),
	array('label'=>'Update Kings', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Kings', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Kings', 'url'=>array('admin')),
);
?>

<h1>View Kings #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'thumbnail',
		'thumbnail_alt',
		'title',
		'blog_date',
		'marathi_content',
		'english_content',
		'state',
		'district',
		'detail_thumbnail',
		'detail_alt',
		'view_count',
		'date_added',
		'date_modified',
	),
)); ?>
