<!DOCTYPE html>
<html>
<head>
	<title>Upcoming Movie | Edit</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
 
	<div class="row">
		<div class="container">
	<h3 class="text-center my-5">Edit Film</h3>
 
	<a class="btn btn-primary" href="/upcoming">Kembali</a>
	<div class="col-lg-8 mx-auto my-5">	
	
 
	@foreach($upcoming as $p)
	<form action="/upcoming/update" method="post">
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
						<label for="deskripsi">Deskripsi</label>
						<textarea class="form-control" id="deskripsi" required="required" name="deskripsi">{{ old('deskripsi', $film->deskripsi ?? '') }}</textarea>
					</div>

		
		<input class ="btn btn-primary" type="submit" value="Simpan Data">
	</form>
	@endforeach
	</div>
		</div>
 </div>
</body>
</html>