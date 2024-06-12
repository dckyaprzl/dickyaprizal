<!DOCTYPE html>
<html>
<head>
	<title>Top Rated | Tambah Judul</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
 </style>
</head>
<body>
	<div class="card">
	<div class="row">
		<div class="container">
			<h2 class="text-center my-5">Tambah Judul Baru +</h2>
			
			<a class="btn btn-secondary" href="/toprated">Kembali</a>
	
			<div class="col-lg-8 mx-auto my-5">	
 
				@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
 
				<form action="/toprated/store" method="POST" enctype="multipart/form-data">
					{{ csrf_field() }}
 
					<div class="form-group">
						<b>Thumbnail</b><br/>
						<input type="file" name="thumbnail">
					</div>
 
					<div class="form-group">
						<b>Judul Film</b>
						<input type="text" class="form-control" name="Judul_Film"></input>
					</div>
					<div class="form-group">
						<b>Tahun Rilis</b>
						<input type="date" class="form-control" name="Tahun_Rilis"></input>
					</div>
					<div class="form-group">
					<b>ID_Genre</b>
						<select  class="form-control" name="ID_Genre">
							@foreach($genre as $p)
							<option value="{{$p->ID_Genre}}">{{$p->Genre}}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">	
						<b>Rating</b>
						<input type="text" class="form-control" name="Rating"></input>
					</div>

					<div class="form-group">
						<label for="deskripsi">Deskripsi</label>
						<textarea class="form-control" id="deskripsi" name="deskripsi">{{ old('deskripsi', $film->deskripsi ?? '') }}</textarea>
					</div>

					<div class="form-group">
						<label for="video_url">Video URL</label>
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