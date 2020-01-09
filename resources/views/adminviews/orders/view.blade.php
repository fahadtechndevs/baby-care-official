@extends('adminviews.layouts.layout')
@section('content')
<div class="content-wrapper" style="min-height: 989.8px;"><div style="padding: 20px 30px; background: rgb(243, 156, 18); z-index: 999999; font-size: 16px; font-weight: 600; display: none;"><a class="float-right" href="#" data-toggle="tooltip" data-placement="left" title="Never show me this again!" style="color: rgb(255, 255, 255); font-size: 20px;">×</a><a href="https://themequarry.com" style="color: rgba(255, 255, 255, 0.9); display: inline-block; margin-right: 10px; text-decoration: none;">Ready to sell your theme? Submit your theme to our new marketplace now and let over 200k visitors see it!</a><a class="btn btn-default btn-sm" href="https://themequarry.com" style="margin-top: -5px; border: 0px; box-shadow: none; color: rgb(243, 156, 18); font-weight: 600; background: rgb(255, 255, 255);">Let's Do It!</a></div>

<!-- Content Header (Page header) -->

<section class="content-header">

  <h1>

    View Orders

  </h1>
  @include('adminviews.includes.message')

</section>



<!-- Main content -->

<section class="content">

  <div class="row">

    <!-- left column -->

    <div class="col-md-12">

      <!-- general form elements -->

      <div class="box">

            <div class="box-header">

              <h3 class="box-title">
                <div class="row">
                  <div class="col-md-6">
                    Orders
                  </div>
                  <div class="col-md-6 text-right">
                    <a class="btn btn-primary" href="{{-- {{route('service.create')}} --}}"><i class="fa fa-plus"></i> Add Orders</a>
                  </div>

                </div>
              </h3>


            </div>

            <!-- /.box-header -->

            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">

                <thead>

                <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 125.8px;">Order ID</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 157px;">User Email</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 157px;">Package Name</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 157px;">Theme Name</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 157px;">Template_Logo</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 157px;">Domain Details</th>
                  {{--  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 157px;">Domain Url</th> --}}
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 157px;">Extra Pay</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 157px;">Features</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 157px;">Comments</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 138.6px;">Action</th></tr>

                </thead>
                <tbody>
                  @foreach($orders as $order)
                  <tr>
                    <td class="sorting_1"><?php echo ($loop->index) + 1; ?></td>
                    <td>
                       @foreach($users as $user)
                      @if($order->user_id==$user->id)
                      {{$user->email}}
                      @endif

                      @endforeach
                    </td>
                    <td>
                      @foreach($packages as $package)
                      @if($order->package_id==$package->id)
                      {{$package->title}}
                      @endif

                      @endforeach
                    </td>
                    <td>
                       @foreach($themes as $theme)
                      @if($order->theme_id==$theme->id)
                      {{$theme->title}}
                      @endif

                      @endforeach
                      <td>{{$order->template_logo}}</td>
                      <td>{{$order->domain_details}}</td>
                      {{-- <td>{{$order->own_domain}}www.google.com</td> --}}
                      <td>{{$order->extra_pay}}</td>
                      {{-- <td>{{$order->json_decode(features)}}</td> --}}
                     <td>@foreach(json_decode($order->features) as $fee)
                      @foreach($feature as $foo)
                      @if($foo->id==$fee)
                      {{$foo->title}}<br>
                      @endif
                      @endforeach
                      @endforeach
                     </td>
                     <td>{{$order->additional_comments}}</td>
                     <td><a class="btn btn-primary" href="{{-- {{route('service.edit.show',$services->id)}} --}}"><i class="fa fa-edit"></i></a>
                         <a class="btn btn-danger" href="{{-- {{route('service.destroy',$services->id)}} --}}"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  @endforeach


                </tbody>

                {{-- <tfoot>

                <tr><th rowspan="1" colspan="1">Order Id</th><th rowspan="1" colspan="1"></th><th rowspan="1" colspan="1">Image</th><th rowspan="1" colspan="1">Show</th><th rowspan="1" colspan="1">Action</th></tr>

                </tfoot> --}}

              </table>

            </div>

            <!-- /.box-body -->

          </div>

    </div>

  </div>

</section>

<!-- /.content -->

</div>

@endsection
