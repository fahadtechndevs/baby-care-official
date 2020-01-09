<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Blogs HTML</title>

        <!-- Global stylesheets -->
        @include('frontend.layouts.head')

    </head>

    <body>

        <!-- header section starts -->
         @include('frontend.layouts.header')

        <!-- header section close -->

        <!-- Blogs Section Starts -->
        <section class="repeat-section Blogs-section">
            <div class="container">
                <div class="section-Heading text-left">
                    <h1>Latest Blgs</h1>
                </div>
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-sm-4">
                        <div class="blog-container">

                            <div class="Blogs-img">
                                <img src="{{Storage::disk('public')->url($blog->image)}}" alt="">
                            </div>
                            <div class="Blogs-Desc Blog-Details">
                                <h3><a href="#">{{$blog->title}}</a></h3>
                                <p>{{$blog->details}}</p>
                                <ul style="margin-bottom: 1em">
                                    <li><span class="far fa-clock"></span>8:00 AM - 5:00 PM</li>
                                    <li><span class="fa fa-map-marker-alt"></span>VENICE, ITALY</li>
                                </ul>
                                <a href="#" class="blg-dtl bttn bttn-danger">View Details</a>
                            </div>
                            <div class="publish-date">
                                <span class="day">15</span><span class="month">Dec</span>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-sm-4">
                        <div class="blog-container">

                            <div class="Blogs-img">
                                <img src="assets/images/Blogs/1.jpg" alt="">
                            </div>
                            <div class="Blogs-Desc Blog-Details">
                                <h3><a href="#">Blogs Title</a></h3>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                <ul style="margin-bottom: 1em">
                                    <li><span class="far fa-clock"></span>8:00 AM - 5:00 PM</li>
                                    <li><span class="fa fa-map-marker-alt"></span>VENICE, ITALY</li>
                                </ul>
                                <a href="#" class="blg-dtl bttn bttn-danger">View Details</a>
                            </div>
                            <div class="publish-date">
                                <span class="day">15</span><span class="month">Dec</span>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="blog-container">

                            <div class="Blogs-img">
                                <img src="assets/images/Blogs/1.jpg" alt="">
                            </div>
                            <div class="Blogs-Desc Blog-Details">
                                <h3><a href="#">Blogs Title</a></h3>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                <ul style="margin-bottom: 1em">
                                    <li><span class="far fa-clock"></span>8:00 AM - 5:00 PM</li>
                                    <li><span class="fa fa-map-marker-alt"></span>VENICE, ITALY</li>
                                </ul>
                                <a href="#" class="blg-dtl bttn bttn-danger">View Details</a>
                            </div>
                            <div class="publish-date">
                                <span class="day">15</span><span class="month">Dec</span>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="blog-container">

                            <div class="Blogs-img">
                                <img src="assets/images/Blogs/1.jpg" alt="">
                            </div>
                            <div class="Blogs-Desc Blog-Details">
                                <h3><a href="#">Blogs Title</a></h3>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                <ul style="margin-bottom: 1em">
                                    <li><span class="far fa-clock"></span>8:00 AM - 5:00 PM</li>
                                    <li><span class="fa fa-map-marker-alt"></span>VENICE, ITALY</li>
                                </ul>
                                <a href="#" class="blg-dtl bttn bttn-danger">View Details</a>
                            </div>
                            <div class="publish-date">
                                <span class="day">15</span><span class="month">Dec</span>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="blog-container">

                            <div class="Blogs-img">
                                <img src="assets/images/Blogs/1.jpg" alt="">
                            </div>
                            <div class="Blogs-Desc Blog-Details">
                                <h3><a href="#">Blogs Title</a></h3>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                <ul style="margin-bottom: 1em">
                                    <li><span class="far fa-clock"></span>8:00 AM - 5:00 PM</li>
                                    <li><span class="fa fa-map-marker-alt"></span>VENICE, ITALY</li>
                                </ul>
                                <a href="#" class="blg-dtl bttn bttn-danger">View Details</a>
                            </div>
                            <div class="publish-date">
                                <span class="day">15</span><span class="month">Dec</span>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="blog-container">

                            <div class="Blogs-img">
                                <img src="assets/images/Blogs/1.jpg" alt="">
                            </div>
                            <div class="Blogs-Desc Blog-Details">
                                <h3><a href="#">Blogs Title</a></h3>
                                <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris itae erat conuat</p>
                                <ul style="margin-bottom: 1em">
                                    <li><span class="far fa-clock"></span>8:00 AM - 5:00 PM</li>
                                    <li><span class="fa fa-map-marker-alt"></span>VENICE, ITALY</li>
                                </ul>
                                <a href="#" class="blg-dtl bttn bttn-danger">View Details</a>
                            </div>
                            <div class="publish-date">
                                <span class="day">15</span><span class="month">Dec</span>
                            </div>

                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!-- Blogs Section Close -->


        <!-- Footer Section starts -->
         @include('frontend.layouts.footer')
        <!-- Footer Section close -->



        <!-- Global scripts -->
        @include('frontend.layouts.scripts')


    </body>

</html>
