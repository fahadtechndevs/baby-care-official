<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blog Descriptions</title>

        <!-- Global stylesheets -->
        @include('frontend.layouts.head')

    </head>

    <body>

        <!-- header section starts -->
         @include('frontend.layouts.header')

        <!-- header section close -->

        <!-- Service section starts -->
        <section class="repeat-section services-section">
            <div class="container">

                <div class="row">

                    <div class=" col-sm-12">
                        <div class="service-cntainer">

                            <div class="section-Heading text-left">
                                <h1 class="text-left">Our Blogs</h1>
                            </div>
                            <div class="service-img">
                                <img src="{{Storage::disk('public')->url($blog->image)}}" alt="">
                            </div>

                            <div class="servicxe-desc">
                                <a href="#">
                                    <h2>{{$blog->title}}</h2>
                                    <p>{{$blog->details}}</p>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service section close -->


        <!-- Footer Section starts -->
        @include('frontend.layouts.footer')

        <!-- Footer Section close -->



        <!-- Global scripts -->
         @include('frontend.layouts.scripts')



    </body>

</html>
