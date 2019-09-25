// JavaScript Document
function FormataCnpj(campo, teclapres)
			{
				var tecla = teclapres.keyCode;
				var vr = new String(campo.value);
				vr = vr.replace(".", "");
				vr = vr.replace("/", "");
				vr = vr.replace("-", "");
				tam = vr.length + 1;
				if (tecla != 14)
				{
					if (tam == 3)
						campo.value = vr.substr(0, 2) + '.';
					if (tam == 6)
						campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 5) + '.';
					if (tam == 10)
						campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 3) + '.' + vr.substr(6, 3) + '/';
					if (tam == 15)
						campo.value = vr.substr(0, 2) + '.' + vr.substr(2, 3) + '.' + vr.substr(6, 3) + '/' + vr.substr(9, 4) + '-' + vr.substr(13, 2);
				}
			}
    

function FormataCPF(campo, teclapres)
			{
				var tecla = teclapres.keyCode;
				var vr = new String(campo.value);
				vr = vr.replace(".", "");
				vr = vr.replace("-", "");
				tam = vr.length + 1;
				if (tecla != 14)
				{
					if (tam == 4)
						campo.value = vr.substr(0, 3) + '.';
					if (tam == 7)
						campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 6) + '.';
					if (tam == 11)
						campo.value = vr.substr(0, 3) + '.' + vr.substr(3, 7) + vr.substr(10, 9) + '-';
				}
			}

function FormataNIRF(campo, teclapres)
			{
				var tecla = teclapres.keyCode;
				var vr = new String(campo.value);
				vr = vr.replace(".", "");
				vr = vr.replace("-", "");
				tam = vr.length + 1;
				if (tecla != 14)
				{
					if (tam == 2)
						campo.value = vr.substr(0, 1) + '.';
					if (tam == 5)
						campo.value = vr.substr(0, 1) + '.' + vr.substr(1, 4) + '.';
					if (tam == 9)
						campo.value = vr.substr(0, 1) + '.' + vr.substr(1, 3) + '.' + vr.substr(5, 7)+'-';
					
				}
			}

function FormataTell(campo, teclapres)
			{
				var tecla = teclapres.keyCode;
				var vr = new String(campo.value);
				vr = vr.replace(".", "");
				vr = vr.replace("-", "");
				vr = vr.replace("(", "");
				vr = vr.replace(")", "");
				tam = vr.length + 1;
				if (tecla != 14)
				{
					if (tam == 1)
						campo.value = vr.substr(0, 0) + '(';
					if (tam == 3)
						campo.value = vr.substr(0, 0) + '(' + vr.substr(0, 2) + ')';
					if (tam == 8)
						campo.value = vr.substr(0, 0) + '(' + vr.substr(0, 2) + ')' + vr.substr(0, 5) + '-';
				}
			}
    