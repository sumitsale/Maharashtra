<?php
/* @var $this FortBlogController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fort Blogs',
);

$this->menu=array(
	array('label'=>'Create FortBlog', 'url'=>array('create')),
	array('label'=>'Manage FortBlog', 'url'=>array('admin')),
);
?>

<h1>Fort Blogs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
