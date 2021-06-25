<?php 
 $server = "localhost";
 $username = "root";
 $password = "1234";
 $db = "robot_db";

 if(isset($_POST['Save']))
 {		
 
 //Check if connection was successful

   $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
   $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Database Connected";
try{
   $en1 = $_POST['en1'];
$en2 = $_POST['en2'];
$en3 = $_POST['en3'];
$en4 = $_POST['en4'];
$en5 = $_POST['en5'];
$en6 = $_POST['en6'];
$statOff = 0;
	


   $pdoQuery= "INSERT INTO `engines`(`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`,`STATUS`) VALUES (:en1,:en2,:en3,:en4,:en5,:en6,:statOff)";
   $pdoResult = $handle->prepare($pdoQuery);
   $pdoExecute= $pdoResult->execute(array(":en1"=>$en1,":en2"=>$en2,":en3"=>$en3,":en4"=>$en4,":en5"=>$en5,":en6"=>$en6,":statOff"=>$statOff));
   if($pdoExecute)
   {
       echo "\r \n Data Inserted";
   }
   
   else
   {
       echo "\r \n Data Not Inserted";
   }
  }
  catch(Exception $e){
    echo 'something went wrong with database connection!';

  }
 }





 if(isset($_POST['Play']))
 {		
 
 //Check if connection was successful

   $handle = new PDO("mysql:host=$server;dbname=$db", "$username", "$password");
   $handle->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Database Connected";
try{
   $en1 = $_POST['en1'];
$en2 = $_POST['en2'];
$en3 = $_POST['en3'];
$en4 = $_POST['en4'];
$en5 = $_POST['en5'];
$en6 = $_POST['en6'];
$statOff = 1;
	


   $pdoQuery= "INSERT INTO `STATUS_ON`(`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`) VALUES (:en1,:en2,:en3,:en4,:en5,:en6)";
   $pdoResult = $handle->prepare($pdoQuery);
   $pdoExecute= $pdoResult->execute(array(":en1"=>$en1,":en2"=>$en2,":en3"=>$en3,":en4"=>$en4,":en5"=>$en5,":en6"=>$en6));
   if($pdoExecute)
   {
       echo "\r \n Data Inserted";
   }
   else{
       echo "\r \n Data Not Inserted";
   }
   
   $pdoQuery2= "INSERT INTO `engines`(`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`,`STATUS`) VALUES (:en1,:en2,:en3,:en4,:en5,:en6,:statOff)";
   $pdoResult2 = $handle->prepare($pdoQuery2);
   $pdoExecute2= $pdoResult2->execute(array(":en1"=>$en1,":en2"=>$en2,":en3"=>$en3,":en4"=>$en4,":en5"=>$en5,":en6"=>$en6,":statOff"=>$statOff));
   if($pdoExecute2)
   {
       echo "\r \n Data Inserted";
   }
   
   else
   {
       echo "\r \n Data Not Inserted";
   }
}
 
  catch(Exception $e){
    echo 'something went wrong with database connection!';

  }




  


 
 

 }
?>




