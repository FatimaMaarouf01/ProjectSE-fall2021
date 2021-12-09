<?php

include("../connection.php");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags-->
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="Colorlib Templates" />
    <meta name="author" content="Colorlib" />
    <meta name="keywords" content="Colorlib Templates" />

    <!-- Title Page-->
    <title>Add Account</title>

    <!-- Icons font CSS-->
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />

    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
      rel="stylesheet"
    />

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all" />
    <link
      href="vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />
    <link rel="icon" type="image/x-icon" href="../LanPage/assets/logo-small.jpeg" />
    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />
  </head>

  <body>
    <form action="accnt.php" method="POST">
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-color: #212529;">
      <div class="wrapper wrapper--w790">
        <div class="card card-5" >
          <div class="card-heading">
            <h2 class="title">Add Account</h2>
          </div>
          <div class="card-body"><!-- 
            <form method="POST"> -->
              <div class="form-row m-b-55">
                <div class="name">Name</div>
                <div class="value">
                  <div class="row row-space">
                    <div class="col-2">

                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="text"
                          name="first_name"
                          Required
                        />
                        <label class="label--desc">First name</label>
                      </div>
                    </div>


                    <div class="col-2">
                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="text"
                          name="last_name"
                          Required
                        />
                        <label class="label--desc">Last name</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Email</div>
                <div class="value">
                  <div class="input-group">
                    <input class="input--style-5" type="email" name="email" Required/>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Date Of Birth</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="date"
                      name="birth_date"
                      Required
                    />
                  </div>
                </div>
              </div>
              <div class="form-row m-b-55">
                <div class="name">Phone</div>
                <div class="value">
                  <div class="row row-refine">
                    <div class="col-3">
                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="text"
                          name="area_code"
                          Required
                        />
                        <label class="label--desc">Area Code</label>
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="text"
                          name="phone"
                          Required
                        />
                        <label class="label--desc">Phone Number</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="form-row">
                <div class="name">Username</div>
                <div class="value">
                  <div class="input-group">
                    <input class="input--style-5" type="text" name="username" Required/>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Password</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="password"
                      name="password"
                      id="password"
                    required/>
                  </div>
                </div>
                <div class="name"><br>Show Password<br></div>
                <input class="name" type="checkbox" onclick="myFunction()" />
              </div>
              <div class="form-row">
                <label class="label label--block">Position</label>
                            <div class="p-t-15">
                                <label class="radio-container">Employee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name="position" value="2" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container m-r-55">Intern
                                    <input type="radio" name="position" value="3" required>
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">Authorized Employee
                                    <input type="radio" name="position" value="4" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
              </div>
              <div class="form-row">
                <div class="name">Salary</div>
                <div class="value">
                  <div class="input-group">
                    <input class="input--style-5" type="number" name="salary" Required/>
                  </div>
                </div>
              </div>
              <div>
                <button class="btn btn--radius-2 btn--red" type="submit">
                  Add Account
                </button>

            </div>
          </div>
        </div>
      </div>
    </div>

    </form>
   



    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
  </body>
</html>
<!-- end document-->
