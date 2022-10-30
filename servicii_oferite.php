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
    <a id="id1" href="index.php"> Acasa</a> 
    <a id="id1" href="despre_mine.php"> Despre mine</a>
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

<div class="servicii">

    <div id="id1_servicii">

        <?php
            $var = file_get_contents('evaluare_psihologica.txt');
            echo $var;
        ?>
    
    </div>
        
</div>
    
<div class="servicii" >
    Psihoterapia copilului și a adolescentului
</div>

<div class="servicii">
        Consiliere parentală
</div>

<div class="servicii">
        Psihoterapia adultului
</div>
    
<div class="fivecircles" style="margin-top: 5vw">    
        
    <a  class="a1" href="index.php" title="Acasa">
        <img id="circle" src="cottage.png" alt="loading picture" />
    </a> 

    <a href="despre_mine.php" title="Despre mine"> 
        <img id="circle" src="cris.png" alt="loading picture"/>
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
            Acasa
    </div>

    <div class="pages">
        Despre mine
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