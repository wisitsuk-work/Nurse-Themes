<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Table - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Prompt">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top" style="font-family: 'Prompt';">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0">
                <a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>ห้องพยาบาล</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.html"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.html"><i class="fas fa-user"></i><span>Profile</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="table.html"><i class="fas fa-table"></i><span>Table</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="service.php"><i class="fas fa-table"></i><span>จัดการบริการห้องพยาบาล</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="drug.html"><i class="fas fa-table"></i><span>จัดการคลังยา</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.html"><i class="far fa-user-circle"></i><span>Login</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="register.html"><i class="fas fa-user-circle"></i><span>Register</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                        role="menu">
                                        <h6 class="dropdown-header">alerts center</h6>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar4.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar2.jpeg">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar3.jpeg">
                                                <div class="bg-warning status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a>
                                        <a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="assets/img/avatars/avatar5.jpeg">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow" role="presentation">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small">Valerie Luna</span><img class="border rounded-circle img-profile" src="assets/img/avatars/avatar1.jpeg"></a>
                                    <div
                                        class="dropdown-menu shadow dropdown-menu-right animated--grow-in" role="menu"><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a>
                                        <a
                                            class="dropdown-item" role="presentation" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a></div>
                    </div>
                    </li>
                    </ul>
            </div>
            </nav>
            <div class="container-fluid">
                <h3 class="text-dark mb-4">บันทึกการรักษา</h3>
                <form  method="post" action="insert_treatment.php">

                <?php

                    $user_firstname = $_SESSION['valid_firstname'];

                    include "connect.php";

                    $sql = "SELECT id, student_id, firstname, lastname, age, sex FROM profile_student WHERE id = $_GET[id]";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {

                            $id = $row["id"];
                            $student_id = $row["student_id"];
                            $firstname =  $row["firstname"];
                            $lastname =  $row["lastname"];
                            $age=  $row["age"];
                            $sex=  $row["sex"];

                        }
                    } else {
                        echo "0 results";
                    }

                ?>
    
            <label>ผู้ลงบันทึกการรักษา <?php echo $user_firstname;?></label>
            <input name="student_id" type="hidden" class="form-control" value="<?php echo $student_id;?>">
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAddress">ชื่อ</label>
                <input type="text" class="form-control" id="inputAddress" value="<?php echo $firstname;?>" readonly>
                </div>
                <div class="form-group col-md-6">
                <label for="inputAddress">นามสกุล</label>
                <input type="text" class="form-control" id="inputAddress" value="<?php echo $lastname;?>" readonly>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAddress">อายุ</label>
                <input type="text" class="form-control" id="inputAddress" value="<?php echo $age;?>" readonly>
                </div>
                <div class="form-group col-md-6">
                <label for="inputAddress">เพศ</label>

                <?php
                
                    $sql2 = "SELECT id, title FROM sex WHERE id = '$sex'";
                    $result2 = $conn->query($sql2);

                    if ($result2->num_rows > 0) {
                        // output data of each row
                        while($row = $result2->fetch_assoc()) {       
                            
                            $title=  $row["title"];

                            echo "<input type='text' class='form-control' id='inputAddress' value='$title' readonly>";
                        }
                    } else {
                        echo "0 results";
                    }

                ?>

                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAddress">น้ำหนัก</label>
                <input name="weight" type="text" class="form-control" id="inputAddress">
                </div>
                <div class="form-group col-md-6">
                <label for="inputAddress">ส่วนสูง</label>
                <input name="height" type="text" class="form-control" id="inputAddress">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputAddress">ค่าชีพจร</label>
                <input name="pulse" type="text" class="form-control" id="inputAddress">
                </div>
                <div class="form-group col-md-6">
                <label for="inputAddress">อุณหภูมิร่างกาย</label>
                <input name="temperature" type="text" class="form-control" id="inputAddress">
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">บันทึกการรักษา</label>
                <textarea name="treatment" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputState">ชื่อยา</label>
                <select name="drug1" id="inputState" class="form-control">
                    <option selected>Choose...</option>
                <?php
                
                $sql3 = "SELECT id, name FROM drug";
                $result3 = $conn->query($sql3);

                if ($result3->num_rows > 0) {
                    // output data of each row
                    while($row = $result3->fetch_assoc()) {       
                        
                        $id=  $row["id"];
                        $name=  $row["name"];

                        echo "<option value='$id'>$name</option>";
                    }
                } else {
                    echo "0 results";
                }

                ?>

                </select>
                </div>
                <div class="form-group col-md-6">
                <label for="inputCity">จำนวน (เม็ด)</label>
                <input name="count1" type="text" class="form-control" id="inputCity">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputState">ชื่อยา</label>
                <select name="drug2" id="inputState" class="form-control">
                    <option selected>Choose...</option>
                <?php
                
                $sql4 = "SELECT id, name FROM drug";
                $result4 = $conn->query($sql4);

                if ($result4->num_rows > 0) {
                    // output data of each row
                    while($row = $result4->fetch_assoc()) {       
                        
                        $id=  $row["id"];
                        $name=  $row["name"];

                        echo "<option value='$id'>$name</option>";
                    }
                } else {
                    echo "0 results";
                }

                ?>

                </select>
                </div>
                <div class="form-group col-md-6">
                <label for="inputCity">จำนวน (เม็ด)</label>
                <input name="count2" type="text" class="form-control" id="inputCity">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputState">ชื่อยา</label>
                <select name="drug3" id="inputState" class="form-control">
                    <option selected>Choose...</option>
                <?php
                
                $sql5 = "SELECT id, name FROM drug";
                $result5 = $conn->query($sql5);

                if ($result5->num_rows > 0) {
                    // output data of each row
                    while($row = $result5->fetch_assoc()) {       
                        
                        $id=  $row["id"];
                        $name=  $row["name"];

                        echo "<option value='$id'>$name</option>";
                    }
                } else {
                    echo "0 results";
                }

                ?>

                </select>
                </div>
                <div class="form-group col-md-6">
                <label for="inputCity">จำนวน (เม็ด)</label>
                <input name="count3" type="text" class="form-control" id="inputCity">
                </div>
            </div>
            <center>
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <button type="reset" class="btn btn-danger">ยกเลิก</button>
            </center>
        </form>
        </div>
        </div>
        <footer class="bg-white sticky-footer">
            <div class="container my-auto">
                <div class="text-center my-auto copyright"><span>Copyright © ห้องพยาบาล 2020</span></div>
            </div>
        </footer>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/chart.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/theme.js"></script>

    <?php

        $conn->close();

    ?>

</body>

</html>