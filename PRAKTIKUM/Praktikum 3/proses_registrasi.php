<?php
// tangkap input form registrasi
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$skills = $_POST['skills'];
$domisili = $_POST['domisili'];
$email = $_POST['email'];

$nilai_skills = [
    'HTML' => '10',
    'CSS' => '10',
    'Javascript' => '20',
    'RWD Bootstrap' => '20',
    'PHP' => '30',
    'Python' => '30',
    'Java' => '50',
];

$skors_skill = 0;
foreach ($skills as $value) {
    $skors_skill += $nilai_skills[$value];
};

// Menentukan predikat berdasarkan skors skill
if ($skors_skill >= 150) {
    $predikat = "Sangat Baik";
} elseif ($skors_skill >= 100) {
    $predikat = "Baik";
} elseif ($skors_skill >= 60) {
    $predikat = "Cukup";
} elseif ($skors_skill >= 40) {
    $predikat = "Kurang";
} else {
    $predikat = "Tidak Memadai";
}

echo "NIM: $nim";
echo "<br>Nama Lengkap: $nama";
echo "<br>Jenis Kelamin: $jk";
echo "<br>Program Studi: $prodi";
echo "<br>Skills:" . join(',',$skills);
echo "<br>Tempat Domisili: $domisili";
echo "<br>Email: $email";
echo "<br>Skors Skills: $skors_skill";
echo "<br>Predikat: $predikat";