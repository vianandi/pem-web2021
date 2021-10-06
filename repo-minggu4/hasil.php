<?php
    if(isset($_POST['fnisn'])){
        $nisn = $_POST['fnisn'];
        echo "NISN : $nisn";
    }
?>
<br>
<?php
    if(isset($_POST['fasalSekolah'])){
        $asalsekolah = $_POST['fasalSekolah'];
        echo "Asal Sekolah : $asalsekolah";
    }
?>
<?php
    if(isset($_POST['ftahunLulus'])){
        $thlulus = $_POST['ftahunLulus'];
        echo "Tahun Lulus : $thlulus";
    }
?>
<br>
<?php
    if(isset($_POST['fijazah'])){
        $ijazah = $_POST['fijazah'];
        echo "Ijazah : $ijazah";
    }
?>
<br>
<?php
    if(isset($_POST['fnamaLengkap'])){
        $nama = $_POST['fnamaLengkap'];
        echo "Nama Lengkap : $nama";
    }
?>
<br>
<?php
    if(isset($_POST['fnik'])){
        $nik = $_POST['fnik'];
        echo "NIK : $nik";
    }
?>
<br>
<?php
    if(isset($_POST['ftempatLahir'])){
        $tmptlahir = $_POST['ftempatLahir'];
        echo "Tempat Lahir : $tmptlahir";
    }
?>
<br>
<?php
    if(isset($_POST['ftanggalLahir'])){
        $tgllahir = $_POST['ftanggalLahir'];
        echo "Tanggal Lahir : $tgllahir";
    }
?>
<br>
<?php
    if(isset($_POST['fakta'])){
        $akta = $_POST['fakta'];
        echo "Akta Kelahiran : $akta";
    }
?>
<br>
<?php
    if(isset($_POST['fgender'])){
        $gender = $_POST['fgender'];
        echo "Jenis Kelamin : $gender";
    }
?>
<br>
<?php
    if(isset($_POST['fagama'])){
        $agama = $_POST['fagama'];
        echo "Agama : $agama";
    }
?>
<br>
<?php
    if(isset($_POST['falamat'])){
        $alamat = $_POST['falamat'];
        echo "Alamat : $alamat";
    }
?>
<br>
<?php
    if(isset($_POST['fdesa'])){
        $desa = $_POST['fdesa'];
        echo "Desa : $desa";
    }
?>
<br>
<?php
    if(isset($_POST['fkecamatan'])){
        $kecamatan = $_POST['fkecamatan'];
        echo "Kecamatan : $kecamatan";
    }
?>
<br>
<?php
    if(isset($_POST['fkabupaten'])){
        $kabupaten = $_POST['fkabupaten'];
        echo "Kabupaten : $kabupaten";
    }
?>
<br>
<?php
    if(isset($_POST['fprovinsi'])){
        $provinsi = $_POST['fprovinsi'];
        echo "Provinsi : $provinsi";
    }
?>
<br>
<?php
    if(isset($_POST['femail'])){
        $email = $_POST['femail'];
        echo "Email Aktif : $email";
    }
?>
<br>
<br>
<?php
/*=================================================Data Orang Tua*/
    if(isset($_POST['fnomorKK'])){
        $kk = $_POST['fnomorKK'];
        echo "Nomor Kartu Keluarga : $kk";
    }
?>
<br>
<?php
    if(isset($_POST['fkartuKeluarga'])){
        $kartuKeluarga = $_POST['fkartuKeluarga'];
        echo "Lampiran KK : $kartuKeluarga";
    }
?>
<br>
<br>
<?php
/*=================================================Data Ayah*/
    if(isset($_POST['fnamaAyah'])){
        $ayah = $_POST['fnamaAyah'];
        echo "Nama Ayah Kandung : $ayah";
    }
?>
<br>
<?php
    if(isset($_POST['fagamaAyah'])){
        $agamaAyah = $_POST['fagamaAyah'];
        echo "Agama : $agamaAyah";
    }
?>
<br>
<?php
    if(isset($_POST['fpekerjaanAyah'])){
        $pekerjaanAyah = $_POST['fpekerjaanAyah'];
        echo "Pekerjaan : $pekerjaanAyah";
    }
?>
<br>
<br>

<?php
/*=================================================Data Ibu*/
    if(isset($_POST['fnamaIbu'])){
        $namaIbu = $_POST['fnamaIbu'];
        echo "Nama Ibu Kandung : $namaIbu";
    }
?>
<br>
<?php
    if(isset($_POST['fagamaIbu'])){
        $agamaIbu = $_POST['fagamaIbu'];
        echo "Agama : $agamaIbu";
    }
?>
<br>
<?php
    if(isset($_POST['fpekerjaanIbu'])){
        $pekerjaanIbu = $_POST['fpekerjaanIbu'];
        echo "Pekerjaan : $pekerjaanIbu";
    }
?>
<br>
<br>
<?php
    if(isset($_POST['falamatOrtu'])){
        $alamatOrtu = $_POST['falamatOrtu'];
        echo "Alamat Orang Tua : $alamatOrtu";
    }
?>
<br>
<?php
    if(isset($_POST['fdesaOrtu'])){
        $desaOrtu = $_POST['fdesaOrtu'];
        echo "Desa : $desaOrtu";
    }
?>
<br>
<?php
    if(isset($_POST['fkecamatanOrtu'])){
        $kecamatanOrtu = $_POST['fkecamatanOrtu'];
        echo "Kecamatan : $kecamatanOrtu";
    }
?>
<br>
<?php
    if(isset($_POST['fkabupatenOrtu'])){
        $kabupatenOrtu = $_POST['fkabupatenOrtu'];
        echo "Kabupaten : $kabupatenOrtu";
    }
?>
<br>
<?php
    if(isset($_POST['fprovinsiOrtu'])){
        $provinsiOrtu = $_POST['fprovinsiOrtu'];
        echo "Provinsi : $provinsiOrtu";
    }
?>
<br>