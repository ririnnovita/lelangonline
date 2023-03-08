<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan</title>
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
            background-color; #FF6E31;
            
        }

    </style>
</head>
<body>
    
    <div class="container">

    <h2><center>LAPORAN DATA BARANG</center></h2>
    <h3><center>LELANG ONLINE INDONESIA</center></h3>
    <small><center>Jl. Pelita No.27 Sidomekar Semboro Jember Jawa Timur Indonesia</center></small>
    <hr><br><br>

    <center><strong>
    <h3>LAPORAN BARANG</h3>
    
    <small>
      <?= $this->session->userdata('tgl_barang_awal')?> sampai <?= $this->session->userdata('tgl_barang_akhir');?>
    </small>
    </strong>
    </center>
    <br><br><br>

    <table class="table table-bordered table-sm">
        <tr>
            <th width="40px">NO.</th>
            <th width="120px">Nama Barang</th>
            <!-- <th width="120px">Deskripsi Barang</th> -->
            <th width="100px">Harga</th>
            <th width="90px">Tanggal</th>
            <!-- <th width="150px">Status</th> -->
        </tr>
        
        
        <?php $i = 1;
        $CI =& get_instance();
        $CI->load->model('Barang_model');
        foreach ($laporan as $lap) : ?>
                <tr>
                    <td><center><?= $i; ?></center></td>
                    <td><center><?= $lap->nama_barang; ?></center></td>
                    <!-- <td><center><?= $lap->deskripsi_barang; ?></center></td> -->
                    <td><center>Rp. <?= number_format($lap->harga_awal, 2,',', '.'); ?></center></td>
                    <td><center><?= date('d-m-Y', strtotime($lap->tgl)); ?></center></td>
                    <!-- <td><center><?= $lap->status_barang; ?></center></td> -->
                </tr>
        <?php $i++; endforeach; ?>
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