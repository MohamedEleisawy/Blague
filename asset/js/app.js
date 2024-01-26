    'use strict'
        // récupération du bouton
        const drole1 = document.getElementById('boutonDrole1');
        //création de la fonction audio
        function haha(){
            //objet Audio qui contient le son stoker dans la varaible son
            const son_top_1 = new Audio("./asset/son/clash-royale.mp3");
            //déclancher le son
            son_top_1.play();
        }
        //evenement click sur la fonction
        drole1.addEventListener("click", haha);
        
        //drole 2
        const drole2 = document.getElementById('boutonDrole2');
        function haha2(){
            const son_top_2 = new Audio("./asset/son/oh-no.mp3");
            son_top_2.play();
        }
        drole2.addEventListener("click", haha2);
        
        //drole3
        const drole3 = document.getElementById('boutonDrole3');
        function haha3(){
            const son_top_3 = new Audio("./asset/son/rires-humain.mp3");
            son_top_3.play();
        }
        drole3.addEventListener("click", haha3);


        //flop 
        const flop1 = document.getElementById('boutonFlop1');
        function bouhh(){
            const son_flop_1 = new Audio ("./asset/son/null.mp3");
            son_flop_1.play();
        }
        flop1.addEventListener("click", bouhh);

        //flop 2
        const flop2 = document.getElementById('boutonFlop2');
        function bouhh2(){
            const son_flop_2 = new Audio("./asset/son/le-plus-nul.mp3");
            son_flop_2.play();
        }
        flop2.addEventListener("click", bouhh2);
        //flop3
        const flop3 = document.getElementById('boutonFlop3');
        function bouhh3(){
            const son_flop_3 = new Audio("./asset/son/nul-pas-bien.mp3");
            son_flop_3.play();
        }
        flop3.addEventListener("click", bouhh3);