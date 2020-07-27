<form action="" method="POST" enctype="multipart/form-data">
		@csrf
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="pro_name">Tên sản phẩm:</label>
					<input type="text" class="form-control" name="pro_name" value="{{ old('pro_name',isset($product->pro_name) ? $product->pro_name : '') }}" placeholder="Tên sản phẩm">
					@if ($errors->has('pro_name'))
					<div class="error">{{ $errors->first('pro_name') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="pro_description">Mô tả:</label>
					<input type="text" class="form-control" name="pro_description" value="{{ old('pro_description',isset($product->pro_description) ? $product->pro_description : '') }}" placeholder="Mô tả"></input>
					@if ($errors->has('pro_description'))
					<div class="error">{{ $errors->first('pro_description') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="pro_content">Nội dung:</label>
					<input class="form-control" name="pro_content" value="{{ old('pro_content',isset($product->pro_content) ? $product->pro_content : 'Chưa có') }}" placeholder="Nội dung"></input>
					@if ($errors->has('pro_content'))
					<div class="error">{{ $errors->first('pro_content') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="pro_title_seo">Meta title:</label>
					<input type="text" class="form-control" name="pro_title_seo" value="{{ old('pro_title_seo',isset($product->pro_title_seo) ? $product->pro_title_seo : '') }}" placeholder="Meta title"></input>
					@if ($errors->has('pro_title_seo'))
					<div class="error">{{ $errors->first('pro_title_seo') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="pro_description_seo">Meta Description:</label>
					<input type="text" class="form-control" name="pro_description_seo" value="{{ old('pro_description_seo',isset($product->pro_description_seo) ? $product->pro_description_seo : '') }}" placeholder="Meta Description">
					@if ($errors->has('pro_description_seo'))
					<div class="error">{{ $errors->first('pro_description_seo') }}</div>
					@endif
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="pro_category_id">Loại sản phẩm:</label>
					<select class="form-control" name="pro_category_id">
						@if(isset($categories))
							@foreach($categories as $category)
								<option value="{{ $category->id }}" {{ old('pro_category_id', isset($product->pro_category_id) ? $product->pro_category_id : '') == $category->id ? "selected='selected'" : "" }}>{{ $category->c_name }}
								</option>
							@endforeach
						@endif
					</select>
					@if ($errors->has('pro_category_id'))
					<div class="error">{{ $errors->first('pro_category_id') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="pro_price">Giá sản phẩm:</label>
					<input type="number" class="form-control" name="pro_price" value="{{ old('pro_price', isset($product->pro_price) ? $product->pro_price : '0') }}" placeholder="Giá sản phẩm"></input>
					@if ($errors->has('pro_price'))
					<div class="error">{{ $errors->first('pro_price') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="pro_sale">Khuyến mãi:</label>
					<input type="number" class="form-control" name="pro_sale" value="{{ old('pro_sale', isset($product->pro_sale) ? $product->pro_sale : '0') }}" placeholder="% khuyến mãi">
					@if ($errors->has('pro_sale'))
					<div class="error">{{ $errors->first('pro_sale') }}</div>
					@endif
				</div>
				<div class="form-group">
					<label for="pro_sale">Số lượng:</label>
					<input type="number" class="form-control" name="pro_number" value="{{ old('pro_sale', isset($product->pro_number) ? $product->pro_number : '0') }}" placeholder="% khuyến mãi">
					@if ($errors->has('pro_sale'))
					<div class="error">{{ $errors->first('pro_sale') }}</div>
					@endif
				</div>
				<div class="form-group">
					<img src="{{ asset('images/no_image.png') }}" alt="image" id="out_img" width="50%" height="150px">
				</div>
				<div class="form-group">
					<label for="name">Avatar:</label>
					<input type="file" name="avatar" id="input_img" class="form-control">
					@if ($errors->has('avatar'))
					<div class="error">{{ $errors->first('avatar') }}</div>
					@endif
				</div>
				<div class="checkbox">
					<label><input type="checkbox"> Nổi bật</label>
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-success">Lưu thông tin</button>
	</form>
{{-- @section('script')
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script>
		CKEDITOR.replace('pro_content');
	</script>
@stop --}}