
<div class="grey-background">
	<div class="shop-heading">Shop Information</div>
	<div class="shop-name"><h2><? the_title(); ?></h2></div>	
  <section class="container infohold" >
<?
	        $desc = get_sub_field('description');
            $address = get_sub_field('address');
            $site = get_sub_field('site');
            $phone = get_sub_field('phone');
            $news = get_sub_field('news');
            
        ?>
			
			
		
		<div class="page-left">
			<div class="shop-container shop-desc" >
				<div class="shop-container-heading">Information</div>
				<div class="shop-description"><?php echo $desc; ?></div>
			</div>
			        <?php if (have_rows('images')):?>

			<div class="shop-container shop-images">
				        <?php while (have_rows('images')) : the_row(); ?>
						<? $image = get_sub_field('image'); ?>
				<div class="shop-img"><img src="<? echo $image; ?>"/></div>
				<? endwhile; ?>
			</div>
			<?php endif; ?>
		</div>
		
		<div class="page-right">
			<div class="shop-container shop-loc">
				<div class="shop-container-heading">Location</div>
				<div class="shop-address" style="line-height: 24px;"><?php echo $address; ?></div>
				<div class="shop-site"><?php echo $site; ?></div>
				<div class="shop-phone"><?php echo $phone; ?></div>
				<div class="button button-blue"><a href="<? echo $site; ?>">Contact Us</a></div>
			</div>
			
			<div class="shop-container shop-social">
				<div style="text-align: center;">#shopinstagram</div>
				<?php if (have_rows('social_media')):?>
				<ul class="shop-social-menu">
					<?php while (have_rows('social_media')) : the_row(); ?>
				<?php $platform = get_sub_field('platform');
					  $url = get_sub_field('url');
				?>

					<li class="shop-social-icon"><a href="<? echo $url;?>"><div class="fab fa-<?= $platform;?>"></li></a>
				<? endwhile; ?>
				</ul>
				
				<?php endif; ?>		
			</div>	
					
			<div class="shop-container shop-signup">
				
			</div>
		</div>		
  </section>
</div>


	
<section class="container shop-dealhold">
	<div class="wrap">
		<?php if (have_rows('images')):?>
	<div class="shop-heading">Shop Deals</div>
	<div class="shop-name"><h2>Lorem Ipsum Dolor Sit</h2></div>	
		<?php while (have_rows('images')) : the_row(); ?>
		<? $deal_image = get_sub_field('image'); 
			$deal_name = get_sub_field('deal_name');
		?>
	<div class="the-deal">
		<div class="deal-img"><img src="<? echo $deal_image; ?>"/></div>
		<div class="deal-name"><? the_sub_field('deal_name'); ?></div>
	</div>
	<? endwhile; ?>
	<?php endif; ?>
	</div>
</section>










