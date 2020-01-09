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
            <div class="section-Heading">
                <h1>Our Services</h1>
            </div>

            <div class="row">
                @foreach($services as $service)
                <div class="col-sm-4">
                    <div class="service-cntainer">

                        <div class="service-img">
                            <img src="{{Storage::disk('public')->url($service->image)}}" alt="">
                        </div>

                        <div class="servicxe-desc">
                            <td>
                            <a href="{{route('service.get.description',$service->id)}}">


                                <h2>{{$service->title}}</h2>
                                <p>{{$service->description}}.</p>
                            </a>
                            </td>

                        </div>

                    </div>
                </div>


                @endforeach
            </div>
        </div>
    </section>
    <!-- Service section close -->


    <!-- Footer Section starts -->
    @include('frontend.layouts.footer')

    <!-- Footer Section close -->
     @include('frontend.layouts.scripts')



    <!-- Global scripts -->



</body>

</html>
