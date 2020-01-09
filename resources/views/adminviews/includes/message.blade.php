@if($errors->any())

	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>

@endif

@if(Session::has('success'))

	<div class="alert alert-success alert-dismissible" role="alert">
        {{Session::get('success')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="false">&times;</span>
  </button>
</div>

@elseif(Session::has('error'))

	<div class="alert alert-warning alert-dismissible" role="alert">
        {{Session::get('error')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="false">&times;</span>
  </button>
</div>

@endif