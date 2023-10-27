<?php
    class laptop {
        private $pemilik = "Fathur";
        private $merk = "Lenovo";

        public function __construct() {
            echo "Ini berasal dari Constructor laptop";
        }
        public function hidupkan_laptop() {
            return "Hidupkan laptop $this->merk punya $this->pemilik";
        }
        public function __destruct() {
            echo "Ini berasal dari Destructor laptop";
        }
    }
    // buat objek dari class laptop (instansiasi)
    $laptop_fathur = new laptop();
    echo "<br />";
    echo $laptop_fathur->hidupkan_laptop();
    echo "<br />";
?>