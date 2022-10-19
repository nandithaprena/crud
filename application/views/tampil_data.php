<!DOCTYPE html>
<html>
    <head>
        <title>Tampil Data</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>desain/css/style.css">
</head>
<body>
<center><h1>Data Mahasiswa</h1></center>
<table style="margin:20px auto;" border="1" id="tampilantabel">
<tr>
    <th style="color:white">No</th>
    <th style="color:white">NIM</th>
    <th style="color:white">Nama</th>
    <th style="color:white">Alamat</th>
    <th style="color:white">Pekerjaan</th>
    <th style="color:white">Foto</th>
    <th style="color:white">Action</th>
</tr>
<?php
$no = 1;
foreach($mahasiswa as $u) {
    ?>
    <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $u->nim ?></td>
        <td><?php echo $u->nama ?></td>
        <td><?php echo $u->alamat ?></td>
        <td><?php echo $u->pekerjaan ?></td>
        <td><img src="<?php echo base_url();?><?php echo $u->foto ?>" width="50" height="50"></td>
        <td>
            <?php echo anchor('kampus/edit/'.$u->id,'Edit'); ?>
            <?php echo anchor('kampus/hapus/'.$u->id,'Hapus'); ?>
        </td>
    </tr>
    <?php } ?>
</table>
<center><?php echo anchor('kampus/tambah','<input type=button value=\'Tambah Data\'>'); ?></center>
</body>
</html>