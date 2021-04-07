<?php
class BmiPasien {
    public $tinggi;
    public $berat;
    function __construct ($berat, $tinggi){
        $this->tinggi = $tinggi;
        $this->berat = $berat;
    }

    function hasilBMI (){
        $bmi = $this->berat / pow($this->tinggi/100, 2);
        return number_format($bmi,2,',','.');
    }

    function statusBMI (){
        $bmi = $this->berat / pow($this->tinggi/100, 2);
        if ($bmi < 18.5){
            return "Kekurangan berat badan";
        }elseif ($bmi >= 18.5 && $bmi <= 24.9){
            return "Berat Normal (Ideal)";
        }elseif ($bmi >= 25.0 && $bmi <= 29.9){
            return "Kelebihan berat badan";
        }elseif ($bmi >= 30.0){
            return "Kegemukan (Obesitas)";
        }
    }
}
?>