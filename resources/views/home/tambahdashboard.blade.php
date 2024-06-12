<!DOCTYPE html>
<html>
<head>
	<title>Home | Tambah Judul</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <style>
	 body {
            background-color: #1c1c1c;
            color: #fff;
            font-family: 'Poppins', sans-serif;
        }
		
	.card {
      background-color: #222831;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 45px;
      width: auto;
      box-sizing: border-box;
      padding: 10px;
      text-align: left;
    }
	.form-group{
		color:#fff;
	}
	h2{
		color:#fff;
	}
 </style>
</head>
<body>
	<div class="card">
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5"><b>Tambah Judul Baru +</b></h2>
			
			
	
			<div class="col-lg-8 mx-auto my-5">	
 <a class="btn btn-secondary"href="/dashboard" ><i class="bi bi-chevron-double-left"></i>Kembali</a><br>
 <br>
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="/dashboard/store" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
					<div class="form-group">
						<label for="formFile" class="form-label"><b>Thumbnail</b></label>
						<input class="form-control" name="thumbnail" type="file" id="formFile">
					</div>
					
 
					<div class="form-group">
						<label for="Judul_Film"><b>Judul Film</b></label>
						<input type="text" class="form-control" name="Judul_Film"></input>
					</div>
					<div class="form-group">
						<label for="Tahun_Rilis"><b>Tahun Rilis</b></label>
						<input type="date" class="form-control" name="Tahun_Rilis"></input>
					</div>
					<div class="form-group">
					<label for="ID_Genre"><b>Genre</b></label>
						<select  class="form-control" name="ID_Genre">
							@foreach($genre as $p)
							<option value="{{$p->ID_Genre}}">{{$p->Genre}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">	
						<label for="Rating"><b>Rating</b></label>
						<input type="text" class="form-control" name="Rating"></input>
					</div>

					<div class="form-group">
						<label for="deskripsi"><b>Deskripsi</b></label>
						<textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi', $film->deskripsi ?? '') }}</textarea>
					</div>

					<div class="form-group">
						<label for="video_url"><b>Video URL</b></label>
						<input type="text" class="form-control" id="video_url" name="video_url" value="{{ old('video_url', $film->video_url ?? '') }}">
					</div>
 
					<input type="submit" value="Upload" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>