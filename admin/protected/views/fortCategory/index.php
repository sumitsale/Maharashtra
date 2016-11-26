<?php
/* @var $this FortCategoryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fort Categories',
);

$this->menu=array(
	array('label'=>'Create FortCategory', 'url'=>array('create')),
	array('label'=>'Manage FortCategory', 'url'=>array('admin')),
);
?>

<h1>Fort Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
