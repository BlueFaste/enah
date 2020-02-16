<?php

function add_custom_post_type(){

	$labels_training_team=array(
		'name'=> 'Tous les formateurs',
		'singular_name'=>'Formateur',
		'add_new_item'=> 'Ajouter un formateur',
		'menu_name'=> 'Les formateurs',
	);

	$arguments_training_team=array(
		'label'=>'Les formateurs',
		'descritpion'=>'Tous les formateurs de l\'Enah',
		'labels'=>$labels_training_team,
		'capability_type'=>'post',
		'public'=> true,
		'has_archive'=>true,
		'show_in_rest'=> true,
		'rewrite'=>array('slug'=>'formateurs'),
		'supports'=>array('title','editor','thumbnail'),
		'menu_icon'=>'dashicons-id'
	);

	register_post_type('training_team',$arguments_training_team);

	$lables_partners= array(
		'name'=>'Tous les partenaires',
		'singular_name'=>'Partenaires',
		'add_new_item'=>'Ajouter un partenaire',
		'menu_name'=>'Les partenaires'
	);

	$arguments_partners=array(
		'label'=>'Les partenaires',
		'description'=>'Tous les formateurs de l\'Enah',
		'labels'=>$lables_partners,
		'capability_type'=>'post',
		'public'=>true,
		'has_archive'=>true,
		'show_in_rest'=>true,
		'rewrite'=>array('slug'=>'partenaires'),
		'supports'=>array('title','editor','thumbnail'),
		'menu_icon'=>'dashicons-groups'
	);

	register_post_type('partners',$arguments_partners);

}

add_action('init','add_custom_post_type');
