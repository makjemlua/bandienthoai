@extends('admin::layouts.master')

@section('content')
	<nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Trang chủ</a></li>
        <li class="breadcrumb-item"><a href="{{ route('admin.get.list.category') }}">Danh mục</a></li>
        <li class="breadcrumb-item active" aria-current="page">Cập nhập</li>
      </ol>
    </nav>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

	</div>
	<form action="" method="POST">
		@csrf
	  <div class="form-group">
	    <label for="name">Tên danh mục:</label>
	    <input type="text" class="form-control" name="name" value="{{ old('name',$category->c_name) }}" placeholder="Tên danh mục">
		    @if ($errors->has('name'))
			    <div class="error">{{ $errors->first('name') }}</div>
			@endif
	  </div>
	  <div class="form-group">
	    <label for="name">Icons:</label>
	    <input type="text" class="form-control" name="icon" value="{{ old('icon',$category->c_icon) }}" placeholder="fa-phone">
	    	@if ($errors->has('icon'))
			    <div class="error">{{ $errors->first('icon') }}</div>
			@endif
	  </div>
	  <div class="form-group">
	    <label for="name">Meta title:</label>
	    <input type="text" class="form-control" name="title" value="{{ old('title',$category->c_title_seo) }}" placeholder="Meta title">
		    @if ($errors->has('title'))
			    <div class="error">{{ $errors->first('title') }}</div>
			@endif
	  </div>
	  <div class="form-group">
	    <label for="name">Meta Description:</label>
	    <input type="text" class="form-control" name="description" value="{{ old('description',$category->c_description_seo) }}" placeholder="Meta Description">
	    	@if ($errors->has('description'))
			    <div class="error">{{ $errors->first('description') }}</div>
			@endif
	  </div>
	  <div class="checkbox">
	    <label><input type="checkbox"> Nổi bật</label>
	  </div>
	  <button type="submit" class="btn btn-success">Cập nhập</button>
	</form>
@stop