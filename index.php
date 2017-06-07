<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>title</title>
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Stalinist+One" rel="stylesheet">
</head>

<body>
    
    <nav class="nav-bar">

  <h1>Автозапчасти</h1>

</nav>
  
  <section class="products">

    <?php
   
   $dbhost = 'localhost';
   $dbuser = 'u0358371_default';
   $dbpass = '_f6vAT9t';
   
   @mysql_set_charset( 'utf8' );
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
    mysql_query ("set_client='utf8'");
    mysql_query ("set character_set_results='utf8'");
    mysql_query ("set collation_connection='utf8_general_ci'");
    mysql_query ("SET NAMES utf8");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT name, description, img FROM products';
   mysql_select_db('u0358371_default');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "</div>
            <div class=\"product-card\">
                <div class=\"product-image\">
                  <img src=\"{$row['img']}\">
    </div>
    <div class=\"product-info\">
      <h5>{$row['name']}</h5>
      <h6>{$row['descriprion']}</h6>
    </div>
  </div>";
   }
   
   mysql_close($conn);

?>




  </section>


</body>

</html>