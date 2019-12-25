 @extends("adminviews.layouts.layout")
 @section('title')
 View Services
 @endsection
 @section('content')
 <div class="content-wrapper" style="min-height: 989.8px;"><div style="padding: 20px 30px; background: rgb(243, 156, 18); z-index: 999999; font-size: 16px; font-weight: 600; display: none;"><a class="float-right" href="#" data-toggle="tooltip" data-placement="left" title="Never show me this again!" style="color: rgb(255, 255, 255); font-size: 20px;">×</a><a href="https://themequarry.com" style="color: rgba(255, 255, 255, 0.9); display: inline-block; margin-right: 10px; text-decoration: none;">Ready to sell your theme? Submit your theme to our new marketplace now and let over 200k visitors see it!</a><a class="btn btn-default btn-sm" href="https://themequarry.com" style="margin-top: -5px; border: 0px; box-shadow: none; color: rgb(243, 156, 18); font-weight: 600; background: rgb(255, 255, 255);">Let's Do It!</a></div>

 <!-- Content Header (Page header) -->

 <section class="content-header">

  <h1>

    View Services

  </h1>

</section>



<!-- Main content -->

<section class="content">

  <div class="row">

    <!-- left column -->

    <div class="col-md-12">

      <!-- general form elements -->

      <div class="box">

        <div class="box-header">

          <h3 class="box-title">Services</h3>

        </div>

        <!-- /.box-header -->

        <div class="box-body">
          @if(session('servicesmsg'))
            {!!session('servicesmsg')!!}
          @endif
          <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">

            <thead>

              <tr role="row">

                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 157px;">Name</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 138.6px;">Image</th>
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 138.6px;">Description</th>
                
                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 138.6px;">Action</th>
              </tr>

            </thead>

            <tbody>

             @foreach($services as $service)
             <tr role="row" class="even">
              <td> {{$service->title}} </td>
              <td> {{$service->description}}</td>
              <td> <img width="200px" height="150px" src="{{Storage::disk('public')->url($service->image1)}}">
              </td>
              <td>
                 <form  method="get" action="{{route('services.edit',$service)}}">
                  @csrf
                  <button type="submit"  class="btn btn-primary">
                    Edit
                  </button>
                </form>
                <br>
                <form method="post" action="{{route('services.destroy',$service)}}">
                  @csrf
                  {{method_field('DELETE')}}
                  <button type="submit" class="btn btn-danger">
                    Delete
                  </button>
                </form>    
              </td>
            </tr>
            @endforeach
          </tbody>

          <tfoot>
            <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Image</th><th rowspan="1" colspan="1">Description</th><th rowspan="1" colspan="1">Action</th></tr>
          </tfoot>
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

