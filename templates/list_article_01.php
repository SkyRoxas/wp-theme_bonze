<div class ="article-list">
  <?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
    <div class ="article">
      <div class ="article-field title">
        <h1><?php the_title(); ?></h1>
        <hr>
      </div>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>
</div>
