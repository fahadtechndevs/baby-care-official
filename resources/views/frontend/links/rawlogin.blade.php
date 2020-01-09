<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login HTML</title>

        <!-- Global stylesheets -->
        @include('frontend.layouts.head')

    </head>

    <body>

        <!-- header section starts -->
        @include('frontend.layouts.header')
        <!-- header section close -->

        <section class="repeat-section register-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                                        <div class="pkg-descriptions">
                                            <form method="POST" action="{{ route('login') }}>
                                                @csrf


                                                <div class="form-body">
                                                    <div class="text-left">
                                                    <h2>Login.</h2>
                                                </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email Address *">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Password *">
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="{{route('forget.view')}}"> Forgot Your Password ?</a>
                                                    </div>
                                                    <div class="submit-bttn">
                                                        <button class="bttn bttn-danger">Login</button>
                                                    </div>
                                                </div>
                                            </form>
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
