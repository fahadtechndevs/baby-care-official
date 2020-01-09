<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Order HTML</title>

    <!-- Global stylesheets -->
    @include('frontend.layouts.head')


    <!-- page level -->

</head>

<body>

    <!-- header section starts -->
    @include('frontend.layouts.header')

    <!-- header section close -->

    <!-- inquiry forms starts -->
    <section class="repeat-section inquiry-form-section">
        <div class="container">
            <div class="inquiry-form-container">
                <div style="color: red">
                     @include('adminviews.includes.message')
                </div>

                <form action="{{-- {{route('order.form.submit')}} --}}" method="post">
                    @csrf
                   <h3>Inquire Now</h3>
                    <div class="row">
                        <div class="col-sm-12">

                            <!-- services Details -->
                            <div class="contact-details">
                                <p>What are the services you need? Please choose:</p>
                                <div class="row">
                                    <!-- left side form -->
                                    <div class="col-sm-6">
                                        <div class="left-side-form">
                                            <!-- website -->
                                            <div class=" webssite">
                                                <h4>Website</h4>

                                                <!-- choose package -->

                                                <div class="package choose-pkg">
                                                    <p>Choose Package</p>
                                                    @foreach($packages as $package)

                                                    <label for="">
                                                        <input type="radio" name="package_id" value="">


                                                    </label>
                                                    @endforeach


                                                </div>

                                                <!-- tempalte or cv -->
                                                <div class="package tempalte">
                                                    <p>Template or Custom Design?</p>
                                                    <label for="">
                                                        <input type="radio" name="template_logo" value="I will choose a template"> I will choose a template
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="template_logo" value=" I want a custom design (add $1000)"> I want a custom design (add $1000)
                                                    </label>
                                                </div>

                                                <!-- specific design -->
                                                <p>If you have chosen Template, please specify Template Name:</p>
                                                <div class="form-group">

                                                        <select class="form-control" name="theme_id">
                                                            @foreach($themes as $theme)
                                                            <option value="{{$theme->id}}">{{$theme->title}}</option>
                                                         @endforeach
                                                        </select>

                                                    </div>
                                                <a href="#" class="special"> or check list of templates here</a>
                                            </div>
                                            <!-- More Freatures and ?Services -->
                                            <div class=" webssite">
                                                <h4>More Features & Services</h4>
                                                <p>Please select any additional features you are interested in that are not part of your selected package above</p>

                                                <div class="package choose-pkg">
                                                    @foreach($features as $feature)
                                                    <label for="">
                                                        <input type="checkbox" name="features[]" value="{{$feature->id}}">
                                                         {{$feature->title}}
                                                    </label>
                                                    @endforeach

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- right side form -->
                                    <div class="col-sm-6">
                                        <div class="left-side-form">
                                            <!-- Logo DEsing -->
                                            <div class=" webssite">
                                                <h4>Logo Design</h4>
                                                <!-- logo desifng -->
                                                <div class="package choose-pkg">
                                                    <p>Please select one</p>
                                                    <label for="">
                                                        <input type="radio" name="logo_design" value="already have a logo design that I want to use"> I already have a logo design that I want to use
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="logo_design" value="do not have one and want to use a simple, text-based logo"> I do not have one and want to use a simple, text-based logo
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="logo_design" value="I would like Websites for Daycares to design a new logo (add $349)"> I would like Websites for Daycares to design a new logo (add $349)
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Domain Details -->
                                            <div class=" webssite">
                                                <h4>Domain Details (www.mywebsite.com) & Hosting</h4>
                                                <!-- logo desifng -->
                                                <div class="package choose-pkg">
                                                    <p>Please select one</p>
                                                    <label for="">
                                                        <input type="radio" name="domain_details" value="I already own my domain. My domain is"> I already own my domain. My domain is
                                                    </label>

                                                    <label for="">
                                                        <input type="radio" name="domain_details" value="need to purchase a domain. I would like to secure"> I need to purchase a domain. I would like to secure
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="www." name="own_domain">
                                                    </div>


                                                    <p>I would like to pay the Web & Email Hosting & Support (annually saves 20%):</p>

                                                    <label for="">
                                                        <input type="radio" name="extra_pay" value="$19 Monthly"> $19 Monthly
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="extra_pay" value=" $180 Annually"> $180 Annually
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Additional Notes -->
                                            <div class="webssite">
                                                <h4>Additional Notes & Comments</h4>
                                                <div class="package choose-pkg">
                                                    <p>Are you ready to get started?</p>
                                                    <label for="">
                                                        <input type="radio" name="notes" value="Yes - I am ready to get started!"> Yes - I am ready to get started!
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="notes" value="Not sure / Just inquiring"> Not sure / Just inquiring
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="notes" value="would like to setup a phone consultation to go over my questions."> I would like to setup a phone consultation to go over my questions.
                                                    </label>
                                                    <br>
                                                    <label for="">Additional Comments</label>
                                                    <textarea name="additional_comments" id="" cols="30" rows="10" class="form-control"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="button text-center">
                        <button class="bttn bttn-danger">Submit</button>
                    </div>

                </form>
                <div class="button text-right">
                        <button class="bttn bttn-danger" {{-- {{route('show.order')}} --}}>Go Next</button>
                 </div>
            </div>
        </div>
    </section>
    <!-- inquiry forms close -->

    <!-- Footer Section starts -->
    @include('frontend.layouts.footer')

    <!-- Footer Section close -->




    <!-- Global scripts -->
    @include('frontend.layouts.scripts')


    <!-- forms script -->
    <script>
        $(document).ready(function(){
            $("input[name='mobile']").change(function(){
               if($("input[name='mobile']")){
                   var val=$(this).val();

                   if(val=='yes'){
                       $("#d-none").css('display', 'none')
                   }else{
                       $("#d-none").css('display', 'block')
                   }

               }
           });
        });
    </script>


    <!-- page level -->

    <script>
        $(document).ready(function(){
            $('input').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
            });
        });
    </script>
</body>

</html>
