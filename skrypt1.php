<?php            
    mysqli_report(MYSQLI_REPORT_OFF);
    $db = @mysqli_connect('localhost','root','');
    $baza = "filmoteka1";
    $tabela = "filmy";
    mysqli_select_db($db, $baza);
    mysqli_query($db,"DESCRIBE $tabela");
    $zapytanie = "SELECT * FROM $tabela WHERE IDFilm >= 4";
    $wynik=mysqli_query($db,$zapytanie);
    echo '<form method="post">
    <ol start="4">';
    while($row = $wynik->fetch_assoc() ){
        echo '<li>'.$row['Tytul'];
        echo '<br>';
    }
    echo '</ol></form>';
    mysqli_close($db);
?>