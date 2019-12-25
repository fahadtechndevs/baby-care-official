<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About HTML</title>

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
                    <h1>About us</h1>
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
                                <h4>what we do</h4>
                                <p>In 2006, techndevs (a custom web design & development company) launched Websites for Daycares in an effort to meet several common requests from child care providers:</p>
                                <ol>
                                    <li>Create exciting, professional-looking child care website designs with built-in features like forms, maps, and photo galleries.</li>
                                    <li>Have an easy site-setup service for child care providers who don't have the time or skill to setup the site themselves.</li>
                                    <li>Make it easy for the child care provider to update their own website.</li>
                                    <li>Provide prompt and skilled customer service before, during, and after we build websites for our clients.</li>
                                </ol>
                            </div>
                            <div class="about-details">
                                <h4>who we are</h4>
                                <p>In 2006, techndevs (a custom web design & development company) launched Websites for Daycares in an effort to meet several common requests from child care providers:</p>
                                <ol>
                                    <li>Create exciting, professional-looking child care website designs with built-in features like forms, maps, and photo galleries.</li>
                                    <li>Have an easy site-setup service for child care providers who don't have the time or skill to setup the site themselves.</li>
                                    <li>Make it easy for the child care provider to update their own website.</li>
                                    <li>Provide prompt and skilled customer service before, during, and after we build websites for our clients.</li>
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

        <!-- Footer Section starts -->
        @include('frontend.layouts.footer')

        <!-- Footer Section close -->




        <!-- Global scripts -->
        @include('frontend.layouts.scripts')



    </body>

</html>
