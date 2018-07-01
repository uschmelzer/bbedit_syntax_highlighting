<!--
// -------------------------------------------------------------------
// White block
// -------------------------------------------------------------------
// - Slider
// -------------------------------------------------------------------
-->
<div class="bgwrapper bgwrapperWhite">
	<div class="easycontainer easycontainer-add-page-margins easycontainer-content-padding-top easycontainer-content-padding-bottom">

		<h2><?php echo get_field('subheadvorslider'); ?></h2>

		<?php echo get_field('copyvorslider'); ?>

		<?php 

			if( have_rows('slider') ) {
 
				$collection = get_field('slider');
				require TEMPLATEPATH .'/customer/acf/render/slider1/index.php';
				echo myAcfGetSliderHtml($collection);
				
			}

		?>

	</div>
	<!-- /.easycontainer -->
</div>
<!-- /.bgwrapper -->

    
<!--
// -------------------------------------------------------------------
// Gray block 
// -------------------------------------------------------------------
// - Film
// - Stoerer
// -------------------------------------------------------------------
-->
<div class="bgwrapper bgwrapperGray2">
	<div class="easycontainer easycontainer-add-page-margins easycontainer-content-padding-top easycontainer-content-padding-bottom">

		<h2><?php echo get_field('subheadfilm'); ?></h2>

		<img class="easyImageResponsive addRoundedCorners addBorder" src="/wp-content/themes/easytheme_bos/customer/img/platzhalter/film.png" alt="">

	</div>
	<!-- /.easycontainer -->
</div>
<!-- /.bgwrapper -->

    
<div class="bgwrapper bgwrapperGray2">

	<!-- Special wrapper for stoerer1, not .easycontainer. -->
	<div style="margin-left:-10px;" class="add-content-padding-top add-content-padding-bottom">

			<!-- Grid -->
			<div class="easygrid">

				<div class="easycol">

					<div style="padding-left:40px; padding-right:40px; border-top-left-radius:0; border-bottom-left-radius:0;" class="stoerer1 addRoundedCorners2 add-content-margin-bottom">
						<?php echo get_field('stoerer'); ?>
					</div>
					<!-- /.stoerer1 -->

				</div>
				
				<div class="easycol">
				</div>

			</div>
			<!-- /.easygrid -->

	</div>
	<!-- /Special wrapper for stoerer1 -->

</div>
<!-- bgwrapper -->
