<?php 

$pageTitle = 'Profil - Telkom University Purwokerto'; 

require 'includes/header.php'; 

?> 

<section class="section"> 

    <div class="container article-body"> 

        <span class="eyebrow">Profil</span> 

        <h1>Tentang Proyek Telkom University Purwokerto</h1> 

        <p class="lead">Halaman ini dibuat untuk Praktikum struktur halaman PHP yang menggunakan header dan footer bersama.</p> 

        <h2>Visi Misi Pembelajaran</h2> 
        
        <p>Mahasiswa dapat memahami hubungan antarmuka web, logika PHP, basis data, dan version control melalui satu proyek terpadu.</p> 

        <h2>Tujuan proyek</h2> 

        <p>Proyek menampilkan profil, Program Studi, Berita, juga Formulir Kontak. Data program studi dan berita dibaca dari database, sedangkan pesan pengguna disimpan menggunakan prepared statement.</p> 

        <div class="alert alert-success">Konten institusi pada website ini bersifat simulasi dan hanya untuk keperluan praktikum.</div> 

    </div> 

</section> 

<section class="section section-soft">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Fokus Pembelajaran</span>
            <h2>Yang dipelajari di praktikum ini</h2>
        </div>
        <ul>
            <li>Version control dengan Git dan GitHub</li>
            <li>Pemrograman web dengan PHP native</li>
            <li>Pengelolaan data dengan MySQL/MariaDB</li>
        </ul>
    </div>
</section>

<?php require 'includes/footer.php'; ?> 

 