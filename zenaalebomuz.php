<!DOCTYPE html>
<html>
<?php include 'partials/head.php'; ?>
<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">

<style>
    h1 {
        font-family: Permanent Marker, sans-serif;
        font-size: 50px;
    }

    img {
        margin-top: 30px;
        max-width: 700px;
        -webkit-box-shadow: 0px 0px 179px -19px rgba(0, 0, 0, 0.45);
        -moz-box-shadow: 0px 0px 179px -19px rgba(0, 0, 0, 0.45);
        box-shadow: 0px 0px 179px -19px rgba(0, 0, 0, 0.45);
    }

    label {
        font-size: 20px;
        margin: 20px;

    }

    input[type=radio] {
        margin: 10px;
    }

    h1.description {
        font-size: 50px;
    }

</style>

<body>
<?php include 'partials/navigation.php' ?>
<div class="container">
    <div class="align-middle text-center">
        <h1>
            <span style="color:darkred">Zena</span> alebo <span style="color: darkblue">muz</span>?</h1>
        <img src="img/conchita.jpg" alt="">
        <div>
            <label><input type="radio" value="wurst" name="optradio">Muz</label>
            <label><input type="radio" value="conchita" name="optradio">Zena</label>
        </div>
    </div>
    <h1 class="description text-center"></h1>
</div>
</body>
<script>
    $(document).ready(function () {
        $("input").change(function () {
            var text = $(this).val();
            $("h1.description").text("It's " + text);
        })
    })
</script>

</html>