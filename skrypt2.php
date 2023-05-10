<?php            
    mysqli_report(MYSQLI_REPORT_OFF);
        $db = @mysqli_connect('localhost','root','');
        $baza = "filmoteka1";
        $tabela = "rezyserzy";
    mysqli_select_db($db, $baza);
    mysqli_query($db,"DESCRIBE $tabela");
        $zapytanie = 'select * from '.$tabela.' WHERE Nazwisko like "%i%"';
        $wynik=mysqli_query($db,$zapytanie);
           
    while($row = $wynik->fetch_assoc()){   
        echo $row['Nazwisko'];
        echo '<br>';
    }
mysqli_close($db);    
?>