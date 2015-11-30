function waitFor(testFx, onReady, timeOutMillis) {
    var maxtimeOutMillis = timeOutMillis ? timeOutMillis : 3000, //< Default Max Timout is 3s
        start = new Date().getTime(),
        condition = false,
        interval = setInterval(function() {
            if ( (new Date().getTime() - start < maxtimeOutMillis) && !condition ) {
                condition = (typeof(testFx) === "string" ? eval(testFx) : testFx()); //< defensive code
            } else {
                if(!condition) {
                    console.log("Valor da soma não econtrado");
                    phantom.exit(1);
                } else {
                    console.log("Calculou a soma em: " + (new Date().getTime() - start) + "ms.");
                    typeof(onReady) === "string" ? eval(onReady) : onReady(); 
                    clearInterval(interval); 
                }
            }
        }, 50); 
};

var page = require('webpage').create();

page.open('http://rc-phpnaumbler-com-br.umbler.net/', function() {
	console.log("abriu pagina...")

	var passo1 = page.evaluate(function() {
		document.getElementById('numero1').value = '2';	
		return document.getElementById('numero1').value;	
	});
    console.log("valor 1: " + passo1);			
			
	var passo2 = page.evaluate(function() {
       	document.getElementById('numero2').value = '4';
		return document.getElementById('numero2').value;			
    });  
	console.log("valor 2: " + passo2);	
	
	var passo3 = page.evaluate(function() {
       	document.getElementById("calcular").click()
	});
	console.log("clicou em submit...")
	
	var passo4 = page.onUrlChanged = function(url) {
		console.log("alterou pagina "+url+"...");	
		waitFor(function() {
				return page.evaluate(function() {
					return document.getElementById("resultado").innerText == 6;
				});
			}, function() {
					console.log("resultado 6!");			   
					phantom.exit();
			}); 			
	};		

});