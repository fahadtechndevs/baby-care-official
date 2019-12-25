<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Logo Design HTML</title>

        <!-- Global stylesheets -->
        @include('frontend.layouts.head')


    </head>

    <body>

        <!-- header section starts -->
        @include('frontend.layouts.header')

        <!-- header section close -->

        <!-- banner section starts -->
        <section class="repeat-section banner-section">
            <div class="container">
                <div class="banner-container">
                    <h1>Logo Design</h1>
                </div>
            </div>
        </section>
        <!-- banner section close -->

        <!-- about us section starts -->
        <section class="repeat-section about-us-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="about-us-container">
                            <div class="about-details">
                                <h4>The Logo Design Process</h4>
                                <p>Whether you need us to design a new website for your business or not, we can design a professional, custom logo design for your child care business. We have been creating custom, high-quality logos for our clients for over 10 years and you can review some of our designs below.</p>
                                <p>
                                    First, we ask you to complete a logo design questionnaire that allows you to provide your input on design style, elements, and characteristics. After we review the questionnaire with our logo design team, we will discuss any questions or clarifications we need answered before we start on the concepts. After we are 100% clear on the design direction, we get started on your new concepts. We typically need 3 to 5 business days to create 5 to 6 new, unique concepts for you to choose from. We offer unlimited revisions on the chosen concept until you are 100% satisfied with the final logo. In the final file logo package, you will receive all of the logo files you will need for all of your marketing needs including the source file and logo font files.
                                </p>
                            </div>
                            <div class="about-details">
                                <h4>Our Child Care Logo Designs</h4>
                                <ol>
                                    <li>100% unique design concepts</li>
                                    <li>Unlimited revisions until you're satisfied</li>
                                    <li>Fast turnaround</li>
                                    <li>All source files delivered including vector and fonts</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-us-container">
                            <div class="about-img">
                                <img src="assets/images/Blogs/1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about us section close -->

        <!-- Featured Work Section starts -->
        <section class="repeat-section Featured-work-section">
            <div class="container">
                <div class="section-Heading">
                    <h1>OUR CHILD CARE LOGO DESIGNS</h1>
                </div>


                <!-- work slider -->
                <div class="row">

                    <div class="col-sm-4">
                        <!-- work container -->
                        <div class="work-container">
                            <div class="work-image">
                                <img src="assets/images/work/1.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <!-- work container -->
                        <div class="work-container">
                            <div class="work-image">
                                <img src="assets/images/work/2.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 ">
                        <!-- work container -->
                        <div class="work-container">
                            <div class="work-image">
                                <img src="assets/images/work/3.jpg" alt="">
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

        <!-- newsletter section starts -->
        <section class="repeat-section News-Letter-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <div class="news-letter-container">
                            <form action="">
                                <p>Subscribe now and receive weekly newsletter with educational materials, new courses, interesting posts, popular books and much more!</p>

                                <div class="form-after">
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="form-groupp">
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-groupp">
                                                <button class="bttn bttn-danger">subscribe</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
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


    </body>

</html>
