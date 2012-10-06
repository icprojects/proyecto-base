<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Logeo';

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
    'links'=>array('Logeo'),
));
?>

<h1>Logeo</h1>

<p>Please fill out the following form with your login credentials:</p>

<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'id'=>'verticalForm',
    'htmlOptions'=>array('class'=>'well'),
)); ?>
 
<?php echo $form->checkboxRow($model, 'checkbox'); ?>
<?php $this->widget('bootstrap.widgets.TbButton', array('buttonType'=>'submit', 'label'=>'Login')); ?>
 
<?php $this->endWidget(); ?>