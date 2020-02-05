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
                <div style="color: red">
                     @include('adminviews.includes.message')
                </div>

                <form action="{{route('order.form.submit')}}" method="post">
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
                                                        <input type="radio" name="package_id" id="package_id" value="{{$package->id}}">
                                                        {{$package->title}}({{$package->price}})



                                                    </label>
                                                    @endforeach


                                                </div>

                                                <!-- tempalte or cv -->
                                                <div class="package tempalte">
                                                    <p>Template or Custom Design?</p>
                                                    <label >
                                                        <input type="radio" name="template_logo" value="I Will Choose A Template {{old('template_logo')}}">I Will Choose A Template
                                                    </label>
                                                    <label >
                                                        <input type="radio" name="template_logo" value="I Want A Custom Design (Add $1000) {{old('template_logo')}}">I Want A Custom Design (Add $1000)
                                                    </label>
                                                </div>

                                                <!-- specific design -->
                                                <p>If you have chosen Template, please specify Template Name:</p>
                                                <div class="form-group">

                                                        <select class="form-control" name="theme_id" id="theme_id">
                                                            @foreach($themes as $theme)
                                                            <option value="{{$theme->id}}">{{$theme->title}}</option>
                                                         @endforeach
                                                        </select>

                                                    </div>
                                                <a href="{{route('design')}}" class="special"> or check list of templates here</a>
                                            </div>
                                            <!-- More Freatures and ?Services -->
                                            <div class=" webssite">
                                                <h4>More Features & Services</h4>
                                                <p>Please select any additional features you are interested in that are not part of your selected package above</p>

                                                <div class="package choose-pkg">
                                                    @foreach($features as $feature)
                                                    <label for="">
                                                        <input type="checkbox" name="features[]" value="{{$feature->id}} {{old('feature->id')}}">
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
                                                    <label >
                                                        <input type="radio" name="logo_design" value="I Already Have A Logo Design That I Want To Use" {{old('logo_design')}}>I Already Have A Logo Design That I Want To Use
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="logo_design" value="I Do Not Have One And Want To Use A Simple, Text-Based Logo {{old('logo_design')}}">I Do Not Have One And Want To Use A Simple, Text-Based Logo
                                                    </label>
                                                    <label >
                                                        <input type="radio" name="logo_design" value="I Would Like Websites For Daycares To Design A New Logo (Add $349) {{old('logo_design')}}">I Would Like Websites For Daycares To Design A New Logo (Add $349)
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Domain Details -->
                                            <div class=" webssite">
                                                <h4>Domain Details (www.mywebsite.com) & Hosting</h4>
                                                <!-- logo desifng -->
                                                <div class="package choose-pkg">
                                                    <p>Please select one</p>
                                                    <label >
                                                        <input type="radio" name="domain_details" value="I Already Own My Domain. My Domain Is {{old('domain_details')}}">I Already Own My Domain. My Domain Is
                                                    </label>

                                                    <label >
                                                        <input type="radio" name="domain_details" value="I Need To Purchase A Domain. I Would Like To Secure {{old('domain_details')}}"> I Need To Purchase A Domain. I Would Like To Secure
                                                    </label>
                                                    <div class="form-group">
                                                        <input type="url" class="form-control" placeholder="www." name="own_domain" value="{{old('own_domain')}}">
                                                    </div>


                                                    <p>I would like to pay the Web & Email Hosting & Support (annually saves 20%):</p>

                                                    <label >
                                                        <input type="radio" name="extra_pay" value="$19 Monthly {{old('extra_pay')}}"> $19 Monthly
                                                    </label>
                                                    <label for="">
                                                        <input type="radio" name="extra_pay" value=" $180 Annually {{old('extra_pay')}}"> $180 Annually
                                                    </label>
                                                </div>
                                            </div>
                                            <!-- Additional Notes -->
                                            <div class="webssite">
                                                <h4>Additional Notes & Comments</h4>
                                                <div class="package choose-pkg">
                                                    <p>Are you ready to get started?</p>
                                                    <label>
                                                        <input type="radio" name="notes" value="Yes - I Am Ready To Get Started! {{old('notes')}}">Yes - I Am Ready To Get Started!
                                                    </label>
                                                    <label >
                                                        <input type="radio" name="notes" value="Not Sure / Just Inquiring {{old('notes')}}">Not Sure / Just Inquiring
                                                    </label>
                                                    <label>
                                                        <input type="radio" name="notes" value="I Would Like To Setup A Phone Consultation To Go Over My Questions {{old('notes')}}">I Would Like To Setup A Phone Consultation To Go Over My Questions
                                                    </label>
                                                    <br>
                                                    <label for="">Additional Comments</label>
                                                    <textarea name="additional_comments" cols="30" rows="10" class="form-control">
                                                        {{old('additional_comments')}}
                                                    </textarea>
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
                    <a href="{{route('show.order')}}">
                        <button class="bttn bttn-danger">Go Next</button>
                    </a>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#package_id').on('click',function(){
               var id= $(this).val();
                $.ajax({
                    type:'post',
                    datatype:'json',
                    url:'{{route('package.feature')}}',
                    data:{
                        "_token": "{{ csrf_token() }}",
                        'package_id':id
                    },
                success:function(res){


                }

                 });

            });


        });
    </script>
</body>

</html>
