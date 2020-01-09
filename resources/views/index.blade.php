{{-- <!DOCTYPE html>
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
                                            <form method="post" action="{{ route('user.submit') }}>
                                                @csrf


                                                <div class="form-body">
                                                    <div class="text-left">
                                                    <h2>Login.</h2>
                                                </div>
                                                    <div class="form-group">
                                                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                                    </div>
                                                    <div class="form-group">
                                                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="{{route('forget.view')}}"> Forgot Your Password ?</a>
                                                    </div>
                                                    <div class="submit-bttn">
                                                        <button type="submit" class="bttn bttn-danger">Login
                                                        {{ __('Login') }}</button>
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
 --}}