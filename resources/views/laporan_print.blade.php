<!DOCTYPE html>
<html>
<head>
    <title>Cetak Laporan Keuangan</title>
</head>
<body>
    <center>
        <h4>LAPORAN TRANSAKSI KEUANGAN</h4>
    </center>
    <?php
    $dari = htmlspecialchars($_GET['dari']);
    $sampai = htmlspecialchars($_GET['sampai']);
    $kat = htmlspecialchars($_GET['kategori']);
    ?>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
        table th,
        table td {
            border: 1px solid black;
            text-align: center;
        }
        @media print {
            @page {
                size: landscape;
            }
        }
    </style>
    <table>
        <thead>
            <tr>
                <th rowspan="2" width="11%">Tanggal</th>
                <th rowspan="2" width="5%">Jenis</th>
                <th rowspan="2">Keterangan</th>
                <th rowspan="2">Kategori</th>
                <th colspan="2">Transaksi</th>
            </tr>
            <tr>
                <th>Pemasukan</th>
                <th>Pengeluaran</th>
            </tr>
        </thead>
        <tbody>
            @php
            $total_pemasukan = 0;
            $total_pengeluaran = 0;
            @endphp
            @foreach($laporan as $t)
            <tr>
                <td>{{ date('d-m-Y', strtotime($t->tanggal)) }}</td>
                <td>{{ $t->jenis }}</td>
                <td>{{ $t->keterangan }}</td>
                <td>
                    @if($t->kategori)
                        {{ $t->kategori->kategori }}
                    @else
                        Kategori Tidak Tersedia
                    @endif
                </td>
                <td>
                    @if($t->jenis == "Pemasukan")
                    {{ "Rp.".number_format($t->nominal).",-" }}
                    @else
                    -
                    @endif
                </td>
                <td>
                    @if($t->jenis == "Pengeluaran")
                    {{ "Rp.".number_format($t->nominal).",-" }}
                    @else
                    -
                    @endif
                </td>
            </tr>
            @php
            if($t->jenis == "Pemasukan"){
            $total_pemasukan += $t->nominal;
            } else if($t->jenis == "Pengeluaran"){
            $total_pengeluaran += $t->nominal;
            }
            @endphp
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">TOTAL</td>
                <td>{{ "Rp. ".number_format($total_pemasukan).",-" }}</td>
                <td>{{ "Rp. ".number_format($total_pengeluaran).",-" }}</td>
            </tr>
        </tfoot>
    </table>
    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>
