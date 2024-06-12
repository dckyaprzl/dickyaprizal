<!DOCTYPE html>
<html>
<head>
	<title>Home | Edit</title>
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
	body h2{
		font-weight: bold;
	}
</style>
</head>

<body>
 <div class="card">
	<div class="row">
		<div class="container">
	<h2 class="text-center my-5">Edit Film</h2>
 
	<a class="btn btn-secondary" href="/toprated">Kembali</a>
	<div class="col-lg-8 mx-auto my-5">	
	
 
	@foreach($top_rated as $p)
	<form action="/toprated/update" method="post">
		{{ csrf_field() }}
		
		<input type="hidden" name="Kode_Film" value="{{ $p->Kode_Film }}"> <br/>

		<div class="form-group">
			<b>Judul Film</b> 
			<input class="form-control" type="text" required="required" name="Judul_Film" value="{{ $p->Judul_Film }}"> <br/>
		</div>

		<div class="form-group">
			<b>Tahun Rilis</b> 
			<input class="form-control" type="date" required="required" name="Tahun_Rilis" value="{{ $p->Tahun_Rilis }}"> <br/>
		</div>

		<div class="form-group">
					<b>ID_Genre</b>
						<select  class="form-control" name="ID_Genre">
							@foreach($genre as $o)
							<option value="{{$o->ID_Genre}}">{{$o->Genre}}</option>
							@endforeach
						</select>
					</div>   

		<div class="form-group">    
			<b>Rating </b>
			<input class="form-control" type="text" required="required" name="Rating" value="{{ $p->Rating }}"> <br/>
		</div> 

		<div class="form-group">
						<label for="deskripsi">Deskripsi</label>
						<textarea class="form-control" id="deskripsi" required="required" name="deskripsi">{{ old('deskripsi', $film->deskripsi ?? '') }}</textarea>
					</div>

		<div class="form-group">
						<label for="video_url">Video URL</label>
						<input type="text" class="form-control" id="video_url" name="video_url" value="{{ old('video_url', $film->video_url ?? '') }}">
					</div>
 
		<input class ="btn btn-primary" type="submit" value="Simpan Data">
	</form>
	@endforeach
	</div>
		</div>
 </div>
 </div>
</body>
</html>