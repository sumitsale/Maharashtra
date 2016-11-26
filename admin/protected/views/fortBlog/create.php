<?php
/* @var $this FortBlogController */
/* @var $model FortBlog */

$this->breadcrumbs=array(
	'Fort Blogs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FortBlog', 'url'=>array('index')),
	array('label'=>'Manage FortBlog', 'url'=>array('admin')),
);
?>

<h1>Create FortBlog</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'fortCategory' => $fortCategory)); ?>