<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQS HTML</title>

    <!-- Global stylesheets -->
@include('frontend.layouts.head')
</head>

<body>

    <!-- header section starts -->
     @include('frontend.layouts.header')

    <!-- header section close -->

    <section class="repeat-section services-section">
        <div class="container">

            <div class="row">

                <div class="col-sm-6">

                    <div class="FaQ-container">

                        <div class="panel-group" id="accordion">


                            <div class="panel panel-default">
                                @foreach($faqs as $faq)
                                <div class="panel-heading">

                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            {{$faq->question}}

                                            </a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                       {{$faq->answer}}
                                    </div>
                                </div>
                                @endforeach
                            </div>


                            {{-- <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            Collapsible Group 2</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</div>
                                </div>
                            </div> --}}
                            {{-- <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                            Collapsible Group 3</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                        commodo consequat.</div>
                                </div>
                            </div> --}}
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

    <!-- Footer Section starts -->
    @include('frontend.layouts.footer')

    <!-- Footer Section close -->



    <!-- Global scripts -->
       @include('frontend.layouts.scripts')



</body>

</html>
