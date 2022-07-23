<?php

    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try {
                //Production
                $conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=n6m0h6r4_apirestphpmysql","n6m0h6r4_soporte","2xVMLl6wUEtu");

                //QA
                //$conectar = $this->dbh = new PDO("mysql:local=localhost;dbname=webservice","root","");

                return $conectar;
            } catch (Exception $e) {
                print "Error DB!: " . $e->getMessage() . "<br/>";
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8");
        }

    }

?>    