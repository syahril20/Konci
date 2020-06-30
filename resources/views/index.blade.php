<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2>www.malasngoding.com</h2>
	<h3>Data Siswa</h3>

	<a href="/Siswa/tambah"> + Tambah Siswa Baru</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
		</tr>
		@foreach($Siswa as $p)
		<tr>
			<td>{{ $p->NIM }}</td>
			<td>{{ $p->Nama_Siswa }}</td>
			<td>
				<a href="/Siswa/edit/{{ $p->NIM }}">Edit</a>
				|
				<a href="/Siswa/hapus/{{ $p->NIM }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>