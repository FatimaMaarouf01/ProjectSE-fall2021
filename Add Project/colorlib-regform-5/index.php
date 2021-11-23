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
    <title>Add a project</title>

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

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all" />
  </head>

  <body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
      <div class="wrapper wrapper--w790">
        <div class="card card-5">
          <div class="card-heading">
            <h2 class="title">Add a Project</h2>
          </div>
          <div class="card-body">
            <form method="POST">
              <div class="form-row m-b-55">
                <div class="name">Project Name</div>
                <div class="value">
                  <div class="input-group">
                    <input
                      class="input--style-5"
                      type="text"
                      name="project_name"
                    />
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Description</div>
                <div class="value">
                  <div class="input-group">
                    <textarea
                      class="input--style-6"
                      name="description"
                      rows="4"
                    ></textarea>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">Team</div>
                <div class="value">
                  <div class="input-group">
                    <input class="input--style-5" type="email" name="team" />
                  </div>
                </div>
              </div>
              <div class="form-row m-b-55">
                <div class="name">Dates</div>
                <div class="value">
                  <div class="row row-refine">
                    <div class="col-3">
                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="date"
                          name="start_date"
                        />
                        <label class="label--desc">Start Date</label>
                      </div>
                    </div>
                    <div class="col-9">
                      <div class="input-group-desc">
                        <input
                          class="input--style-5"
                          type="date"
                          name="end_date"
                        />
                        <label class="label--desc">End Date</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-row">
                <div class="name">File</div>
                <div class="value">
                  <div class="input-group">
                    <input class="input--style-5" type="file" name="file" />
                  </div>
                </div>
              </div>
              <div>
                <button class="btn btn--radius-2 btn--red" type="submit">
                  Add Project
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
  </body>
  <!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
<!-- end document-->
