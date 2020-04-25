<?php
session_start();
include 'mysqlconnection.php';


//audio
if (isset($_POST['AddStudent_btn'])){
	    $StudentAdmNo=$mysqli->real_escape_string($_POST ['StudentAdmNo']);
        $StudentFirstName = $mysqli->real_escape_string($_POST['StudentFirstName']);
        $StudentSecondName = $mysqli->real_escape_string($_POST['StudentSecondName']);
        $StudentLastName = $mysqli->real_escape_string($_POST['StudentLastName']);
        $StudentClass = $mysqli->real_escape_string($_POST['StudentClass']);


        $sql = "SELECT * FROM S_Students WHERE S_StudentAdmNo  ='$StudentAdmNo' ";
        $result = mysqli_query($mysqli, $sql);

        if (mysqli_num_rows($result) > 0) {   
         
            echo "<script type='text/javascript'>
            alert('Student Already Exists');
            location='index.php';
            </script>";
            
                 }
            else{
    
				$sql = "INSERT INTO S_Students (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass)"
						."VALUES ('$StudentAdmNo','$StudentFirstName','$StudentSecondName',' $StudentLastName',' $StudentClass')";
						//if the query is successful redirect to index.php
						if ($mysqli->query($sql) === true) {
                            
                            echo "<script type='text/javascript'>
                            alert('Succesfully Added New Student');
                            location='index.php';
                            </script>";
						}
						else {
                            echo "<script type='text/javascript'>
                            alert('Student Details Could not be Added');
                            location='index.php';
                            </script>";
						}
				}

    } 
?>