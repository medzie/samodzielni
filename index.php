<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Samodzielni</title>
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Sansita&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="container">
        <div id="navbar">
                <img src="logo.png" width="10%" class="zdjecianav" id="logo">
                <a href="listazbiorek.html" class="zbiorkinav">Lista Zbiórek</a>
                <a href="zalozzbiorke.html" class="zbiorkinav">Załóż Zbiórkę</a>
                <a href="zalozzbiorke.html" class="zbiorkinav2">Szukaj Zbiórki</a>
				<input  type="text" id="ikona" name="search">
        </div>
        <div id="imageslider">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <div class="slide first">
                        <a href="zbiorka1.html"><img src="samodzielni.jpg" alt="zdjecie1"></a>
                    </div>
                    <div class="slide ">
                        <a href="zbiorka2.html"><img src="samodzielni.jpg" alt="zdjecie2"></a>
                    </div>
                    <div class="slide ">
                        <a href="zbiorka3.html"><img src="samodzielni.jpg" alt="zdjecie3"></a>
                    </div>
                    <div class="slide ">
                        <a href="zbiorka4.html"><img src="samodzielni.jpg" alt="zdjecie4"></a>                    
                    </div>
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>

                    <div class="navigation-manual">
                        <label for="radio1" class="manual-btn"></label>
                        <label for="radio2" class="manual-btn"></label>
                        <label for="radio3" class="manual-btn"></label>
                        <label for="radio4" class="manual-btn"></label>
                    </div>
                </div>
            </div>
			
			<?php
    $baza = new mysqli('localhost','root','','samodzielni');
    $zapytanie = "select * from zbiorki";

    $wynik = mysqli_query($baza,$zapytanie);

    while( $kod = $wynik->fetch_assoc() )
    {
    echo $kod['cel'].' - '.$kod['opis'].'<br>';
    }


    $baza->close();
    ?>
	
        </div>
        <script type="text/javascript">
            var counter = 1;
            setInterval(function(){
                document.getElementById('radio' + counter).checked = true;
                counter++;
                if(counter>4){
                    counter=1;
                }
            },10000);
        </script>


        </div>

        
        
    </body>
</html>