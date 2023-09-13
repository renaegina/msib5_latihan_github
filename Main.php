<?php
$nama="Rena Egina Br Pandia";
$tempatkuliah="Universitas Sumatera Utara";
$jurusan="Teknik Informatika";
$pendidikan=["TK Pembina", "SD Negeri 040488 Tiganderket", "SMP Negeri 1 Tiganderket", "SMA Negeri 1 Tiganderket", "Universitas Sumatera Utara"];
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Biodata</title>
    <link rel="stylesheet" type="text/css" href="Style.css">
    <link rel="icon" href="Image/Rena.ico">
  </head>
  <body>
    <header>
      <h1>My Biodata</h1>
    </header>
    <nav>
      <ul>
        <li><a href="#About">About</a></li>
        <li><a href="#Education">Education</a></li>
        <li><a href="#Contact">Contact</a></li>
      </ul>
    </nav>
    <main>
      <center><img src="Image/profil.jpg" alt="Foto Saya"></center>
      <h2><?php echo $nama ?></h2>
      <div class="col">
        <h3 id="Tentang">Tentang</h2>
        <p>Annyeong, perkenalkan nama saya Rena Egina Br Pandia. Saya merupakan anak ke-2 dari 3 bersaudara. Saya berasal dari kota Medan. Saya memiliki hobi menggambar dan melukis, dan apapun itu yang berkaitan dengan warna, lalu saya juga suka belajar hal baru yang menurut saya menarik, dan tidak lupa saya hobi kulineran :) <br>Untuk lebih ringkasnya, silakan lihat daftar di bawah ini:</p>
        <ul>
          <li>
            Nama: <?php echo $nama ?>
          </li>
          <li>
            Tempat kuliah: <?php echo $tempatkuliah ?>
          </li>
          <li>
            Jurusan: <?php echo $jurusan ?>
          </li>
        </ul>
      </div>
      <div class="col">
        <h3 id="Education">Education</h2>
        <p>Pendidikan adalah peluang emas yang mengukir peta perjalanan kita menuju puncak potensi diri. Berikut pendidikan yang saya tempuh mulai dari TK sampai sekarang:</p>
        <ul>
            <?php foreach ($pendidikan as $pend): ?>
            <li><?=$pend ?></li>
            <?php endforeach; ?>
        </ul>
      </div>
    </main>
    <footer>
      <h2 id="Contact">Contact</h2>
      <a href="https://www.instagram.com/rngina__/" target="_blank"><img src="Image/Instagram.png" alt=""></a><a href="https://github.com/renaegina" target="_blank"><img src="Image/Github.png" alt=""></a><a href="https://www.linkedin.com/in/renaegina/" target="_blank"><img src="Image/Linkedin.png" alt=""></a>
    </footer>
  </body>
</html>