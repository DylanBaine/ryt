@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<aside class="col-md-6 col-md-offset-3">
			<form action="/upload-db" method="post" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
					<label for="db-upload" class="btn btn-transparent btn-block">Upload db files</label>
					<br>
					<input type="file" id="db-upload" name="db_file" style="display: block;">
				</div>
				<input type="submit" class="btn btn-primary btn-block" value="Save">
			</form>
		</aside>
	</div>
</div>
@endsection
