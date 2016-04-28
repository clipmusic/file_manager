<?php


function debug($tableau) {
	echo '<pre>'.print_r($tableau, true).'</pre>';
}

function getCover($movie_id = 0) {



	$picture = 'img/product/product'.$movie_id.'.jpg';

	if (file_exists($picture)){
		return($picture);

	}
	return'img/cover.png';


}

function displayproduct($product) {
		    $picture = getCover($product['id']);
            $description = substr($product['description'], 0, 50).'[...]';
            $price = $product['price'].'&euro;';
            $name = $product['name'];
            $id = $product['id'];
            $rating = $product['rating'];

          include 'product-thumbnail.php';
 	}
function slugify ($str,$delimiter='-') {
    $clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
    $clean = preg_replace('/[^a-zA-Z0-9- ]/i', '', $clean);
    $clean = str_replace(' ', '-', $str);
    $clean = strtolower(trim($clean, '-'));
   	$clean = preg_replace('/[\/_|+ -]+/ ',$delimiter, $clean);

    return $clean;
}
?>



