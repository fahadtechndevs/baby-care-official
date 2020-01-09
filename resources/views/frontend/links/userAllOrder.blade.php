<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Orders HTML</title>

        <!-- Global stylesheets -->
        @include('frontend.layouts.head')

    </head>

    <body>

        <!-- header section starts -->
        @include('frontend.layouts.header')
        <!-- header section close -->

        <!-- All Order  section starts -->
        <div class="row">
            <div class=" col-md-offset-2 col-md-8">
                 @include('adminviews.includes.message')



            <div class="box">
                                <div class="box-header" style="margin-bottom: 20px">
                                    <center><h3 class="box-title">All Selected Packages</h3></center>
                                </div><!-- /.box-header -->

                                <div class="box-body table-responsive">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                 <th>Order#</th>
                                                <th>Package Name</th>
                                                <th>Price</th>
                                                <th>Theme</th>


                                                    <th>Actions</th>




                                            </tr>

                                        </thead>
                                        <tbody>

                                            @foreach($orders as $order)

                                            <tr>
                                                <td><?php echo ($loop->index) + 1; ?></td>
                                                <td>
                                                    @foreach($packages as $package)
                                                    @if($package->id==$order->package_id)
                                                    {{$package->title}}
                                                    @endif

                                                    @endforeach
                                                </td>
                                                <td>
                                                     @foreach($packages as $package)
                                                    @if($package->id==$order->package_id)
                                                    {{$package->price}}
                                                    @endif

                                                    @endforeach
                                                </td>
                                                  <td>
                                                        @foreach($themes as $thim)
                                                            @if($thim->id==$order->theme_id)
                                                            {{
                                                                $thim->title
                                                            }}
                                                            @endif
                                                        @endforeach
                                                </td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{route('user.order.edit',$order->id)}}"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-danger" href="{{route('destroy.order',$order->id)}}"><i class="fa fa-trash"></i></a>
                                                     <a class="btn btn-success" href="{{route('paypal',$order->id)}}"><i class="fa fa-money"></i>PayPal</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                        </table>

                                      </div>
                                    </div>
                                    </div>
                                    </div>


        <!-- All Order  section close -->



        <!-- Footer Section starts -->
        @include('frontend.layouts.footer')

        <!-- Footer Section close -->




        <!-- Global scripts -->
        @include('frontend.layouts.scripts')



    </body>

</html>
