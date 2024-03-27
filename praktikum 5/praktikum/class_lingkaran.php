<?php 
class Lingkaran{
    // **access modifier : 
    // 1. public: properti dapat diakses dimanapun.
    // 2. private: properti hanya dapat diakses di dalam class tersebut.
    // 3. protected: mirip seperti private tapi dapat diakses juga oleh child class.

    //method: function yang berapa di dalam class
    // constructor: method yang otomatis berjalan ketika objek dibuat 
    private $jari;
    const PHI = 3.14;
    public function __construct( $r ){
        $this->jari = $r;
    }
    public function getLuas(){
        return self::PHI * $this->jari * $this->jari;
    }
    public function getKeliling(){
        return 2 * self::PHI * $this->jari;
    }
}
?> 