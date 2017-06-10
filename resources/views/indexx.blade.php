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
		<td>Id </td>
		<td>Nama </td> 
		<td>Kelas </td>
		<td>Jurusan </td>
		<td>Jenis Kelamin </td>
	</tr>

	@foreach ($tampilan as $data)
	{{data}}
	@endforeach

</table>
</body>
</center>

</html>