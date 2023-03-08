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

    <h2><center>LAPORAN DATA PEMENANG</center></h2>
    <h3><center>LELANG ONLINE INDONESIA</center></h3>
    <small><center>Jl. Pelita No.27 Sidomekar Semboro Jember Jawa Timur Indonesia</center></small>
    <hr><br><br>

    <center><strong>
    <h3>LAPORAN PEMENANG</h3>
   
    <small>
        <?= $this->session->userdata('tgl_lelang_awal')?> sampai <?= $this->session->userdata('tgl_lelang_akhir');?>
    </small>
    </strong>
    </center>
    <br><br><br>

    <table class="table table-bordered table-sm">
        <tr>
            <th width="100px">Nama Barang</th>
            <th width="90px">Nama Pemenang</th>
            <!-- <th width="80px">Nama Petugas</th> -->
            <!-- <th width="90px">Tanggal Lelang</th> -->
            <th width="90px">Batas Akhir</th>
            <th width="130px">Harga Awal</th>
            <th width="130px">Harga Akhir</th>
        </tr>
        
    
        <?php $i = 1;
        $CI =& get_instance();
        $CI->load->model('Lelang_model');
        foreach ($laporan as $lap) : ?>
            <?php if ($lap->status == "ditutup" && $lap->harga_akhir != null) { ?>
                <tr>
                    <!-- <td><center><?= $i; ?></center></td> -->
                    <td><center><?= $lap->nama_barang; ?></center></td>
                    <td><center><?= $CI->Lelang_model->max_bid($lap->id_lelang)->nama_lengkap; ?></center></td>
                    <!-- <td><center><?= $lap->nama_petugas; ?></center></td> -->
                    <!-- <td><center><?= date('d-m-Y H:i', strtotime($lap->tgl_lelang)); ?></center></td> -->
                    <td><center><?= date('d-m-Y H:i', strtotime($lap->tgl_akhir)); ?></center></td>
                    <td><center>Rp. <?= number_format($lap->harga_awal, 2,',', '.'); ?></center></td>
                    <td><center>Rp. <?= number_format($lap->harga_akhir, 2,',', '.'); ?></center></td>
                </tr>
            <?php } else { ?>
            <?php } ?>
        <?php $i++; endforeach; ?>
    </table>
    <br><br><br><br><br>
        <table width="110%">
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