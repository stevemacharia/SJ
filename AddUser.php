<?php
session_start();
include 'mysqlconnection.php';


//audio
if (isset($_POST['upload_btn'])){
	    $StudentAdmNo=$mysqli->real_escape_string($_POST ['StudentAdmNo']);
        $StudentFirstName = $mysqli->real_escape_string($_POST['StudentFirstName']);
        $StudentSecondName = $mysqli->real_escape_string($_POST['StudentSecondName']);
        $StudentLastName = $mysqli->real_escape_string($_POST['StudentLastName']);
        $StudentClass = $mysqli->real_escape_string($_POST['StudentClass']);


        $sql = "SELECT * FROM S_Students WHERE S_StudentAdmNo  ='$StudentAdmNo' ";
        $result = mysqli_query($mysqli, $sql);

        if (mysqli_num_rows($result) > 0) {   
            $err = "Student Already Exists";
            echo $err;
                 }
            else{
    
				$sql = "INSERT INTO S_Students (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass)"
						."VALUES ('$StudentAdmNo','$StudentFirstName','$StudentSecondName',' $StudentLastName',' $StudentClass')";
						//if the query is successful redirect to home.php
						if ($mysqli->query($sql) === true) {
                            $succ = "Students Details Added succesfully!";
                            echo $succ;
						}
						else {
                            $err1 = "Student Details Could not be Added";
                            echo $err1;
						}
				}

    } 
?>