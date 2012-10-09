<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'proyecto-form',
	'enableAjaxValidation'=>false,
	'type'=>'horizontal',
)); ?>

	<p class="help-block">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'s_pry_nombre',array('class'=>'span4','maxlength'=>150)); ?>

	<?php echo $form->textFieldRow($model,'s_pry_code',array('class'=>'span3','maxlength'=>15)); ?>

	<?php //echo $form->textAreaRow($model,'s_pry_info',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

	<?php echo $form->textAreaRow($model,'s_pry_objetivo',array('rows'=>3, 'cols'=>50, 'class'=>'span4')); ?>

	<?php //echo $form->textFieldRow($model,'i_pry_createdby',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'d_pry_creation',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'i_pry_updatedby',array('class'=>'span5')); ?>

	<?php //echo $form->textFieldRow($model,'d_pry_lastupdate',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
