<?php
include 'search.php';
session_start();
if ( isset( $_SESSION['adminname'] ) ) {
    // Grab user data from the database using the user_id
    // Let them access the "logged in only" pages
} else {
    // Redirect them to the login page
    header("Location: login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>HOME</title>
<body>  
            <!---navbar-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light  sticky-top">
                <a class="navbar-brand" href="index.php">SAJILONI GIRLS </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    </ul>
                    <ul class="navbar-nav mx-auto mt-2 mt-lg-0">
                            <!--form-->   
                            <form class="form-inline" action="index.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                <input class="form-control mr-sm-2" name="StudentDetails"  type="text" placeholder="Enter Student Name or Adm No">
                                <button class="btn btn-outline-danger" name="Search_Button" type="submit">Search</button>
                            </form>
                            <!--form--> 
                    </ul> 
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="navbardrop" data-toggle="dropdown" tabindex="-1" >
                            <img src="css/images/img_avatar.png" class="rounded-circle" alt="Cinque Terre" width="25" height="25">
                            &nbsp <?php echo $_SESSION['adminname'] ?>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="http://localhost/systems/sajiloni%20girls/index.php#v-pills-account"><i class="fas fa-user-plus"></i>&nbsp Account</a>
                            <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt"></i>&nbsp Log out </a>
                            
                        </div>
                    </li>
                    
                    </ul>   
                </div>
            </nav>
            <!---navbar-->
            <!--Main Body Content-->
                <div class="row">
                        <!---Vertical navbar-->
                        <div class="col-2" id="ColVert">
                            <!-- A vertical navbar -->
                            <nav class="navbar  " id="Vert">
                            <!-- Links -->
                                <ul class="navbar-nav">
                                    <br>
                                    <h5 id="DHeader"><span class="lnr lnr-home"></span> &nbsp Dashboard</h5>
                                    <div class="nav flex-column nav" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <!---fees-->
                                        <a class="nav-link active" id="v-pills-fees-tab" data-toggle="pill" href="#v-pills-fees" role="tab" aria-controls="v-pills-fees" aria-selected="true" style="margin-top:20px;">
                                        &nbsp&nbsp&nbsp&nbsp<i class="fas fa-chart-bar"></i>&nbsp Fees   </a>
                                        <!---fees-->

                                        <!---Students-->
                                        <a class="nav-link" id="v-pills-students-tab" data-toggle="pill" href="#v-pills-students" role="tab" aria-controls="v-pills-students" aria-selected="false">&nbsp&nbsp&nbsp&nbsp<i class="fas fa-users"></i>&nbsp Students </a>
                                        <!---Students-->

                                        <!--Receipts-->
                                        <a class="nav-link" id="v-pills-receipts-tab" data-toggle="pill" href="#v-pills-receipts" role="tab" aria-controls="v-pills-receipts" aria-selected="false">&nbsp&nbsp&nbsp&nbsp<i class="fas fa-file-invoice"></i> 
                                        &nbsp Receipts</a>
                                        <!--Receipts-->

                                        <!--Account-->
                                        <a class="nav-link" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false" style="margin-bottom:20px;">
                                        &nbsp&nbsp&nbsp&nbsp<i class="fas fa-user-plus"></i>&nbsp Account &nbsp</a>
                                        <!--Account-->
                                    </div>
                                </ul>
                            </nav>
                        </div>
                        <!---Vertical navbar-->

                        <!---Main Content-->
                        <div class="col-10" id="MainContent">
                            <div class="tab-content" id="v-pills-tabContent">
                                <!---fees-->
                                    <div class="tab-pane fade show active " id="v-pills-fees" role="tabpanel" aria-labelledby="v-pills-fees-tab"> 
                                            <br>

                                        <!--navbar-->
                                        <nav class="navbar navbar-expand-sm bg-light navbar-light" id="StudentListNavbar">
                                            <!-- Links -->
                                            <ul class="navbar-nav mr-auto">
                                                    <li class="nav-item">
                                                    <a class="nav-link" style="color:#ff4141;" href="#">FEES</a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link"  href="#">/ Total Students
                                                    <span class="badge badge-danger">5831</span>
                                                    </a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link"  href="#">TERM ONE :
                                                    <span class="badge badge-danger">5831</span>
                                                    </a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link"  href="#">TERM TWO:
                                                    <span class="badge badge-danger">5831</span>
                                                    </a>
                                                    </li>
                                                    <li class="nav-item">
                                                    <a class="nav-link"  href="#">TERM THREE:
                                                    <span class="badge badge-danger">5831</span>
                                                    </a>
                                                    </li>
                                                    
                                            </ul>
                                            <span class="navbar-text" style="color:#ff4141;">
                                            <span class="lnr lnr-home"></span>&nbsp / Dashboard
                                            </span>
                                        </nav>
                                        <!--navbar-->
                                        <div class="jumbotron" id="FeeSearch">
                                                <!--form-->   
                                                    <form class="form" action="index.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                                        <input class="form-control form-control-lg mr-sm-2" type="text" name="StudentDetails" placeholder="Enter Student Name or Adm No">
                                                        <br>
                                                        <button class="btn btn-outline-danger btn-block" id="FormSearchBtn"name="Search_Button"type="submit">Search</button>
                                                    </form>
                                                <!--form-->
                                        </div>

                                            <div class="jumbotron" id="StudentDetailsTable">
                                            <h6>Student Details</h6>
                                                <!--table-->
                                                <form class="form" action="AddFee.php?SAdm=<?php echo $adm ?>" id="SRForm" method="POST" enctype="multipart/form-data" autocomplete="off">
                                                    <table class="table table-hover">
                                                        <thead>
                                                        <tr>
                                                        
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td>Student Adm No :</td>
                                                            <td><?php echo $adm ?></td>                                           
                                                        </tr>
                                                        <tr>
                                                            <td>Student Name</td>
                                                            <td><?php echo $Fname; echo $Sname; echo $Lname;  ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Class</td>
                                                            <td><?php echo $Sclass ?>    </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Select Term</td>
                                                            <td>
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="STerm" value="First Term">First Term
                                                                </label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="STerm" value="Second Term">Second Term
                                                                </label>
                                                                </div>
                                                                <div class="form-check-inline   ">
                                                                <label class="form-check-label">
                                                                    <input type="radio" class="form-check-input" name="STerm" value="Third Term">Third Term
                                                                </label>
                                                            </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Ammount of Fees Payed</td>
                                                            <td>
                                                                <input class="form-control form-control-sm mr-sm-2" type="text" name="FeeAmmount" placeholder="Ammount of Fees Payed in KES">
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <button class="btn btn-outline-danger btn-block" id="Print_Button" name="Print_Button"type="submit">Print Receipt</button>
                                                </form>
                                                <!--table-->
                                            </div>
                                    </div>
                                <!---fees-->
                                <!---Students-->
                                    <div class="tab-pane fade " id="v-pills-students" role="tabpanel" aria-labelledby="v-pills-students-tab">
                                        <div class="tab-pane fade " id="v-pills-students" role="tabpanel" aria-labelledby="v-pills-students-tab">
                                            <br>
                                            <!--navbar-->
                                            <nav class="navbar navbar-expand-sm bg-light navbar-light" id="StudentListNavbar">
                                                    <!-- Links -->
                                                    <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item">
                                                        <a class="nav-link" style="color:#ff4141;" href="#">STUDENTS
                                                        </a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link"  href="#">/ Total Students
                                                        <span class="badge badge-danger">5831</span>
                                                        </a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link"  href="#">Form One
                                                        <span class="badge badge-danger">5831</span>
                                                        </a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link"  href="#">Form Two
                                                        <span class="badge badge-danger">5831</span>
                                                        </a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link"  href="#">Form Three
                                                        <span class="badge badge-danger">5831</span>
                                                        </a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link"  href="#">Form Four
                                                        <span class="badge badge-danger">5831</span>
                                                        </a>
                                                        </li>
                                                    </ul>
                                                    <span class="navbar-text" style="color:#ff4141;">
                                                    <span class="lnr lnr-home"></span>&nbsp / Dashboard
                                                    </span>
                                            </nav>
                                            <!--navbar-->
                                            <div class="jumbotron" id="StudentsContent">     
                                                <br>
                                                <div class="row">
                                                    <div class="col-sm-4">    
                                                        <!--form-->
                                                        <form class="form-inline" id="FormSearch" action="/action_page.php">
                                                            <div class="form-group">
                                                            <input type="text" class="form-control form-control-lg" placeholder="Enter student Adm No/Name" id="usr" name="username">
                                                            </div> &nbsp&nbsp&nbsp
                                                            <span class="lnr lnr-magnifier"></span>
                                                        </form>
                                                        <!--form-->
                                                    </div>
                                                    <div class="col-sm-4"> 
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class="col-sm-4"> 
                                                    <!--navbar-->
                                                        <nav class="navbar navbar-expand-sm bg-white navbar-light">
                                                            <!-- Links -->
                                                            <ul class="navbar-nav">
                                                                <li class="nav-item">
                                                                    <button type="button" id="AddNewStudentBtn"class="btn btn-lg btn-danger">Add New Student
                                                                    </button>
                                                                    <!-- The Modal -->
                                                                    <div class="modal fade" id="myModal">
                                                                        <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                        
                                                                            <!-- Modal Header -->
                                                                            <div class="modal-header">
                                                                            <h4 class="modal-title">Add New Student</h4>
                                                                            <button type="button" class="close" data-dismiss="modal">×</button>
                                                                            </div>
                                                                            
                                                                            <!-- Modal body -->
                                                                            <div class="modal-body">
                                                                            <form class="form-signin" action="AddStudent.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                                                                <div class="form-group row">
                                                                                    <label for="StudentAdmNo" class="col-sm-2 col-form-label">Student Adm No</label>
                                                                                    <div class="col-sm-10">
                                                                                    <input type="number" class="form-control" name="StudentAdmNo" id="StudentAdmNo">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="StudentFirstName" class="col-sm-2 col-form-label">Students First Name</label>
                                                                                    <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" name="StudentFirstName" id="StudentFirstName">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="StudentSecondName" class="col-sm-2 col-form-label">Students Second Name</label>
                                                                                    <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" name="StudentSecondName" id="StudentSecondName">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="StudentLastName" class="col-sm-2 col-form-label">Students Last Name</label>
                                                                                    <div class="col-sm-10">
                                                                                    <input type="text" class="form-control" name="StudentLastName" id="StudentLastName">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group row">
                                                                                    <label for="StudentClass" class="col-sm-2 col-form-label">Students Class</label>
                                                                                    <div class="col-sm-10">
                                                                                        <select class="form-control" name="StudentClass" id="StudentClass">
                                                                                            <option></option>
                                                                                            <option>1</option>
                                                                                            <option>2</option>
                                                                                            <option>3</option>
                                                                                            <option>4</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="form-group row">
                                                                                    <label  class="col-sm-2 col-form-label"></label>
                                                                                    <div class="col-sm-10">
                                                                                    <button type="submit" name="AddStudent_btn" id="AddStudent_btn" class=" btn btn-outline-danger btn-block">Add Student</button>
                                                                                    </div>
                                                                                </div>
                                                                            </form>
                                                                            </div>
                                                                            <!-- Modal body -->
                                                                            
                                                                            
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                                    <!-- The Modal -->
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                        <!--navbar-->
                                                    </div>
                                                </div>
                                                
                                                <!--navs-->
                                                <!-- Nav tabs -->
                                                    <ul class="nav nav-tabs justify-content-center" role="tablist" id="TabList">
                                                        <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#FormOne">Form 1</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#FormTwo">Form 2</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#FormThree">Form 3</a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab"    href="#FormFour">Form 4</a>
                                                        </li>
                                                    </ul>
                                                    <!-- Tab panes -->
                                                    <br>
                                                    <div class="tab-content">
                                                        <div class="tab-pane container active" id="FormOne">
                                                        <!--checkboxes-->
                                                        <h5>Classes</h5>
                                                            <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" value="">Form 1A
                                                            </label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" value="">Form 1B
                                                            </label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" value="" >Form 1C
                                                            </label>
                                                            </div>
                                                        <!--checkboxes-->
                                                        <br>
                                                        <br>
                                                                <!--form one-->
                                                                    <div class="container">           
                                                                        <table class="table table-light  bg-danger">
                                                                            <thead>
                                                                            <tr>
                                                                                <th>#</th>
                                                                                <th>Adm No</th>
                                                                                <th>Firstname</th>
                                                                                <th>Secondname</th>
                                                                                <th>Class</th>
                                                                                <th>Status</th>
                                                                                <th>Edit</th>
                                                                            </tr>
                                                                            </thead>
                                                                            <?php echo $student_views1;?>
                                                                        </table>
                                                                    </div>
                                                                <!--form one-->
                                                        </div>
                                                        <div class="tab-pane container fade" id="FormTwo">
                                                        <!--checkboxes-->
                                                        <h5>Classes</h5>
                                                        <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" value="">Form 2A
                                                            </label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" value="">Form 2B
                                                            </label>
                                                            </div>
                                                            <div class="form-check-inline">
                                                            <label class="form-check-label">
                                                                <input type="checkbox" class="form-check-input" value="" >Form 2C
                                                            </label>
                                                        </div>
                                                        <!--checkboxes-->
                                                        <br>
                                                        <br>
                                                            <!--form two-->  
                                                                <div class="container">           
                                                                    <table class="table table-light  bg-danger">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Adm No</th>
                                                                            <th>Firstname</th>
                                                                            <th>Secondname</th>
                                                                            <th>Class</th>
                                                                            <th>Status</th>
                                                                            <th>Edit</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <?php echo $student_views2;?>
                                                                    </table>
                                                                </div>
                                                            <!--form two-->
                                                        </div>
                                                        <div class="tab-pane container fade" id="FormThree">
                                                                <!--checkboxes-->
                                                                <h5>Classes</h5>
                                                                <div class="form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="">Form 3A
                                                                    </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="">Form 3B
                                                                    </label>
                                                                    </div>
                                                                    <div class="form-check-inline">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input" value="" >Form 3C
                                                                    </label>
                                                                </div>
                                                                <!--checkboxes-->
                                                                <br>
                                                                <br>
                                                            <!--form Three-->
                                                                <div class="container">           
                                                                    <table class="table table-light  bg-danger">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Adm No</th>
                                                                            <th>Firstname</th>
                                                                            <th>Secondname</th>
                                                                            <th>Class</th>
                                                                            <th>Status</th>
                                                                            <th>Edit</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <?php echo $student_views3;?>
                                                                    </table>
                                                                </div>
                                                            <!--form Three-->
                                                        </div>
                                                        <div class="tab-pane container fade" id="FormFour">
                                                        <!--checkboxes-->
                                                        <h5>Classes</h5>
                                                            <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="">Form 4A
                                                                </label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="">Form 4B
                                                                </label>
                                                                </div>
                                                                <div class="form-check-inline">
                                                                <label class="form-check-label">
                                                                    <input type="checkbox" class="form-check-input" value="" >Form 4C
                                                                </label>
                                                            </div>
                                                        <!--checkboxes-->
                                                        <br>
                                                        <br>
                                                            <!--Form Four-->
                                                                <div class="container">           
                                                                    <table class="table ttable-light  bg-danger">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>#</th>
                                                                            <th>Adm No</th>
                                                                            <th>Firstname</th>
                                                                            <th>Secondname</th>
                                                                            <th>Class</th>
                                                                            <th>Status</th>
                                                                            <th>Edit</th>
                                                                        </tr>
                                                                        </thead>
                                                                        <?php echo $student_views4;?>
                                                                    </table>
                                                                </div>
                                                            <!--Form Four-->
                                                        </div>
                                                    </div>
                                                    <!-- Tab panes -->
                                                <!--navs-->
                                                <br>
                                                <!--Add Student-->
                                                <div  id="accountAdd">
                                                    
                                                </div>
                                                <!--Add Student-->
                                            </div>
                                        </div>
                                    </div>
                                <!---Students-->
                                <!--Receipts-->
                                    <div class="tab-pane fade" id="v-pills-receipts" role="tabpanel" aria-labelledby="v-pills-receipts-tab"> 
                                        <br>
                                        <div class="row" id="RowStats">
                                            <div class="col-sm-4">
                                                <div class="jumbotron">
                                                    <h5>300</h5>
                                                    <p>No Of Students Cleared</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="jumbotron">
                                                    <h5>80%</h5>
                                                    <p>Percentages</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="jumbotron">
                                                    <h5>150 </h5>
                                                    <p>No Of Students not Cleared</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!--navbar-->
                                        <nav class="navbar navbar-expand-sm bg-light navbar-light" id="StudentListNavbar">
                                            <!-- Links -->
                                            <ul class="navbar-nav mr-auto">
                                                    <li class="nav-item">
                                                    <a class="nav-link" style="color:#ff4141;" href="#">RECEIPTS</a>
                                                    </li>
                                                    
                                                    
                                            </ul>
                                            <span class="navbar-text" style="color:#ff4141;">
                                            <span class="lnr lnr-home"></span>&nbsp / Dashboard
                                            </span>
                                        </nav>
                                        <!--navbar-->
                                        <!--receipt jumbotron-->
                                        <div class="jumbotron" id="ReceiptSearch">
                                        
                                            <!--row-->
                                            <div class="row">
                                                    <div class="col-sm-4">    
                                                        <!--form-->
                                                        <form class="form-inline" id="FormSearch" action="/action_page.php">
                                                            <div class="form-group">
                                                            <input type="text" class="form-control form-control-lg" placeholder="Enter student Adm No/Receipt No" id="usr" name="username">
                                                            </div> &nbsp&nbsp&nbsp
                                                            <span class="lnr lnr-magnifier"></span>
                                                        </form>
                                                        <!--form-->
                                                    </div>
                                                    <div class="col-sm-4">
                                                    </div> 
                                                    <div class="col-sm-4"> 
                                                    </div>
                                            </div>
                                            <!--row-->
                                            <br>
                                            <h6 style="color:grey;">Receipts Table</h6>
                                            <hr>
                                            <!--table conatainer-->
                                            <div class="container">          
                                                <table class="table table-light  bg-danger">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Receipt No</th>
                                                            <th>Student Name</th>
                                                            <th>Ammount</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td></td>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--table conatainer-->
                                        </div>
                                        <!--receipt jumbotron-->
                                    </div>
                                <!--Receipts-->
                                <!--Account-->
                                    <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                                        <br>
                                                <!--navbar-->
                                            <nav class="navbar navbar-expand-sm bg-light navbar-light" id="StudentListNavbar">
                                                    <!-- Links -->
                                                    <ul class="navbar-nav mr-auto">
                                                        <li class="nav-item">
                                                        <a class="nav-link" style="color:#ff4141;" href="#"> ACCOUNTS
                                                        </a>
                                                        </li>
                                                        <li class="nav-item">
                                                        <a class="nav-link"  href="#">/ Total Users
                                                        <span class="badge badge-danger">5831</span>
                                                        </a>
                                                        </li>
                                                        
                                                    </ul>
                                                    <span class="navbar-text" style="color:#ff4141;">
                                                    <span class="lnr lnr-home"></span>&nbsp / Dashboard
                                                    </span>
                                                </nav>
                                                <!--navbar-->
                                                <div class="jumbotron" id="AccountAdd">
                                                    <h6 style="text-align:left; color:#ff4141;">Users</h6> 
                                                    <hr> 
                                                    <div class="container">           
                                                        <table class="table ttable-light  bg-danger">
                                                            <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Username</th>
                                                                    <th>Role</th>
                                                                    <th>Edit</th>
                                                                </tr>
                                                            </thead>
                                                                <tbody>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td></td>
                                                                </tbody>
                                                        </table>
                                                    </div>
                                                    <br>
                                                    <h6 style="text-align:left; color:#ff4141;">Add New User</h6> 
                                                    <hr>
                                                    <form>
                                                        <div class="form-group row">
                                                            <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                                                            <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="inputUsername">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                                                            <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="inputPassword3">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                                                            <div class="col-sm-10">
                                                            <input type="password" class="form-control" id="inputPassword">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label  class="col-sm-2 col-form-label"></label>
                                                            <div class="col-sm-10">
                                                            <button type="submit" id="AddUserButton"class="btn btn-outline-danger btn-block">Add User</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                    </div>  
                                <!--Account--->

                            </div>

                        </div>
                        <!---Main Content-->
                </div>
            <!--Main Body Content-->





    <!-- Optional JavaScript -->
        <!-- Optional JavaScript -->
        <script>
        $(document).ready(function(){
        $("#AddNewStudentBtn").click(function(){
            $("#myModal").modal();
        });
        });
        </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


