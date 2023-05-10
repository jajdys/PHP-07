<?php
echo '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Zadanie egzaminacyjne 3</title>
        <meta charset="UTF-8">
        <style>
            #naglowek{
                height:100px;
                width: 900px;
                margin-left: 10px;
                background-color: #D3D3D3;
                padding: 10px;
                text-align: center;
            }
            #lewy{
                position: absolute;
                height:450px;
                width: 210px;
                margin-top: 13px;
                margin-left: 10px;
                background-color: #D3D3D3;
            }
            #main{
                text-align: center;
                height: 440px;
                width: 460px;
                margin-left: 240px;
                margin-top: 13px;
                position: absolute;
                font-family: Arial;
                color: black;
                padding-top:10px;
                background-color: #D3D3D3;
            }
            #prawy{
                text-align: center;
                margin-top: 13px;
                margin-left: 720px;
                height:450px;
                width: 210px;
                position: absolute;
                background-color: #D3D3D3;
            }
            #stopka{
                height: 50px;
                width: 900px;
                margin-top: 475px;
                margin-left: 10px;
                position: absolute;
                background-color: #D3D3D3;
                text-align: center;
                padding: 10px;
                color: fuchsia;
                font-size: 10px;
            }
            #naglowek img{
                border: 2px solid white;
            }
            #nav input{
                background-color: #D3D3D3;
                color:grey;
                display: flex;
                border: 1px solid white;
            }
            a{
                text-decoration: none;
                color: black;
            }
            li{
                text-align: left;
            }
            input{
                margin-top: 10px;   
            }
        </style>
    </head>
        <body>

            <div id="naglowek">
            </div>

            <div id="nav">
            </div>

            <div id="main">';
            include("skrypt3.php");
            echo'
                <form action="skrypt3.php" method="post">
                <input type="text" name="liczba">
                <input type="submit" value="Ile filmow">
                </form>
            </div>

            <div id="lewy">
            <h1>Filmy:</h1>
            '; include("skrypt1.php");
            echo'
            <h3>Reżyserzy z nazwiskiem zawierającym literę "i": </h3>';
            include("skrypt2.php");
            echo'
            </div>

            <div id="prawy">
                <h2>Do pobrania</h2>
                <ul>
                    <li style = "color: red"><a href="kwerendy.txt">Kwerendy</a></li>
                    <li style = "color: red"><a href="baza/kwerenda1.png">Zrzut a)</a></li>
                    <li style = "color: red"><a href="baza/kwerenda2.png">Zrzut b)</a></li>
                    <li style = "color: red"><a href="baza/kwerenda3.png">Zrzut c)</a></li>
                    <li style = "color: red"><a href="baza/kwerenda4.png">Zrzut d)</a></li>
                </ul>
            </div>

            <div id="stopka">
            <h1> 
                <u><b><i>Autor strony: Patryk Jajdyk</i></b></u> 
            </h1>
            </div>
            
        </body>
    </html>';
?>