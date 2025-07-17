<?php
class Trainee {
    private $id;
    private $name;
    function __construct($tainID,$trainName){
        $this->id=$tainID;
        $this->name=$trainName;
        
    }
    function combine(){
        return $this->id.",".$this->name.PHP_EOL;
    }
    function save(){
        file_put_contents("store.txt",$this->combine(),FILE_APPEND);
    }

    static function  display(){
        $myArr = file("store.txt");
        
        // print_r($myArr);
        echo "<br><br>";
        echo "<b>ID | Name</b><br/>";
		
        foreach($myArr as $singleData){
            list($id,$name)=explode(",",$singleData);
            echo "$id | $name <br>";
        }


    }
}

?>