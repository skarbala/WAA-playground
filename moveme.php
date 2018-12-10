<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
<?php include 'partials/head.php'; ?>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>

<style>
    h1 {
        font-size: 50px;
    }

    h2 {
        font-size: 25px;
    }

    h1, h2 {
        font-family: Luckiest Guy, sans-serif;
        text-transform: uppercase;
        color: #fff;
    }

    body {
        background-color: #179CD7;
    }

    img#tree {
        position: absolute;
        top: 180px;
        left: 70%;
        z-index: 0;
    }

    img#donald {
        z-index: 1;
        position: absolute;
        top: 180px;
        left: 10%;
    }

    div.success {
        margin-top: 150px;

    }

    div.success h2 {
        font-size: 120px;
    }

</style>
<body>
<?php include 'partials/navigation.php' ?>
<div class="container text-center">
    <h1>Move me if you can</h1>
    <h2>Bring donald towards ecology</h2>
</div>
<img src="img/donald.png" alt="" id="donald">
<img src="img/tree.png" alt="" id="tree">
<div class="success text-center">

</div>
</body>
<script>
    $(document).ready(function () {
        var donald = $("#donald");
        donald.draggable();

        var treePosition = $("#tree").position();

        donald.mouseup(function () {
            var position = donald.position();
            var dirSuccess = $("div.success");

            if ((Math.abs(treePosition.left - position.left) < 100) && (Math.abs(treePosition.top - position.top) < 50)) {
                dirSuccess.html("<h2>Hooo hooooo !!!!</h2>");
            } else {
                dirSuccess.html("");
            }
        });

    });
</script>
</html>