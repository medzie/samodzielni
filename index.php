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
            <div id="navlewo">
                <img src="logo.png" width="10%" class="zdjecianav" id="logo">
                <a href="lista.html" class="zbiorkinav">Lista Zbiórek</a>
                <a href="zaloz.html" class="zbiorkinav">Załóż Zbiórkę</a>
                <a href="" class="zbiorkinav2">Szukaj Zbiórki</a>
				<input  type="text" id="ikona" name="search">
                </div>
            <div id="navprawo">
                <img src="account.png" height="30%" id="obrazek_konta">
                <a href="zalozzbiorke.html" class="zbiorkinav3">Moje konto</a>
                </div>
                <div style="clear:both"></div>
        </div>
        <div id="imageslider">
            <div class="slider">
                <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <div class="slide first">
                        <a href="zbiorka1.html"><img src="tomek1.png" alt="zdjecie1"></a>
                    </div>
                    <div class="slide ">
                        <a href="zbiorka2.html"><img src="tomek2.png" alt="zdjecie2"></a>
                    </div>
                    <div class="slide ">
                        <a href="zbiorka3.html"><img src="tomek3.png" alt="zdjecie3"></a>
                    </div>
                    <div class="slide ">
                        <a href="zbiorka4.html"><img src="tomek4.png" alt="zdjecie4"></a>                    
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
        </div>
    <div id="mainpage">
    <div class="zbiorka">
            <img src="tomek.jpg">
        <?php
            $baza = new mysqli('localhost','root','','samodzielni');
            $zapytanie = "select * from zbiorki";
            $wynik = mysqli_query($baza,$zapytanie);
            while( $kod = $wynik->fetch_assoc() )
            {
            echo '<h2>'.$kod['cel'].'</h2><br>'.$kod['opis'].'<br><br>'.$kod['zebrano'].' z '.$kod['potrzeba'].' zł<br><br>'.$kod['procent'].'%<br><br>Brakuje: '.$kod['brakuje'].' zł';
            }
            $baza->close();
        ?>
        </div>
        <div class="zbiorka">
            <img src="sadboy.jpg" width="286px" height="257px">
        <?php
            $baza = new mysqli('localhost','root','','samodzielni');
            $zapytanie = "select * from zbiorki";
            $wynik = mysqli_query($baza,$zapytanie);
            while( $kod = $wynik->fetch_assoc() )
            {
            echo '<h2>'.$kod['cel'].'</h2><br>'.$kod['opis'].'<br><br>'.$kod['zebrano'].' z '.$kod['potrzeba'].' zł<br><br>'.$kod['procent'].'%<br><br>Brakuje: '.$kod['brakuje'].' zł';
            }
            $baza->close();
        ?>
        </div>
        <div class="zbiorka">
            <img src="malysz.png" width="286px" height="257px">
        <?php
            $baza = new mysqli('localhost','root','','samodzielni');
            $zapytanie = "select * from zbiorki";
            $wynik = mysqli_query($baza,$zapytanie);
            while( $kod = $wynik->fetch_assoc() )
            {
            echo '<h2>'.$kod['cel'].'</h2><br>'.$kod['opis'].'<br><br>'.$kod['zebrano'].' z '.$kod['potrzeba'].' zł<br><br>'.$kod['procent'].'%<br><br>Brakuje: '.$kod['brakuje'].' zł';
            }
            $baza->close();
        ?>
        </div>

        <div class="zbiorka">
            <img src="marcin.png" width="286px" height="257px">
        <?php
            $baza = new mysqli('localhost','root','','samodzielni');
            $zapytanie = "select * from zbiorki";
            $wynik = mysqli_query($baza,$zapytanie);
            while( $kod = $wynik->fetch_assoc() )
            {
            echo '<h2>'.$kod['cel'].'</h2><br>'.$kod['opis'].'<br><br>'.$kod['zebrano'].' z '.$kod['potrzeba'].' zł<br><br>'.$kod['procent'].'%<br><br>Brakuje: '.$kod['brakuje'].' zł';
            }
            $baza->close();
        ?>
        </div>
    </div>
    <div id="stopa">
        <img src="footer.jpg" width="100%">
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