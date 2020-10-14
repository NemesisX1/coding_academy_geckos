<?php
    include_once("AWeapon.php");

    class PlasmaRifle extends AWeapon {

        public function __construct() {
            $this->name = "Plasma Rifle";
            $this->damage = 21;
            $this->apcost = 5;
            $this->melee = false;
        }

        public function attack() {
            echo "PIOU\n";
        }
    }
?>