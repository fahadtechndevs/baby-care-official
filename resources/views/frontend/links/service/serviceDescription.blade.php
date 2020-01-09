<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Services HTML</title>

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
                   <div class="col-sm-3">
                       <div class="service-cntainer">
                           <h2>top services</h2>

                           <ul>
                            @foreach($services as $service)
                               <li><a href="{{route('service.get.description',$service->id)}}">{{$service->title}}</a></li>

                               @endforeach
                           </ul>
                       </div>
                   </div>
                    <div class="col-sm-9">
                        <div class="service-cntainer">

                            <div class="section-Heading text-left">
                                <h1 class="text-left">Our Services</h1>
                            </div>
                            <div class="service-img">
                                <img src="{{Storage::disk('public')->url($my->image)}}" alt="">
                            </div>

                            <div class="servicxe-desc">
                                <a href="#">
                                    <h2>{{$my->title}}</h2>
                                    <p>{{$my->description}}</p>
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
