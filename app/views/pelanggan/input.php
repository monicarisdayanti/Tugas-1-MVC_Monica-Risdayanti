<h2>Input pelanggan</h2>

<form action="<?php echo URL; ?>/pelanggan/save" method="post">
    <table>
        <tr>
            <td>GOLONGAN</td>
            <td>
                <select name="pel_id_gol">
                    <?php foreach ($data['optcat'] as $opt) { ?>
                        <option value="<?php echo $opt['gol_id']; ?>"><?php echo $opt['gol_nama']; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>NO PELANGGAN</td>
            <td><input type="text" name="pel_no" required></td>
        </tr>
        <tr>
            <td>NAMA PELANGGAN</td>
            <td><input type="text" name="pel_nama" required></td>
        </tr>
        <tr>
            <td>ALAMAT PELANGGAN</td>
            <td>
                <textarea name="pel_alamat" cols="0" rows="0"></textarea>
            </td>
        </tr>
        <tr>
            <td>NO HP PELANGGAN</td>
            <td><input type="text" name="pel_hp" required></td>
        </tr>
        <tr>
            <td>NO KTP PELANGGAN</td>
            <td><input type="text" name="pel_ktp" required></td>
        </tr>
        <tr>
            <td>NO SERI PELANGGAN</td>
            <td><input type="text" name="pel_seri" required></td>
        </tr>
        <tr>
            <td>NO METERAN PELANGGAN</td>
            <td><input type="text" name="pel_meteran" required></td>
        </tr>
        <tr>
            <td>STATUS AKTIF PELANGGAN</td>
            <td>
                <select name="pel_aktif" required>
                    <option value="Y">Aktif</option>
                    <option value="N">Tidak Aktif</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>ID USER PELANGGAN</td>
            <td><input type="text" name="pel_id_user" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>