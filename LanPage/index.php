<?php

include("../connection.php");

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Modern Architecture</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/logo-small.jpeg" />
    <!-- Font Awesome icons (free version)-->
    <script
      src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      crossorigin="anonymous"
    ></script>
    <!-- Google fonts-->
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700"
      rel="stylesheet"
      type="text/css"
    />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top"
          ><img id="logo" src="assets/logo.png" alt="..."
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          Menu
          <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#portfolio">Catalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../UserListofappointments/index.php">Available Appointments</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="../UploadCV/index.php" target="_blank">Apply Now!</a></li>
            <li class="nav-item">
              <a class="nav-link" href="../Login/index.php" target="_blank">Log In</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
      <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">Modern Architecture</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#services"
          >Learn More</a
        >
      </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
          <h3 class="section-subheading text-muted">
            We offer services that guarantee customer satisfaction.
          </h3>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="my-3">National Reach</h4>
            <p class="text-muted">
              We can work on projects all over Lebanon. Wherever you are around
              the country we'll be happy to work for you.
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="my-3">Online Appointment Booking</h4>
            <p class="text-muted">
              You can book appointments online for any inqueries, or if you want
              to know more about our work.
            </p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="my-3">Fast and Reliable</h4>
            <p class="text-muted">
              After meeting with our clients we set a date to deliver our
              projects on time.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">The Modern Catalog</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-sm-6 mb-4">
            <!-- Portfolio item 1-->
            <div class="portfolio-item">
              <a
                class="portfolio-link"
                data-bs-toggle="modal"
                href="#portfolioModal1"
              >
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img
                  class="img-fluid"
                  src="assets/modern_imgs/Modern_one.jpeg"
                  alt="..."
                />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">Modern I</div> 
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <!-- Portfolio item 2-->
            <div class="portfolio-item">
              <a
                class="portfolio-link"
                data-bs-toggle="modal"
                href="#portfolioModal2"
              >
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img
                  class="img-fluid"
                  src="assets/modern_imgs/Modern_two.jpg"
                  alt="..."
                />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">Modern II</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4">
            <!-- Portfolio item 3-->
            <div class="portfolio-item">
              <a
                class="portfolio-link"
                data-bs-toggle="modal"
                href="#portfolioModal3"
              >
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img
                  class="img-fluid"
                  src="assets/modern_imgs/Modern_four.jpeg"
                  alt="..."
                />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">Modern IV</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
            <!-- Portfolio item 4-->
            <div class="portfolio-item">
              <a
                class="portfolio-link"
                data-bs-toggle="modal"
                href="#portfolioModal4"
              >
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img
                  class="img-fluid"
                  src="assets/modern_imgs/Modern_six.jpeg"
                  alt="..."
                />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">Modern VI</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
            <!-- Portfolio item 5-->
            <div class="portfolio-item">
              <a
                class="portfolio-link"
                data-bs-toggle="modal"
                href="#portfolioModal5"
              >
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img
                  class="img-fluid"
                  src="assets/modern_imgs/Modern_seven.jpeg"
                  alt="..."
                />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">Modern VII</div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6">
            <!-- Portfolio item 6-->
            <div class="portfolio-item">
              <a
                class="portfolio-link"
                data-bs-toggle="modal"
                href="#portfolioModal6"
              >
                <div class="portfolio-hover">
                  <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                  </div>
                </div>
                <img
                  class="img-fluid"
                  src="assets/modern_imgs/Jurdy_SC.jpeg"
                  alt="..."
                />
              </a>
              <div class="portfolio-caption">
                <div class="portfolio-caption-heading">Al Jurdy Shopping Center</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">
            THE COMPANY'S TIMELINE
          </h3>
        </div>
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <img
                class="rounded-circle img-fluid"
                src="assets/logo-small.jpeg"
                alt="..."
              />
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2001</h4>
                <h4 class="subheading">Our humble Beginning</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">
                  Modern Architecture was established in Aley, Lebanon. The architecture company that combines modern
                  designs with cultural heritage to create a blend of future and the past in the same building. 
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img
                class="rounded-circle img-fluid"
                src="assets/img/about/4.jpg"
                alt="..."
              />
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>December 2021</h4>
                <h4 class="subheading">Present</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">
                  20 years later, Modern Architecture still has the same mission in providing a blend of the past and future while 
                  creating the most luxurious designs.                  
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <a href="../UploadCV/index.php" target="_blank"><div class="timeline-image">
              <h4>
                Be Part
                <br />
                Of Our
                <br />
                Team!
              </h4>
            </div></a>
          </li>
        </ul>
      </div>
    </section> 
    <!-- Contact-->
    <section class="page-section" id="contact">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Feedback</h2>
          <h3 class="section-subheading text-muted">
            Give us your feedback
          </h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" method="POST" action="feedback.php">
          <div class="row align-items-stretch mb-5">
            <div class="col-md-6" id="feedback_input">
              <div class="form-group">
                <!-- Name input-->
                <input style="width:100%"
                  class="form-control"
                  id="name"
                  type="text"
                  placeholder="Your Name"

                  name="name"
                />
                <div class="invalid-feedback" data-sb-feedback="name">
                  A name is required.
                </div>
              </div>
              <div class="form-group">
                               
                <!-- Message input-->
                <textarea
                  class="form-control"
                  id="message"
                  placeholder="Your Message *"
                  name="message"
                ></textarea>
                <div
                  class="invalid-feedback"
                  data-sb-feedback="message"
                >
                  A message is required.
                </div>
              </div>
            </div>
          </div>
          <!-- Submit success message-->
          <!---->
          <!-- This is what your users will see when the form-->
          <!-- has successfully submitted-->
          <div class="d-none" id="submitSuccessMessage">
            <div class="text-center text-white mb-3">
              <div class="fw-bolder">Form submission successful!</div>
              To activate this form, sign up at
              <br />
              <a href="https://startbootstrap.com/solution/contact-forms"
                >https://startbootstrap.com/solution/contact-forms</a
              >
            </div>
          </div>
          <!-- Submit error message-->
          <!---->
          <!-- This is what your users will see when there is-->
          <!-- an error submitting the form-->
          <div class="d-none" id="submitErrorMessage">
            <div class="text-center text-danger mb-3">
              Error sending message!
            </div>
          </div>
          <!-- Submit Button-->
          <div class="text-center">
            <button onclick="alertuser()"
              class="btn btn-primary btn-xl text-uppercase"
              id="submitButton"
              type="submit"
            >
              Send Message
            </button>
          </div>
        </form>
      </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 text-lg-start">
            Copyright &copy; ModernArchitecture 2021
          </div>
          <div class="col-lg-4 my-3 my-lg-0">
            <!-- <a class="btn btn-dark btn-social mx-2" href="#!"
              ><i class="fab fa-twitter"></i
            ></a> -->
            <a class="btn btn-dark btn-social mx-2" target="_blank" href="https://www.facebook.com/pages/category/Company/Modern-Architecture-Company-Engineer-MamdouhAAmer-1501929776731842/"
              ><i class="fab fa-facebook-f"></i
            ></a>
          </div>
          <div class="col-lg-4 text-lg-end">
            <span class="link-dark text-decoration-none me-3" id="number1" onclick="CopyToClipboard("number1")">+961 25 555586 </span>

            <a class="link-dark text-decoration-none" id="email1" onclick="CopyToClipboard(email)" > modern_architecture2000@yahoo.com</a> 
          </div>
        </div>
      </div>
    </footer>
    <!-- Portfolio Modals-->
    <!-- Portfolio item 1 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal1"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Modern I</h2>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/modern_imgs/Modern_one.1.jpeg"
                    alt="..."
                  />
                  <p>
                    Luxurios apartments in Aley-Ayn Jdidi that are filled with multiple high quality specifications.
                    Modern one apartments come with 3 bedrooms and 3 bathrooms, totaling to 152 squared meters of space.  
                  </p>
                 <!-- <ul class="list-inline">
                    <li>
                      <strong>Client:</strong>
                      Threads
                    </li>
                    <li>
                      <strong>Category:</strong>
                      Illustration
                    </li>
                  </ul> -->
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 2 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal2"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Modern II</h2>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/modern_imgs/Modern_two.1.jpg"
                    alt="..."
                  />
                  <p>
                    Located in Aley, Modern II projects consist of 5 floors. Each floor is designed to fit one large apartment with 3 
                    bedrooms and 3 bathrooms, totaling up to 170 squared meter of luxury space. The 
                  </p>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 3 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal3"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Modern IV</h2>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/Modern_imgs/Modern_four.1.jpeg"
                    alt="..."
                  />
                  <p>
                    Located in Aytet, Aley, Modern IV apartments come with a fascinating view at the Mediterranian Sea.
                    The apartments have a beautiful design made to fit high luxury standards, they come with 2 bedrooms and 
                    2 bathrooms, totaling up to 125 squared meters of space.
                  </p>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 4 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal4"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Modern VI</h2>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/Modern_imgs/Modern_six.jpeg"
                    alt="..."
                  />
                  <p>
                    Modern VI apartments are located in Shwayfat Alkoby. 
                    All apartments are designed from a modern perspective 
                    to fit your specifications. They come with 2 bedrooms and
                    2 bathrooms, adding up to 125 squared meters of space. All
                    apartments have a spectacular view of the Mediterranian.
                  </p>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 5 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal5"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Modern VII</h2>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/Modern_imgs/Modern_seven.1.jpeg"
                    alt="..."
                  />
                  <p>
                    Located in Platoon, Aley, Modern VII are designed to fit the highest 
                    luxury standards. Apartments come with 2 bedrooms and 2 bathrooms which totals 
                    up to 125 sqared meters.
                  </p>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Portfolio item 6 modal popup-->
    <div
      class="portfolio-modal modal fade"
      id="portfolioModal6"
      tabindex="-1"
      role="dialog"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-bs-dismiss="modal">
            <img src="assets/img/close-icon.svg" alt="Close modal" />
          </div>
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="modal-body">
                  <!-- Project details-->
                  <h2 class="text-uppercase">Al Jurdy Shopping Center</h2>
                  <img
                    class="img-fluid d-block mx-auto"
                    src="assets/Modern_imgs/Jurdy_SC.1.jpeg"
                    alt="..."
                  />
                  <p>
                    Al Jurdy Shopping Center is located in Bkheshtay, Aley. The 
                    design was inspired from stacking planes on top each other to create a 
                    4 floors that look lie they're disconnected and connected at the same time.
                  </p>
                  <button
                    class="btn btn-primary btn-xl text-uppercase"
                    data-bs-dismiss="modal"
                    type="button"
                  >
                    <i class="fas fa-times me-1"></i>
                    Close Project
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      function alertuser(){
         if(document.getElementById("message").value==""){
            window.alert("Please enter a valid feedback");
         }
         else if(document.getElementById("message").value!=""){
            window.alert("Your Feedback was submitted successfully!");
         }
        
      }
    </script>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
