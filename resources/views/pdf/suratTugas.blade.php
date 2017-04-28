@foreach($gangguan as $gangguan)
    <html>
    <style>
        @page { margin: 20px; margin-top: 35px }
        body { margin: 0px; }
    </style>
    <head>
        <title>SiMALIN Surat</title>
        <?php $image_kota_path = '/assets/img/lg-kota-pyk.jpg'; $image_kominfo_path = '/assets/img/lg-kominfo.png'; ?>
        <table width="90%">
            <tr>
                <td width="25%" align="center" style="vertical-align: top"></td>
                <td align="center" width="100%">
                    <center style="font-size: 22px"><strong>PEMERINTAH KOTA PAYAKUMBUH</strong></center>
                    <center style="font-size: 22px"><strong>DINAS KOMUNIKASI DAN INFORMATIKA</strong></center>
                    </br>
                    Jl. Veteran No. Telepon : #   Email : #
                </td>
                <td align="center" width="10%" style="vertical-align: top"></td>
            </tr>
        </table>
        <hr style="margin-left: 50px; margin-right: 50px" align="right">
    </head>
    <body>
        <br>
        <center><strong>Surat Tugas</strong></center>
        <br/>
        <center>No: _____________________</center>
        <br><br>
        <p style="margin-left: 100px">Menugaskan kepada:</p>
        @foreach($gangguan->admin as $index => $admin)
            <table style="margin-left: 200px">
                <br>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>{{ ucwords($admin->nama) }}</td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>:</td>
                    <td>{{ $admin->nip }}</td>
                </tr>
            </table>
        @endforeach
        <p style="margin-left: 100px">Untuk melaksanakan perbaikan "{{ ucwords($gangguan->getJenisGangguan()) }}" dengan rincian sebagai berikut:</p>
        <br>
        <table width="100%" style="margin-right: 50px">
            <tr>
                <td width="200" style="text-align: right">No Gangguan</td>
                <td width="1" style="text-align: right">:</td>
                <td>{{ $gangguan->getNoTrack() }}</td>
            </tr>
            <tr>
                <td style="text-align: right; vertical-align: top">Lokasi Gangguan</td>
                <td width="1" style="vertical-align: top">:</td>
                <td>{{ $gangguan->getAsalLaporan() }}.</td>
            </tr>
            <tr>
                <td style="text-align: right;">Permasalahan</td>
                <td width="1" style="text-align: right">:</td>
                <td>
                    @foreach($gangguan->kategori as $index => $kategori)
                        {{ ucfirst($kategori->nama) }}.
                    @endforeach
                    {{ ucfirst($gangguan->detail) }}.
                </td>
            </tr>
        </table>
    </body>

    </html>

@endforeach