<?php
class Lingkaran{
    /**
     * Access Modifier
     * 1. Public : properti /method dapat diakses dimanapun
     * 2. Private : properti/method hanya bisa diakses didalam kelas tersebut
     * 3. Protected : properti/method  mirip seperti, private tapi dapat diakases juga
     * oleh child class
     */

     // properti
    private $jari;
    const PHI = 3.14;

    // method : function yang berada didalam class
    // construction : method yang otomatis berjalan ketika objek dibuat
    public function __construct($r)
    {
        $this->jari = $r;
    }

    public function getLuas()
    {
        return self::PHI * $this->jari * $this->jari;
    }

    public function getKeliling()
    {
        return 2 * self::PHI * $this->jari;
    }
}