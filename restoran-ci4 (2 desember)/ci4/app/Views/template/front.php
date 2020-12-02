<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- 
    More Templates Visit ==> Free-Template.co
    -->
    <title>Flavour Restaurant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free Template by Free-Template.co" />
    <meta name="keywords" content="free bootstrap 4, free bootstrap 4 template, free website templates, free html5, free template, free website template, html5, css3, mobile first, responsive" />
    <meta name="author" content="Free-Template.co" />
    
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/open-iconic-bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/animate.css') ?>">
    
    <link rel="stylesheet" href="<?= base_url('asset/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/owl.theme.default.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/magnific-popup.css') ?>">

    <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap-datepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/jquery.timepicker.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/history.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/login.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/cart.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/icomoon.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/style.css') ?>">
  </head>
  <body data-spy="scroll" data-target="#ftco-navbar" data-offset="200">
    
    

    
    
    <?= $this->renderSection("content")?>

    <footer class="ftco-footer ftco-bg-dark ftco-section" style="padding:5em 0 5em 0">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md ftco-animate">
                <div class="ftco-footer-widget mb-4">
                  <h2 class="ftco-heading-2">Flavour Restaurant</h2>
                  <ul class="list-unstyled">
                    <li><a href="<?= base_url() ?>" class="py-2 d-block">Home</a></li>
                    </ul>
                </div>
              </div>        
            </div>
          </div>
         
        </div>
        <div class="row ftco-animate">
          <div class="col-md text-left">
            <p>&copy; Taste 2018. Farhan Risqy P.</p>
          </div>
        </div>
      </div>
    </footer>

    
    

    <!-- Modal -->
    <div class="modal fade" id="reservationModal" tabindex="-1" role="dialog" aria-labelledby="reservationModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-4 bg-image" style="background-image: url(images/bg_3.jpg);"></div>
              <div class="col-lg-8 p-5">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <small>CLOSE </small><span aria-hidden="true">&times;</span>
                </button>
                <h1 class="mb-4">Reserve A Table</h1>  
                <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_fname">First Name</label>
                      <input type="text" class="form-control" id="m_fname">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_lname">Last Name</label>
                      <input type="text" class="form-control" id="m_lname">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_email">Email</label>
                      <input type="email" class="form-control" id="m_email">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_people">How Many People</label>
                      <select name="" id="m_people" class="form-control">
                        <option value="1">1 People</option>
                        <option value="2">2 People</option>
                        <option value="3">3 People</option>
                        <option value="4+">4+ People</option>
                      </select>
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_phone">Phone</label>
                      <input type="text" class="form-control" id="m_phone">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="m_date">Date</label>
                      <input type="text" class="form-control" id="m_date">
                    </div>
                    <div class="col-md-6 form-group">
                      <label for="m_time">Time</label>
                      <input type="text" class="form-control" id="m_time">
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="m_message">Message</label>
                      <textarea class="form-control" id="m_message" cols="30" rows="7"></textarea>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <input type="submit" class="btn btn-primary btn-lg btn-block" value="Reserve Now">
                    </div>
                  </div>

                </form>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>

    <!-- END Modal -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


    <script src="<?= base_url('asset/js/history.js') ?>"></script>
    <script src="<?= base_url('asset/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/popper.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/jquery.easing.1.3.js') ?>"></script>
    <script src="<?= base_url('asset/js/jquery.waypoints.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/owl.carousel.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/jquery.magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/login.js') ?>"></script>
    <script src="<?= base_url('asset/js/bootstrap-datepicker.js') ?>"></script>
    <script src="<?= base_url('asset/js/jquery.timepicker.min.js') ?>"></script>
    
    <script src="<?= base_url('asset/js/jquery.animateNumber.min.js') ?>"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="<?= base_url('asset/js/google-map.js') ?>"></script>

    <script src="<?= base_url('asset/js/main.js') ?>"></script>

    
  </body>
</html>