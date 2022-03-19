<!DOCTYPE html>
<html>
    <body>
        <p style="text-align: right;"><a href="index.html">Back</a></p>
        <p>Calculator - Can calculate anything!</p>
        <form action="page_calculator.php" method="post"> 
            <input type="text" name="equation" placeholder="Enter Equation">
            <input type="submit" value=" = "><br>
            <?php if(isset($_POST['equation'])):
            require 'calculator.php';
            $data = $_POST['equation'];
            $result =  calculate($data);
            print_r($result); endif; ?>
        </form>
    </body>
</html>

