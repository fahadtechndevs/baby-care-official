<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Designs HTML</title>

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
                    <h1>Designs</h1>
                </div>
            </div>
        </section>
        <!-- banner section close -->

        <!-- designs section starts -->
        <section class="repeat-section Designs-section">
            <div class="container">
                <div class="row">

                    @foreach($themes as $theme)
                    <div class="col-sm-4">

                        <div class="designs-container">


                            <div class="designs-img">
                                <a href="#">

                                    <img src="{{Storage::disk('public')->url($theme->image)}}" alt="">
                                </a>
                            </div>
                            <div class="design-overlay"></div>
                            <div class="design-bttn text-center">
                                <a href="{{$theme->url}}" class="bttn bttn-danger">View Portfolio</a>
                            </div>

                        </div>
                    </div>

                    @endforeach
                </div>
            </div>
        </section>
        <!-- designs section close -->

        <!-- Footer Section starts -->
        @include('frontend.layouts.footer')

        <!-- Footer Section close -->




        <!-- Global scripts -->
        @include('frontend.layouts.scripts')



    </body>

</html>
