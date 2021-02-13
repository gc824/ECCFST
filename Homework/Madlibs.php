<!doctype html>
<html>

<head>
    <title>Madlibs</title>
</head>

<body>

    <h1>Madlibs</h1>

    <div id="madlibs" name="madlibs">
        <form method="post" name="madlibs">
            Color: <input type="text" name="color" id="color" /> </br>
            Noun: <input type="text" name="noun" id="noun" /><br>
            Athlete Name: <input type="text" name="athleteName" id="athleteName" /></br>
            <input type="submit" name="submit_btn" value="Libit!" />
        </form>
        </br>
    </div>

    <?php

    if (isset($_POST['submit_btn'])) {

        $color = $_POST["color"];
        $noun = $_POST["noun"];
        $athleteName = $_POST["athleteName"];
        if (!empty($_POST['color'])) {
            $color = $_POST['color'];
        } else {
            echo "<h3 style='color: red'> Please choose a color</h3>";
        }
        if (!empty($_POST['noun'])) {
            $noun = $_POST['noun'];
        } else {
            echo "<h3 style='noun: red'> Please choose a noun</h3>";
        }
        if (!empty($_POST['athleteName'])) {
            $athleteName = $_POST['athleteName'];
        } else {
            echo "<h3 style='color: red'> Please choose a athleteName</h3>";
        }
        echo "gatorade are $color";
        echo "yellow are $noun";
        echo "name of the athlete $athleteName";
    }
    ?>
</body>

</html>