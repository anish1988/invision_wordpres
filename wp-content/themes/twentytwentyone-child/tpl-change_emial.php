<?php
// Template Name: Change Email 

if(!is_user_logged_in()){
          wp_redirect(home_url());
}
get_header();
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
           <div class="container">
                           <h1><?php the_title(); ?></h1>
                           <?php the_content(); ?>
                           <?php echo do_shortcode('[changeemail_form]'); ?>
           </div>
<?php endwhile; endif; ?>
<?php get_footer(); ?>