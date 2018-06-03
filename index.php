<?php

echo "Hello World<br><br>";

echo "HTTP_HOST: ". $_SERVER['HTTP_HOST'] ."<br><br>";

if($_GET['foo'] == 'bar'){
	echo "you seem to have a query string for foo equal to bar<br><br>";
}else{
	"no foo bar<br><br>";
}
