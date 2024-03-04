<?php
//tangkap input form
$nama = $_GET['nama'];
$matkul = $_GET['matkul'];
$uts = $_GET['uts'];
$uas = $_GET['uas'];
$tugas = $_GET['tugas'];

//hitung nilai total (30% uts + 35% uas + 35% tugas)
$total = (30/100 * $uts) + (35/100 * $uas) + (35/100 * $tugas);

if ($total > 55){
    $status = "Lulus";
} else{
    $status = "Tidak Lulus";
}

// tampilan grade
if  ($total > 84){
    $grade = "A";
    $predikat = "Sangat Memuaskan";
}
elseif ($total > 69){
    $grade = "B";
    $predikat = "Memuaskan";
}
elseif ($total > 55){
    $grade = "C";
    $predikat = "Cukup";
}
elseif ($total > 35){
    $grade = "D";
    $predikat = "Kurang";
}
elseif ($total > 0){
    $grade = "E";
    $predikat = "Sangat Kurang";
}
else {
    $grade = "I";
    $predikat = "Tidak ada";
}


// tampilan hasil form
echo "Nama Lengkap: $nama";
echo "<br> Mata Kuliah: $matkul";
echo "<br> Nilai UTS: $uts";
echo "<br> Nilai UAS: $uas";
echo "<br> Nilai Tugas: $tugas";
echo "<br> Nilai Total: $total";
echo "<br> Status: $status";
echo "<br> Grade: $grade";
echo "<br> Predikat: $predikat";
