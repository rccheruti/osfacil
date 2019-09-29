//imprime

window.onload = function() {
			var imprimir = document.querySelector("#imprimir");
		    imprimir.onclick = function() {
		    	imprimir.style.display = 'none';
		    	window.print();
                
		    	var time = window.setTimeout(function() {
		    		imprimir.style.display = 'block';
		    	}, 1000);
		    }
			}

//fim imprime