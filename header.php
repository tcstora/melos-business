<?php
  global $uri;
  global $dir;
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width.initial-scale=1">

  <?php wp_head(); ?>

  

<header>
    <nav>
      <div class="container">
        <?php wp_nav_menu( 'theme_location=navigation' ); ?>
        </div>
    </nav>
</header>

<h1><a href="<?php echo home_url(); ?>">
<?php bloginfo( 'name' ); ?></a></h1>

</head>