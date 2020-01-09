<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms HTML</title>

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
                <form action="" method="post" action="">
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
                                                        <input type="radio" name="package" value="{{$package->id}}">
                                                        {{$package->title}}({{$package->price}})



                                                    </label>
                                                    @endforeach


                                                </div>

                                                <!-- tempalte or cv -->
                                                <div class="package tempalte">
                                                    <p>Template or Custom Design?</p>
                                                    <label for="">
                                                        <input type="checkbox" name="template" value="tmplte"> I will choose a template
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="design"> I want a custom design (add $1000)
                                                    </label>
                                                </div>

                                                <!-- specific design -->
                                                <p>If you have chosen Template, please specify Template Name:</p>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Babycare">
                                                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                                </div>
                                                <a href="#" class="special"> or check list of templates here</a>
                                            </div>
                                            <!-- More Freatures and ?Services -->
                                            <div class=" webssite">
                                                <h4>More Features & Services</h4>
                                                <p>Please select any additional features you are interested in that are not part of your selected package above</p>

                                                <div class="package choose-pkg">
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Homepage Animation Banner
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Paypal Payment Buttons
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Email Newsletter Design
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Secure Parent or Employee Pages
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Facebook Graphic Design
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Flash Photo Gallery
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Upgraded Photo Gallery
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Facebook Fan Page Design
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Secure Parent Portal
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Secure Staff Portal
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Paypal Button Installation
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Create Fillable PDF Forms
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Child Care Graphic Design
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Detailed Career Inquiry Form
                                                    </label>
                                                    <label for="">
                                                        <input type="checkbox" name="package" value="homepage"> Wordpress Blog
                                                    </label>
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
                                                        <input type="radio" name="package" value="basic"> I already have a logo design that I want to use
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="package" value="plus"> I do not have one and want to use a simple, text-based logo
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="package" value="professional"> I would like Websites for Daycares to design a new logo (add $349)
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
                                                        <input type="radio" name="package" value="basic"> I already own my domain. My domain is
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="www.">
                                                    </div>
                                                    <label for="">
                                                        <input type="radio" name="package" value="plus"> I need to purchase a domain. I would like to secure
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="www.">
                                                    </div>

                                                    <p>I would like to pay the Web & Email Hosting & Support (annually saves 20%):</p>

                                                    <label for="">
                                                        <input type="radio" name="package" value="professional"> $19 Monthly
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="package" value="professional"> $180 Annually
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Additional Notes -->
                                            <div class="webssite">
                                                <h4>Additional Notes & Comments</h4>
                                                <div class="package choose-pkg">
                                                    <p>Are you ready to get started?</p>
                                                    <label for="">
                                                        <input type="radio" name="package" value="basic"> Yes - I am ready to get started!
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="package" value="basic"> Not sure / Just inquiring
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="package" value="basic"> I would like to setup a phone consultation to go over my questions.
                                                    </label>
                                                    <br>
                                                    <label for="">Additional Comments</label>
                                                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
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

