<a href="/">BACK</a>

<?php 


require('phpquery.php');

function d($obj){
	echo '<pre>';
		print_r($obj);
	echo '</pre>';
}
function e($str){
	echo $str;
}

function get_string_between($string, $start, $end){
    $string = " ".$string;
    $ini = strpos($string,$start);
    if ($ini == 0) return "";
    $ini += strlen($start);   
    $len = strpos($string,$end,$ini) - $ini;
    return substr($string,$ini,$len);
}

$params = array();
$markup = $_POST['html'];
$doc = phpQuery::newDocumentHTML($markup);

phpQuery::selectDocument($doc);

$all = pq('a')->text();
//e($all);
// $nospace = preg_replace('/\s+/', '', $all);
// echo $nospace;

// //get the main url
$main = explode('?',$all);
$toremove = $main[0] . "?";
//echo $toremove;
// // remove it and leave the name value pairs only
 $clean = str_replace($toremove, "&", $all);
 //echo '<br><br><br>' . $clean;

 $params = explode('&',$clean);

 // d($params);

 foreach($params as $param){
 	echo $param .'<br>';
}
 