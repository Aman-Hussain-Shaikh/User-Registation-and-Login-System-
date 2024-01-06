<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration and Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <!-- Main Activity Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a href="index.php" class="navbar-brand ps-3">Registration and Login System</a>
    </nav>

    <!-- Main Activity Containers -->

    <div class="layoutSidenav">
        <div class="layoutSidenav_content">

            <div class="container-fluid">
                <h1 class="mt-4">User Registration & Login and User Management System With admin panel</h1>

                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                </ol>

                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-body">Not Register Yet</div>
                            <div class="card-footer d-flex align-item-center justify-content-between">
                                <a href="signup.php" class="small text-white stretched-link">Signup Here</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-warning text-white mb-4">
                            <div class="card-body">Already Registred</div>
                            <div class="card-footer d-flex align-item-center justify-content-between">
                                <a href="login.php" class="small text-white stretched-link">Login Here</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="card bg-danger text-white mb-4">
                            <div class="card-body">Admin Panel</div>
                            <div class="card-footer d-flex align-item-center justify-content-between">
                                <a href="signup.php" class="small text-white stretched-link">Admin Here</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div style="height: 100vh;"></div>


    <?php include_once('includes/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>