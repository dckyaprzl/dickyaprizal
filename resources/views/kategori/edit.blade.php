<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Pegawai</h3>
 
	<a href="/jenisgenre"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($jenis_genre as $p)
	<form action="/jenisgenre/update" method="post">
		{{ csrf_field() }}
		
		ID Genre <input type="number" required="required" name="ID_Genre" value="{{ $p->ID_Genre }}"> <br/>
		Genre <input type="text" required="required" name="Genre" value="{{ $p->Genre }}"> <br/>
		
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>