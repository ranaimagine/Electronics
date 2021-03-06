<div class="kontakt-article">
  <?php while ( have_posts() ) : the_post(); ?>
  <div class="row">
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <div class="small-12 medium-12 large-12 columns">
        <h2 class="PageHdline"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
      </div>
      <div class="small-12 medium-12 large-12 columns kontakt-artilce-text">
        <?php the_content(); ?>
      </div>
    </article>
    <?php endwhile;?>
  </div>
</div>
<div class="kontakt-page">
  <div class="row">
    <div class="small-12 medium-12 large-12 columns">
      <?php $query = new WP_Query( 'order=asc&category_name=kontakt&post_status=publish&paged='. get_query_var('paged')); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
        <div class="small-12 medium-12 large-12 kontakt-block" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
          <div class="small-12 medium-5 large-4 ">
            <div class=" kontakt-text-block">
              <h3>
                <?php the_title(); ?>
              </h3>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      <?php endwhile;  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
      <?php endif; ?>
    </div>
  </div>
</div>