<form action="/krs-detail/store"
      method="POST">

    @csrf

    <label>KRS</label>
    <br>

    <select name="kode_krs">

        <option value="">
            -- Pilih KRS --
        </option>

        @foreach($krs as $k)
        <option value="{{ $k->id }}">
            KRS {{ $k->id }}
        </option>
        @endforeach

    </select>

    <br><br>

    <label>Kelas</label>
    <br>

    <select name="kode_kelas">

        <option value="">
            -- Pilih Kelas --
        </option>

        @foreach($kelas as $k)
        <option value="{{ $k->id }}">
            {{ $k->kode_kelas }}
        </option>
        @endforeach

    </select>

    <br><br>

    <label>Status</label>
    <br>

    <select name="status">

        <option value="pending">
            Pending
        </option>

        <option value="approved">
            Approved
        </option>

        <option value="declined">
            Declined
        </option>

    </select>

    <br><br>

    <input type="submit"
           value="Simpan">

</form>