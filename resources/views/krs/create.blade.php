<form action="/krs/store" method="POST">

    @csrf

    <label>Mahasiswa</label><br>

    <select name="kode_mahasiswa">

        <option value="">
            -- Pilih Mahasiswa --
        </option>

        @foreach($mahasiswa as $m)
            <option value="{{ $m->id }}">
                {{ $m->Fullname }}
            </option>
        @endforeach

    </select>

    <br><br>

    <label>Tahun Ajaran</label><br>

    <input type="text"
           name="tahun_ajaran">

    <br><br>

    <label>Semester</label><br>

    <input type="radio"
           name="semester"
           value="ganjil">

    Ganjil

    <input type="radio"
           name="semester"
           value="genap">

    Genap

    <br><br>

    <label>Status</label><br>

    <select name="status">

        <option value="pending">
            Pending
        </option>

        <option value="approved">
            Approved
        </option>

        <option value="partial">
            Partial
        </option>

        <option value="declined">
            Declined
        </option>

    </select>

    <br><br>

    <label>Total SKS</label><br>

    <input type="number"
           name="total_sks">

    <br><br>

    <input type="submit"
           value="Simpan">

</form>