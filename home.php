<?php
/**
 * The template for displaying Archive pages.
 *
 * @package ThinkUpThemes
 */

get_header(); 
global $dir;
?>

<div id="slider"><div id="slider-core"><div class="rslides-container" data-speed="6000"><div class="rslides-inner"><ul class="slides rslides rslides1" data-aspectratio="0.30701754385964913" data-oldwidth="1345" style="width: 1345px; height: 412.939px;"><li id="rslides1_s0" style="display: list-item; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 500ms ease-in-out 0s; width: 1345px; height: 412.939px;" class="rslides1_on" data-aspectratio="0.30701754385964913" data-oldwidth="1345"><img src="index_files/transparent.png" style="background: url(http://192.168.17.109/komatsu_yuki/wordpress/wp-content/themes/melos-business/images/slide_01_.jpg) no-repeat center; background-size: cover;" alt="dam"><div class="rslides-content"><div class="wrap-safari"><div class="rslides-content-inner"><div class="featured"><div class="featured-title"><span>dam</span></div><div class="featured-excerpt"><p><span>詳細な説明</span></p></div></div></div></div></div></li></ul></div></div></div></div><div id="thinkupslider-after"></div>

<section class="well-6 bg-secondary-2">
<?php echo esc_html( $post->施工実績 ); ?>
<div class="row">
		<div class="col-lg-6 col-md-12 text-center text-lg-right">
				<img src="<?=$dir?>/images/page-01_img01.jpg" alt="">
		</div>

		<div class="col-lg-6 col-md-12 inset-3 text-center text-lg-left">
				<div class="container">
						<div class="row">
								<div class="col-lg-6" style="position: relative;">
										<img src="<?=$dir?>/images/staff_bg02.png" style="position: absolute;top: -86px;">
										<h2 class="text-center text-lg-left">○○はどんな会社?</h2>
										<h6 class="small normal text-center text-lg-left text-primary">
												仲間と未来をつなぐひとりひとりの○○○スピリット</h6>

										<p class="big-1 offset-3 font-family-2 text-secondary-2">
												○○○は創業50年の歴史をもつ、愛知県での港湾土木を中心とした建設会社です。「あなたと海をつなぐ。」をスローガンとし、日々、人々の暮らしの基盤づくりに貢献しております。
										</p>
										<a href="#" class="btn btn-md btn-secondary-1 offset-3">もっと読む</a>
								</div>
						</div>

				</div>
	</div>
</div>
</section>

<!--Pre-Designed HomePage-->	


<div class="multiple-items">
<?php

$args = array(
	'posts_per_page' => 24, //投稿数
	'category_name' => 'seko-jiseki',//カテゴリスラッグ
);

$query = new WP_Query($args);
   if ($query->have_posts()){
      while ($query->have_posts()) {
         $query->the_post();
 ?>

	<article id="post-<?php the_ID(); ?>" >
		<div class="entry-content ">
			<header class="entry-header  ">
				<?php echo thinkup_input_blogimage(); ?>
			</header>
			<?php thinkup_input_blogtitle(); ?>
		</div>
	</article>
 <?php         
      }
		}
	?> <!--投稿の slider end-->

</div>


<!--採用情報のイケメン背景-->
<section class="well-7 bg-secondary-3 bg-image-saiyo">
	<div class="container">
		<div class="block left_top">
			<h3><i class="fa fa-graduation-cap" aria-hidden="true"></i>自立</h3> <p>Independance</p>
			<hr><hr>
		</div>

		<div class="block right_top">
			<h3>採用情報</h3>
			<p>弊社では､一緒に働いてくれる仲間を募集中!新しいことにチャレンジして､皆さんでより良い環境を一緒に作りませんか?</p>
			<hr><hr  style="left: 38px;">
			<button>募集業務の詳細</button>
		</div>

		<div class="block left_bottom">
			<h3><i class="fa fa-clock-o" aria-hidden="true"></i>育成</h3> <p>Traning</p>
		</div>

		<div class="block right_bottom">
			<h3><i class="fa fa-trophy" aria-hidden="true"></i>挑戦</h3> <p>Charenge</p>
		</div>
      
	</div>
</section>
<!-- // 採用情報のイケメン背景 -->



<section style="display:flex">
		<div>  
		
				<div class="col-md-6 text-center text-md-left">
						<h4 class="text-center text-md-left offset-1">お問い合わせ<br>
								<span style="
								font-size: 25px;
								color: #48c0db;
								text-shadow: 0 0 17px #fbfbfb;
								">Contact</span></h4>

										<p style="
								width: 430px;
								line-height: 3em;
								margin-bottom: 100px;
						">土木工事・舗装工事・水道管設置工事・ドローン測量のことに関する
																										ご依頼・お問い合わ募集中！！
						</p>
						<hr>
						<a href="#" class="btn btn-sm btn-secondary-1">メールでのお問い合わせはこちら</a>
				</div>

				<div class="col-md-6 text-center text-md-left">
						<h4 class="text-primary text-center text-md-left offset-1">Twitter更新</h4>

						<p><img src="images/twitter-koshin.png" alt="" style="
								width: 353px;
						"></p>
				</div>
		
		
		 </div>
		<div style=" height: 490px; overflow: hidden">
			<a class="twitter-timeline" href="https://twitter.com/TODA_PR?ref_src=twsrc%5Etfw">Tweets by TODA_PR</a>
		</div>
</section>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<?php
the_post_thumbnail( 'thumbnail' );
the_post_thumbnail( 'large' );
?>

<h1 class="post-title">
                
                <?php the_title(); ?></h1>
                    <p><?php var_dump( get_field( 'photo' )); ?></p>
                    <p><?php echo get_field( 'hattyusya' ); ?></p>
                    <p><?php echo get_field( 'sekobasho' ); ?></p>
                    <p><?php echo get_field( 'kansei' ); ?></p>
                    <p><?php echo get_field( 'gaiyo' ); ?></p>
                    <p><?php echo get_field( 'gijyutu' ); ?></p>




<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
				
<script>
jQuery('.multiple-items').slick({
  infinite: true,
  slidesToShow: 4,
  slidesToScroll: 1
});


jQuery(function(){
	jQuery("button.slick-prev").remove();

	jQuery("button.slick-next").html("<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'><path d='M27,22L27,22L5,44l-2.1-2.1L22.8,22L2.9,2.1L5,0L27,22L27,22z' fill='#007aff'/></svg>");
});

jQuery("form.searchform").append('<button type="submit" class="searchsubmit fa-search" name="submit" value="Search"></button>');

jQuery("a.themebutton").addClass("fa fa-play-circle").text('');

</script>
<?php get_footer() ?>
