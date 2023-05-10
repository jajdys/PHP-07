<?php            
    mysqli_report(MYSQLI_REPORT_OFF);
        $db = @mysqli_connect('localhost','root','');
        $baza = "filmoteka1";
        $tabela = "filmy";
        $ilosc = $_POST['liczba'];
    mysqli_select_db($db, $baza);
    mysqli_query($db,"DESCRIBE $tabela");
        $limit = $ilosc+1;
        $zapytanie = "select * from $tabela limit $limit";
        $wynik=mysqli_query($db, $zapytanie);
        $row = $wynik->fetch_assoc();
            if($ilosc > 6 || $ilosc < 0){
                echo 'blad';
            }
            else{
                while($row = $wynik->fetch_assoc() ){   
                    echo $row['Tytul'];
                    echo '<br>';
                }
            }
mysqli_close($db);
?>