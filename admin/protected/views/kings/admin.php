<?php
/* @var $this KingsController */
/* @var $model Kings */

$this->breadcrumbs=array(
	'Kings'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Kings', 'url'=>array('index')),
	array('label'=>'Create Kings', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#kings-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Kings</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'kings-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
	//	'id',
		'thumbnail',
		'thumbnail_alt',
		'title',
		'blog_date',
			'state',
		'district',
		'detail_thumbnail',
		'detail_alt',
		'view_count',
		'date_added',
		'date_modified',
	//	'marathi_content',
		/*
		'english_content',
		'state',
		'district',
		'detail_thumbnail',
		'detail_alt',
		'view_count',
		'date_added',
		'date_modified',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
