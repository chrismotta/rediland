<!DOCTYPE html>
<html lang="en">
<head>
    <title>games4mobi.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<img src="logo_320x50.jpg"/>
			</div>
		</div>	
		<div class="row">
			<div class="tag-320x50 center-block">
<script type="text/javascript" src="http://ad.tmlbox.co/ad/9480/tag.js?pubid=G4M&mediatype=mobileweb&channel=IAB1&channel=IAB12&channel=IAB6&channel=IAB18"></script>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
<?php
$feed = implode(file('http://www.gamespot.com/feeds/mashup/?type=3'));
// echo $feed;
$sxml = simplexml_load_string($feed);

$i=0;
foreach ($sxml->channel->item as $item) {
	echo '<div>';
	echo '	<div class="titulo">';
	echo '		<a href="'.$item->link.'">'.$item->title.'</a>';
	echo '	</div>';
	echo '	<div>';
	echo $item->description;
	echo '	</div>';
	echo '</div>';


	$i++;
	if($i >= 5) break;
}

?>
			</div>
		</div>
	</div>
</body>
</html>