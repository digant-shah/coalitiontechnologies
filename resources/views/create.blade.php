@extends('app')
@section('content')
<div class="row" style="background: #f3f3f3;">

	{{-- <div class="col-md-3"></div> --}}
	<div class="col-md-12 text-center"><h1 class="head header"> Coalition Technologies Skill Test</h1></div>
<br>
</div>
<br>
<div class="row">
	<div class="col-md-4">
		<form action="" method="post" class="ajax-form">
			{{ CSRF_FIELD() }}
			<input name="_method" value="put" type="hidden"/>
		  <div class="form-group">
		    <label for="name">Product Name:</label>
		    <input type="text" class="form-control" id="name" name="name" value="">
		    <span class="help-block"></span>
		  </div>
		  <div class="form-group">
		    <label for="quantity">Quantity:</label>
		    <input type="quantity" class="form-control" id="quantity" name="quantity" value="">
		    <span class="help-block"></span>
		  </div>
		  <div class="form-group">
		    <label for="price">Price:</label>
		    <input type="price" class="form-control" id="price" name="price" value="">
		    <span class="help-block"></span>
		  </div>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>
@endsection
