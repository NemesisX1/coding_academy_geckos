<?php
    include_once("Character.php");
    class Warrior extends Character
    {
        const CLASSE = "Warrior";

        public function __construct($name) {
            $this->name = $name;
            $this->life = 100;
            $this->agility = 10;
            $this->strength = 8;
            $this->wit = 3;
            echo $this->name.": I'll engrave my name in history!\n";
        }

        public function MoveRight() {
            echo $this->name.": moves right like a bad boy.\n";
        }

        public function MoveLeft() {
            echo $this->name.": moves left like a bad boy.\n";
        }

        public function MoveUp() {
            echo $this->name.": moves up like a bad boy.\n";
        }

        public function MoveDown() {
            echo $this->name.": moves down like a bad boy.\n";
        }

        public function getClasse() {
            return self::CLASSE;
        }

        public function attack() {
            echo $this->name.": I'll crush you with my hammer!\n";
        }

        public function __destruct() {
            echo $this->name.": Aarrg I can't believe I'm dead...\n";
        }
    }
?>