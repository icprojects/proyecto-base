<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('i_pry_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->i_pry_id),array('view','id'=>$data->i_pry_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_pry_nombre')); ?>:</b>
	<?php echo CHtml::encode($data->s_pry_nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_pry_code')); ?>:</b>
	<?php echo CHtml::encode($data->s_pry_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_pry_info')); ?>:</b>
	<?php echo CHtml::encode($data->s_pry_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('s_pry_objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->s_pry_objetivo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('i_pry_createdby')); ?>:</b>
	<?php echo CHtml::encode($data->i_pry_createdby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_pry_creation')); ?>:</b>
	<?php echo CHtml::encode($data->d_pry_creation); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('i_pry_updatedby')); ?>:</b>
	<?php echo CHtml::encode($data->i_pry_updatedby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('d_pry_lastupdate')); ?>:</b>
	<?php echo CHtml::encode($data->d_pry_lastupdate); ?>
	<br />

	*/ ?>

</div>