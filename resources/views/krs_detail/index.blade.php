<a href="/krs-detail/create">
    <input type="button" value="Create">
</a>

<table border="1">

    <thead>
        <th>No</th>
        <th>Kode KRS</th>
        <th>Kode Kelas</th>
        <th>Status</th>
        <th>Tanggal Dibuat</th>
        <th>Aksi</th>
    </thead>

    @foreach ($krsdetail as $m)
    <tr>

        <td>{{ $m->id }}</td>

        <td>
            {{ $m->kode_krs }}
        </td>

        <td>
            {{ $m->kelas->kode_kelas }}
        </td>

        <td>{{ $m->status }}</td>

        <td>{{ $m->created_at }}</td>

        <td>
            <form action="/krs-detail/{{ $m->id }}"
                  method="post">

                @csrf

                <input type="hidden"
                       name="_method"
                       value="DELETE">

                <input type="submit"
                       value="Delete">

            </form>
        </td>

    </tr>
    @endforeach

</table>