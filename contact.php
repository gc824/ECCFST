<?php
ini_set('display_errors', 1);
?>
<!doctype html>
<html>

<head>

    <title>NewPage- Get in Touch</title>

</head>

<body>
    <div id="form" name="form">
<?php
$name = '';
$email = '';
$subject = '';
$message = '';

if (isset($_POST['submit-btn'])) {

    if (!empty(trim($_POST['name']))) {
        $name = trim($_POST['name']);
        } else {
            echo "<h1 style= 'color: red'> Name cannot be empty!!</h1>";
        }

    if (!empty(trim($_POST['email']))) {
        $email =trim($_POST['email']);
        } else {
        echo "<h1 style= 'color: red'> email cannot be empty!!</h1>";
        }

    if (!empty(trim($_POST['subject']))) {
        $subject =trim($_POST['subject']);
        } else {
        echo "<h1 style= 'color: red'> subject cannot be empty!!</h1>";
        }

    if (!empty(trim($_POST['message']))) {
        $message =trim($_POST['message']);
        } else {
        echo "<h1 style= 'color: red'> message cannot be empty!!</h1>";
        }
    }
	
    ?>
    <form method ="post" name='form' id='form' action= 'form'>
    <fieldset>
    <legend>Test Inputs</legend>

</div>

</body>

</html>