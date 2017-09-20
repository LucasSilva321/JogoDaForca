	var t = 100;
	var palavra = document.getElementById("txtPalavra").innerHTML;
	//var palavra = "abacaxi";
	var label = document.getElementById("label");
	var totalPontos = palavra.length;
	var pontos = 0, erros = 0;
	var intervalo;
	

	window.onload = function(){
		intervalo = setInterval(tempo,1000);
		var texto = label.innerHTML;
		for(var i = 0; i < palavra.length; i++){
			//console.log(palavra[i]);
			if(palavra[i] == " "){
				totalPontos--;
				var txtAntes = texto;
				texto = txtAntes.substring(0,i) + " ";				
				if(i < palavra.length - 1){
					texto += txtAntes.substring(i+1);				
				}
			}
			
		}
		label.innerHTML = texto;
	}

	function tempo(){
		t--;
		document.getElementById("inputTempo").setAttribute("value",100 - t);
		document.getElementById("tempo").innerHTML = t;
		if(t <= 0 || erros == 7){
			alert("Tente Novamente");
			window.location.href = "/jogar";
		}
	}

	function exibirDica(){
		t -= 10;
		document.getElementById("lblDica").style.display = "block";
		document.getElementById("btnDica").setAttribute("class","btn btn-info disabled");
		document.getElementById("btnDica").setAttribute("onclick","");
	}

	function confere(elemento){
		elemento.setAttribute("class","btn btn-default disabled");
		elemento.setAttribute("onclick","");
		verificarPalavra(elemento.innerHTML);
		//console.log(elemento);

	}

	function verificarPalavra(letra){
		var texto = label.innerHTML;
		//console.log(texto);
		//console.log(palavra);
		var contaErro = true;	
		for(var i = 0; i < palavra.length; i++){
			if(palavra[i].toUpperCase() == letra.toUpperCase()){
				pontos++;
				contaErro = false;
				var txtAntes = texto;
				texto = txtAntes.substring(0,i) + letra.toUpperCase();				
				if(i < palavra.length - 1){
					texto += txtAntes.substring(i+1);				
				}
			}
			
		}
		if(contaErro){
			erros++;
			t -= 10;
			document.getElementById("sapo"+erros).style.display = "none";
		}
		label.innerHTML = texto;
		//console.log(pontos+"  "+totalPontos);
		if(pontos == totalPontos){
			document.getElementById("telaJogo").setAttribute("style","display:none");
			document.getElementById("salvar").style.display = "block";
			clearInterval(intervalo);
		}
	}
