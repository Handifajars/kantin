<!DOCTYPE html>
<html>

<head>
    <title>Mhans Resto</title>
</head>

<body>
    <h1>Selamat Datang Di Mhans Resto Wenak</h1>
    <h2>Silakan Pilih Menu <?php echo $this->session->userdata("nama"); ?></h2>
    <a href="<?php echo base_url('login/logout'); ?>">Logout</a>
    <div id="container">

        <div id="body">
            <?php
            $no = 1;
            foreach ($m_data as $p) {
                echo form_open('pesanan/tambah');
            ?>
                <p><?php echo $no; ?>&nbsp;<?php echo $p['nama_menu']; ?><span class="add">
                        Rp. <?php echo number_format($p['harga'], 2, ',', '.'); ?>
                        <input type="hidden" name="nama" value="<?php echo $p['nama_menu']; ?>">
                        <input type="hidden" name="harga" value="<?php echo $p['harga']; ?>">
                        <input type="hidden" name="kode" value="">
                        <input type="submit" value="Tambah">

                    </span></p>
            <?php
                echo form_close();
                $no++;
            }
            ?>
        </div>
    </div>
</body>

</html>