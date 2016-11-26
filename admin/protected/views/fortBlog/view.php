<?php
/* @var $this FortBlogController */
/* @var $model FortBlog */

$this->breadcrumbs=array(
	'Fort Blogs'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List FortBlog', 'url'=>array('index')),
	array('label'=>'Create FortBlog', 'url'=>array('create')),
	array('label'=>'Update FortBlog', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FortBlog', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FortBlog', 'url'=>array('admin')),
);
?>

<h1>View FortBlog #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fort_category_id',
		'thumbnail',
		'thumbnail_alt',
		'title',
		'blog_date',
		'marathi_content',
		'english_content',
		'state',
		'district',
		'blog_detail_thumbnail',
		'blog_detail_alt',
		'view_count',
		'date_added',
		'date_modified',
	),
)); ?>
