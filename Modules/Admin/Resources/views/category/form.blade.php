<form action="" method="POST">
	@csrf
	<div class="form-group">
		<label for="name">Tên danh mục:</label>
		<input type="text" class="form-control" name="name" value="{{ old('name',isset($category->c_name) ? $category->c_name : '') }}" placeholder="Tên danh mục">
		@if ($errors->has('name'))
		<div class="error">{{ $errors->first('name') }}</div>
		@endif
	</div>
	<div class="form-group">
		<label for="name">Icons:</label>
		<input type="text" class="form-control" name="icon" value="{{ old('icon',isset($category->c_icon) ? $category->c_icon : '') }}" placeholder="fa-phone">
		@if ($errors->has('icon'))
		<div class="error">{{ $errors->first('icon') }}</div>
		@endif
	</div>
	<div class="form-group">
		<label for="name">Meta title:</label>
		<input type="text" class="form-control" name="title" value="{{ old('title',isset($category->c_title_seo) ? $category->c_title_seo : '') }}" placeholder="Meta title">
		@if ($errors->has('title'))
		<div class="error">{{ $errors->first('title') }}</div>
		@endif
	</div>
	<div class="form-group">
		<label for="name">Meta Description:</label>
		<input type="text" class="form-control" name="description" value="{{ old('description',isset($category->c_description_seo) ? $category->c_description_seo : '') }}" placeholder="Meta Description">
		@if ($errors->has('description'))
		<div class="error">{{ $errors->first('description') }}</div>
		@endif
	</div>
	<div class="checkbox">
		<label><input type="checkbox"> Nổi bật</label>
	</div>
	<button type="submit" class="btn btn-success">Lưu thông tin</button>
</form>