--TEST--
RequestCore::HTTP_GET

--FILE--
<?php
	require_once dirname(__FILE__) . '/../requestcore.class.php';
	echo HTTP_GET;
?>

--EXPECT--
GET
