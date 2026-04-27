<form action="{{route('mahasiswa.edit', $mahasiswa->id)}}"  method="post">
    @csrf
    <input type="hidden" name="id" value="{{$mahasiswa->id}}">
    <input type="hidden" name="_method" value="PUT">
    <table>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><input type="text" name="Fullname" value="{{$mahasiswa->Fullname}}"></td>
        </tr>
        <tr>
            <td>Nomor Induk Dosen</td>
            <td>:</td>
            <td><input type="text" name="ND" value="{{$mahasiswa->ND}}"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input type="text" name="Tempat_Lahir" value="{{$mahasiswa->Tempat_Lahir}}"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><input type="text" name="Tanggal_Lahir" value="{{$mahasiswa->Tanggal_Lahir}}"></td>
        </tr>
        <tr>
            <td>Pendidikan Terakhir</td>
            <td>:</td>
            <td><input type="text" name="Pendidikan_Terakhir" value="{{$mahasiswa->Pendidikan_Terakhir}}"></td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td><input type="text" name="Pendidikan_Terakhir" value="{{$mahasiswa->Jurusan}}"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="Alamat">{{$mahasiswa->Alamat}}</textarea></td>
        </tr>
        <tr>
            <td colspan="3">
                <input type="submit" value="Update">
                <input type="reset" value="Clear">
            </td>
        </tr>
    </table>
</form>