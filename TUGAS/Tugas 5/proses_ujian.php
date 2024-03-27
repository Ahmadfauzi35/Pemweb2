<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
    <h2 class="text-center">Form Nilai Ujian</h2>
    <hr>

    <?php
    class nilaiujian
    {
        private $nama;
        private $matkul;
        private $uts;
        private $uas;
        private $tugas;
        private $nilai_total;
        private $status;
        private $grade;
        private $predikat;

        public function __construct($nama, $matkul, $uts, $uas, $tugas)
        {
            $this->nama = $nama;
            $this->matkul = $matkul;
            $this->uts = $uts;
            $this->uas = $uas;
            $this->tugas = $tugas;

            $this->hitungNilaiTotal();
            $this->tentukanStatus();
            $this->tentukanGrade();
            $this->tentukanPredikat();
        }

        private function hitungNilaiTotal()
        {
            $this->nilai_total = (30 / 100 * $this->uts) + (35 / 100 * $this->uas) + (35 / 100 * $this->tugas);
        }

        private function tentukanStatus()
        {
            $this->status = ($this->nilai_total > 55) ? 'Lulus' : 'Tidak Lulus';
        }

        private function tentukanGrade()
        {
            if ($this->nilai_total <= 35) {
                $this->grade = "E";
            } elseif ($this->nilai_total <= 55) {
                $this->grade = "D";
            } elseif ($this->nilai_total <= 69) {
                $this->grade = "C";
            } elseif ($this->nilai_total <= 84) {
                $this->grade = "B";
            } elseif ($this->nilai_total <= 100) {
                $this->grade = "A";
            } else {
                $this->grade = "I";
            }
        }

        private function tentukanPredikat()
        {
            if ($this->grade == "E") {
                $this->predikat = "Sangat Kurang";
            } elseif ($this->grade == "D") {
                $this->predikat = "Kurang";
            } elseif ($this->grade == "C") {
                $this->predikat = "Cukup";
            } elseif ($this->grade == "B") {
                $this->predikat = "Memuaskan";
            } elseif ($this->grade == "A") {
                $this->predikat = "Sangat Memuaskan";
            } else {
                $this->predikat = "Tidak Ada";
            }
        }

        public function tampilkanHasil()
        {
            echo "Nama Lengkap : $this->nama";
            echo "<br>Mata Kuliah : $this->matkul";
            echo "<br>Nilai UTS : $this->uts";
            echo "<br>Nilai UAS : $this->uas";
            echo "<br>Nilai Tugas : $this->tugas";
            echo "<br>Nilai Total : $this->nilai_total";
            echo "<br> Status : $this->status";
            echo "<br> Grade : $this->grade";
            echo "<br> Predikat : $this->predikat";
        }
    }

    // Tangkap input form
    $nama = $_GET['nama'];
    $matkul = $_GET['matkul'];
    $uts = $_GET['uts'];
    $uas = $_GET['uas'];
    $tugas = $_GET['tugas'];

    // Buat objek GradeCalculator
    $calculator = new nilaiujian($nama, $matkul, $uts, $uas, $tugas);

    // Tampilkan hasil
    $calculator->tampilkanHasil();
    ?>

</body>

</html>