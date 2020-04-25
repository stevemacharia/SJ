<?php
session_start();
include 'mysqlconnection.php';

 if (isset($_POST['Search_Button']))
 {
     $StudentDetails = $mysqli->real_escape_string($_POST['StudentDetails']);
     $sql = "SELECT * FROM S_Students WHERE '$StudentDetails' IN (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName)";
    
     $result = mysqli_query($mysqli, $sql);
    if (mysqli_num_rows($result) == 1) {
        while($row = mysqli_fetch_assoc($result)){  
            $adm = $row['S_StudentAdmNo'];
            $Fname = $row['S_StudentFirstName'];
            $Sname = $row['S_StudentSecondName'];
            $Lname = $row['S_StudentLastName'];
            $Sclass = $row['S_StudentClass'];
           

            }
            }
    
        else {
            echo "<script type='text/javascript'>
            alert('There is no records of that student !!. Add New Record');
            location='index.php';
            </script>";
        }

}

?>

