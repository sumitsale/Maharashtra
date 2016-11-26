<?php
/* @var $this FortBlogController */
/* @var $model FortBlog */

$this->breadcrumbs=array(
	'Fort Blogs'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FortBlog', 'url'=>array('index')),
	array('label'=>'Create FortBlog', 'url'=>array('create')),
	array('label'=>'View FortBlog', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FortBlog', 'url'=>array('admin')),
);
?>

<h1>Update FortBlog <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>