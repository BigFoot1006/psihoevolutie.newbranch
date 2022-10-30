<style>
        
    html, body {
        background-color: rgb(244,237,229);
        font-family: 'Source Sans Pro', sans-serif;
        margin: 0px;
        overflow-x: hidden;
        box-sizing: border-box;
    }

    @media (max-width: 710px)  {

        html {
            background-color: rgb(116, 10, 113);
            font-family: 'Source Sans Pro', sans-serif;
            margin: 5px;
            box-sizing: border-box;
            height: 100%;
        }

        body {
            border-radius: 15px;
            background-color: rgb(244,237,229);
            box-sizing: border-box;
            height: 100%;
        }

        /* starts nav bar */

        .ul1 { 
            display: none;
            position: relative;
            opacity: 0.5;
            list-style-type: none;
            width: 50%;
            margin-left: 2vw;
            border-radius: 10%;
            transition: 4s;
        }

        #id1 {
            padding: 15px 10px;
            background-color: rgb(116, 10, 113);
            border-radius: 4vw;
            margin: 2px;
            font-size:1rem;
            color: rgb(244,237,229);
            text-decoration: none;
        }
            
        .mobile {
            display: inline-block;
            cursor: pointer;
        }
           
        .bar1, .bar2, .bar3 {
            width: 35px;
            height: 5px;
            background-color: rgb(116, 10, 113);
            margin: 6px;
            border-radius: 5px;
            transition: 0.4s;
        }
            
        .change .bar1 {
            -webkit-transform: rotate(-45deg) translate(-9px, 6px);
            transform: rotate(-45deg) translate(-9px, 6px);
        }
            
        .change .bar2 {opacity: 0;}
            
        .change .bar3 {
            -webkit-transform: rotate(45deg) translate(-8px, -8px);
            transform: rotate(45deg) translate(-8px, -8px);
        }

        /* ends nav bar */

        .a-logo {
            text-decoration: none;
            text-align: center;
            color:rgb(124, 48, 48);;
        }

        .logo {
            display:block;
        }

        .a-img {
            margin: 50px;
            text-align: center;
            scale: 1.5;
            transform: rotateY(720deg);
        }
    
        .a-text {
            font-size: 2rem;
            text-align: left;
            margin-left: 10px;
            text-align: center;           
        }
            
        .a-terapie {
            font-size: 1rem;
        }

        /* starts contact data box */
    
        .new-data {
            display: flex;
            color: rgb(124, 48, 48);;
            flex-direction: row;
            justify-content: center;
            padding: 10px;
            width: 100%;
        }

        .phone {
            text-decoration: none;
            color: rgb(46,135,135);
        }

        .email {
            text-decoration: none;
            color: rgb(46,135,135);
        }

        /* ends contact data box */
            
        /* starts slide show */

        .slide {
            width: 100%;
            height: 40vw;
        }

        .under1 {
            position: relative;
            width:100%;
            opacity: 1;    
        } 

        .under2 {
            position: relative;
            transform: translate(0%, -100%);
            width:100%;
            opacity: 0;
        } 

        .jung {
            position:relative;
            display: block;
            width: 100%;
            height: auto;
            font-size:large;
            font-weight: bolder;
            color: rgb(244,237,229);
            text-shadow: 1px 1px rgb(124, 48, 48);
            text-align:center;          
            opacity: 1;
            transform: translate(0vw, -60vw);
        }

        .freud {
            position: relative;
            display: block;
            width: 100%;
            height: auto;
            font-size: large;
            font-weight: bolder;
            color: rgb(244,237,229);
            text-shadow: 1px 1px rgb(124, 48, 48);
            text-align:center;     
            opacity: 0;
            transform: translate(0vw, -70vw);
        }

        /* ends slide show */

        /* starts the body text */

        /* starts five circles */

        .fivecircles {
            display: flex;
            flex-direction: row;
            justify-content:space-around;
            align-items: center;     
        }

        #circle {
            flex-basis: 15%;
            justify-content: center;
            border-radius: 50%;
            width: 10vw;
            height: 10vw;
        }

        .names {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;                
        }
        
        .pages {
            flex-basis: 25%;
            text-align: center;
        }
            
        /* ends five circles */

        .body-text {
            position: relative;
            margin-top: 2vw;
            text-align:justify;
            margin-left: 5vw;
            margin-right: 5vw;
        }
    
        /* ends the body text */

        /* starts servicii oferite page */

        #top_div {
            margin-top: 10px;
        }

        .servicii {
            display: block;
            margin: 5px;
            padding: 10vw 5vw 10vw 5vw;
            transition: all 600ms ease-out;
            height: 5vw;
            box-shadow: 5px 5px 10px rgb(114, 47, 55);
            border-radius: 10px;
        }
    
        .servicii:hover {
            height: 40vw;
        }
    
        /* ends servicii oferite page */

        /* starts footer */

        .foot {
            display:flex;
            height: 3vw;
            background-color: rgb(116, 10, 113);
            opacity: 0.5;
            color: rgb(244,237,229);
            padding: 1vw;
            border-radius: 15px;
            text-align: left;
            align-items: center;
            border: 2px solid rgb(244,237,229);
            position: relative;
        }
            
        /* ends footer */

        .cris {
            border-radius: 50%;
            padding: 2px;
            width: 40%;
            float: left;
        }

    }   /* ends the adjustment of the @media (max-width: 710px)   */



        /* starts the adjustment 710px 870px */

    @media (min-width: 710px) and (max-width: 870px)  {
            /* starts navbar */

        .ul1 {
            position: relative;
            list-style-type: none;
            margin: 0px;    
            padding: 15px 30px;  
            height: 2.5vw;
            vertical-align: middle;
        }

        #id1 {
            padding: 15px 30px;
            font-size: 1rem;
            color: rgb(124, 48, 48);
            text-decoration: none;
            border-radius: 50%;
            vertical-align: middle;
        }

        #id1:hover {
            background-color: rgb(238, 224, 221);
            cursor:pointer;
        }

        .mobile {
            display: none;
        }
            
        /* ends nav bar */

        /* these classes are for logo item */

        .a-logo {
            text-decoration: none;
            text-align: center;
        }

        .logo {
            display: flex; 
            flex-direction:row;
            cursor: pointer;
            color: rgb(124, 48, 48);;
            justify-items:left;
        }

        .a-img {
            flex-basis: 15%;
            flex-grow: 1;
            flex-shrink: 1;
            border-radius: 50%;
            margin: 30px 30px 30px 30px;
        }

        .a-text {
            flex-basis: 85%;
            align-self: center;
            flex-grow: 1;
            flex-shrink: 1;
        }

        .psiho-text {
            font-size: 2rem;
        }

        .a-terapie {
            font-size: 1.5rem;
        }

        /* end of logo item */

        /* starts contact data box */
 
        .new-data {
            display: flex;
            color: rgb(124, 48, 48);;
            flex-direction: row;
            justify-content: center;
            padding: 10px;
            width: 100%;
        }

        .phone {
            text-decoration: none;
            color: rgb(46,135,135);
        }

        .email {
            text-decoration: none;
            color: rgb(46,135,135);
        }

        /* ends contact data box */

        /* starts slide show */

        .slide {
            width: 100%;
            height: 35vw;
        }

        .under1 {
            position: relative;
            display:block;
            width:100%;
            opacity: 1;    
        } 

        .under2 {
            position: relative;
            display:block;
            width:100%;
            opacity: 0;
            transform: translate(0%, -100%);
        } 

        .jung {
            position:relative;
            display: block;  
            width: 100%;
            height: auto;
            font-size:x-large;
            font-weight: bolder;
            color: rgb(244,237,229);
            text-shadow: 1px 1px 7px rgb(124, 48, 48);
            text-align:center;     
            opacity: 1;
            transform: translate(0vw, -50vw);
        }

        .freud {
            position:relative;
            display: block;    
            width: 100%;
            height: auto;
            font-size:x-large;
            font-weight: bolder;
            color: rgb(244,237,229);
            text-shadow: 1px 1px 7px rgb(124, 48, 48);
            text-align:center;     
            opacity: 0;
            transform: translate(0vw, -50vw);
        }

        /* ends slide show */

        /* starts the body text */

        /* starts five circles */

        .fivecircles {
            display: flex;
            flex-direction: row;
            justify-content:space-around;
            align-items: center;     
        }

        #circle {
            flex-basis: 10%;
            justify-content: center;
            border-radius: 50%;
            width: 7vw;
            height: 7vw;
        }

        .names {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .pages {
            flex-basis: 25%;
            text-align: center;
        }

        /* ends five circles */

        .body-text {
            position: relative;
            text-align: justify;
            margin-top: 2vw;
            margin-left: 8vw;
            margin-right: 8vw;
        }

        .cris {
            border-radius: 50%;
            padding: 2px;
            width: 20%;
            float: left;
        }
 
        /* ends the body text */

        /* starts servicii oferite page */

        #top_div {
            margin-top: 10px;
        }

        .servicii {
            display: block;
            margin: 5px;
            padding: 0.5vw 2vw 0.5vw 2vw;
            transition: all 600ms ease-out;
            height: 5vw;
            box-shadow: 5px 5px 10px rgb(114, 47, 55);
            border-radius: 10px;
        }

        .servicii:hover {
            height: 20vw;
        }
   
        /* ends servicii oferite page */

        /* starts footer */

        .foot {
            display:flex;
            height: 5vw;
            background-color: rgb(124, 48, 48);
            color: rgb(244,237,229);padding: 1vw;
            text-align: left;
            align-items: center;
            border-radius: 15px;
        }

        /* ends footer */

    }        /*  end of @media (min-width: 710px) and (max-width: 870px)  */


        /* ends the adjustment 710px 870px */

        /* starts the adjustment 870px 2200px */

    @media (min-width: 870px) and (max-width: 2200px)  {

    /* starts navbar */

        .ul1 {
            position: relative;
            list-style-type: none;
            margin: 0px;    
            padding: 15px 30px;  
            height: 2.5vw;
            vertical-align: middle;
        }
   
        #id1 {
            padding: 15px 30px;
            font-size: 1.5rem;
            color: rgb(124, 48, 48);
            text-decoration: none;
            border-radius: 50%;
            vertical-align: middle;
        }

        #id1:hover {
            background-color: rgb(238, 224, 221);
            cursor:pointer;
        }

        .mobile {
            display: none;
        }
            
        /* ends nav bar */

        /* these classes are for logo item */

        .a-logo {
            text-decoration: none;
            text-align: center;
        }

        .logo {
            display: flex; 
            flex-direction:row;
            cursor: pointer;
            color: rgb(124, 48, 48);;
            justify-items:left;
        }

        .a-img {
            flex-basis: 15%;
            flex-grow: 1;
            flex-shrink: 1;
            border-radius: 50%;
            margin: 30px 30px 30px 30px;
        }

        .a-text {
            flex-basis: 85%;
            align-self: center;
            flex-grow: 1;
            flex-shrink: 1;
        }

        .psiho-text {
            font-size: 2rem;
        }

        .a-terapie {
            font-size: 1.5rem;
        }

        /* end of logo item */

        /* starts contact data box */
  
        .new-data {
            display: flex;
            color: rgb(124, 48, 48);;
            flex-direction: row;
            justify-content: center;
            padding: 10px;
            width: 100%;
        }

        .phone {
            text-decoration: none;
            color: rgb(46,135,135);
        }

        .email {
            text-decoration: none;
            color: rgb(46,135,135);
        }

        /* ends contact data box */

        /* starts slide show */

        .slide {
            width: 100%;
            height: 35vw;
        }

        .under1 {
            position: relative;
            display:block;
            width:100%;
            opacity: 1;    
        } 

        .under2 {
            position: relative;
            display:block;
            width:100%;
            opacity: 0;
            transform: translate(0%, -100%);
        } 

        .jung {
            position:relative;
            display: block;  
            width: 100%;
            height: auto;
            font-size:x-large;
            font-weight: bolder;
            color: rgb(244,237,229);
            text-shadow: 1px 1px 7px rgb(124, 48, 48);
            text-align:center;     
            opacity: 1;
            transform: translate(0vw, -50vw);
        }
            
        .freud {
            position:relative;
            display: block;    
            width: 100%;
            height: auto;
            font-size:x-large;
            font-weight: bolder;
            color: rgb(244,237,229);
            text-shadow: 1px 1px 7px rgb(124, 48, 48);
            text-align:center;     
            opacity: 0;
            transform: translate(0vw, -50vw);
        }

        /* ends slide show */

        /* starts the body text */

        /* starts five circles */

        .fivecircles {
            display: flex;
            flex-direction: row;
            justify-content:space-around;
            align-items: center;     
        }

        #circle {
            flex-basis: 15%;
            justify-content: center;
            border-radius: 50%;
            width: 7vw;
            height: 7vw;
        }
   
        .names {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
   
        .pages {
            flex-basis: 25%;
            text-align: center;
        }
            
        /* ends four circles */

        /* starts servicii oferite page */

        #top_div {
            margin-top: 10px;
        }

        .servicii {
            display: block;
            margin: 5px;
            padding: 0.5vw 2vw 0.5vw 2vw;
            transition: all 600ms ease-out;
            height: 5vw;
            box-shadow: 5px 5px 10px rgb(114, 47, 55);
            border-radius: 10px;
        }
  
        .servicii:hover {
            height: 20vw;
        }
  
        /* ends servicii oferite page */

        .body-text {
            position: relative;
            text-align: justify;
            margin-top: 2vw;
            margin-left: 8vw;
            margin-right: 8vw;
        }

        /* ends the body text */

        .cris {
            border-radius: 50%;
            padding: 10vw;
            width: 20%;
            float: left;
        }
  
        /* starts footer */

        .foot {
            display:flex;
            height: 1vw;
            background-color: rgb(124, 48, 48);
            color: rgb(244,237,229);
            font-size: small;
            padding: 0.3vw;
            text-align: left;
            align-items: center;
            border-radius: 15px;
        }

        /* ends footer */

    }        /*  end of @media (min-width: 700px) and (max-width: 2200px)  */


        /* starts despre_mine */

        .photo {
            margin: 2vw;
            float: left;
            width: 35vw;
            height: 35vw;
            border-radius: 50%;
        }

        .despremine {
            text-align: justify;
        }

        /* ends despre_mine */

        /* starts contact page */

        .cabinet {
            margin: 2vw;
            width: 90%;
            height: auto;
            border-radius: 20px;
            text-align: center;
        }

        /* starts phone number contact page */

        #hidden_phone {
            opacity: 1;
            cursor:pointer;
            margin-left: 2vw;
        }

        .change #hidden_phone {
            opacity: 0;
        }

        #no_phone { 
            opacity: 0;
            transition: 0.4s;
        }

        .change #no_phone { 
            opacity: 1;
            transition: 0.4s;
        }

        /* ends phone number contact page */

        /* starts mail display contact page */

        #hidden_mail {
            opacity: 1;
            cursor:pointer;
            margin-left: 2vw;
        }

        #mail {
            opacity: 0;
            transition: 0.4s;
        }

        .change #mail {
            opacity: 1;
        }

       /* ends mail display contact page */

       .contact {
            text-align: justify;
            margin-left: 5vw;
        }

        /* ends contact page */

</style>
</head>