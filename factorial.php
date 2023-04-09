<html>
<body>
   <form action="factorial.php" method="post">
     <label for="textField">Enter Number</label> 
      <input type="number" name="number" />
      <input type="submit" value="OK" />
    </form>
    <?php   
    if(isset($_POST['number'])){  
        $fact = 1;  
        //getting value from input text box 'number'  
        $number = $_POST['number'];  
        echo "Factorial of $number:<br><br>";  
        //start loop  
        for ($i = 1; $i <= $number; $i++){         
            $fact = $fact * $
$fact = $fact * $i;  
            }  
            echo $fact . "<br>";  
    }  
?>  
</body>
</html> 