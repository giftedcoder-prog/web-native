<?php include "header.php"; ?>
  <!-- End Site Header --> 
  <!-- Start Nav Backed Header -->
  <div class="nav-backed-header parallax">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ol class="breadcrumb">
            <li><a href="index.php">Home</a></li>
            <li class="active">Contact</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- End Nav Backed Header --> 
  <!-- Start Page Header -->
  <div class="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1>Contact</h1>
        </div>
      </div>
    </div>
  </div>
  <!-- End Page Header --> 
  <!-- Start Content -->
  <div class="main" role="main">
    <div id="content" class="content full">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <header class="single-post-header clearfix">
              <h2 class="post-title">Our Location</h2>
            </header>
            <div class="post-content">
              <div id="gmap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.816854236288!2d35.72374217372045!3d0.04911836437818143!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1780a611331ee9c5%3A0xae3404dd649cb875!2sSkyline%20Sacco%20Ltd!5e0!3m2!1sen!2ske!4v1725271824485!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                
              </div>
              <div class="row">
                <form method="post" id="contactform" name="contactform" class="contact-form" action="contact-form-handler.php">
                  <div class="col-md-6 margin-15">
                    <div class="form-group">
                      <input type="text" id="name" name="name"  class="form-control input-lg" placeholder="Name*">
                    </div>
                    <div class="form-group">
                      <input type="email" id="email" name="email"  class="form-control input-lg" placeholder="Email*">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea cols="6" rows="7" name="message" class="form-control input-lg" placeholder="Message"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <input id="submit" name="submit" type="submit" class="btn btn-primary btn-lg pull-right" value="Submit now!">
                  </div>
                </form>
                <div class="clearfix"></div>
                <div class="col-md-12">
                  <div id="message"></div>
                </div>
              </div>
            </div>
          </div>
          <!-- Start Sidebar -->
          <?php include"side-bar.php"; ?>
  <!-- Start Footer -->
  <?php include "footer.php"; ?>