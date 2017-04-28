@foreach($gangguan as $gangguan)
<html>
<style>
    @page { margin: 20px; }
    body { margin: 0px; }
</style>
<head>
    <?php $image_kota_path = '/assets/img/lg-kota-pyk.jpg'; $image_kominfo_path = '/assets/img/lg-kominfo.png'; ?>
    <table width="90%">
        <tr>
            <td width="25%" align="center" style="vertical-align: top"><img src="{{ public_path() . $image_kota_path }}" height="120" width="110" alt=""/></td>
            <td align="center" width="100%">
                <h2 align="center" style="line-height: 50%">DINAS KOMUNIKASI DAN INFORMATIKA</h2>
                <h3 align="center">KOTA PAYAKUMBUH</h3>
                </br>
                    Jl. Veteran No. Telepon : #   Email : #
            </td>
            <td align="center" width="10%" style="vertical-align: top"><img src="{{ public_path() . $image_kominfo_path }}" height="120" width="120" alt=""/></td>
        </tr>
    </table>
</head>
<body>
<hr align="right">
<p align="center">DATA LAPORAN GANGGUAN</p>
<table width="90%" align="center" style="border: 1px solid black; border-collapse: collapse">
    <tr>
        <td width="180" style="text-align: right; border: 1px solid black;">Kode Tracking</td>
        <td style="text-align: left; border: 1px solid black;">{{ $gangguan->no_track }}</td>
    </tr>
    <tr>
        <td width="180" style="text-align: right; border: 1px solid black;">Asal Laporan</td>
        <td style="text-align: left; border: 1px solid black;">{{ $gangguan->getAsalLaporan() }}</td>
    </tr>
    <tr>
        <td width="180" style="text-align: right; border: 1px solid black;">Jenis Gangguan</td>
        <td style="text-align: left; border: 1px solid black;">{{ $gangguan->getJenisGangguan() }}</td>
    </tr>
    <tr>
        <td width="180" style="text-align: right; border: 1px solid black;">Gangguan</td>
        <td style="text-align: left; border: 1px solid black;">{{ $gangguan->getGangguan() }}</td>
    </tr>
    <tr>
        <td width="180" style="text-align: right; vertical-align: top; border: 1px solid black;">Detail</td>
        <td style="text-align: left; min-height: inherit; border: 1px solid black;">{{ $gangguan->detail }}</td>
    </tr>
    <tr>
        <td width="180" style="text-align: right; border: 1px solid black;">Nama Pelapor</td>
        <td style="text-align: left; border: 1px solid black;">{{ $gangguan->pelapor() }}</td>
    </tr>
</table>
</body>

</html>

@endforeach