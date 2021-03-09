<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hello World</title>
        
        <?php
        // put your code here
        $name = "Marcus R";
        $age = 20;
        $male = true;
        $icecream = "Vanilla";
        $imagefile = "img/SCP logo.jpg";
        ?>
    </head>
    <body>
        <?php
        // put your code here
        echo "<p style = 'font:thoma; color:red;'>Hello world, this is my first PHP page!</p>";
        print ("<p>My name: " .$name. " Who is $age years old, and likes $icecream ice-cream</p>");
        print ('<p>We are using variables $name, $age,$icecream</p>');
        print ("<img src='$imagefile' height='100'>");
        ?>
    </body>
</html>
