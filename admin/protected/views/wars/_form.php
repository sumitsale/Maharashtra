<?php
/* @var $this WarsController */
/* @var $model Wars */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'wars-form',
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
		<?php echo $form->labelEx($model,'thumbnail'); ?>
		<?php echo $form->fileField($model,'thumbnail',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'thumbnail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail_alt'); ?>
		<?php echo $form->textField($model,'thumbnail_alt',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'thumbnail_alt'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blog_date'); ?>
		
		<?php //echo $form->textField($model,'blog_date'); ?>


<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
			'name'=>'Wars[blog_date]',
			'model'=>$model,
			'value'=>$model->blog_date!='' ? date('Y-m-d', strtotime($model->blog_date)) : '',
		// additional javascript options for the date picker plugin
		'options'=>array(
		'dateFormat'=>'yy-m-dd',
		'showAnim'=>'fold',
		'changeYear' => true,
		'changeMonth' => true
		
						),
						'htmlOptions'=>array(
							'style'=>'height:20px;',
							'readonly'=>'true' 

						),
					));

		?>

		<?php echo $form->error($model,'blog_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marathi_content'); ?>
				<?php //echo $form->textArea($model,'marathi_content',array('rows'=>6, 'cols'=>50)); ?>

<?php $this->widget('application.extensions.extckeditor.ExtCKEditor', array(
'model'=>$model,
'attribute'=>'marathi_content', // model atribute
'language'=>'en', /* default lang, If not declared the language of the project will be used in case of using multiple languages */
'editorTemplate'=>'full', // Toolbar settings (full, basic, advanced)
)); ?>


		<?php echo $form->error($model,'marathi_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'english_content'); ?>
				<?php //echo $form->textArea($model,'english_content',array('rows'=>6, 'cols'=>50)); ?>


<?php $this->widget('application.extensions.extckeditor.ExtCKEditor', array(
'model'=>$model,
'attribute'=>'english_content', // model atribute
'language'=>'en', /* default lang, If not declared the language of the project will be used in case of using multiple languages */
'editorTemplate'=>'full', // Toolbar settings (full, basic, advanced)
)); ?>

		<?php echo $form->error($model,'english_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
				<?php //echo $form->textField($model,'state',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->dropDownList($model,'state',CHtml::listData(
			$state,'city_state','city_state'),array('prompt'=>'Select State')); ?>

		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'district'); ?>
		<?php //echo $form->textField($model,'district',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->dropDownList($model,'district',CHtml::listData(
			$district,'city_name','city_name'),array('prompt'=>'Select District')); ?>
		<?php echo $form->error($model,'district'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_thumbnail'); ?>
		<?php echo $form->fileField($model,'detail_thumbnail',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'detail_thumbnail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail_alt'); ?>
		<?php echo $form->textField($model,'detail_alt',array('size'=>60,'maxlength'=>500)); ?>
		<?php echo $form->error($model,'detail_alt'); ?>
	</div>
<!--
	<div class="row">
		<?php echo $form->labelEx($model,'view_count'); ?>
		<?php echo $form->textField($model,'view_count'); ?>
		<?php echo $form->error($model,'view_count'); ?>
	</div>

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