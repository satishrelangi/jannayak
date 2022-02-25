<?php 
    require('connection.php');
    require('functions.php');
    if(isset($_SESSION['ADMIN_LOGIN']) && $_SESSION['ADMIN_LOGIN']!=''){

    }else{
        header('location:login.php');
        die();
    }
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD PAGE</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <section class="container-fluid m-0 p-0 bg-custom">
        <div class="row p-0 m-0 toprow">
            <div class="col-2 p-0 mr-0 my-2 ml-2 bg-white shadow rounded" id="left-div">
                <a href="index.php" id="logoanc">
                    <div class="logo-container w-100 d-flex justify-content-center my-2">
                        <img src="../assets/images/main/logo.png" alt="logo" height="50">
                        <h3 class="my-auto text-center"><span id="triv">TRIVENI</span><br><span id="colls">COLLEGES</span></h3>
                    </div>
                </a>
                <table class="catTab w-100 mt-3">  
                    <tr class="catList"><td><a href='latestnews.php'>latestnews</a></td></tr>
                    <tr class="catList"><td><a href='noticeboard.php'>Notice board</a></td></tr>
                    <tr class="catList"><td><a href='students.php'>students</a></td></tr>
                    <tr class="catList"><td><a href='messages.php'>query messages</a></td></tr>
                    <tr class="text-uppercase">
                        <td id="facultybutton">subjects</td>
                        <table class="catTab w-100" id="deptab">
                            <tr class="catList"><td><a href='accounts.php'>accounts</a></td></tr>
                            <tr class="catList"><td><a href='chemistry.php'>chemistry</a></td></tr>
                            <tr class="catList"><td><a href='civics.php'>civics</a></td></tr>
                            <tr class="catList"><td><a href='commerce.php'>commerce</a></td></tr>
                            <tr class="catList"><td><a href='communicationskills.php'>communication skills</a></td></tr>
                            <tr class="catList"><td><a href='computers.php'>computers</a></td></tr>
                            <tr class="catList"><td><a href='economics.php'>economics</a></td></tr>
                            <tr class="catList"><td><a href='electronics.php'>electronics</a></td></tr>
                            <tr class="catList"><td><a href='english.php'>english</a></td></tr>
                            <tr class="catList"><td><a href='maths.php'>maths</a></td></tr>
                            <tr class="catList"><td><a href='physics.php'>physics</a></td></tr>
                            <tr class="catList"><td><a href='sanskrit.php'>sanskrit</a></td></tr>
                            <tr class="catList"><td><a href='statastics.php'>statastics</a></td></tr>
                            <tr class="catList"><td><a href='telugu.php'>telugu</a></td></tr>
                        </table>
                    </tr>
                </table>
            </div>
            <div class="col p-0 m-0" id="right-div">
                <div class="admin-div row d-flex justify-content-end mb-0 p-0 rounded bg-white mx-2 mt-2 shadow">
                    <a href="#" class="dropdown-toggle active my-auto mx-4 text-info" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['ADMIN_USERNAME']?></a>
                    <div class="dropdown-menu">
                        <a class="nav-link text-secondary " href="logout.php"><i class="fa fa-power-off"></i>LOGOUT</a>
                    </div>
                </div> 

    <script src="../assets/bootstrap/js/jquery.js"></script>
