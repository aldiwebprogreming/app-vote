 <option>-- Pilih Kecamatan --</option>
<?php foreach ($kel as $data) {?>

<option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>

<?php } ?>