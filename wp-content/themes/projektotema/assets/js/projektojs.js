(function(){

	//Siema slideris tekstui 
    	const sliderisTekstui = new Siema({
    		selector: '.siemaText',
    		draggable: false,
    		startIndex: 2,
    		loop: true
    	});

    	//pasirenku paveiksliukus ir uzdedu lisenerius ant rodykliu
    	var img = document.querySelectorAll('.review-pictures img');
    	var length = img.length;

    	document.querySelector('.icon-keyboard_arrow_left').addEventListener('click', prevClick);
    	//paspaudus rodykle nuima active clase su classList property
    	function prevClick() {
    		sliderisTekstui.prev();
			
			//iteruoja per img
			for (var i = 0; i < length; i++) {
				// jei img turi active klase vykdoma logika
				if (img[i].classList.contains('active')) {
					//jei active klase tarp 0 ir 5
					if (i>0 && i<length) {
						//paspaudus rodykle nuima active clase su classList property
						img[i].classList.remove('active');
						//ir uzdeda active klase img su indeksu -1
						img[i-1].classList.add('active');
						break;
						//jei active klases indeksas 0 vykdis sita
					} else if (i==0) {
						img[i].classList.remove('active');
						img[length-1].classList.add('active');
						break;
					}	
				}				
			}
    	}
    	document.querySelector('.icon-keyboard_arrow_right').addEventListener('click', nextClick);
    	function nextClick() {
    		sliderisTekstui.next();
			
			for (var i = 0; i < length; i++) {
				if (img[i].classList.contains('active')) {
					if (i>=0 && i<length-1) {
						
						img[i].classList.remove('active');
						img[i+1].classList.add('active');
					break;
					} else if (i==length-1) {
						
						img[i].classList.remove('active');
						img[i-i].classList.add('active');
						break;
					}	
				}				
			}
    	}
        //pasirenku visus veidukus (img failus)
    	var uzdetiListenerius = document.querySelectorAll('.review-pictures img');
    	//iteruoju per img failu masyva ir uzdedu kiekvienam listeneri
        uzdetiListenerius.forEach(function(el, i){
    		el.addEventListener('click', paspaudus);
    	});

    	function paspaudus(){
            //iteruojus per visus veidukus
    		for (var i = 0; i < length; i++) {
                //jei paspaustas veidukas turi klase active nieko nevyks
    			if (this.classList.contains('active')) {
    				//do nothing
    				break;
                    //jei paspaustas veidukas neturi active klases
    			} else {

    				uzdetiListenerius.forEach(function(el, i){
                        //visiems veidukams nuima active
    					el.classList.remove('active');

    				});
                    //ir uzdeda paspaustam
    				this.classList.add('active');
                    //kiekvienas veidukas yra sunumeruotas. dataset paima jo numeri
    				var eiti = (this.dataset.nuotrauka)-1;
                    //paspaudus ant veiduko slickas parodo skaidre naudojant goto metoda
    				sliderisTekstui.goTo(eiti);
    			}
    		}
    	}

        document.querySelector('.burger').addEventListener('click', burgeris);

        function burgeris(){

            document.querySelector('header nav').classList.toggle('open');
            document.querySelector('.review .container').classList.toggle('erzinantys');
            document.querySelector('.contact-container').classList.toggle('erzinantys');
            document.querySelector('.footer-container').classList.toggle('erzinantys');
            document.querySelector('.about-icons-container').classList.toggle('erzinantys');
            document.querySelector('html').classList.toggle('lock');

        }
        var navLinkai = document.querySelectorAll('header nav li a');
        if (window.innerWidth <= 480){//window.innerWidth parodo lango ploti (jei burgerio nera sitas listeneris neuzsides)

            navLinkai.forEach(function(el){
            el.addEventListener('click', uzsiveria);
            });
        }
        function uzsiveria(){

            burgeris();

        }
        //console.log(window.innerWidth);
}());