<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Restauracja Wszystkie Smaki</title>
	<link rel="stylesheet" href="styl_1.css" />
</head>
<body>
	<header>
		<h1>Witamy w restauracji "Wszystkie Smaki"</h1>
	</header>
	<main>
		<section id="lewy">
			<img src="menu.jpg" alt="Nasze danie" />
		</section>
		<section id="prawy">
			<h4>U nas dobrze zjesz!</h4>
			<ol>
				<li>Obiady od 40 zł</li>
				<li>Przekąski od 10 zł</li>
				<li>Kolacje od 20 zł</li>
			</ol>
		</section>
		<section id="dolny">
			<h2>Zarezerwuj stolik on-line</h2>
            <?php
	            $data = $_POST["data"];
	            $ilosc = $_POST["ilosc"];
	            $numer = $_POST["numer"];
	            if (!empty($data) && !empty($ilosc) && !empty($numer)) {
                    echo "Dodano rezerwację do bazy";
                    $kwerenda = "INSERT INTO rezerwacje SET data_rez='$data', liczba_osob='$ilosc', telefon='$numer';"
                    $polaczenie = mysqli_connect("localhost", "root", "", "baza");
	                mysqli_query($polaczenie, $kwerenda);
                    mysqli_close($polaczenie);
                }
            ?>
			<form action="" method="post">
				<label>
					Data (format rrrr-mm-dd):<br>
					<input name="data" /><br>
				</label>
				<label>
					Ile osób?<br>
					<input type="number" name="ilosc" /><br>
				</label>
				<label>
					Twój numer telefonu:<br>
					<input name="numer" /><br>
				</label>
				<label>
					<input type="checkbox" name="check" />
					Zgadzam się na przetwarzanie moich danych osobowych<br>
				</label>
				<button type="reset">WYCZYŚĆ</button>
				<button name="rezerwuj">REZERWUJ</button>
			</form>
		</section>
	</main>
	<footer>
	Stronę internetową opracował: <i></i>
	</footer>
</body>
</html>