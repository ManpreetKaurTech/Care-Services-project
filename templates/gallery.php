<?php
/*
Template Name: Gallery
*/
get_header();
?>

<!-- Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post(); ?>
                        <h1 class="display-3 text-white animated slideInDown"><?php the_title(); ?></h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a class="text-white" href="<?php echo home_url(); ?>">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page"><?php the_title(); ?></li>
                            </ol>
                        </nav>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

<!-- Gallery Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Gallery</h6>
            <h1 class="mb-5">Memorable Moments</h1>
        </div>

        <div class="row g-4">
            <?php 
            // You can replace these static images with dynamic ACF fields or gallery shortcode
            $images = [
                'new6.jpg',
                'new7.jpg',
                'new6.jpg',
                'new9.jpg',
                'new10.jpg',
                'new8.jpg'
            ];
            $delay = 0.1;
            foreach ($images as $img): 
            ?>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="<?php echo $delay; ?>s">
                    <div class="position-relative overflow-hidden rounded shadow-lg gallery-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $img; ?>" class="img-fluid rounded" alt="Gallery Image">
                        <div class="gallery-overlay d-flex align-items-center justify-content-center">
                            <a href="<?php echo get_template_directory_uri(); ?>/assets/img/<?php echo $img; ?>" class="btn btn-light btn-sm" data-lightbox="gallery"><i class="fa fa-eye text-primary"></i></a>
                        </div>
                    </div>
                </div>
            <?php 
            $delay += 0.2;
            endforeach; 
            ?>
        </div>
    </div>
</div>
<!-- Gallery Section End -->

<style>
.gallery-item {
    transition: all 0.4s ease-in-out;
    cursor: pointer;
}
.gallery-item:hover img {
    transform: scale(1.05);
    filter: brightness(0.8);
}
.gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.5);
    opacity: 0;
    transition: opacity 0.4s ease-in-out;
}
.gallery-item:hover .gallery-overlay {
    opacity: 1;
}
</style>

<?php get_footer(); ?>
