<?

//Font Awsome icon
function i($code){
	return '<i class="fa fa-'.$code.'"></i>';
}

function date_nice($date){
	return date('jS M, Y : g:s A', $date);
}

function time_nice($seconds){

$h = floor(($seconds/60)/60);
$m = round(($seconds/60) - ($h * 60));

return $h.' hrs '.$m.' mins';
}

function day($hours){
$day = floor((($hours/60)/60)/24);
$hrs = round((($hours/60)/60) - $day *24);
return $day.' day '.$hrs.' hrs';
}

function save($record){
	$json = json_encode($record);
	$file = fopen('data.json', 'w');
	fwrite($file, $json);
}

?>
