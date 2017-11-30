<!doctype html>
<html lang="en">
  <head>
    <title>Hello, world!</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="dist/css/style-helper-classes.css">
  </head>
  <body>

<?php include("_functions.php"); ?>

    <div class="container">

      <h1>Demo with Helper Classes</h1>

      <h2 class="mb-3">You Might Also Like</h2>

      <div class="row">

        <div class="col-sm-6 col-md-4">
          <?php
          echo
          list_item(
            $image = "http://gdb.voanews.com/b593300a-78fc-4713-ab9b-e63a62809011_tv_w300.jpg?1509639891118",
            $label = "World",
            $title = "Raw Video: Interview with Hong Kong Student Protesters"
          )
          ?>
        </div>

        <div class="col-sm-6 col-md-4">
          <?php
          echo
          list_item(
            $image = "http://gdb.voanews.com/B404981D-391E-4D76-A02A-D435B608FEBC_w300_r1.jpg?1509639891118",
            $label = "World",
            $title = "[Variant With Icon] Health Care Specialists Consider Different Treatments for Ebola",
            $iconImage = "camera.svg",
            $iconText = "Contains Video"
          )
          ?>
        </div>

        <div class="col-sm-6 col-md-4">
          <?php
          echo
          list_item(
            $image = "http://gdb.voanews.com/54C2F602-83C5-496E-B2C0-B480DE89D7D6_w300_h170.jpg?1509639891118",
            $label = "World",
            $title = "American Detained in North Korea Describes Hard Life"
          )
          ?>
        </div>

        <div class="col-sm-6 col-md-4">
          <?php
          echo
          list_item(
            $image = "http://gdb.voanews.com/B404981D-391E-4D76-A02A-D435B608FEBC_w300_r1.jpg?1509639891118",
            $label = "World",
            $title = "Health Care Specialists Consider Different Treatments for Ebola",
            $iconImage = null,
            $iconText = null,
            $isVertical = true
          )
          ?>
        </div>

        <div class="col-sm-6 col-md-4">
          <?php
          echo
          list_item(
            $image = "http://gdb.voanews.com/54C2F602-83C5-496E-B2C0-B480DE89D7D6_w300_h170.jpg?1509639891118",
            $label = "World",
            $title = "[Variant With Icon] American Detained in North Korea Describes Hard Life",
            $iconImage = "camera.svg",
            $iconText = "Contains Video",
            $isVertical = true
          )
          ?>
        </div>

        <div class="col-sm-6 col-md-4">
          <?php
          echo
          list_item(
            $image = "http://gdb.voanews.com/b593300a-78fc-4713-ab9b-e63a62809011_tv_w300.jpg?1509639891118",
            $label = "World",
            $title = "Raw Video: Interview with Hong Kong Student Protesters",
            $iconImage = null,
            $iconText = null,
            $isVertical = true
          )
          ?>
        </div>

      </div><!-- .row -->

    </div><!-- .container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
