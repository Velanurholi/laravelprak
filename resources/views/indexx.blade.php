<!DOCTYPE html>
<html>
<head>
	<title>Coba</title>
</head>

<center>
<body>
<table border="2"ss>

	<h1>Table Coba</h1>
	<tr>
	<td>No </td>
		<td>Id </td>
		<td>Nama </td> 
		<td>Kelas </td>
		<td>Jurusan </td>
		<td>Jenis Kelamin </td>
	</tr>

	@foreach ($tampilan as $data)
	<tr>
		<td> {{ $data -> id}} </td>
		<td> {{ $data -> nama}} </td>
		<td> {{ $data -> kelas}} </td>
		<td> {{ $data -> jurusan}} </td>
		<td> {{ $data -> jenis_kelamin}} </td>
	</tr>	
	@endforeach

</table>
</body>
</center>

</html>