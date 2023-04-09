<html>
   <head>
      <title>Creating MySQL Table</title>
   </head>
   <body>
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass ='';
         $dbname = 'test';
         $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
         
         if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
         }
printf('Connected successfully.<br />');
         $sql = "DROP TABLE tutorials_tbl";
          
         if ($mysqli->query($sql)) {
            printf("Table MCA Deleted successfully.<br />");
         }
if ($mysqli->errno) {
            printf("Could not Delete table: %s<br />", $mysqli->error);
         }
         $mysqli->close();
      ?>
   </body>
</html>