<?php

$color = 'black';

$sametime = $validity == $timelimit ? true : false;

if($validity == '30d' && $timelimit == '4w2d'){$sametime = true;}
if($validity == '7d' && $timelimit == '1w'){$sametime = true;}

$berlaku = $validity;
$durasi = $timelimit;

if (substr($berlaku, -1) == "d") {
$berlaku = substr($berlaku, 0, -1) . " Hari";
} else if (substr($berlaku, -1) == "h") {
$berlaku = substr($berlaku, 0, -1) . " Jam";
}
if (substr($durasi, -1) == "d" & strlen($durasi) > 3) {
$durasi = ((substr($durasi, 0, -1) * 7) + substr($durasi, 2, 1)) . " Hari";
} else if (substr($durasi, -1) == "d") {
$durasi = substr($durasi, 0, -1) . " Hari";
} else if (substr($durasi, -1) == "h") {
$durasi = substr($durasi, 0, -1) . " Jam";
} else if (substr($timelimit, -1) == "w") {
$durasi = (substr($durasi, 0, -1) * 7) . " Hari";
}

$datalimit = str_replace('i', '', $datalimit);

$datalimit == '' ? $datalimit = 'Unlimited' : $datalimit;

?>
<link href='https://fonts.googleapis.com/css?family=Roboto Mono' rel='stylesheet'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<style>
	body {
        font-family: 'Roboto Mono';
    }
    .voucher {
        width: 200px;
        float: left;
		margin: 0px 5px 5px 5px;
		padding-top: 20px;
		border-top: 1px dashed #aaa !important;
    }
    .wrapper {
        text-align: center;
		padding: 5px;
    }
	
	.qrcode {
	  height: 160px;
	  width: 160px;
	  display: block;
	  text-align: center;
	  color: <?= $color; ?>;
	}
  
    .border {
        border: 1px solid black !important;
		margin-top: 5px;
		border-radius: 3px;
    }

    .bold {
        font-weight: bold;
    }
	
    .center {
        text-align: center;
    }
</style>

<div class="voucher">
	<div class="wrapper border">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 bold" style="font-size: 15px;">
					<?= $hotspotname;?>
				</div>
				<div class="col-6 border p-0" style="font-size: 10px; border-radius: 3px 0px 0px 3px;">
					Username
					<br>
					<span class="bold" style="font-size: 13px;">
						<?= $username; ?>
					</span>
				</div>
				<div class="col-6 border p-0" style="font-size: 10px; border-radius: 0px 3px 3px 0px;" style="font-size: 13px;">
					Password
					<br>
					<span class="bold" style="font-size: 13px;">
						<?= $password; ?>
					</span>
				</div>
				<div class="col-12 border bold p-0" style="font-size: 12px;">
					Kuota : <?= $datalimit; ?>
				</div>
				<div class="col-12 border bold p-0" style="font-size: 12px;">
					Berlaku : <?= $durasi; ?>
				</div>
				<div class="col-12 border bold p-0" style="font-size: 12px;">
					Harga : <?= $price; ?>
				</div>
				<div class="col-12 bold" style="font-size: 13px; margin-top: 5px;">
					<?= str_replace('-', ' ', $profile); ?>
					<br>
					<small> <?= $comment; ?> </small>
					<br>
					<small> http://<?= $dnsname; ?> </small>
				</div>
			</div>	  
		</div>	  
	</div>	  
</div>	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        