<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index HTML</title>

    <!-- Global stylesheets -->
    @include('frontend.layouts.head')


    <!-- page level css -->

</head>

<body>

    <!-- header section starts -->
    @include('frontend.layouts.header')

    <!-- header section close -->

    <!-- slider section starts -->
    <section class="slider-section">
        <div class="owl-carousel owl-theme my-slider">
            <div class="item">
                <div class="slider-img-container">
                    <div class="overlay"></div>
                    <!-- slider img -->
                    <div class="slider-img">
                        <img src="{{asset('assets/images/slider/s1.jpg')}}" alt="">
                    </div>
                    <!-- slider captions -->
                    <div class="slider-captions-container">
                        <div class="captions">
                            <h1>We are your child care website partner!</h1>
                            <p>We are your child care website partner!</p>
                        </div>
                        <a href="#" class="bttn bttn-danger">Visit Templates</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img-container">
                    <div class="overlay"></div>
                    <!-- slider img -->
                    <div class="slider-img">
                        <img src="{{asset('assets/images/slider/s2.jpg')}}" alt="">
                    </div>
                    <!-- slider captions -->
                    <div class="slider-captions-container">
                        <div class="captions">
                            <h1>We are your child care website partner!</h1>
                            <p>We are your child care website partner!</p>
                        </div>
                        <a href="#" class="bttn bttn-danger">Visit Templates</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- slider section close -->

    <!-- Featured Work Section starts -->
    <section class="repeat-section Featured-work-section">
        <div class="container">
            <div class="section-Heading">
                <h1>Featured Work</h1>
            </div>
            <!-- filter buttons -->
            <div class="button-group filter-button-group text-center filter-bttns">
                <button class="trpnt-bttn" data-filter="*">show all</button>
                <button class="trpnt-bttn" data-filter=".custom-design">CUSTOM WEB DESIGNS</button>
                <button class="trpnt-bttn" data-filter=".template-design">TEMPLATE WEB DESIGNS</button>
                <button class="trpnt-bttn" data-filter=".logo-design">LOGO & BRANDING</button>
            </div>


            <!-- work slider -->
            <div class="row grid">

                <div class="col-sm-4 element-item  custom-design">
                    <!-- work container -->
                    <div class="work-container">
                        <div class="work-image">
                            <img src="{{asset('assets/images/work/1.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 element-item  template-design">
                    <!-- work container -->
                    <div class="work-container">
                        <div class="work-image">
                            <img src="{{asset('assets/images/work/2.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 element-item  logo-design">
                    <!-- work container -->
                    <div class="work-container">
                        <div class="work-image">
                            <img src="{{asset('assets/images/work/3.jpg')}}" alt="">
                        </div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-20">
                <button class="bttn bttn-danger">View Full Portfolio</button>
            </div>
        </div>
    </section>
    <!-- Featured Work Section close -->

    <!-- package banner section starts -->
    <section class="repeat-section pkg-banner-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="pkg-descriptions">
                        <h1>View Our Website Setup Packages & Solutions</h1>
                        <p><strong>Starting at $169</strong></p>
                        <a href="#" class="bttn bttn-danger">Explore More</a>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="pkg-descriptions">
                        <form action="">
                            <div class="form-heading text-center">
                                <h4>Create your free account now and get immediate access to 100s of online courses.</h4>
                            </div>

                            <div class="form-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name*">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email *">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Phone *">
                                </div>
                                <div class="submit-bttn">
                                    <button class="bttn bttn-danger">GET IT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- package banner section close -->

    <!-- Gallery work section starts -->
    <section class="repeat-section Galler-work-section">
        <div class="container">
            <div class="section-Heading">
                <h1>View Our Galleries of Work</h1>
            </div>

            <div class="row FLEX ">
                <div class="col-sm-6 col-md-3 m-0">

                    <div class="gallery-work-container">
                        <!-- work-gallery-image -->
                        <div class="work-gallery-image">
                            <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="">
                        </div>
                        <!-- Descriptions -->
                        <div class="work-gallery-descriptions">
                            <h3>Custom Child Care Websites</h3>
                            <p>Browse sites we have created for child care providers that are 100% custom-designed.</p>
                        </div>

                        <a href="#" class="bttn bttn-danger">View Gallery</a>
                    </div>

                </div>

                <div class="col-sm-6 col-md-3 m-0">

                    <div class="gallery-work-container">
                        <!-- work-gallery-image -->
                        <div class="work-gallery-image">
                            <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="">
                        </div>
                        <!-- Descriptions -->
                        <div class="work-gallery-descriptions">
                            <h3>Template-Based Child Care Websites</h3>
                            <p>Browse sites we have created for child care providers that are 100% custom-designed.</p>
                        </div>

                        <a href="#" class="bttn bttn-danger">View Gallery</a>
                    </div>

                </div>

                <div class="col-sm-6 col-md-3 m-0">

                    <div class="gallery-work-container">
                        <!-- work-gallery-image -->
                        <div class="work-gallery-image">
                            <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="">
                        </div>
                        <!-- Descriptions -->
                        <div class="work-gallery-descriptions">
                            <h3>Website Features</h3>
                            <p>Browse sites we have created for child care providers that are 100% custom-designed.</p>
                        </div>

                        <a href="#" class="bttn bttn-danger">View Gallery</a>
                    </div>

                </div>

                <div class="col-sm-6 col-md-3 m-0">

                    <div class="gallery-work-container">
                        <!-- work-gallery-image -->
                        <div class="work-gallery-image">
                            <img src="{{asset('assets/images/gallery/1.jpg')}}" alt="">
                        </div>
                        <!-- Descriptions -->
                        <div class="work-gallery-descriptions">
                            <h3>Child Care Logos</h3>
                            <p>Browse sites we have created for child care providers that are 100% custom-designed.</p>
                        </div>

                        <a href="#" class="bttn bttn-danger">View Gallery</a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Gallery work section close -->

    <!-- benifits section starts -->
    <section class="repeat-section Benifits-section">
        <div class="container">
            <div class="section-Heading">
                <h1>A look into the benefits we offer</h1>
            </div>

            <div class="row">
                <div class="owl-carousel owl-theme benifit-slider">
                    <div class="item">
                        <div class="col-sm-12">
                            <div class="benifit-container">

                                <div class="benifit-image">
                                    <img src="{{asset('assets/images/benifits/1.jpg')}}" alt="">
                                </div>
                                <div class="benifit-body">
                                    <div class="benifit-description">
                                        <h3>Free Website Review & Consultation</h3>
                                        <p>Let's discuss your website and / or logo project. We can help you decide on a domain, compare our website packages,etc. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-12">
                            <div class="benifit-container">

                                <div class="benifit-image">
                                    <img src="{{asset('assets/images/benifits/2.jpg')}}" alt="">
                                </div>
                                <div class="benifit-body">
                                    <div class="benifit-description">
                                        <h3>Loads of features included</h3>
                                        <p>Let's discuss your website and / or logo project. We can help you decide on a domain, compare our website packages,etc. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-12">
                            <div class="benifit-container">

                                <div class="benifit-image">
                                    <img src="{{asset('assets/images/benifits/1.jpg

                                        ')}}" alt="">
                                </div>
                                <div class="benifit-body">
                                    <div class="benifit-description">
                                        <h3>One week or less delivery</h3>
                                        <p>Let's discuss your website and / or logo project. We can help you decide on a domain, compare our website packages,etc. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-12">
                            <div class="benifit-container">

                                <div class="benifit-image">
                                    <img src="{{asset('assets/images/benifits/1.jpg')}}" alt="">
                                </div>
                                <div class="benifit-body">
                                    <div class="benifit-description">
                                        <h3>One week or less delivery</h3>
                                        <p>Let's discuss your website and / or logo project. We can help you decide on a domain, compare our website packages,etc. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- benifits section close -->

    <!-- Blogs Section starts -->
    <section class="repeat-section Blogs-Section">
        <div class="container">
            <div class="section-Heading text-left">
                <h1>Latest News</h1>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="Blogs-Container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="Blog-Date">
                                    <span class="Day">15</span>
                                    <span class="Month">December</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="Blog-Details">
                                    <h3><a href="#">Eduma Autumn 2019</a></h3>
                                    <ul>
                                        <li><span class="far fa-clock"></span>8:00 AM - 5:00 PM</li>
                                        <li><span class="fa fa-map-marker-alt"></span>VENICE, ITALY</li>
                                    </ul>
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="Blogs-image">
                                    <img src="{{asset('assets/images/Blogs/1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="Blogs-Container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="Blog-Date">
                                    <span class="Day">15</span>
                                    <span class="Month">December</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="Blog-Details">
                                    <h3><a href="#">Eduma Autumn 2019</a></h3>
                                    <ul>
                                        <li><span class="far fa-clock"></span>8:00 AM - 5:00 PM</li>
                                        <li><span class="fa fa-map-marker-alt"></span>VENICE, ITALY</li>
                                    </ul>
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="Blogs-image">
                                    <img src="{{asset('assets/images/Blogs/2.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="Blogs-Container">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="Blog-Date">
                                    <span class="Day">15</span>
                                    <span class="Month">December</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="Blog-Details">
                                    <h3><a href="#">Eduma Autumn 2019</a></h3>
                                    <ul>
                                        <li><span class="far fa-clock"></span>8:00 AM - 5:00 PM</li>
                                        <li><span class="fa fa-map-marker-alt"></span>VENICE, ITALY</li>
                                    </ul>
                                    <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="Blogs-image">
                                    <img src="{{asset('assets/images/Blogs/1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blogs Section close -->

    <!-- Happy Clients Section starts -->
    <section class="repeat-section Happy-Clients-section">
        <div class="container">
            <div class="section-Heading">
                <h1>Hear from our clients</h1>
            </div>

            <div class="row">
                <div class="owl-carousel owl-theme clients-slider">

                    <div class="item">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="Clients-Container">
                                <div class="Clients-DEscripotion">
                                    <p>
                                        <sup><span class="fa fa-quote-left"></span></sup>
                                        "Websites for Daycares got my site up and running within 2 Days. They by far exceeded my expectations. My site looks even better than I ever could have imagined. I appreciate the attention and professionalism I was given. i would definitely recommend Websites for Daycare to anyone in need of a Daycare site."
                                        <sub><span class="fa fa-quote-right"></span></sub>
                                    </p>
                                </div>

                                <div class="row">
                                    <div class="col-xs-2">
                                        <div class="client-img">
                                            <img src="{{asset('assets/images/testimonials/1.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-10">
                                        <div class="client-details">
                                            <h3>Client Name</h3>
                                            <p>Pellentesque libero tortor, tincidunt et, tincidunt eget</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="col-sm-8 col-sm-offset-2">
                            <div class="Clients-Container">
                                <div class="Clients-DEscripotion">
                                    <p>
                                        <sup><span class="fa fa-quote-left"></span></sup>
                                        "Websites for Daycares got my site up and running within 2 Days. They by far exceeded my expectations. My site looks even better than I ever could have imagined. I appreciate the attention and professionalism I was given. i would definitely recommend Websites for Daycare to anyone in need of a Daycare site."
                                        <sub><span class="fa fa-quote-right"></span></sub>
                                    </p>
                                </div>

                                <div class="row">
                                    <div class="col-xs-2">
                                        <div class="client-img">
                                            <img src="{{asset('assets/images/testimonials/2.png')}}" alt="">
                                        </div>
                                    </div>
                                    <div class="col-xs-10">
                                        <div class="client-details">
                                            <h3>Client Name</h3>
                                            <p>Pellentesque libero tortor, tincidunt et, tincidunt eget</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Happy Clients Section close -->

    <!-- newsletter section starts -->
    <section class="repeat-section News-Letter-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <div class="news-letter-container">

                            <div class="alert alert-danger error-div" style="display: none">

                            </div>

                            <div class="alert alert-success success-div" style="display: none">

                            </div>
                            <p>Subscribe now and receive weekly newsletter with educational materials, new courses, interesting posts, popular books and much more!</p>

                            <div class="form-after">
                                <form class="myform"  id="myForm">

                                <div class="row">
                                    <div class="col-sm-9">
                                        <div class="form-groupp">
                                            <input type="email" class="form-control" name="email" id="email">

                                        </div>

                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-groupp">
                                            <button type="submit" class="bttn bttn-danger" id="subscriber">subscribe</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <span id="ok"></span>


                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- newsletter section close -->

    <!-- Footer Section starts -->
    @include('frontend.layouts.footer')

    <!-- Footer Section close -->


    <!-- Global scripts -->
    @include('frontend.layouts.scripts')


    <!-- page level script -->

<link rel="stylesheet" href="{{ asset('assets/alert/sweetalert2.min.css')}}">
<script src="{{ asset('assets/alert/sweetalert2.min.js')}}"></script>

    <!-- Main Slider Scripts -->
    <script>
        $(document).ready(function() {
            $(".my-slider").owlCarousel({
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                items: 1,
                margin: 30,
                smartSpeed: 450,
                loop: true,
                autoplay: false,
                nav: false,
                dots: true,
                autoplayTimeout: 3000,
                lazyload: true,
            });
        });

    </script>

    <!-- Work Slider Scripts -->
    <script>
        // init Isotope
        var $grid = $('.grid').isotope({
            // options
        });
        // filter items on button click
        $('.filter-button-group').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });

    </script>

    <!-- benifit slider -->
    <script>
        $(document).ready(function() {
            $(".benifit-slider").owlCarousel({
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                items: 3,
                margin: 30,
                smartSpeed: 450,
                loop: true,
                autoplay: false,
                nav: true,
                dots: false,
                autoplayTimeout: 3000,
                lazyload: true,
                responsive: {
                    // breakpoint from 0 up
                    0: {
                        items: 1,
                    },
                    // breakpoint from 480 up
                    480: {
                        items: 1,

                    },
                    // breakpoint from 768 up
                    768: {
                        items: 2,
                    },
                    1024: {
                        items: 3,
                    }

                }
            });
        });

    </script>

    <!-- Client Slider Scripts -->
    <script>
        $(document).ready(function() {
            $(".clients-slider").owlCarousel({
                animateOut: 'fadeOut',
                animateIn: 'fadeIn',
                items: 1,
                margin: 30,
                smartSpeed: 450,
                loop: true,
                autoplay: false,
                nav: false,
                dots: true,
                autoplayTimeout: 3000,
                lazyload: true,
            });
        });

    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#myForm").on('submit',function(e){
                e.preventDefault();
               // var email=$(this).val();
                // console.log( $( this ).serialize() );
                // $('#email').isempty();
                $.ajax({
                    type:'post',
                    datatype:'json',
                    url:'{{route('subscriber.add')}}',
                    data: $( '#myForm' ).serialize(),
                    success:function(xhr)
                    {
             swal({
            type: 'success',
            title: 'Success!',
            text: 'Your Are Subscribed Successfully',
            buttonsStyling: false,
            confirmButtonClass: 'btn btn-lg btn-success'
        });
                    },
                    error: function(xhr){



                    var html;

                    var response = JSON.parse(xhr.responseText);

                    $.each(response.errors, function(key, value) {

                        var str = '{"' + key + '":"'+value[0]+'"}';

                        html = value[0]+"<br>";



                        // $('.error-div').html("");

                        // $('.error-div').show();

                        // $('.error-div').append(html);

                            swal({
                                type: 'error',
                                title: 'Error!',
                                text: html,
                                confirmButtonText: 'Dismiss',
                                buttonsStyling: false,
                                confirmButtonClass: 'btn btn-lg btn-danger'

                        });

                    });

                },
                });
            });


        });

    </script>



</body>

</html>
