<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register User</title>

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
                                            <form action="{{route('register.submit')}}" method="post">
                                                @csrf
                                                <div style="color: red">
                                                    @include('adminviews.includes.message')
                                                </div>


                                                <div class="form-body">
                                                    <div class="text-left">
                                                    <h2>Register.</h2>
                                                </div>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Name*" name="name">

                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Buisiness Name *" name="business_name">

                                                    </div>
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" placeholder="Email Address *" name="email">

                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder=" Your Mobile Number *" name="own_number">

                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="City *" name="city">
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Country *" name="country">
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="ZIP CODE *" name="zip_code">
                                                            </div>

                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Address *" name="address">
                                                            </div>

                                                        </div>
                                                         <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Password *" name="password">
                                                            </div>

                                                        </div>
                                                         <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control" placeholder="Confirm Your Password *" name="password_confirmation">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="form-group">

                                                            <input type="checkbox" id="forgotPass" name="term_conditions" value="agreed"><p style="color: green"> Do You Agree To Our Terms and Conditions ?</p>

                                                    </div>
                                                    <div class="submit-bttn">
                                                        <button type="submit" class="bttn bttn-danger">Register</button>
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
