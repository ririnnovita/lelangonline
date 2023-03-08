<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bukti Pemenang</title>
    <style>
    
        .table,
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered thead th,
        .table-bordered td {
            border: 1px solid #000;
            padding: 20px
            font-size: 13px;
            
        }

    </style>
</head>
<body>
    
    <div class="container">

    <h2><center>BUKTI PEMENANG LELANG ONLINE</center></h2>
    <h3><center>LELANG ONLINE INDONESIA</center></h3>
    <small><center>Jl. Pelita No.27 Sidomekar Semboro Jember Jawa Timur Indonesia</center></small>
    <hr><br><br>

    <h3><center>BUKTI PEMENANG LELANG ONLINE</center></h3>
    <?php 
    $CI =& get_instance();
    $CI->load->model('Masyarakat_model');
    foreach ($laporan as $lap) : ?>
    <table>
                    <tbody>
                    <tr>
                            <td><strong>Nama Pemenang</strong></td>
                            <td>: <?= $lap->nama_lengkap; ?></td>
                    </tr>
                    <tr>
                        <td><strong>No.Telp </strong></td>
                        <td>: <?= $lap->telp; ?></td>
                    </tr>
                    </tbody>
        </table>
        <?php endforeach; ?>

    <br>

        <table class="table table-bordered">
        <tr>
            <th width="110px">Nama Barang</th> 
            <th width="110px">Tanggal Lelang</th>
            <th width="110px">Batas Akhir</th>
            <th width="140px">Harga Akhir</th>
        </tr>
        <?php 
        $CI =& get_instance();
        $CI->load->model('Masyarakat_model');
        foreach ($laporan as $lap) : ?>

                    <tr>
                            <td><center><?= $lap->nama_barang; ?></center></td>
                            <td><center><?= date('d-m-Y H:i', strtotime($lap->tgl_lelang)) ?></center></td>
                            <td><center><?= date('d-m-Y H:i', strtotime($lap->tgl_akhir)) ?></center></td>
                            <td><center>Rp. <?= number_format($lap->harga_akhir, 2,',', '.'); ?></center></td>
                    </tr>
               
         <?php endforeach; ?>
        </table>
        

    <br><br><br><br><br>
        <table width="100%">
            <tr>
                <td></td>
                <td width="300px">
                    <p>JEMBER, <?= DATE('d-m-Y'); ?>
                        <br>
                        Administrator,
                        <br><br><br><br>
                        <b>_______________________________</b>
                    </p>
                </td>
            </tr>

        </table>
    </div>
</body>
</html>