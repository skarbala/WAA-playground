<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<style>
  h1 {
    font-family: 'Kaushan Script', sans-serif;
    font-size: 70px;
    margin-bottom: 60px;
  }

  body::after {
    content: "";
    background: url("img/star.jpg");
    opacity: 0.2;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    position: absolute;
    z-index: -1;
  }

  #hideHim {
    display: none;
  }

  img.superstar {
    display: none;
    margin: 0 auto;
    width: 100%
  }

  button.btn {
    font-family: 'Kaushan Script', sans-serif;
    font-size: 2em;
    outline: none;
    border: none;
    margin-top: 150px;
    background-color: whitesmoke;
    transition: all 200ms ease-in-out;
  }

  button.button-show {
    -webkit-box-shadow: 0px 0px 149px -17px rgba(255, 183, 0, 1);
    -moz-box-shadow: 0px 0px 149px -17px rgba(255, 183, 0, 1);
    box-shadow: 0px 0px 149px -17px rgba(255, 183, 0, 1);
  }

  button.button-show:hover {
    transform: scale(1.2);
    background-color: whitesmoke;
    -webkit-box-shadow: 0px 0px 280px 38px rgba(255, 183, 0, 1);
    -moz-box-shadow: 0px 0px 280px 38px rgba(255, 183, 0, 1);
    box-shadow: 0px 0px 280px 38px rgba(255, 183, 0, 1);
  }

  button.btn {
    border-radius: 5px;
    padding: 20px;

  }

  button#hideHim {
    color: #c9302b;
  }

  button#hideHim:hover {
    color: white;
  }

  h1.title {
    color: #2b2b2b;
    font-size: 7em;
  }

  body {
    background-color: #f6f6f6;
  }
</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
  <h1 class="text-center  title">Geriatria hľadá superstar</h1>
  <div class=" col-md-6 col-md-offset-3">
    <img src="img/jakubec.png" alt="superstar" class="superstar">
    <button id="showHim" class="btn btn-default btn-lg btn-block button-show">UKÁŽ MI SUPERSTAR</button>
    <button id="hideHim" class="btn btn-lg btn-danger btn-block">PREČ S DIABLOM !!!</button>
  </div>
</div>
</body>
<script>
    $(document).ready(function () {
        $("#showHim").click(function () {
            $("#hideHim").delay(1500).show(0);
            $(".superstar").delay(1000).fadeIn(500);
            $(this).hide();
        });
        $("#hideHim").click(function () {
            $(".superstar").fadeOut(500);
            $(this).hide();
            $("#showHim").delay(500).show(0);
        })
    });

</script>

</html>