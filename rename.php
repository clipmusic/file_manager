<?php
require_once 'inc/config.php';

header('Content-Type: text/html; charset=utf-8');


$pictures = glob("img/*");
debug($pictures);


foreach ($pictures as $key => $picture_path) {

	$picture = basename($picture_path);

	$query = $db->prepare('SELECT name, picture FROM products WHERE picture LIKE :picture ');
	$query->bindValue(':picture', $picture, PDO::PARAM_STR);
	$query->execute();
	$result = $query->fetch();

/*$new_name = trim($result['name']);
$new_name = strtolower($new_name);
$new_name = str_replace(' ', '-', $new_name);*/


	$old_name = $result['name'];
	$new_name = slugify($old_name);

	//$results = rename($picture_path, 'img/'.$new_name);

	debug($old_name);
	debug($new_name);
}
 ?>