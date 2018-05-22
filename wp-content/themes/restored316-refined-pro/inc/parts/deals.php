<section class="container dealhold shopdealhold">
	<div class="wrap">
	<div class="deal-heading">Shop Deals</div>
	<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>

   <?php if (have_rows('shop_deals')):?>

	<?php while (have_rows('shop_deals')) : the_row(); ?>
	
	<? $deal_image = get_sub_field('deal_image');
	$deal_name = get_sub_field('deal_name'); 
	$link = get_sub_field('link'); 
		
		
	?>
	<div class="the-deal">
		<div class="deal-img"><img src="<? echo $deal_image; ?>"/></div>
		<div class="deal-name"><? echo $deal_name; ?></div>
		<div class="button button-blue"><a href="<? echo $link; ?>">View Deal!</a></div>
	</div>
	<? endwhile; ?>
	
	
	<?php endif; ?>

	
	</div>
</section>

<section class="container dealhold dinedealhold">
	<div class="wrap">
	<div class="deal-heading">Dining Deals</div>
	<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>

	  <?php if (have_rows('dining_deals')):?>

	<?php while (have_rows('dining_deals')) : the_row(); ?>
	
	<? $deal_image = get_sub_field('deal_image');
	$deal_name = get_sub_field('deal_name'); 
	$link = get_sub_field('link'); 
	
		
	?>
	<div class="the-deal">
		<div class="deal-img"><img src="<? echo $deal_image; ?>"/></div>
		<div class="deal-name"><? echo $deal_name; ?></div>
		<div class="button button-blue"><a href="<? echo $link; ?>">View Deal!</a></div>
	</div>
	<? endwhile; ?>
	
		
	<?php endif; ?>
	</div>
</section>

<section class="container dealhold servdealhold">
	<div class="wrap">
	<div class="deal-heading">Service  Deals</div>
	<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>

  <?php if (have_rows('service_deals')):?>

	<?php while (have_rows('service_deals')) : the_row(); ?>
	
	<? $deal_image = get_sub_field('deal_image');
	$deal_name = get_sub_field('deal_name'); 
$link = get_sub_field('link');  
		
		
	?>
	<div class="the-deal">
		<div class="deal-img"><img src="<? echo $deal_image; ?>"/></div>
		<div class="deal-name"><? echo $deal_name; ?></div>
		<div class="button button-blue"><a href="<? echo $link; ?>">View Deal!</a></div>
	</div>
	<? endwhile; ?>
	
	
	<?php endif; ?>
	
	</div>
</section>

<section class="container dealhold theaterdealhold">
	<div class="wrap">
	<div class="deal-heading">Theater Deals</div>
	<div class="deal-subheading"><h2>Lorem Ipsum Dolor Sit</h2></div>

  <?php if (have_rows('theater_deals')):?>

	<?php while (have_rows('theater_deals')) : the_row(); ?>
	
	<? $deal_image = get_sub_field('deal_image');
	$deal_name = get_sub_field('deal_name'); 
	$link = get_sub_field('link'); 	
		
	?>
	<div class="the-deal">
		<div class="deal-img"><img src="<? echo $deal_image; ?>"/></div>
		<div class="deal-name"><? echo $deal_name; ?></div>
		<div class="button button-blue"><a href="<? echo $link; ?>">View Deal!</a></div>
	</div>
	<? endwhile; ?>
	
	
	<?php endif; ?>
	
	</div>
</section> 