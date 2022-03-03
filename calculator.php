<!DOCTYPE html>
<html>
    <body>
        <p style="text-align: right;"><a href="index.html">Back</a></p>
        <p>Calculator - Can calculate anything!</p>
        <form action="calculator.php" method="post"> 
            write a equation  <input type="text" name="equation">
            <input type="submit" value=" = "><br>
            <?php if(isset($_POST['equation'])): ?>
            It is  <?php echo $_POST["equation"]; ?>
            <?php endif; ?>
        </form>
    </body>
</html>