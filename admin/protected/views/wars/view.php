<?php
/* @var $this WarsController */
/* @var $model Wars */

$this->breadcrumbs=array(
	'Wars'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Wars', 'url'=>array('index')),
	array('label'=>'Create Wars', 'url'=>array('create')),
	array('label'=>'Update Wars', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Wars', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Wars', 'url'=>array('admin')),
);
?>

<h1>View Wars #<?php echo $model->id; ?></h1>

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
