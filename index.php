<?php
include_once "header.php";
include_once "style.php";
?>

<body>

<div class="mobile" onclick="myFunction(this)">

    <div class="bar1"></div>
    <div class="bar2"></div>
    <div class="bar3"></div>

</div>

<ul class="ul1">

    <a id="id1" href="despre_mine.php"> Despre mine</a> 
    <a id="id1" href="servicii_oferite.php"> Servicii oferite</a>
    <a id="id1" href="preturi.php"> Preturi</a>
    <a id="id1" href="resurse.php">Resurse</a>
    <a id="id1" href="contact.php"> Contact </a>

</ul>

<script>

    var var1 = document.querySelector(".mobile");
    var var2 = document.querySelector(".ul1")

    var1.addEventListener('click', function(event) {
            if(var2.style.display === 'grid') {
                    var2.style.display = 'none'; 
            } else {
                    var2.style.display = 'grid'; 
            }     
    });

    function myFunction(x) {
        x.classList.toggle("change");
    }

</script>

    <a class="a-logo" href="despre_mine.php">

        <div class="logo">

            <div class="a-img"> 
                <img src="brain.png"  alt="loading picture">
            </div>

            <div class="a-text">

                <div class="psiho-text">
                    <hr>
                    <b>PSIHOEVOLUȚIE </b>
                </div>
                
                <div class="a-terapie">
                    Recâștigă-ți starea de bine!
                    <hr>
                </div>
                    
            </div>
        
        </div>

    </a>


    <div class="new-data">

        <a class="phone" href="tel:+40721661884">  Telefon  </a>  

        <div>
            &nbsp; &nbsp;| &nbsp; &nbsp;
        </div>
                
        <a class="email" href="mailto:cristinateodorescu@ymail.ro">  Mail  </a> 
       
    </div>

    
    <div class="slide">

        <img class="under1" src="landscape.png" alt loading ="lazy" />

        <img class="under2" src="scale.png" alt="" />
        
        <div class="jung">

            "Nu sunt ceea ce se întâmplă cu mine. Sunt ceea ce aleg să devin." - Carl Jung

        </div>

        <div class="freud">

            "Pentru lucrurile mărunte încrede-te în rațiune, pentru cele mari, în inimă." - Sigmund Freud

        </div>

    </div>   

    <script>

        var var3 = document.querySelector(".under1");
        var var4 = document.querySelector(".under2");

        setInterval(function() {
                if(var3.style.opacity === '1') {
                        var3.style.opacity = '0';
                        var4.style.opacity = '1';
                } else {
                        var3.style.opacity = '1';
                        var4.style.opacity = '0';
                };
        }, 5000);

        var var5 = document.querySelector(".jung");
        var var6 = document.querySelector(".freud");

        setInterval(function() {
                if(var5.style.opacity === '1') {
                        var5.style.opacity = '0';
                        var6.style.opacity = '1';
                } else {
                        var5.style.opacity = '1';
                        var6.style.opacity = '0';
                };
        }, 5000);

    </script>
    
    <div class="body-text">

        <?php
            echo file_get_contents('acasa_text.txt');
        ?>

    </div>

    <div class="fivecircles">    
        
        <a  class="a1" href="despre_mine.php" title="Despre mine">
            <img id="circle" src="cris.png" alt="loading picture" />
        </a> 

        <a href="servicii_oferite.php" title="Servicii oferite"> 
            <img id="circle" src="servicii_oferite.png" alt="loading picture"/>
        </a>

        <a href="preturi.php" title="Preturi"> 
            <img id="circle" src="price.png" alt="loading picture"/>
        </a>

        <a href="resurse.php" title="Resurse"> 
            <img id="circle" src="resources.png" alt="loading picture"/>
        </a>

        <a  href="contact.php" title="Contact">
            <img id="circle" src="contact.png" alt="loading picture"/>
        </a>
    
    </div>

    <div class="names">

        <div class="pages">
            Despre mine
        </div>

        <div class="pages">
            Servicii oferite
        </div>

        <div class="pages">
            Preturi
        </div>

        <div class="pages">
            Resurse
        </div>
        
        <div class="pages">
            Contact
        </div>
        
    </div>

    
    <?php
    include_once "footer.php";
    ?>
    