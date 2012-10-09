<?php

$this->widget('bootstrap.widgets.TbBreadcrumbs', array(
		'links'=>array('Administrador'),
));

$this->menu=array(
	array('label'=>'List header', 'itemOptions'=>array('class'=>'nav-header')),
	//array('label'=>'List Proyecto','url'=>array('index')),
	array('label'=>'Create Proyecto','url'=>array('create')),
	'',
	array('label'=>'Help', 'url'=>'#')
);

?>

<h1>Proyectos</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'proyecto-grid',
	'type'=>'striped bordered condensed',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'i_pry_id',
		's_pry_nombre',
		's_pry_code',
		//'s_pry_info',
		's_pry_objetivo',
		//'i_pry_createdby',
		/*
		'd_pry_creation',
		'i_pry_updatedby',
		'd_pry_lastupdate',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
