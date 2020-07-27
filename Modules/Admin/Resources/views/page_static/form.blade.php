<form action="" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="form-group">
				<label for="ps_name">Tiêu đề:</label>
				<input type="text" class="form-control" name="ps_name" required value="{{ old('ps_name',isset($page->ps_name) ? $page->ps_name : '') }}" placeholder="Tiêu đề">
			</div>
			<div class="form-group">
				<label for="ps_name">Chọn trang:</label>
				<select class="form-control" name="ps_type">
					<option value="1">Về chúng tôi</option>
					<option value="2">Thông tin giao hàng</option>
					<option value="3">Chính sách sử dụng</option>
					<option value="4">Chính sách bảo mật</option>
				</select>
			</div>

			<div class="form-group">
				<label for="ps_content">Nội dung:</label>
				<input type="text" class="form-control" name="ps_content" required value="{{ old('ps_content',isset($page->ps_content) ? $page->ps_content : '') }}" placeholder="Nội dung"></input>
			</div>
			<button type="submit" class="btn btn-success">Lưu thông tin</button>
		</div>
	</div>
</form>
{{-- @section('script')
	<script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
	<script>
		CKEDITOR.replace('ps_content');
	</script>
@stop --}}