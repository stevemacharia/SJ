<?php
session_start();
include 'studentlistprocess.php';
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/style1.css">
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
                            <form class="form-inline" action="/action_page.php">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                                <button class="btn btn-outline-dark" type="submit">Search</button>
                            </form>
                            <!--form--> 
                    </ul> 
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"  id="navbardrop" data-toggle="dropdown" tabindex="-1" >
                            <img src="css/images/img_avatar.png" class="rounded-circle" alt="Cinque Terre" width="25" height="25">
                            &nbsp Account 
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#"><i class="fas fa-user-plus"></i>&nbsp Account</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt"></i>&nbsp Log out </a>
                            
                        </div>
                    </li>
                    
                    </ul>   
                </div>
            </nav>
            <!---navbar-->
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
                                <!---Students-->
                                <a class="nav-link active" id="v-pills-students-tab" data-toggle="pill" href="#v-pills-students" role="tab" aria-controls="v-pills-students" aria-selected="true" style="margin-top:20px;">&nbsp&nbsp&nbsp&nbsp<i class="fas fa-users"></i>&nbspStudents </a>
                                <!---Students-->
                                <!---fees-->
                                <a class="nav-link" id="v-pills-fees-tab" data-toggle="pill" href="#v-pills-fees" role="tab" aria-controls="v-pills-fees" aria-selected="false">
                                &nbsp&nbsp&nbsp&nbsp<i class="fas fa-chart-bar"></i>&nbspFees   </a>
                                <!---fees-->
                                <!--Receipts-->
                                <a class="nav-link" id="v-pills-receipts-tab" data-toggle="pill" href="#v-pills-receipts" role="tab" aria-controls="v-pills-receipts" aria-selected="false">&nbsp&nbsp&nbsp&nbsp <i class="fas fa-file-invoice"></i> 
                                &nbsp Receipts</a>
                                <!--Receipts-->

                                <!--Account-->
                                <a class="nav-link" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false" style="margin-bottom:20px;">
                                &nbsp&nbsp&nbsp&nbsp  <i class="fas fa-user-plus"></i>&nbsp Account &nbsp</a>
                                <!--Account-->
                            </div>
                        </ul>
                    </nav>
                </div>
                <!---Vertical navbar-->

                <!---Main Content-->
                <div class="col-10" id="MainContent">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!---Students-->
                        <div class="tab-pane fade show active" id="v-pills-students" role="tabpanel" aria-labelledby="v-pills-students-tab">
                            <div class="tab-pane fade " id="v-pills-students" role="tabpanel" aria-labelledby="v-pills-students-tab">
                                <br>
                                <div class="jumbotron" id="StudentsContent"> 
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
                                                    <!--form one-->
                                                        <div class="container">           
                                                            <table class="table table-dark table-hover">
                                                                <thead>
                                                                <tr>
                                                                    <th>#</th>
                                                                    <th>Adm No</th>
                                                                    <th>Firstname</th>
                                                                    <th>Secondname</th>
                                                                    <th>Class</th>
                                                                    <th>Fees</th>
                                                                </tr>
                                                                </thead>
                                                                <?php echo $student_views1;?>
                                                            </table>
                                                        </div>
                                                    <!--form one-->
                                            </div>
                                            <div class="tab-pane container fade" id="FormTwo">
                                                <!--form two-->  
                                                    <div class="container">           
                                                        <table class="table table-dark table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Adm No</th>
                                                                <th>Firstname</th>
                                                                <th>Secondname</th>
                                                                <th>Class</th>
                                                                <th>Fees</th>
                                                            </tr>
                                                            </thead>
                                                            <?php echo $student_views2;?>
                                                        </table>
                                                    </div>
                                                <!--form two-->
                                            </div>
                                            <div class="tab-pane container fade" id="FormThree">
                                                 <!--form Three-->
                                                    <div class="container">           
                                                        <table class="table table-dark table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Adm No</th>
                                                                <th>Firstname</th>
                                                                <th>Secondname</th>
                                                                <th>Class</th>
                                                                <th>Fees</th>
                                                            </tr>
                                                            </thead>
                                                            <?php echo $student_views3;?>
                                                        </table>
                                                    </div>
                                                <!--form Three-->
                                            </div>
                                            <div class="tab-pane container fade" id="FormFour">
                                                <!--Form Four-->
                                                    <div class="container">           
                                                        <table class="table table-dark table-hover">
                                                            <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Adm No</th>
                                                                <th>Firstname</th>
                                                                <th>Secondname</th>
                                                                <th>Class</th>
                                                                <th>Fees</th>
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
                        <!---fees-->
                        <div class="tab-pane fade " id="v-pills-fees" role="tabpanel" aria-labelledby="v-pills-fees-tab"> 
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
                            <div class="jumbotron" id="FeeSearch">
                                    <!--form-->   
                                        <form class="form" action="SearchResults.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                            <input class="form-control form-control-lg mr-sm-2" type="text" name="StudentDetails" placeholder="Enter Student Name or Adm No">
                                            <br>
                                            <button class="btn btn-dark btn-block" name="Search_Button"type="submit">Search</button>
                                        </form>
                                    <!--form-->
                            </div>

                                <div class="jumbotron" id="StudentDetailsTable">
                                    <!--table-->
                                    <form class="form" action="AddFee.php?SAdm=<?php echo $adm ?>" id="SRForm" method="POST" enctype="multipart/form-data" autocomplete="off">
                                        <table class="table table-hover">
                                            <thead>
                                            <tr>
                                               <h3>Sajiloni Girls High School</h3>
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
                                        <button class="btn btn-dark btn-block" name="Print_Button"type="submit">Print Receipt</button>
                                    </form>
                                    <!--table-->
                                </div>



                        </div>
                        <!---fees-->
                        
                        <!--Receipts-->
                        <div class="tab-pane fade" id="v-pills-receipts" role="tabpanel" aria-labelledby="v-pills-receipts-tab"> 
                            RECEIPTS
                        </div>
                        <!--Receipts-->
                        <!--Account-->
                        <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                            <br>
                                    <div class="jumbotron" id="AccountAdd">
                                        <h3 style="text-align:center">Add New Account</h3>  
                                        <br>          
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
                                                <button type="submit" class="btn btn-dark btn-block">Add User</button>
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





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


