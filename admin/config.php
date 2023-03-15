<?php
    class Database{

        private $dbc  = "mysql:host=localhost;dbname=panel";
        private $user = "root";
        private $pass = "";

        public $db;

        public function __construct(){
            try {
                $this->db = new PDO($this->dbc,$this->user,$this->pass);
            } catch (PDOException $e) {
                echo 'Hata :'.$e->getMessage();
            }
            return $this->db;
        }

        public function clear_input($string) { 
            $string = preg_replace ('/<[^>]*>/', ' ', $string); 
            $string = str_replace("\r", '', $string);
            $string = str_replace("\n", ' ', $string);
            $string = str_replace("\t", ' ', $string);
            $string = trim(preg_replace('/ {2,}/', ' ', $string));
            $string = htmlspecialchars($string);
            return $string; 
        }

        public function showMessage($type,$message){
            return '<div style="font-size: 14px;" class="alert alert-'.$type.' alert-dismissible" role="alert">
                        '.$message.'
                    </div>';
        }
    }

?>