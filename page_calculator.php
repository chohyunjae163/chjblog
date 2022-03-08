<!DOCTYPE html>
<html>
    <body>
        <p style="text-align: right;"><a href="index.html">Back</a></p>
        <p>Calculator - Can calculate anything!</p>
        <form action="page_calculator.php" method="post"> 
            write a equation  <input type="text" name="equation">
            <input type="submit" value=" = "><br>
            <?php require 'calculator.php';?>
            <?php if(isset($_POST['equation'])):?>
            <?php  $data = $_POST['equation'];
            $result =  calculate($data);
            echo $result; endif; ?>
        </form>
    </body>
</html>

