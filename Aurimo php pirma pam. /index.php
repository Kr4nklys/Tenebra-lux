<?php 

// $a = 72;
// $b = 65;
// echo $a;
// echo "*";
// echo $b;
// echo "=";
// echo $a * $b;
ini_set('display_errors', 1);
error_reporting(E_ALL);

$dictionary = [
'hello' => 'labas',
'evil' => 'blogis',
'truth' => 'tiesa',
'symbol' => 'simbolis',
'apple' => 'obuolys',
'night' => 'naktis',
'wednesday' => 'treciadienis',
'shadow' => 'seselis',
'blood' => 'kraujas',
'moon' => 'menulis'
];

$originalWerd = '';
if (array_key_exists('werd', $_GET)) {
	$originalWerd = ($_GET['werd']);	
	$werd = strtolower($_GET['werd']);

if ($_GET['direction'] == 'toEng') {
	$phrase = array_search($werd, $dictionary);
}
else{
	if(array_key_exists($werd, $dictionary)) {
	$phrase = $dictionary[$werd];
	}
}
}
// includes of html
include 'index.html';
?>
