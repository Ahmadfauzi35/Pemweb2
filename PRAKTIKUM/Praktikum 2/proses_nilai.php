<?php
if (isset($_GET['submit'])) {
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $tugas = $_GET['tugas'];
    $total_nilai = (30 / 100 * $uts) + (35 / 100 * $uas) + (35 / 100 * $tugas);

    echo "Nama : $nama <br>";
    echo "Mata Kuliah : $matkul <br>";
    echo "Nilai UTS : $uts <br>";
    echo "Nilai UAS : $uas <br>";
    echo "Nilai Tugas : $tugas <br>";
    echo "Nilai Total : $total_nilai <br>";
    

    switch ($total_nilai) {
        case $total_nilai >= 85:
            echo "Grade : A";
            echo "<br> Predikat : Sangat Memuaskan";
            break;
        case $total_nilai >= 70:
            echo "Grade : B";
            echo "<br> Predikat : Memuaskan";
            break;
        case $total_nilai >= 60:
            echo "Grade : C";
            echo "<br> Predikat : Cukup";
            break;
        case $total_nilai >= 40:
            echo "Grade : D";
            echo "<br> Predikat : Kuarang";
            break;
        default:
            echo "Grade : E";
            echo "<br> Predikat : Sangat Kurang";
            break;
    }
} else {
    echo "<script>alert('Kamu harus isi form terlebih dahulu!')</script>";
    echo '<meta http-equiv="refresh" content="0; url=form.php">';
}