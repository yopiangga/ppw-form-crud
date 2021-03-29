<?php

include("./config/connection.php");

$result = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY nrp ASC");

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alfian Prisma Yopiangga</title>

    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Alfian<sup>py</sup></div>
            </a>

            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">
                Manipulation
            </div>

            <li class="nav-item active">
                <a class="nav-link" href="mahasiswa.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Mahasiswa</span></a>
            </li>

            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Alfian Prisma Y</span>
                                <img class="img-profile rounded-circle" src="./assets/img/undraw_profile.svg">
                            </a>

                        </li>

                    </ul>

                </nav>

                <div class="container-fluid">

                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Mahasiswa</h1>
                    </div>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">Add Mahasiswa</button>

                    <div class="row">
                        <div class="col-lg-12">
                            <table class="table mt-5 table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">NRP</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Gender</th>
                                        <th scope="col">Religion</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php

                                    while ($mahasiswa = mysqli_fetch_array($result)) { ?>
                                        <tr>
                                            <td scope="row"><?= $mahasiswa['nrp'] ?></td>
                                            <td scope="row"><?= $mahasiswa['name'] ?></td>
                                            <td scope="row"><?= $mahasiswa['gender'] ?></td>
                                            <td scope="row"><?= $mahasiswa['religion'] ?></td>
                                            <td scope="row"><?= $mahasiswa['age'] ?></td>
                                            <td scope="row"><?= $mahasiswa['address'] ?></td>
                                            <td>
                                                <a href="./update/edit.php?nrp=<?=$mahasiswa['nrp']?>" class="badge badge-warning">Edit</a>
                                                <a href="./delete/delete.php?nrp=<?=$mahasiswa['nrp']?>" class="badge badge-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }

                                    ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Alfian Prisma Yopiangga 2021</span>
                    </div>
                </div>
            </footer>

        </div>

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Mahasiswa</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./insert/insert.php" method="POST">
                <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-label">Full Name</label>
                                    <input type="text" name="fullname" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">NRP</label>
                                    <input type="number" name="nrp" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <label class="form-label">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="1">Male</option>
                                    <option value="2">Famale</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Religion</label>
                                    <input type="text" name="religion" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-label">Age</label>
                                    <input type="number" name="age" class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div class="row mt-3">
                            <div class="col-lg-12">
                                <label class="form-label">Address</label>
                                <textarea rows="5" name="address" class="form-control"></textarea>
                            </div>
                        </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="./assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="./assets/js/sb-admin-2.js"></script>
    <script src="./assets/js/sb-admin-2.min.js"></script>

</body>

</html>