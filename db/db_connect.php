<?php

define("DB_NAME", "slcoder");
define("HOST", "localhost");
define("USERNAME", "root");
define("PASSWORD", "1234");

mysqli_connect(HOST, USERNAME, PASSWORD , DB_NAME) or die("There is an error when trying to connect db ".mysql_error());

?>