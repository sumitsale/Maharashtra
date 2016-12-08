<?php
/* @var $this KingsController */
/* @var $data Kings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail_alt')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail_alt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blog_date')); ?>:</b>
	<?php echo CHtml::encode($data->blog_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marathi_content')); ?>:</b>
	<?php echo CHtml::encode($data->marathi_content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('english_content')); ?>:</b>
	<?php echo CHtml::encode($data->english_content); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('state')); ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('district')); ?>:</b>
	<?php echo CHtml::encode($data->district); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_thumbnail')); ?>:</b>
	<?php echo CHtml::encode($data->detail_thumbnail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail_alt')); ?>:</b>
	<?php echo CHtml::encode($data->detail_alt); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('view_count')); ?>:</b>
	<?php echo CHtml::encode($data->view_count); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_added')); ?>:</b>
	<?php echo CHtml::encode($data->date_added); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_modified')); ?>:</b>
	<?php echo CHtml::encode($data->date_modified); ?>
	<br />

	*/ ?>

</div>