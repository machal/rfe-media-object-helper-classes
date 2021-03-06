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

<?php include("_data.php"); ?>
<?php include("_functions.php"); ?>

    <div class="container">

      <h1>Demo with Helper Classes</h1>

      <h2 class="mb-3">Normal variant</h2>

      <div class="row no-gutters">

        <?php foreach  ($data as $item): ?>

          <div class="col-sm-6 col-md-4">

            <?php
              echo
                list_item(
                  $image = $item['image'],
                  $label = $item['label'],
                  $title = $item['title'],
                  $iconImage = $item['iconImage'],
                  $iconText = $item['iconText'],
                  $isVertical = false,
                  $isDark = $item['isDark']
                );
            ?>

          </div>

        <?php endforeach; ?>

      </div><!-- .row -->

      <h2 class="mb-3">Vertical variant</h2>

      <div class="row no-gutters">

        <?php foreach  ($data as $item): ?>

          <div class="col-sm-6 col-md-4">

            <?php
              echo
                list_item(
                  $image = $item['image'],
                  $label = $item['label'],
                  $title = $item['title'],
                  $iconImage = $item['iconImage'],
                  $iconText = $item['iconText'],
                  $isVertical = true,
                  $isDark = $item['isDark']
                );
            ?>

          </div>

        <?php endforeach; ?>

      <h2 class="mb-3">Overlay variant</h2>

      <div class="row no-gutters">

        <?php foreach  ($data as $item): ?>

          <div class="col-sm-6 col-md-4">

            <?php
              echo
                list_item(
                  $image = $item['image'],
                  $label = $item['label'],
                  $title = $item['title'],
                  $iconImage = $item['iconImage'],
                  $iconText = $item['iconText'],
                  $isVertical = null,
                  $isDark = $item['isDark'],
                  $isOverlay = true
                );
            ?>

          </div>

        <?php endforeach; ?>


      </div><!-- .row -->

    </div><!-- .container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>
