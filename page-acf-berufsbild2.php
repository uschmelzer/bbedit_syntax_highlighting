<?php
/*
 * Template Name: Page ACF - Berufsbild
 */

	get_header(); 

?>



<!-- ACF CONTENT -->
<!-- ACF CONTENT -->
<!-- ACF CONTENT -->

<?php 

	// -------------------------------------------------------------------
	// ACF Stuff
	// -------------------------------------------------------------------
	// 	bannerberufsbild
	// 	Image
	// 
	// 	headlineberufsbild
	// 	Text
	// 
	// 	subheadberufsbild Text
	// 	Area
	// 
	// 	copyberufsbild
	// 	Wysiwyg Editor
	// 
	// 	bigtext
	// 	Text
	// 
	// 	subheadSteckbrief
	// 	Text Area
	// 
	// 	copysteckbrief
	// 	Wysiwyg Editor
	// 
	// 	imagesteckbrief
	// 	Image
	// 
	// 	subheadvorslider
	// 	Text Area
	// 
	// 	copyvorslider
	// 	Wysiwyg Editor
	// 
	// 	slider
	// 	Repeater
	//  - sliderimage	
	//  - slidertext
	// 
	// 	subheadfilm
	// 	Text Area
	// 
	// 	video
	// 	Url
	// 
	// 	stoerer
	// 	Wysiwyg Editor
	// -------------------------------------------------------------------

?>


<!--
// -------------------------------------------------------------------
// Banner
// -------------------------------------------------------------------
-->
<div style="background-color:#FFF;" class="bgwrapper bgwrapperUnterseite">
	<img style="margin:0 auto;" class="easyImageResponsiveStretchToPhysicalSize" src="<?php echo get_field('bannerberufsbild'); ?>" alt="">
</div>
<!-- /.bgwrapper -->


<!--
// -------------------------------------------------------------------
// White block
// -------------------------------------------------------------------
-->
<div class="bgwrapper">
	<div class="easycontainer easycontainer-add-page-margins easycontainer-content-padding-top easycontainer-content-padding-bottom2">

		<h1><?php echo get_field('headlineberufsbild'); ?></h1>
		<h2><?php echo get_field('subheadberufsbild'); ?></h2>
		<?php echo get_field('copyberufsbild'); ?>

	</div>
	<!-- /.easycontainer -->
</div>
<!-- /.bgwrapper -->


<!--
// -------------------------------------------------------------------
// Orange block
// -------------------------------------------------------------------
// - Steckbrief
// -------------------------------------------------------------------
-->
<div class="bgwrapper bgOrange">

	<div class="easycontainer easycontainer-add-page-margins">

		<!-- Der grosse, schraege Font -->
		<div class="bigfont"><?php echo get_field('bigtext'); ?></div>
  		
	</div>
	<!-- /.easycontainer -->

	<div class="easycontainer easycontainer-add-page-margins easycontainer-content-padding-top easycontainer-content-padding-bottom">


		<!-- Grid -->
		<div class="easygrid">

			<div class="easycol easycol-content-padding-right2 easycol-vertical-align-top">

				<!-- Die Copy -->
				<h2 class="noMarginTop xxxdebugBackground1"><?php echo get_field('subheadSteckbrief'); ?></h2>
				<?php echo get_field('copysteckbrief'); ?>

			</div>
			<div class="easycol easycol-content-padding-left2 easycol-vertical-align-top">
				<img class="easyImageResponsive addBorder addRoundedCorners" src="<?php echo get_field('imagesteckbrief'); ?>" alt="">
			</div>

		</div>
		<!-- /.easygrid -->

	</div>
	<!-- /.easycontainer -->

</div>
<!-- /.bgwrapper -->

    

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
// Gray block 
// - Film
// - Stoerer
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




<!-- /ACF CONTENT -->
<!-- /ACF CONTENT -->
<!-- /ACF CONTENT -->


<?php

// WM/Schmelzer, Montag, 05. Februar 2018
// Keine Sidebar verwenden
//get_sidebar();
get_footer();
?>