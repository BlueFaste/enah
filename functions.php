<?php

function add_custom_post_type(){

	$labels=array(
		'name'=> 'Tous les formateurs',
		'singular_name'=>'Formateur',
		'add_new_item'=> 'Ajouter un formateur',
		'menu_name'=> 'Les formateurs',
	);

	$arguments=array(
		'label'=>'Les formateurs',
		'descritpion'=>'Tous les formateurs de l\'Enah',
		'labels'=>$labels,
		'capability_type'=>'post',
		'public'=> true,
		'has_archive'=>true,
		'show_in_rest'=> true,
		'rewrite'=>array('slug'=>'formateurs'),
		'supports'=>array('title','editor','thumbnail'),
		'menu_icon'=>'dashicons-buddicons-buddypress-logo'
	);

	register_post_type('training_team',$arguments);
}

add_action('init','add_custom_post_type');
