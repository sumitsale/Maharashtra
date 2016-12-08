<?php
/* @var $this KingsController */
/* @var $model Kings */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumbnail'); ?>
		<?php echo $form->textField($model,'thumbnail',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'thumbnail_alt'); ?>
		<?php echo $form->textField($model,'thumbnail_alt',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blog_date'); ?>
		<?php echo $form->textField($model,'blog_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marathi_content'); ?>
		<?php echo $form->textArea($model,'marathi_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'english_content'); ?>
		<?php echo $form->textArea($model,'english_content',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'district'); ?>
		<?php echo $form->textField($model,'district',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail_thumbnail'); ?>
		<?php echo $form->textField($model,'detail_thumbnail',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail_alt'); ?>
		<?php echo $form->textField($model,'detail_alt',array('size'=>60,'maxlength'=>500)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'view_count'); ?>
		<?php echo $form->textField($model,'view_count'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_added'); ?>
		<?php echo $form->textField($model,'date_added'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_modified'); ?>
		<?php echo $form->textField($model,'date_modified'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->