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
