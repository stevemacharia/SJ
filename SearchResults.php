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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">  
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>HOME</title>
<body>
    
    <div class="header">
        <h3>Welcome to Sajiloni Girls  High School</h3>
    </header>  
        <!---navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">SAJILONI GIRLS </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="studentlist.php">Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="SearchResults.php">Fees</a>
                </li>
                
                </ul>
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link" href="logout.php" tabindex="-1" >Log out <i class="fas fa-sign-out-alt"></i></a>
                </li>
                </ul>   
            </div>
        </nav>
        <!---navbar-->

        <!---vertical navbar-->
        <div id="vert">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <!---fees-->
                    <a class="nav-link active" id="v-pills-fees-tab" data-toggle="pill" href="#v-pills-fees" role="tab" aria-controls="v-pills-fees" aria-selected="true" style="margin-top:20px;">
                    Fees &nbsp <i class="fas fa-chart-bar"></i> </a>
                    <!---fees-->
                    <!---Students-->
                    <a class="nav-link" id="v-pills-students-tab" data-toggle="pill" href="#v-pills-students" role="tab" aria-controls="v-pills-students" aria-selected="false">Students &nbsp<i class="fas fa-users"></i>    </a>
                    <!---Students-->
                    <!--Receipts-->
                    <a class="nav-link" id="v-pills-receipts-tab" data-toggle="pill" href="#v-pills-receipts" role="tab" aria-controls="v-pills-receipts" aria-selected="false">Receipts <i class="fas fa-file-invoice"></i></a>
                    <!--Receipts-->

                    <!--Account-->
                    <a class="nav-link" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false" style="margin-bottom:20px;">Account &nbsp <i class="fas fa-user-plus"></i></a>
                    <!--Account-->

                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!---fees-->
                        <div class="tab-pane fade show active" id="v-pills-fees" role="tabpanel" aria-labelledby="v-pills-fees-tab"> 
                                <h3>Fee Structure</h3>
                                <!--form-->   
                                    <form class="form" action="SearchResults.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                        <input class="form-control form-control-lg mr-sm-2" type="text" name="StudentDetails" placeholder="Enter Student Name or Adm No">
                                        <br>
                                        <button class="btn btn-dark btn-block" name="Search_Button"type="submit">Search</button>
                                    </form>
                                <!--form-->
                                <br>
                                <div class="container" id="StudentDetailsTable">
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
                        <!---Students-->
                        <div class="tab-pane fade " id="v-pills-students" role="tabpanel" aria-labelledby="v-pills-students-tab">
                                    <br>
                                    <!--navs-->
                                    <!-- Nav tabs -->
                                        <ul class="nav nav-tabs justify-content-center  " role="tablist">
                                            <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#home">Add New Student</a>
                                            </li>
                                            <li class="nav-item">
                                            <a class="nav-link"  href="studentlist.php">Student List</a>
                                            </li>
                                        </ul>
                                    <!--navs-->
                                    <br>
                                    <br>
                                    <!--Add Student-->
                                    <div class="jumbotron" id="accountAdd">
                                        <form class="form-signin" action="AddStudent.php" method="POST" enctype="multipart/form-data" autocomplete="off">
                                            <div class="form-group row">
                                                <label for="StudentAdmNo" class="col-sm-2 col-form-label">Student Adm No</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="StudentAdmNo" id="StudentAdmNo">
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
                                                <button type="submit" name="AddStudent_btn" class=" btn btn-dark btn-block">Add User</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!--Add Student-->




                        </div>
                        <!---Students-->
                        <!--Receipts-->
                        <div class="tab-pane fade" id="v-pills-receipts" role="tabpanel" aria-labelledby="v-pills-receipts-tab"> 
                                <br>
                                <h3>Receipts</h3>
                                    <br>
                                    <form class="form" action="/action_page.php">
                                        <input class="form-control form-control-lg mr-sm-2" type="number" placeholder="Enter Receipt No">
                                        <br>
                                        <button class="btn btn-dark btn-block"  type="submit">Search</button>
                                    </form>
                                    <div class="container">
                                            <div class="jumbotron" id="JumbotronReceipts">
                                                    <h5>SAJILONI GIRLS HIGH SCHOOL</h5>
                                                    <h6>Date :</h6>
                                                    <p>Student Admn No:<p>
                                                    <p>Student Names:</p>
                                                    <p>Students Class:</p>
                                                    <p>Term:</p>
                                                    <p>Boarding Equipment & Stores:</p>
                                                    <p>Repair,Maintenance & Improvement:</p>
                                                    <p>Local Transport & Travelling:</p>
                                                    <p>Administration:</p> 
                                                    <p>Electricity,Water & Conservation:</p>
                                                    <p>Activity Fees:</p>
                                                    <p>Personal Emoluments:</p>
                                                    <p>Total:</p>
                                                    <p>Ammount Payed:</p>
                                                    <p>Fee balance:</p>
                                                    <hr>
                                                    <h6>Served By :</h6>
                                            </div>
                                    </div>
                        </div>
                        <!--Receipts-->
                        <!--Account-->
                        <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab"> <br>
                                <h3>Add New Account</h3>
                                    <br>
                                    <br>
                                    <div class="jumbotron" id="accountAdd">
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
                        <!--Account-->
                    </div>
                </div>
            </div>
        </div>
        <!--vertical navbar-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>


