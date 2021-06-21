<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cara Membuat Slug Automatis Dengan Javascript By Dumet School</title>
</head>
<body>

  <h4>dfdfd</h4>
  <form action="aksi_post.php" method="POST">
  <input name="judul" type="text" id="judul" onkeyup="buat()">
  <input type="text" name="slug" id="slug">
        <textarea name="slug"></textarea>
        <input type='submit' value='Post'>
  </form>
</body>
 
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
function buatslug() {
    var title = $('#judul').val();
    $('#slug').val(slugify(title));
}
 
function slugify(text) {
    return text.toString().toLowerCase().replace(/\s+/g, '-') // Ganti spasi dengan -
        .replace(/[^\w\-]+/g, '') // Hapus semua karakter non-word
        .replace(/\-\-+/g, '-') // Ganti multiple - atau single -
        .replace(/^-+/, '') 
        .replace(/-+$/, '');
} 
 
</script>