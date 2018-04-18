<html>
	<head>
	
		<meta charset ="UTF-8">
		<link href="./szablon.css" rel="stylesheet" type="text/css">
		<title>Generator numerów ITMBWieczorem</title>
	</head>
	<body>
<?php 
if(!isset($_GET['numer'])){
			
?>

<form action="" method="GET" >
		<h2> Generator Numerków ITMBWieczorem</h2>
		<fieldset>
			Numer: <input type="number" name="numer" required><br>
			Imię i nazwisko: <input type="text" name="nazwa" required><br>
			<br />
			Numer2: <input type="number" name="numer2" required><br>
			Imię i nazwisko 2: <input type="text" name="nazwa2" required><br>
		
			<button type="submit" >Generuj</button>
		</fieldset>
	</form>
	
	<?php 
}else{
	
	?>
	
	<div id="szablon">
	

	<div class="numer1"><?php	echo $_GET['numer']; ?>
	<img src="https://weaversoft.pl/Barcode/GenerateAtt/?barcodetype=16&width=250&height=120&margin=0&text=<?php echo $_GET['numer'];?>&ext=jpeg" alt="barcode1">
	</div>
	<div class="nazwa1"><?php   echo $_GET['nazwa']; ?></div>
	
	<div class="numer2"><?php echo $_GET['numer2']; ?>
	<img src="https://weaversoft.pl/Barcode/GenerateAtt/?barcodetype=16&width=250&height=120&margin=0&text=<?php echo $_GET['numer2'];?>&ext=jpeg" alt="barcode1">
	</div>
	<div class="nazwa2"><?php echo $_GET['nazwa2']; ?></div>
	
	</div>
	<?php 
}
	
	
	?>
	</body>	
	</html>