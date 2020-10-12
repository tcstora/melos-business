<?php
get_header();
?>

<?php
$query = new WP_Query(
    array(
        'post_type' => 'jisseki',
        'post_per_page' => 5,
        )
    );
?>
<?php
/* （ステップ2）データの表示 */
if ( $query->have_posts() ) : ?>
    <div>
        <?php while ( $query->have_posts() ) : $query->the_post();?>
            <p><a href="<?php the_permalink(); ?>">
                <?php the_title(); ?></a></p>
            <p><?php the_date(); ?></p>
            <p><?php the_category(", "); ?></p>
            <p><?php the_excerpt(); ?></p>
            <?php if ( has_post_thumbnail() ) : ?>
                <p><?php the_post_thumbnail(); ?></p>
            <?php endif; ?>  
            <hr />
        <?php endwhile; ?>
    </div>
<?php endif; wp_reset_postdata(); ?>
