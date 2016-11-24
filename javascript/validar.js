function validar(){
	    		var nome = form1.nome.value;
	    		var descricao = form1.descricao.value;
	    		var custo = form1.custo.value;

	    		if(nome == "" || nome.length <3){
	    			alert('Preencha o campo com o nome da Tarefa.');
	    			form1.nome.focus();
	    			return false;
	    		}

	    		if(descricao = "" || descricao.length<3){
	    			alert("Preencha o campo com o a descricao da Tarefa");
	    			form1.descricao.focus();
	    			return false
	    		}

	    		if(isNaN(custo)){
	    			alert("Digite apenas números!");
	    			form1.custo.focus();
	    			return false;
	    		}


	    	}
	    