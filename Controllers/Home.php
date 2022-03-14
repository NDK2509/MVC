<?php 
    class Home extends Controller{
        function OnCreate () {
            echo $this->model("KyModel")->getName()["name"];
        }
        function Show () {
            $this->view("KyLayout", [
                "page" => "info",
                "name" => "Nguyen Dang Ky",
                "class" => "PNV23b",
                "age" => 20
            ]);
        }
    }
?>