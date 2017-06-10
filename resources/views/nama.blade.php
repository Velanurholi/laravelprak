<!DOCTYPE html>
<html>
<head>
	<title>Buah</title>
</head>
<body>
<h1>Nama Siswa :</h1>
  
  @foreach ($nama as $data)
  	<li> {{$data}} </li>
  @endforeach

</body>
</html>