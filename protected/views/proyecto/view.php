<?php
$this->breadcrumbs=array(
	'Proyectos'=>array('index'),
	$model->i_pry_id,
);

$this->menu=array(
	//array('label'=>'List Proyecto','url'=>array('index')),
	array('label'=>'Create Proyecto','url'=>array('create')),
	array('label'=>'Update Proyecto','url'=>array('update','id'=>$model->i_pry_id)),
	array('label'=>'Delete Proyecto','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->i_pry_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Proyecto','url'=>array('admin')),
	'',
	array('label'=>'Help', 'url'=>'#')
);
?>

<h1>View Proyecto #<?php echo $model->i_pry_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'i_pry_id',
		's_pry_nombre',
		's_pry_code',
		's_pry_info',
		's_pry_objetivo',
		//'i_pry_createdby',
		//'d_pry_creation',
		//'i_pry_updatedby',
		//'d_pry_lastupdate',
	),
)); ?>
