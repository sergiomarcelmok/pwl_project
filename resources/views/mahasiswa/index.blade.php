<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1><a href={{route('mahasiwa.add', $m->id)}}>
        <input type="button" value ="Create">

<table border="1">

    <thead>
        <th>No</th>
        <th>Nama Lengkap</th>
        <th>NIM</th>
        <th>NISN</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Tanggal Dibuat</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($mahasiswa as $m))
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$m->Fullname}}</td>
        <td>{{$m->nim}}</td>
        <td>{{$m->nisn}}</td>
        <td>{{$m->tempat_lahir}}</td>
        <td>{{$m->tanggal_lahir}}</td>
        <td>{{$m->alamat}}</td>
        <td>{{$m->created_at}}</td>
        <td>


        <a href={{route('mahasiwa.update', $m->id)}}>
        <input type="button" value ="edit">
        </a>
        <form action="{{route('mahasiswa.delete', $m->id)}}" method="post">
        @csrf
        <input type ="hidden" name="id" value = "{{$m->id}}">
        <input type ="hidden" name="_method" value = "delete">
        <input type = "submit" value="delete">
        </form>
        </td>

    </tr>
    @endforeach
    </table>
</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
