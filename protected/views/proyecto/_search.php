<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldRow($model,'i_pry_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'s_pry_nombre',array('class'=>'span5','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'s_pry_code',array('class'=>'span5','maxlength'=>15)); ?>

	<?php echo $form->textAreaRow($model,'s_pry_info',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'s_pry_objetivo',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textFieldRow($model,'i_pry_createdby',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'d_pry_creation',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'i_pry_updatedby',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'d_pry_lastupdate',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
