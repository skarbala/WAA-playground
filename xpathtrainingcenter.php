<!DOCTYPE html>
<html>
<link href="https://fonts.googleapis.com/css?family=Exo:700" rel="stylesheet">
<?php include 'partials/head.php'; ?>
<body>
<?php include 'partials/navigation.php' ?>
<style>
    div.col-md-8, select {
        margin-bottom: 20px;
    }

    h1 {
        font: 50px Exo;
        padding-bottom: 30px;
    }

    h2, h3 {
        font: 30px Exo;

    }

    h2 span, h3 span {
        text-transform: lowercase;
        font-family: Arial, sans-serif;
        margin-left: 20px;
    }

    body {
        background: url("img/project_papper.png");
    }

</style>
<div class="container">
    <h1 class="text-center">Xpath training center</h1>
    <div class="col-md-8 col-md-offset-2 button-group">
        <div class="useless">
            <button class="btn">
                First one
            </button>
            <button class="btn">
                Second button
            </button>
            <button class="btn btn-default">
                Next button
            </button>
            <button class="btn btn-default">
                One more button
            </button>
            <button class="btn btn-danger">
                Danger
            </button>
            <button class="btn btn-success">
                Success
            </button>
            <button class="btn btn-warning">
                Warning
            </button>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div class="useless">
            <div class="useless-number-two">
                <select name="" id="" class="form-control">
                    <option value="">vyber si moznost</option>
                    <option data-attr="1">Moznost 1</option>
                    <option data-attr="2">Moznost 2</option>
                    <option data-attr="3">Moznost 3</option>
                    <option data-attr="4">Moznost 4</option>
                    <option data-attr="5">Moznost 5</option>
                    <option data-attr="6">Moznost 6</option>
                </select>
                <select name="" id="" class="form-control second-select">
                    <option value="">vyber si option</option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                    <option value="4">Option 4</option>
                    <option value="5">Option 5</option>
                    <option value="6">Option 6</option>
                </select>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-md-offset-2">
        <div>
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                <button class="btn btn-danger" type="button" id="hitme">Hit me!</button>
                </span>
            </div>
        </div>
    </div>
    <div class="col-md-10 col-md-offset-2">
        <div>
            <div class="output">
                <h2>Action: <span></span></h2>
                <h3>Absolute xpath:<span></span>
                </h3>
            </div>
        </div>
    </div>
</body>
<script>
    function getPathTo(element) {
        if (element.id !== '')
            return 'id("' + element.id + '")';
        if (element === document.body)
            return element.tagName;

        var ix = 0;
        var siblings = element.parentNode.childNodes;
        for (var i = 0; i < siblings.length; i++) {
            var sibling = siblings[i];
            if (sibling === element)
                return getPathTo(element.parentNode) + '/' + element.tagName + '[' + (ix + 1) + ']';
            if (sibling.nodeType === 1 && sibling.tagName === element.tagName)
                ix++;
        }
    }
    $(document).ready(function () {
        var action = $("div.output h2 span");
        var xpath = $("div.output h3 span");
        $("div.button-group button").click(function () {
            action.text("You clicked " + $(this).text().trim());
            xpath.text("html/" + getPathTo($(this).first().get(0)));
        });

        $("select").change(function () {
            action.text("You have chosen " + $(this).find(":selected").text());
            xpath.text("html/" + getPathTo($(this).find(":selected").first().get(0)));
        });

        $("#hitme").click(function () {
            action.text("You entered " + $(this).parent().parent().find("input").val());
            xpath.text("html/" + getPathTo($(this).parent().parent().find("input").first().get(0)))
        });
    })

</script>
</html>