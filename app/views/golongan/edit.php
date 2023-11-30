<h2>Edit golongan</h2>

<form action="<?php echo URL; ?>/golongan/update" method="post">
    <input type="hidden" name="gol_id" value="<?php echo htmlspecialchars($data['row']['gol_id']); ?>">
    <table>
        <tr>
            <td>KODE GOLONGAN</td>
            <td><input type="text" name="gol_kode" value="<?php echo htmlspecialchars($data['row']['gol_kode']); ?>" require></td>
        </tr>
        <tr>
            <td>NAMA GOLONGAN</td>
            <td><input type="text" name="gol_nama" value="<?php echo htmlspecialchars($data['row']['gol_nama']); ?>" require></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>