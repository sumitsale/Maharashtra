<?php
/* @var $this FortGallryController */
/* @var $model FortGallry */

$this->breadcrumbs=array(
	'Fort Gallries'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FortGallry', 'url'=>array('index')),
	array('label'=>'Create FortGallry', 'url'=>array('create')),
	array('label'=>'View FortGallry', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FortGallry', 'url'=>array('admin')),
);
?>

<h1>Update FortGallry <?php echo $model->id; ?></h1>

<?php //$this->renderPartial('_form', array('model'=>$model)); ?>


<?php
/* @var $this FortGallryController */
/* @var $model FortGallry */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'fort-gallry-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data')
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'gallery_id'); ?>
		<?php echo $form->hiddenField($model,'gallery_id'); ?>
		<?php echo $form->error($model,'gallery_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail'); ?>
		<?php echo $form->fileField($model,'thumbnail',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'thumbnail'); ?>
	</div>


	<?php if($model->thumbnail != '') { ?>
	<div class="row">
	<a target="_blank" href="<?php echo Yii::app()->baseurl.'../../images/fortgallery/smallthumbnail/'.$model->thumbnail; ?>"><?php echo $model->thumbnail; ?></a><br>
	<img src="<?php echo Yii::app()->baseurl.'../../images/fortgallery/smallthumbnail/'.$model->thumbnail; ?>">
	</div>
	<?php } ?>


	<div class="row">
		<?php echo $form->labelEx($model,'alt_thumbnail'); ?>
		<?php echo $form->textField($model,'alt_thumbnail',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'alt_thumbnail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>512)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
		<?php echo $form->error($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_modified'); ?>
		<?php echo $form->textField($model,'date_modified'); ?>
		<?php echo $form->error($model,'date_modified'); ?>
	</div>
-->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->