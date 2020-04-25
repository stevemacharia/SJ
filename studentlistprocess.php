<?php
session_start();
include 'mysqlconnection.php';

    $results_per_page = 100;
    if (isset($_GET["page"])) {
    $page  = $_GET["page"]; 
    }
    else { $page=1; 
    };
    $start_from_student = ($page-1) * $results_per_page;

    $FormOne = 1;
    $FormTwo = 2;
    $FormThree = 3;
    $FormFour = 4;

    $result1 = $mysqli->query("SELECT *FROM S_Students WHERE S_StudentClass = $FormOne ORDER by idS_student ASC LIMIT $start_from_student, ".$results_per_page ) ;
    $result2 = $mysqli->query("SELECT *FROM S_Students WHERE S_StudentClass = $FormTwo ORDER by idS_student ASC LIMIT $start_from_student, ".$results_per_page ) ;
    $result3 = $mysqli->query("SELECT *FROM S_Students WHERE S_StudentClass = $FormThree ORDER by idS_student ASC LIMIT $start_from_student, ".$results_per_page ) ;
    $result4 = $mysqli->query("SELECT *FROM S_Students WHERE S_StudentClass = $FormFour ORDER by idS_student ASC LIMIT $start_from_student, ".$results_per_page ) ;
   
    if ($result1 -> num_rows > 0) {
        // output data of each row
        $student_views = '';
        $counter = 1;
       while($row = mysqli_fetch_assoc($result1)){
           $student_views1 .= '
           <tbody>
           <td> '.$counter.'</td> 
           <td> '.$row['S_StudentAdmNo'].' </td> 
           <td> '.$row['S_StudentFirstName'].' </td>
           <td>'.$row['S_StudentSecondName'].'</td>
           <td>'.$row['S_StudentClass'].'</td>
           <td>'.$row['S_StudentSecondNam'].'</td>
           <td> <button type="button" class="btn ">Edit</button></td>
           </tbody>';
            $counter ++;
       }
    }

    if ($result2 -> num_rows > 0) {
        // output data of each row
        $student_views2 = '';
        $counter = 1;
       while($row = mysqli_fetch_assoc($result2)){
           $student_views2 .= '
           <tbody>
           <td> '.$counter.'</td> 
           <td> '.$row['S_StudentAdmNo'].' </td> 
           <td> '.$row['S_StudentFirstName'].' </td>
           <td>'.$row['S_StudentSecondName'].'</td>
           <td>'.$row['S_StudentClass'].'</td>
           <td>'.$row['S_StudentSecondNam'].'</td>
           <td> <button type="button" class="btn">Edit</button></td>
           </tbody>';
            $counter ++;
       }
    }

    if ($result3 -> num_rows > 0) {
        // output data of each row
        $student_views = '';
        $counter = 1;
       while($row = mysqli_fetch_assoc($result2)){
           $student_views3 .= '
           <tbody>
           <td> '.$counter.'</td> 
           <td> '.$row['S_StudentAdmNo'].' </td> 
           <td> '.$row['S_StudentFirstName'].' </td>
           <td>'.$row['S_StudentSecondName'].'</td>
           <td>'.$row['S_StudentClass'].'</td>
           <td>'.$row['S_StudentSecondNam'].'</td>
           <td> <button type="button" class="btn btn-primary">Edit</button></td>
           </tbody>';
            $counter ++;
       }
    }

    if ($result4 -> num_rows > 0) {
        // output data of each row
        $student_views = '';
        $counter = 1;
       while($row = mysqli_fetch_assoc($result4)){
           $student_views4 .= '
           <tbody>
           <td> '.$counter.'</td> 
           <td> '.$row['S_StudentAdmNo'].' </td> 
           <td> '.$row['S_StudentFirstName'].' </td>
           <td>'.$row['S_StudentSecondName'].'</td>
           <td>'.$row['S_StudentClass'].'</td>
           <td>'.$row['S_StudentSecondNam'].'</td>
           <td> <button type="button" class="btn btn-light">Edit</button></td>
           </tbody>';
            $counter ++;
       }
    }
    
    $student_pages = $mysqli->query("SELECT *FROM S_Users");
    /* determine number of rows result set */
    $row_cnt = $student_pages->num_rows;

    
        $total_pages = ceil($row_cnt / $results_per_page); // calculate total pages with results
      if ($total_pages > 1) {
        $student_pagination ='';
        for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            $student_pagination .= "<li class='page-item'><a href='accounts.php?page=".$i."'class='page-link curPage' >".$i ."</a> </li>";
              if ($i==$page);
              
          };
         }
        
    
  
    /* close result set */
    $student_pages->close();

?>