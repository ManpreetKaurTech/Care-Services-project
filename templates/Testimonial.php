<?php
/*
Template Name: Testimonial
*/
get_header();

?>
<!-- Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
					 <?php
						if ( have_posts() ) :
							while ( have_posts() ) : the_post(); ?>
                    <h1 class="display-3 text-white animated slideInDown"><?php the_title(); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
							<li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                            <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">About</li>
                        </ol>
                    </nav>
					    <?php endwhile;
            endif;
            ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
<!-- Testimonials Start -->
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="text-center">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonials</h6>
            <h1 class="mb-5">What Our Patients Say</h1>
        </div>
        <div class="owl-carousel testimonial-carousel position-relative">
            <div class="testimonial-item text-center">
                    <?php
                    $image_1= get_field('image_1'); 
                    $image_2= get_field('image_2'); 
                    $image_3= get_field('image_3'); 
                    ?>
               <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo $image_1['url'];?>" style="width: 80px; height: 80px;">
                <h5 class="mb-0"><?php echo the_field('name_1'); ?></h5>
                <p><?php echo the_field('patientd_1'); ?></p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0"><?php echo the_field('comment_1'); ?></p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo $image_2['url'];?>" style="width: 80px; height: 80px;">
                <h5 class="mb-0"><?php echo the_field('name_2'); ?></h5>
                <p><?php echo the_field('patientd_2'); ?></p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0"><?php echo the_field('comment_2'); ?></p>
                </div>
            </div>
             <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo $image_3['url'];?>" style="width: 80px; height: 80px;">
                <h5 class="mb-0"><?php echo the_field('name_3'); ?></h5>
                <p><?php echo the_field('patientd_3'); ?></p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0"><?php echo the_field('comment_3'); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials End -->


<?php get_footer(); ?>