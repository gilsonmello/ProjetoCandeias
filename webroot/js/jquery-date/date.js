
	function calendar(element){
		
			var date = new Date();
			var year = date.getFullYear();
			var dateCurrent = date.getDate();
			var month = date.getMonth();

			var arrayDaysWeek = ['D', 'S', 'T', 'Q', 'Q', 'S', 'S'];
			var arrayMonths = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];
			
			var calendar = '<table width="180px" cellpadding="10px" cellspacing="10" class="table-date" style="display: none;">';
			calendar += '<thead id="thead-date">';
			calendar += '<tr><td id="button-left"><a href="#"><<</a></td>';
			calendar += '<td id="button-right"><a href="#">>></a></td></tr>';
			calendar += '</thead>';

			var daysInMonth = [];
			var daysInWeekMonth = [];
			var j = 1;
			
			//Pegando quantos dias cada mês tem ex: Janeiro = 31, Fevereiro = 29
			for(var i = 0; i < 12; i++){
				var amountDayInMonth = new Date(year, i, 32);
				daysInMonth.push(32 - amountDayInMonth.getDate());
			}

			//Pegando o dia da semana que inicia o mês ex: 1 de Janeiro = Sexta, 1 de Fevereiro = Segunda
			for(var i = 0; i < 12; i++){
				var dayInWeekStartMonth = new Date(year, i, 1);
				daysInWeekMonth.push(dayInWeekStartMonth.getDay());;
			}

			for(var i = 0; i < 12; i++){
				calendar += '<tbody align="center" id="mes_'+i+'"><tr>';
				var numberColunm = 0;
				//Imprimindo os meses
				calendar += '<td colspan="7">'+arrayMonths[i]+'</td><tr>';
				//Imprimindo todos os dias da semana
				for(var n = 0; n < 7; n++){
					calendar += '<td>'+arrayDaysWeek[n]+'</td>';
				}
				//Fechando tr dos dias da semana
				calendar += '</tr>';
				calendar += '<tr>';
				for(var j = 1; j <= daysInMonth[i]; j++){
					numberColunm += 1;
					//Se o dia for 1 verifico quantas colunas devo pular até chegar no dia correto
					if(j == 1){
						for(var y = 0; y < daysInWeekMonth[i]; y++){
							calendar += '<td></td>';
							numberColunm += 1;
						}
					}
					//Se o dia e mes atual for igual impresso com um destque
					if(dateCurrent == j && month == i){
						calendar +='<td><b>'+j+'</b></td>';
					}else{
						//Impresso os dias do mes normal
						calendar +='<td>'+j+'</td>';
					}
					//Se chegar na 7(setima coluna) fecho a linha e zero a variavel que faz a contagem
					if(numberColunm == 7){
						calendar += '</tr><tr>';
						numberColunm = 0;
					}
				}
				calendar += '</tr>';
				calendar += '</tbody>';
			}
			calendar += '</table>';

			document.getElementById(element).insertAdjacentHTML('afterend', calendar);
			
			for(var i = 0; i < 12; i++){
				if(i != month){
					document.getElementById('mes_'+i).style.display = "none";
				}
			}	
		}

	
