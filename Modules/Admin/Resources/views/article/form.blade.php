<form action="" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="form-group">
				<label for="a_name">Tên bài viết:</label>
				<input type="text" class="form-control" name="a_name" value="{{ old('a_name',isset($article->a_name) ? $article->a_name : '') }}" placeholder="Tên sản phẩm">
				@if ($errors->has('a_name'))
				<div class="error">{{ $errors->first('a_name') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="a_description">Mô tả:</label>
				<input type="text" class="form-control" name="a_description" value="{{ old('a_description',isset($article->a_description) ? $article->a_description : '') }}" placeholder="Mô tả"></input>
				@if ($errors->has('a_description'))
				<div class="error">{{ $errors->first('a_description') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="a_content">Nội dung:</label>
				<input type="text" class="form-control" name="a_content" value="{{ old('a_content',isset($article->a_content) ? $article->a_content : '') }}" placeholder="Nội dung"></input>
				@if ($errors->has('a_content'))
				<div class="error">{{ $errors->first('a_content') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="name">Meta title:</label>
				<input type="text" class="form-control" name="a_title_seo" value="{{ old('a_title_seo',isset($article->a_title_seo) ? $article->a_title_seo : '') }}" placeholder="Meta title">
				@if ($errors->has('a_title_seo'))
				<div class="error">{{ $errors->first('a_title_seo') }}</div>
				@endif
			</div>
			<div class="form-group">
				<label for="a_description_seo">Meta Description:</label>
				<input type="text" class="form-control" name="a_description_seo" value="{{ old('a_description_seo',isset($article->a_description_seo) ? $article->a_description_seo : '') }}" placeholder="Meta Description">
				@if ($errors->has('a_description_seo'))
				<div class="error">{{ $errors->first('a_description_seo') }}</div>
				@endif
			</div>
			<div class="form-group">
				<img src="{{ asset('images/no_image.png') }}" alt="image" id="out_img" width="100px" height="100px">
			</div>
			<div class="form-group">
				<label for="name">Avatar:</label>
				<input type="file" name="avatar" id="input_img" class="form-control">
				@if ($errors->has('avatar'))
				<div class="error">{{ $errors->first('avatar') }}</div>
				@endif
			</div>
			<button type="submit" class="btn btn-success">Lưu thông tin</button>
		</div>
	</div>
</form>