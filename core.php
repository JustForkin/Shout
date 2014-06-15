<?php
$db = new PDO('mysql:unix_socket=/var/run/mysqld/mysqld.sock;dbname=shout', 'XXX', 'XXX', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'UTF8'"));
function post ($text){
	if(empty($text)){
	header("Location: http://shout.pomf.se");
	}else{
	global $db;
	$do = $db->prepare('INSERT INTO posts (text)'.'VALUES (:text)');
	$do->bindValue(':text', strip_tags($text));
	$do->execute();
	header("Location: http://shout.pomf.se");
}
}
function get(){
	global $db;
	$do = $db->prepare('SELECT * FROM posts ORDER BY id DESC LIMIT 100');
	$do->execute();
	while ($row = $do->fetch(PDO::FETCH_ASSOC)) {
		print '<blockquote class="bubble"><p>'.$row['text'].'</p></blockquote>';
	}
}
?>