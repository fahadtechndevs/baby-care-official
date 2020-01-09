@extends('adminviews.layouts.layout')
@section('content')
<div class="content-wrapper" style="min-height: 989.8px;"><div style="padding: 20px 30px; background: rgb(243, 156, 18); z-index: 999999; font-size: 16px; font-weight: 600; display: none;"><a class="float-right" href="#" data-toggle="tooltip" data-placement="left" title="Never show me this again!" style="color: rgb(255, 255, 255); font-size: 20px;">×</a><a href="https://themequarry.com" style="color: rgba(255, 255, 255, 0.9); display: inline-block; margin-right: 10px; text-decoration: none;">Ready to sell your theme? Submit your theme to our new marketplace now and let over 200k visitors see it!</a><a class="btn btn-default btn-sm" href="https://themequarry.com" style="margin-top: -5px; border: 0px; box-shadow: none; color: rgb(243, 156, 18); font-weight: 600; background: rgb(255, 255, 255);">Let's Do It!</a></div>

<!-- Content Header (Page header) -->

<section class="content-header">

  <h1>

   Please Update Selected Service

  </h1>

</section>



<!-- Main content -->

<section class="content">

  <div class="row">

    <!-- left column -->

    <div class="col-md-12">

      <!-- general form elements -->

      <div class="box box-primary">

        <div class="box-header with-border">

          <h3 class="box-title">Service</h3>
          @include('adminviews.includes.message')

        </div>

        <!-- /.box-header -->

        <!-- form start -->

        <form method="post" action="{{-- {{route('service.edit.store',$data->id)}} --}}" role="form" enctype="multipart/form-data">
          @csrf


         <div class="box-body">

          <div class="form-group">

            <label for="exampleInputEmail1">Title</label>

            <input  name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Title" value="{{-- {{$data->title}} --}}">

          </div>

          <div class="form-group">
            {{-- <img width="100px" height="100px" src="{{Storage::disk('public')->url($data->image)}}"> --}}

            <label for="exampleInputEmail1">Image</label>


            <input name="image" type="file" class="form-control" id="exampleInputEmail1" >

          </div>

          <div class="form-group">

            <label for="exampleInputPassword1">Description</label>

            <textarea id="details" class="form-control" name="description" rows="10">
             {{$data->descriptions}}
            </textarea>

          </div>
           <div class="form-group">

          <label for="exampleInputEmail1">Show</label>
          <select class="form-control" name="show" id="">
              {{--  <option @if($data->show == '1') selected @endif value="1">Show</option>
              <option @if($data->show == '0') selected @endif value="0">Hide</option> --}}
            </select>
          </div>
          <div class="box-footer">

            <button type="submit" class="btn btn-primary">Submit</button>

          </div>

        </form>

      </div>

      <!-- /.box -->

    </div>

</div>

</section>

<!-- /.content -->

</div>
@endsection
@section('pagejs')
<script type="">
  $(function(){
    CKEDITOR.replace('details');
  });

</script>

@endsection