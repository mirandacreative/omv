<?php 
			
            $dir_map = get_sub_field('dir_map');
            $dir_blurb = get_sub_field('dir_blurb');
        ?>

<div class="grey-background">
	    <section class="container infohold directory" >

	        	<div class="directory-map"><img src="<? echo $dir_map; ?>" /></div>
	        	<div class="directory-heading">Olde Mistick Village Shops</div>
	        	<div class="directory-blurb"><? echo $dir_blurb; ?></div>
	        	<?php if (have_rows('directory')):?>
				
				<ul class="directory-shops">
					<?php while (have_rows('directory')): the_row(); ?>
					
					<?php $biz_name = get_sub_field('biz_name');
				        $biz_loc = get_sub_field('biz_loc');
			            $sm_desc = get_sub_field('sm_desc');
				?>
					
						<li class="the-shop">
							<div class="biz-name"><? echo $biz_name; ?></div>
							<div class="biz-loc"> - <? echo $biz_loc ; ?></div>
							<div class="biz-desc"><? echo $sm_desc ; ?></div>							
						</li>
					<?php endwhile; ?>
				</ul>
				<? endif; ?>
				
				

				
							
		</section>
 </div>
	
	<div class="wrap">
	<section class="container infohold directory" >
	<?php if (have_rows('directory_deals')):?>
				
				<div class="directory-deals">
					<?php while (have_rows('directory_deals')): the_row(); ?>
					
					<?php $deal_img = get_sub_field('deal_img');
				        $deal_name = get_sub_field('deal_name');
			            $link = get_sub_field('link');
				?>
					
						<div class="the-deal">
							<div class="deal-image"><img src="<? echo $deal_img; ?>" /></div>
							<div class="deal-name"><? echo $deal_name ; ?></div>
							<div class="shop-link button"><a href="<? echo $link; ?>">View Deal!</a></div>							
						</div>
					<?php endwhile; ?>
				</div>
				<? endif; ?>
	</section>
	</div>
