<?php
session_start();
include 'mysqlconnection.php';

$S_IssuanceName = $_SESSION['adminname'];

$AdmNo  = $_GET["SAdm"];

        $sql = "SELECT * FROM S_Students WHERE S_StudentAdmNo  ='$AdmNo' ";
        $result = mysqli_query($mysqli, $sql);

        if (mysqli_num_rows($result) > 0) 
        {   
            while($row = mysqli_fetch_assoc($result))
            {  
                $adm = $row['S_StudentAdmNo'];
                $Fname = $row['S_StudentFirstName'];
                $Sname = $row['S_StudentSecondName'];
                $Lname = $row['S_StudentLastName'];
                $Sclass = $row['S_StudentClass'];
               
                
                if (isset($_POST['Print_Button']))
                {
                    $STerm=$mysqli->real_escape_string($_POST ['STerm']);
                    $FeeAmmount=$mysqli->real_escape_string($_POST ['FeeAmmount']);
                    
                    if($STerm == "First Term"){
                        $S_TermFee = 75000;
                        $S_FeeBalance =$FeeAmmount-$S_TermFee ;

                        if( $S_FeeBalance => 0)
                        {
                            $S_FeeStatus="cleared";
                            $sql = "INSERT INTO S_Fees (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_AmmountPayed)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm',$S_TermFee,'$FeeAmmount')";

                            $sql2 = "INSERT INTO S_Receipts (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_FeeBalance,S_FeeStatus,S_AmmountPayed,S_IssuanceName)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm','$S_TermFee',$S_FeeBalance,'$S_FeeStatus','$FeeAmmount','$S_IssuanceName')";

                            //if the query is successful redirect 
                            if ($mysqli->query($sql) && $mysqli->query($sql2) === true) 
                            {
                                echo "<script type='text/javascript'>
                                alert('Proceed to Print1 ');
                                location='index.php';
                                </script>";
                            }
                            else
                            {
                                echo "<script type='text/javascript'>
                                    alert('Receipt could not be printed');
                                    location='index.php';
                                    </script>";
                            }
                        }
                        else 
                        {
                            $S_FeeStatus ="Not Cleared";
                            $sql = "INSERT INTO S_Fees (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_AmmountPayed)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm',$S_TermFee,'$FeeAmmount')";

                            $sql2 = "INSERT INTO S_Receipts (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_FeeBalance,S_AmmountPayed,S_IssuanceName)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm','$S_TermFee',$S_FeeBalance,'$FeeAmmount','$S_IssuanceName')";

                            //if the query is successful redirect 
                            if ($mysqli->query($sql) && $mysqli->query($sql2) === true) 
                            {
                                echo "<script type='text/javascript'>
                                alert('Proceed to Print1 ');
                                location='index.php';
                                </script>";
                            }
                            else
                            {
                                echo "<script type='text/javascript'>
                                    alert('Receipt could not be printed');
                                    location='index.php';
                                    </script>";
                            }

                        }
                    }


                    else if($STerm == "Second Term")
                    {
                        $S_TermFee = 50000;
                        $S_FeeBalance =$FeeAmmount-$S_TermFee ;
                        if($S_FeeBalance =>0)
                        {
                            $S_FeeStatus="cleared";
                            $sql = "INSERT INTO S_Fees (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_AmmountPayed)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm',$S_TermFee,'$FeeAmmount')";

                            $sql2 = "INSERT INTO S_Receipts (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_FeeBalance,S_FeeStatus,S_AmmountPayed,S_IssuanceName)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm','$S_TermFee',$S_FeeBalance,'$S_FeeStatus','$FeeAmmount','$S_IssuanceName')";

                            //if the query is successful redirect 
                            if ($mysqli->query($sql) && $mysqli->query($sql2) === true) 
                            {
                                echo "<script type='text/javascript'>
                                alert('Proceed to Print1 ');
                                location='index.php';
                                </script>";
                            }
                            else
                            {
                                echo "<script type='text/javascript'>
                                    alert('Receipt could not be printed');
                                    location='index.php';
                                    </script>";
                            }
                        }
                        else 
                        {
                            $S_FeeStatus ="Not Cleared";
                            $sql = "INSERT INTO S_Fees (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_AmmountPayed)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm',$S_TermFee,'$FeeAmmount')";

                            $sql2 = "INSERT INTO S_Receipts (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_FeeBalance,S_AmmountPayed,S_IssuanceName)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm','$S_TermFee',$S_FeeBalance,'$FeeAmmount','$S_IssuanceName')";

                            //if the query is successful redirect 
                            if ($mysqli->query($sql) && $mysqli->query($sql2) === true) 
                            {
                                echo "<script type='text/javascript'>
                                alert('Proceed to Print1 ');
                                location='index.php';
                                </script>";
                            }
                            else
                            {
                                echo "<script type='text/javascript'>
                                    alert('Receipt could not be printed');
                                    location='index.php';
                                    </script>";
                            }

                        }
                    }

                    else if($STerm == "Third Term")
                    {
                        $S_TermFee = 25000;

                        $S_FeeBalance =$FeeAmmount-$S_TermFee ;
                        if($S_FeeBalance =>0)
                        {
                            $S_FeeStatus="cleared";
                            $sql = "INSERT INTO S_Fees (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_AmmountPayed)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm',$S_TermFee,'$FeeAmmount')";

                            $sql2 = "INSERT INTO S_Receipts (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_FeeBalance,S_FeeStatus,S_AmmountPayed,S_IssuanceName)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm','$S_TermFee',$S_FeeBalance,'$S_FeeStatus','$FeeAmmount','$S_IssuanceName')";

                            //if the query is successful redirect 
                            if ($mysqli->query($sql) && $mysqli->query($sql2) === true) 
                            {
                                echo "<script type='text/javascript'>
                                alert('Proceed to Print1 ');
                                location='index.php';
                                </script>";
                            }
                            else
                            {
                                echo "<script type='text/javascript'>
                                    alert('Receipt could not be printed');
                                    location='index.php';
                                    </script>";
                            }
                        }
                        else 
                        {
                            $S_FeeStatus ="Not Cleared";
                            $sql = "INSERT INTO S_Fees (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_AmmountPayed)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm',$S_TermFee,'$FeeAmmount')";

                            $sql2 = "INSERT INTO S_Receipts (S_StudentAdmNo,S_StudentFirstName,S_StudentSecondName,S_StudentLastName,S_StudentClass,S_Term,S_TermFee,S_FeeBalance,S_AmmountPayed,S_IssuanceName)"
                            ."VALUES ('$adm','$Fname','$Sname','$Lname','$Sclass','$STerm','$S_TermFee',$S_FeeBalance,'$FeeAmmount','$S_IssuanceName')";

                            //if the query is successful redirect 
                            if ($mysqli->query($sql) && $mysqli->query($sql2) === true) 
                            {
                                echo "<script type='text/javascript'>
                                alert('Proceed to Print1 ');
                                location='index.php';
                                </script>";
                            }
                            else
                            {
                                echo "<script type='text/javascript'>
                                    alert('Receipt could not be printed');
                                    location='index.php';
                                    </script>";
                            }
                        }
                    }



                }
            }
        }
        else {
            echo "error";
        }


?>