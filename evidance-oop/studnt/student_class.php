<?php
//Step 1:
class Student{   
   private $id;
   private $name;
   private $course;
   private $phone;  
   
   private static $file_path="data.txt"; 
   
   //---------------constructor---------------//
   function __construct($_id,$_name,$_course,$_phone){
	   $this->id=$_id;
	   $this->name=$_name;
	   $this->course=$_course;
	   $this->phone=$_phone;
   }
  
  //---------------csv function-------------------//
   public function csv(){
	 return $this->id.",".$this->name.",".$this->course.",".$this->phone.PHP_EOL;  //End Of Line or create new line 
   }
   
   //-----------save function-----------------//
   public function save(){
	   
	      //  $students=file(self::$file_path);  	   
	  	
		   file_put_contents(self::$file_path,$this->csv(),FILE_APPEND);
	   	   
	   //The file_put_contents() writes data to a file.
     // Use FILE_APPEND to avoid deleting the existing content of the file.
   }//end save	
       
   
   //---------------display_students-------------//
   
   public static function display_students(){
	   
	    $students=file(self::$file_path);
      //The file() reads a file into an array.
		
		echo "<b>ID | Name | COURSE | PHONE</b><br/>";
		foreach($students as $student){
				   list($id,$name,$course,$phone)=explode(",",$student);
				   echo "$id | $name | $course | $phone<br/>";
				   
	    }
				
		
   }   

   
   
 //-----------------end functions----------------   

}// Student class



// the trim() function is used to remove whitespace and other predefined characters from both the beginning and the end of a string
   //The explode() function breaks a string into an array.
   //The list() function is used to assign values to a list of variables in one operation.
?>