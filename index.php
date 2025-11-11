<?php get_header(); ?>

<!-- Carousel Start -->
<div class="container-fluid p-0 mb-5">
    <div class="owl-carousel header-carousel position-relative">
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/new1.jpg" alt="Nanny Care Hospital">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Caring Hands, Healing Hearts</h5>
                            <h1 class="display-3 text-white animated slideInDown">Your Health Is Our Priority</h1>
                            <p class="fs-5 text-white mb-4 pb-2">
                                At Nanny Care Medical Hospital, we deliver compassionate, high-quality care to ensure your well-being and comfort.
                            </p>
                            <button onclick="scrollToSection('Packages')" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
							Our Packages
							</button>

                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-item position-relative">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor measuring blood old 2.jpg" alt="Nanny Care Staff">
            <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(24, 29, 56, .7);">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-sm-10 col-lg-8">
                            <h5 class="text-primary text-uppercase mb-3 animated slideInDown">Trusted Medical Professionals</h5>
                            <h1 class="display-3 text-white animated slideInDown">We Care for You Like Family</h1>
                            <p class="fs-5 text-white mb-4 pb-2">
                                Our team of doctors, nurses, and specialists are here to provide personalized, round-the-clock medical care.
                            </p>
                            <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">About Us</a>
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="btn btn-light py-md-3 px-md-5 animated slideInRight">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel End -->

<!-- Services Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user-nurse text-primary mb-4"></i>
                        <h5 class="mb-3">Stay In Caregiver</h5>
                        <p>Provides 24/7 care and support at home, helping with daily needs, medication, and personal assistance.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-stethoscope text-primary mb-4"></i>
                        <h5 class="mb-3">Stay Out Caregiver</h5>
                        <p>Offers part-time home care, assisting with meals, hygiene, mobility, and medication as needed.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-ambulance text-primary mb-4"></i>
                        <h5 class="mb-3">Hospital Sitter</h5>
                        <p>Provides constant monitoring and emotional support for patients in hospitals or nursing homes.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item text-center pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-heartbeat text-primary mb-4"></i>
                        <h5 class="mb-3">Palliative Care</h5>
                        <p>Focuses on comfort and quality of life for patients with serious or life-limiting illnesses.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100 about-section-css" src="<?php echo get_template_directory_uri(); ?>/assets/img/doctor measuring blood old 3.jpg" alt="About Nanny Care" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">Why choose Us</h6>
                <h1 class="mb-4">Welcome to Diamond Care Medical Hospital</h1>
                <p class="mb-4">At Diamond Care Services, our mission is to deliver quality healthcare services with compassion, integrity, and excellence.</p>
                <p class="mb-4">We combine modern technology, expert staff, and a caring environment to ensure every patient receives the best medical attention possible.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24 Hours Nursing Care</p></div>
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Personalized & Professional Care</p></div>
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Certified Doctor on Call/p></div>
                    <div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Assisted Living Support</p></div>
					<div class="col-sm-6"><p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>
					Trained Nurses</p></div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="<?php echo esc_url( home_url( '/services' ) ); ?>">Read More</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Departments Start -->
<div class="container-xxl py-5 category">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Departments</h6>
            <h1 class="mb-5">Our Specialized Medical Departments</h1>
        </div>
        <div class="row g-3">

            <!-- Left Column -->
            <div class="col-lg-7 col-md-6">
                <div class="row g-3">

                    <!-- Department 1 -->
                    <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                        <a class="position-relative d-block overflow-hidden" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/new2.jpg" alt="Emergency Department">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Emergency Care</h5>
                                <small class="text-primary">24/7 Support</small>
                            </div>
                        </a>
                    </div>

                    <!-- Department 2 -->
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                        <a class="position-relative d-block overflow-hidden" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/new3.jpg" alt="Pediatrics">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Pediatrics</h5>
                                <small class="text-primary">Child Care</small>
                            </div>
                        </a>
                    </div>

                    <!-- Department 3 -->
                    <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                        <a class="position-relative d-block overflow-hidden" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/new4.jpg" alt="Cardiology">
                            <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                <h5 class="m-0">Cardiology</h5>
                                <small class="text-primary">Heart Care</small>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

            <!-- Right Column -->
            <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                <a class="position-relative d-block h-100 overflow-hidden" href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
                    <img class="img-fluid position-absolute w-100 h-100" src="<?php echo get_template_directory_uri(); ?>/assets/img/new5.jpg" alt="Neurology" style="object-fit: cover;">
                    <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                        <h5 class="m-0">Neurology</h5>
                        <small class="text-primary">Brain & Nerve Care</small>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>
<!-- Departments End -->

<!-- Packages Start -->
<div class="container-xxl py-5 " id="Packages">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Packages</h6>
            <h1 class="mb-5">Quality Medical Care for Every Need</h1>
        </div>
        <div class="row g-4 justify-content-center">

              <!-- Packages 1 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/new6.jpg" alt="Emergency Care">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Book Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0"> <?php echo the_field('packages_name_p1',36); ?></h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(98)</small>
                        </div>
                        <h5 class="mb-4"><?php echo the_field('sub_title__p1',36); ?></h5>
                    </div>
					<div class="px-4 pb-4">
					<p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_1_p1',36); ?></p>
					<p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_2__p1',36); ?></p>
					<p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_3__p1',36); ?></p>
					<p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_4__p1',36); ?></p>
					<p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_5__p1',36); ?></p>
					<p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_6__p1',36); ?></p>
					</div> 
                </div>
            </div>

            <!-- Packages 2 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/new8.jpg" alt="Maternity Care">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Book Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0"> <?php echo the_field('packages_name__p2',36); ?> </h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(120)</small>
                        </div>
                        <h5 class="mb-4"><?php echo the_field('sub_title__p2',36); ?></h5>
                    </div>
					
                        <div class="px-4 pb-4">
                        <p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_1__p2',36); ?></p>
                        <p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_2__p2',36); ?></p>
                        <p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_3__p2',36); ?></p>
                        <p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_4__p2',36); ?></p>
					</div>
                    
                </div>
            </div>

            <!-- Packages 3 -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="course-item bg-light">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/new7.jpg" alt="Diagnostics">
                        <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                            <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="flex-shrink-0 btn btn-sm btn-primary px-3" style="border-radius: 30px 30px 30px 30px;">Book Now</a>
                        </div>
                    </div>
                    <div class="text-center p-4 pb-0">
                        <h3 class="mb-0"><?php echo the_field('packages_name__p3',36); ?></h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small>(85)</small>
                        </div>
                        <h5 class="mb-4"><?php echo the_field('sub_title__p3',36); ?></h5>
						<p class="mb-1"><i class="fa fa-arrow-right text-primary me-2"></i><?php echo the_field('sub_point_1__p3',36); ?></p>
                    </div>
					
                    </div>
                </div>
				
			
                </div>
            </div>
            </div>

        </div>
    </div>
</div>
<!-- Packages End -->
<!-- Doctors Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Doctors</h6>
            <h1 class="mb-5">Expert Medical Professionals</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/d1.jpeg" alt="Doctor 1">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Dr. Amelia Johnson</h5>
                        <small>Cardiologist</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/d2.jpeg" alt="Doctor 2">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Dr. Michael Smith</h5>
                        <small>Neurologist</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/d3.jpeg" alt="Doctor 3">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Dr. Sarah Patel</h5>
                        <small>Pediatrician</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item bg-light">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/img/d4.jpeg" alt="Doctor 4">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -23px;">
                        <div class="bg-light d-flex justify-content-center pt-2 px-1">
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-primary mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">Dr. David Lee</h5>
                        <small>Orthopedic Surgeon</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Doctors End -->

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
                    $image_1= get_field('image_1',38); 
                    $image_2= get_field('image_2',38); 
                    $image_3= get_field('image_3',38); 
                    ?>
               <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo $image_1['url'];?>" style="width: 80px; height: 80px;">
                <h5 class="mb-0"><?php echo the_field('name_1',38); ?></h5>
                <p><?php echo the_field('patientd_1',38); ?></p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0"><?php echo the_field('comment_1',38); ?></p>
                </div>
            </div>
            <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo $image_2['url'];?>" style="width: 80px; height: 80px;">
                <h5 class="mb-0"><?php echo the_field('name_2',38); ?></h5>
                <p><?php echo the_field('patientd_2',38); ?></p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0"><?php echo the_field('comment_2',38); ?></p>
                </div>
            </div>
             <div class="testimonial-item text-center">
                <img class="border rounded-circle p-2 mx-auto mb-3" src="<?php echo $image_3['url'];?>" style="width: 80px; height: 80px;">
                <h5 class="mb-0"><?php echo the_field('name_3',38); ?></h5>
                <p><?php echo the_field('patientd_3',38); ?></p>
                <div class="testimonial-text bg-light text-center p-4">
                    <p class="mb-0"><?php echo the_field('comment_3',38); ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials End -->

<script>
function scrollToSection(id) {
    document.getElementById(id).scrollIntoView({
        behavior: 'smooth'
    });
}
</script>
<?php get_footer(); ?>
