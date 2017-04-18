<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Las Positas College (LPC)" />
<meta name="keywords" content="Las Positas College, Las Positas, LPC" />
<?php
define('root', $_SERVER['DOCUMENT_ROOT'] . '/');
define('blogcategory', ' ');
?>
<title>Academic Programs</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

<link href="/files/css/home/base.css" rel="stylesheet" type="text/css" />
<link href="/files/css/home/lpc-bootstrap.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/page.css" type="text/css" />
<link rel="stylesheet" href="/files/css/navigation/left.css" type="text/css" />

<style type="text/css">
.name {
  font-size: 1.15em;
  font-style: italic;
  font-weight: bold;
}
.name > span {
  font-size: 1.2em;
  font-weight: normal;
  font-style: normal;
}
.name > span.fa-phone-square {
  font-size: 1.0em;
}

.name > span.bldg {
  font-size: 1.0em;
  font-style: italic;
}
</style>

<link href='https://fonts.googleapis.com/css?family=Oswald:400,700|Open+Sans:400,400italic,700italic' rel='stylesheet' type='text/css'>

</head>

<body>

<?php include_once(root . "files/php/ga/googletags.php"); ?>

<!-- HEADER -->

<?php include_once(root . "files/includes/homepage/header.inc"); ?>

<!-- end of HEADER -->

<div class="container">

    <div class="row">

      <!-- Top Navigation -->
      <?php include_once(root . "files/includes/navigation/top.inc"); ?>
      <!-- End Top Navigation -->

      <div class="col-md-3">
        <?php include_once ("left-nav.php"); ?>
      </div>

      <div class="col-md-6 section-content">

        <span id="content-area" class="sr-only sr-only-focusable"></span>

        <h1>Academic Programs</h1>

        <div class="row">

          <div class="col-sm-12 col-md-12 col-lg-12">
            <h2>Academic Services &amp; Programs</h2>

            <div class="col-sm-12 col-md-6">
              <p class="name"><span>Roanna Bennie</span><br />
              Vice President<br />
              <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1103">925.424.1103</a></p>

              <p class="name"><span>Carolyn Y. Scott</span><br />
              Executive Assistant<br />
              <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1104">925.424.1104</a></p>

              <p class="name"><span>Andrea Migliaccio</span><br />
              Curriculum &amp; Scheduling Specialist<br />
              <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1108">925.424.1108</a></p>

              <p class="name"><span>Madeline Wiest</span><br />
              Curriculum &amp; SLO Specialist<br />
              <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1106">925.424.1106</a></p>
            </div>

            <div class="col-sm-12 col-md-6">
              <p class="name"><span>Vicki Shipman</span><br />
              Career Tech Ed Project Manager<br />
              <!-- Room: 2135<br /> -->
              <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1355">925.424.1355</a></p>

              <p class="name"><span>Scott Vigallon</span><br />
              Distance Education<br />
              <!-- Room: 2410<br /> -->
              <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1654">925.424.1654</a></p>

              <p class="name"><span>Tim Druley</span><br />
              Web Developer<br />
              <!-- Room: 2410<br /> -->
              <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1658">925.424.1658</a></p>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h2>Divisions</h2>

            <h3>Arts &amp; Humanities (A &amp; H)</h3>

            <div class="col-sm-12 col-md-6">
              <p class="name"><span>Don Miller, Ph.D</span><br />
              Dean<br />
              <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1382">925.424.1382</a></p>
            </div>

            <div class="col-sm-12 col-md-6">
              <p class="name"><span>Ralitsa Ivanova-Olsson</span><br />
              Senior Administrative Assistant<br />
              <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1383">925.424.1383</a><br />
              <span class="bldg">Bldg 4000, Room: 4111</span></p>
            </div>
          </div>

          <div class="col-sm-12 col-md-6">
            <h4>Humanities &amp; Fine Arts:</h4>
            <ul class="ul-lpc">
              <li><a href="/ARTS/index.php">Art</a></li>
              <li>Art History</li>
              <li><a href="/HUMN/index.php">Humanities</a></li>
              <li><a href="/INTD/index.php">Interior Design</a></li>
              <li><a href="/PHIL/index.php">Philosophy</a></li>
              <li><a href="/PHOT/index.php">Photography</a></li>
              <li><a href="/RELS/index.php">Religious Studies</a></li>
              <li><a href="/VCOM/index.php">Visual Communications</a></li>
            </ul>


          </div>

          <div class="col-sm-12 col-md-6">
            <h4>Language Arts &amp; Communications:</h4>

            <ul class="ul-lpc">
              <li><a href="#">English</a></li>
              <li><a href="#">English as a Second Language</a></li>
              <li><a href="#">American Sign Language</a></li>
              <li><a href="#">French</a></li>
              <li><a href="#">Italian</a></li>
              <li><a href="#">Spanish</a></li>
              <li><a href="#">Mass Communications</a></li>
            </ul>
            <h4>Performing Arts:</h4>
            <ul class="ul-lpc">
              <li><a href="/DANC/index.php">Dance</a></li>
              <li><a href="/MUS/index.php">Music</a></li>
              <li><a href="/SPCH/index.php">Speech</a></li>
              <li><a href="/THEA/index.php">Theater Arts</a></li>
            </ul>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h3>Computing, Applied Technology &amp; Social Sciences (CATSS)</h3>

            <div class="col-sm-12 col-md-6">
              <h4>Applied Technologies:</h4>
              <ul class="ul-lpc">
                <li><a href="/AUTO/index.php">Automotive Technology</a></li>
                <li><a href="/WELD/index.php">Welding Technology</a></li>
              </ul>
            </div>

            <div class="col-sm-12 col-md-6">
              <h4>Applied Technologies:</h4>
              <ul class="ul-lpc">
                <li><a href="/AUTO/index.php">Automotive Technology</a></li>
                <li><a href="/WELD/index.php">Welding Technology</a></li>
              </ul>
            </div>
            <p class="name"><span>Don Carlson, Ph.D</span><br />
            Dean<br />
            <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1324">925.424.1324</a></p>
          </div>
          <div class="col-sm-12 col-md-12">
            <h3>Math, Science, Engineering &amp; Public Safety (MSEPS)</h3>
            <p class="name"><span>Nan Ho</span><br />
            Dean<br />
            <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1182">925.424.1182</a></p>
          </div>
          <div class="col-sm-12 col-md-12">
            <h3>Kinesiology/Athletics, Health, Business (BHAWK)</h3>
            <p class="name"><span>Amir A. Law, EdD</span><br />
            Dean<br />
            <span class="fa fa-phone-square" aria-hidden="true"></span> <a href="tel:925-424-1275">925.424.1275</a></p>
          </div>
        </div>

      </div>

      <div class="col-md-3 section-rightbar">

      <?php include_once ("right-sidebar.php"); ?>

      </div>

    </div>

</div>


</div>

<!-- Start Footer -->

<?php include_once (root . "files/includes/homepage/footer.inc"); ?>

<!-- End Footer-->

<!-- <div class="container-fluid">
  Current viewport width:<span id="monitor"></span>
</div> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script type='text/javascript'>
$(document).ready(function() {
  // $('#monitor').html($(window).width());

  // $(window).resize(function() {
  //     var viewportWidth = $(window).width();
  //     $('#monitor').html(viewportWidth);
  // });
  var linkURL = document.location.pathname.match(/[^\/]+$/);

  if(linkURL === null) {
    $("a[href='index.php']").addClass("active");
  } else {
    $("a[href='"+linkURL+"']").addClass("active");
  }
});
</script>

<?php include_once(root . "files/includes/js/js.inc"); ?>

</body>
</html>
