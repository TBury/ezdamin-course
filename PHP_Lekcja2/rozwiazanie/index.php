<!DOCTYPE html>
<html lang="pl-pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styl5.css">
    <title>Port Lotniczy</title>
</head>
<body>
    <header id="kontener-header">
        <header id="baner-1">
            <img src="zad5.png" alt="logo lotnisko">
        </header>
        <header id="baner-2"><h1>Przyloty</h1></header>
        <header id="baner-3">
            <h3>przydatne linki</h3>
            <a href="kwerendy.txt">Pobierz...</a>
        </header>
    </header>
    <main>
        <table>
            <tr>
                <th>Czas</th>
                <th>Kierunek</th>
                <th>Numer Rejsu</th>
                <th>Status</th>
            </tr>
            <?php
                $polaczenie = mysqli_connect("localhost", "root", "", "egzamin");
                $wyniki = mysqli_query($polaczenie, "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC");
                while ($r = mysqli_fetch_row($wyniki)) {
                    echo "<tr>";
                    echo "<td>".$r[0]."</td>";
                    echo "<td>".$r[1]."</td>";
                    echo "<td>".$r[2]."</td>";
                    echo "<td>".$r[3]."</td>";
                    echo "</tr>";
                }
                mysqli_close($polaczenie);
            ?>
        </table>
    </main>
    <section id="kontener-stopka">
        <footer id="stopka-1">
            <p id="stopka__tekst">
            </p>
        </footer>
        <footer id="stopka-2">Autor: 0000000000</footer>
    </section>
</body>
</html>