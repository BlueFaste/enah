<?php
/*
Template Name: Trainers List
*/

get_header();

$arguments=array(
  'post_type'=>'training_team',
  'order'=>'DESC', //ASC
  'orderby'=>'date',
  'posts_per_page'=>-1,
);

$query= new WP_query($arguments);

 ?>

 <div class="boucle">
 <?php
  if($query->have_posts()):
    while ($query->have_posts()) :
      $query->the_post();

      ?>



      <div class="membre">

        <a href="<?php the_permalink(); ?>">
          <figure><?php the_post_thumbnail();?></figure>
          <h2><?php the_title(); ?></h2>
        </a>

      </div>

 <?php endwhile; endif; ?>
</div>
<?php get_footer();
