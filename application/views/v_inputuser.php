<!DOCTYPE html>
<html>

<head>
</head>

<body>
    <center>
        <h3>Tambah user</h3>
    </center>
        <form action="<?php echo base_url() . 'crud/adduser/handi/17081010012'; ?>" method="post">
            <table style="margin:20px auto;">
                <tr>
                    <td>nama</td>
                    <td>
                        <input type="text" name="nama" >
                    </td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
</body>

</html>