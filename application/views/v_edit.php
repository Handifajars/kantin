<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<body>

    <div class="w3-container">
        <h2>Menu Makan/Minum</h2>

        <div class="w3-card-4">
            <div class="w3-container w3-green">
                <h2>Edit Data</h2>
            </div>
            <?php foreach ($m_data as $u) { ?>
                <form class="w3-container" action="<?php echo base_url() . 'crud/update'; ?>" method="post">
                    <p>
                        <input class="w3-input"  type="hidden" name="id_menu" value="<?php echo $u->id_menu ?>">
                        <input class="w3-input" type="text" name="nama_menu" value="<?php echo $u->nama_menu ?>">
                        <label>Nama Menu</label></p>
                    <p>
                        <input class="w3-input" type="text" name="harga" value="<?php echo $u->harga ?>">
                        <label>Harga</label></p>
                    <input class="w3-input" type="submit" value="Simpan">
                </form>
            <?php } ?>
        </div>
    </div>
</body>

</html>