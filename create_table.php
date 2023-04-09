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
         $sql = "CREATE TABLE tutorials_tbl( ".
         
            "subject_id INT NOT NULL AUTO_INCREMENT, ".
            "subject_title VARCHAR(100) NOT NULL, ".
            "subject_author VARCHAR(40) NOT NULL, ".
            "submission_date DATE, ".
            "PRIMARY KEY (subject_id )); ";
         if ($mysqli->query($sql)) {
            printf("Table MCA created successfully.<br />");
         }
if ($mysqli->errno) {
            printf("Could not create table: %s<br />", $mysqli->error);
         }
         $mysqli->close();
      ?>
   </body>
</html>