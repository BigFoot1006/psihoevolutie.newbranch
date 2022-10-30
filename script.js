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

var var7 = document.querySelector(".body-text");
var7.innerHTML = 
"Bun venit la Psihoevolutie, stare de bine unde gasesti consiliere familiala si individuala, pentru adulti si copii."
+ "<br> Iti multumesc ca-mi vizitezi pagina si sper ca vei gasi aici raspuns la cel putin cateva dintre intrebarile tale." 
+ "<br> Nu ezita sa ma contactezi pentru a afla mai multe sau pentru a te programa la prima sedinta de psihoterapie."
+ "<br> Expertiza mea este acreditata de Colegiul Psihologilor."
+ "<br> Scopul meu este de a te intalni acolo unde esti si de a te calauzi pana la a-l descoperi pe cel mai bun din tine."
+ "<br> Calificarea mea si anii mei de experienta sunt calauza ta."
+ "<br> Cred intr-o abordare holistica, ce se adreseaza tuturor nevoilor tale fizice, mentale, emotionale si spirituale. "
+ "<br> Inteleg ca intreaga personalitate este afectata de schimbarile din doar una dintre aceste zone. "
+ "<br> Sesiunile de consiliere te pot ajuta sa explorezi modul cum experimentezi si privesti lumea din jurul tau. "
+ " <br> Poate ca esti ezitant in a-mi cauta ajutorul pentru ceea ce simti atunci cand esti singur cu gandurile tale, dar intregul proces de consiliere ofera spatiu pentru explorare, pentru crestere si, in final, pentru a castiga increderea de care ai nevoie pentru a experimenta o viata mai plina si mai autentica."
+ "<br> <br> <h3>      De ce Terapie?  </h3>"
+ "  <br> Inteleg ca viata nu este mereu usoara si uneori, chiar si cei mai puternici au nevoie de ajutor pentru a depasi provocarile zilnice. "
+ "<br> Fiecare are batalii de purtat si obstacole de trecut la un moment dat al vietii. "
+ "<br> Daca te lupti cu anxietatea, depresia, traume trecute sau prezente, dificultati de relationare, esti coplesit de factorii stresanti din viata, ar trebui sa stii ca exista speranta pentru un maine mai bun."
+ "<br> Ca terapist, posed abilitatile necesare pentru a te repune pe propriile-ti picioare sau pe unele complet noi, daca este nevoie. "
+ "<br> Terapia este de asemenea benefica pentru cei care fac mari schimbari in viata, care vor sa dezvolte noi abilitati, sau care vor sa-si creasca propriul nivel de acceptare si sa sarbatoreasca cine sunt."
+ " <br> Consiliere Profesionala si Accesibila in Bucuresti, sector 6"
+ "<br> Psihoevolutie, stare de bine va ofera consiliere pentru Bucuresti. "
+ " <br> Contactati-ne prin telefon sau e-mail."
+ "<br> Astept cu nerabdare sa lucram impreuna."
+ "<br> Imi aplic expertiza profesionala si intelegerea empatica pentru a oferi cea mai buna abordare holistica a serviciilor de consiliere."
+ "<br> <h3> Incepe Astazi  </h3>"
+ "<br> Daca esti interesat sa devii o versiunea a ta mai implinita, ne bucuram sa facem cu tine fiecare pas al calatoriei. "
+ "<br> <h3> Contactati-ne astazi!  </h3>"

var var10 = document.querySelector(".foot");
var10.innerHTML = "cristinateodorescu 2022";