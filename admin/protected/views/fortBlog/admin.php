<?php
/* @var $this FortBlogController */
/* @var $model FortBlog */

$this->breadcrumbs=array(
	'Fort Blogs'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List FortBlog', 'url'=>array('index')),
	array('label'=>'Create FortBlog', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#fort-blog-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Fort Blogs</h1>

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
	'id'=>'fort-blog-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'id',
		'fort_category_id',
		'thumbnail',
		'thumbnail_alt',
		'title',
		'blog_date',
		'view_count',
		'date_added',
		/*
		'marathi_content',
		'english_content',
		'state',
		'district',
		'blog_detail_thumbnail',
		'blog_detail_alt',
		'view_count',
		'date_added',
		'date_modified',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
