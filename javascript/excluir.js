	function excluir_tarefa(e){
		 		if(!confirm("Deseja realmente excluir esse registro?"))
		 			cancelOperation(event);
		 	}

		 	function cancelOperation(e){
		 		var evt = e || window.event;
		 		if(evt.preventDefault())
		 			evt.preventDefault();
		 		else
		 			evt.returnValue = false;
		 	}