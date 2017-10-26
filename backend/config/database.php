<?php
	$db_host = "localhost";
	$db_name = "php_starter";
	$db_user = "root";
	$db_pass = "";
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	echo "<br>";
	echo "Please set up a database connection at the directory config/database.php <br>";
	echo "copy this code to your phpmyadmin <br>";
	echo "<hr>";
	echo "Copy >>> to SQL in phpmyadmin <br>";
	echo "SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0; <br>";
	echo "SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0; <br>";
	echo "SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES'; <br>";
	
	echo "CREATE SCHEMA IF NOT EXISTS `php_starter` DEFAULT CHARACTER SET utf8 ; <br>";
	echo "USE `php_starter` ; <br>";
	
	echo "CREATE TABLE IF NOT EXISTS `php_starter`.`tb_posts` ( <br>";
	echo "  `post_id` INT NOT NULL AUTO_INCREMENT, <br>";
	echo "  `post_title` VARCHAR(100) NULL, <br>";
	echo "  `post_desc` TEXT NULL, <br>";
	echo "  `post_created_at` DATETIME NULL, <br>";
	echo "  `post_updated_at` DATETIME NULL, <br>";
	echo "  PRIMARY KEY (`post_id`)) <br>";
	echo "ENGINE = InnoDB; <br>";
	
	
	echo "SET SQL_MODE=@OLD_SQL_MODE; <br>";
	echo "SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS; <br>";
	echo "SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS; <br>";
	
}else{
	$mysqli->set_charset("utf8");
}
?>