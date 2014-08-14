<?php
$result = "";
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $sex = $_POST['sex'];
    $result = "My name is $name. I am $age years old. I am $sex.";
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title>title</title>
        <style>
            input{
                clear:left;
                display: block;
            }
            label{
                display: inline;
                float:left;
            }
            label input{
                float:left;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <input type="text" placeholder="Name.." name="name" />
            <input type="text" placeholder="Age.."  name="age" />
            <label for="male"><input type="radio" id="male" name="sex" value="male"> Male </label>
            <label for="female" ><input type="radio" id="female" name="sex" value="female" /> Female </label>
            
            <input type="submit" value="Изпращане" />
        </form>
        <?php echo $result; ?>
    </body>
</html>


