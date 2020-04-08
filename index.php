<html>
    <body>
    
    <form action="welcome_get.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
    </form>
    
    

    <form action="data.php" method ="get">
    <input type="submit" value="View Data">    
    </form>

    <?php
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");
    ?> 
</html> 