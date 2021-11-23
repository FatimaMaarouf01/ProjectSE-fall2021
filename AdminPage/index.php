<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Modern Architecture</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    </ul>

                    <form class="d-flex">
                        <button class="btn btn-outline-dark" type="submit">
                            <i>Logout</i> <!-- Logout button -->
                        </button> 
                    </form>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder" style="color: white;">Admin Page</h1>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                    <div class="col mb-5">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder" onclick="location.href='../Admin list of appointments/index.php'">Appointments</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                    <div class="col mb-5">
                            <div class="card h-100">
                                
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder" onclick="location.href='../List of CV/List of CV.php'">CV List</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    

                
                    <div class="col mb-5">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder" onclick="location.href='../List of Project-Admin/List of Projects.php'">Projects</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    
                        <div class="col mb-5">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder" onclick="location.href='../List of User Accounts/List of Accounts.php'">Users</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    <div class="col mb-5">
                            <div class="card h-100">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <h5 class="fw-bolder" onclick="location.href='../List of Feedback/List of Feedback.php'">Feedback</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
        </section>
        
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Modern Architecture 2021</p></div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        
        <script src="js/scripts.js"></script>
    </body>
</html>
