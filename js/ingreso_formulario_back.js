function nuevoAjax()
{ 
	/* Crea el objeto AJAX. Esta funcion es generica para cualquier utilidad de este tipo, por
	lo que se puede copiar tal como esta aqui */
	var xmlhttp=false;
	try
	{
		// Creacion del objeto AJAX para navegadores no IE
		xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
	}
	catch(e)
	{
		try
		{
			// Creacion del objet AJAX para IE
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch(E)
		{
			if (!xmlhttp && typeof XMLHttpRequest!='undefined') xmlhttp=new XMLHttpRequest();
		}
	}
	return xmlhttp; 
}

//Ingreso de Encuesta

function IngresoEncuesta(codigo,cod_provincia,cod_canton,cod_parroquia,cod_zona,cod_sector,cod_manzana,grados_la,minutos_la,segundos_la,latitud,grados_lo,minutos_lo,segundos_lo,longitud,punto,zona,distrito_1,distrito_2,distrito_3,circuito_1,circuito_2,calle1,num_calle1,calle2,num_casa,num_lote,num_depart,num_piso,num_tel_fijo1,num_tel_fijo2,num_celular,apellidos,nombres,num_cedula,sexo,edad,discapacidad,carnet_conadis,porcentaje_discapacidad,etnia,instruccion_nivel,instruccion_ano,trabajo,no_trabajo,no_trabajo1,ocupacion,cod_ocupacion,categoria_ocupacional,ingreso_frecuencia,ingreso_valor,pesca_arrastre,actividad_pesca,actividad_anos,actividad_meses,asociacion,deseo_incursion,oferta_estatal,destreza,rama_actividad,cod_rama_actividad_t,cod_rama_actividad_n,observaciones,num_fam_1,num_fam_2,num_fam_3,num_fam_4,num_fam_5,num_fam_6,num_fam_7,num_fam_8,num_fam_9,num_fam_10,num_fam_11,num_fam_12,num_fam_13,num_fam_14,num_fam_15,num_fam_16)
{
	if(discapacidad[0].checked)
		discapacidad = discapacidad[0].value;
	else if(discapacidad[1].checked)
		discapacidad = discapacidad[1].value;
	else
		discapacidad = "";
	
		
	if(carnet_conadis[0].checked)
		carnet_conadis = carnet_conadis[0].value;
	else if(carnet_conadis[1].checked)
		carnet_conadis = carnet_conadis[1].value
	else
		carnet_conadis = "";

	if(trabajo[0].checked)
		trabajo=trabajo[0].value;
	else if(trabajo[1].checked)
		trabajo=trabajo[1].value;
	else
		trabajo = "";
		
	if(no_trabajo[0].checked)
		no_trabajo = no_trabajo[0].value;
	else if(no_trabajo[1].checked)
		no_trabajo = no_trabajo[1].value;
	else
		no_trabajo = "";

	if(no_trabajo1[0].checked)
		no_trabajo1 = no_trabajo1[0].value;
	else if(no_trabajo1[1].checked)
		no_trabajo1 = no_trabajo1[1].value;
	else
		no_trabajo1 = "";
		
	if(pesca_arrastre[0].checked)
		pesca_arrastre = pesca_arrastre[0].value;
	else if(pesca_arrastre[1].checked)
		pesca_arrastre = pesca_arrastre[1].value;
	else
		pesca_arrastre = "";
		
	if(asociacion[0].checked)
		asociacion = asociacion[0].value;
	else if(asociacion[1].checked)
		asociacion = asociacion[1].value;
	else
		asociacion = "";
	
	if(deseo_incursion[0].checked)
		deseo_incursion = deseo_incursion[0].value;
	else if(deseo_incursion[1].checked)
		deseo_incursion = deseo_incursion[1].value;
	else
		deseo_incursion = ""; 

	if(num_fam_1.checked)
		num_fam_1 = 1;
	else
		num_fam_1 = 0;
	//alert("num_fam_1="+num_fam_1);
	
	if(num_fam_2.checked)
		num_fam_2 = 1;
	else
		num_fam_2 = 0;
	//alert("num_fam_2="+num_fam_2);

	if(num_fam_3.checked)
		num_fam_3 = 1;
	else
		num_fam_3 = 0;
		
	if(num_fam_4.checked)
		num_fam_4 = 1;
	else
		num_fam_4 = 0;
	
	if(num_fam_5.checked)
		num_fam_5 = 1;
	else
		num_fam_5 = 0;
	
	if(num_fam_6.checked)
		num_fam_6 = 1;
	else
		num_fam_6 = 0;
	
	if(num_fam_7.checked)
		num_fam_7 = 1;
	else
		num_fam_7 = 0;
	
	if(num_fam_8.checked)
		num_fam_8 = 1;
	else
		num_fam_8 = 0;
	
	if(num_fam_9.checked)
		num_fam_9 = 1;
	else
		num_fam_9 = 0;
	
	if(num_fam_10.checked)
		num_fam_10 = 1;
	else
		num_fam_10 = 0;
	
	if(num_fam_11.checked)
		num_fam_11 = 1;
	else
		num_fam_11 = 0;
	
	if(num_fam_12.checked)
		num_fam_12 = 1;
	else
		num_fam_12 = 0;
	
	if(num_fam_13.checked)
		num_fam_13 = 1;
	else
		num_fam_13 = 0;
	
	if(num_fam_14.checked)
		num_fam_14 = 1;
	else
		num_fam_14 = 0;
	
	if(num_fam_15.checked)
		num_fam_15 = 1;
	else
		num_fam_15 = 0;
	
	if(num_fam_16.checked)
		num_fam_16 = 1;
	else
		num_fam_16 = 0;
	
		
	
	//if(validar(codigo,cod_provincia,cod_canton,cod_parroquia,cod_zona,cod_sector,cod_manzana,grados_la,minutos_la,segundos_la,latitud,grados_lo,minutos_lo,segundos_lo,longitud,punto,zona,distrito_1,distrito_2,distrito_3,circuito_1,circuito_2,calle1,num_calle1,calle2,num_casa,num_lote,num_depart,num_piso,num_tel_fijo1,num_tel_fijo2,num_celular,apellidos,nombres,num_cedula,sexo,edad,discapacidad,carnet_conadis,porcentaje_discapacidad,etnia,instruccion_nivel,instruccion_ano,trabajo,no_trabajo,no_trabajo1,ocupacion,cod_ocupacion,categoria_ocupacional,ingreso_frecuencia,ingreso_valor,pesca_arrastre,actividad_pesca,actividad_anos,actividad_meses,asociacion,deseo_incursion,oferta_estatal,destreza,rama_actividad,cod_rama_actividad_t,cod_rama_actividad_n,observaciones))
	if(validar(codigo,cod_provincia,cod_canton,cod_parroquia,calle1,num_calle1,num_piso,num_tel_fijo1,num_celular,apellidos,nombres,num_cedula,sexo,edad,discapacidad,carnet_conadis,porcentaje_discapacidad,etnia,instruccion_nivel,instruccion_ano,trabajo,no_trabajo,no_trabajo1,cod_ocupacion,categoria_ocupacional,ingreso_frecuencia,ingreso_valor,pesca_arrastre,actividad_pesca,actividad_anos,actividad_meses,asociacion,deseo_incursion,oferta_estatal,destreza,rama_actividad,cod_rama_actividad_t,cod_rama_actividad_n,num_fam_1,num_fam_2,num_fam_3,num_fam_4,num_fam_5,num_fam_6,num_fam_7,num_fam_8,num_fam_9,num_fam_10,num_fam_11,num_fam_12,num_fam_13,num_fam_14,num_fam_15,num_fam_16))
	{
		distrito = distrito_1+''+distrito_2+''+distrito_3;
		circuito = circuito_1+''+circuito_2;
		
		//"&sexo="+sexo+"&edad="+edad+"&discapacidad="+discapacidad+"&carnet_conadis="+carnet_conadis+"&porcentaje_discap="+porcentaje_discap+"&etnia="+etnia+"&instruccion_nivel="+instruccion_nivel+"&instruccion_ano="+instruccion_ano+"&trabajo="+trabajo+"&no_trabajo="+no_trabajo+"&no_trabajo1="+no_trabajo1+"&ocupacion="+ocupacion+"&cod_ocupacion="+cod_ocupacion+"&categoria_ocupacional="+categoria_ocupacional+"&ingreso_frecuencia=",ingreso_valor+"&pesca_arrastre="+pesca_arrastre+"&actividad_pesca="+actividad_pesca+"&actividad_anos="+actividad_anos+"&actividad_meses="+actividad_meses+"&asociacion="+asociacion+"&deseo_incursion="+deseo_incursion+"&oferta_estatal="+oferta_estatal+"&destreza="+destreza+"&rama_actividad="+rama_actividad+"&cod_rama_actividad_t="+cod_rama_actividad_t+"&cod_rama_actividad_n="+cod_rama_actividad_n
		//alert('function IngresoEncuesta= '+codigo+','+cod_provincia+','+cod_canton);
		var ajax=nuevoAjax();
		ajax.open("GET", "./clases/ingreso_formulario.php?codigo="+codigo+"&cod_provincia="+cod_provincia+"&cod_canton="+cod_canton+"&cod_parroquia="+cod_parroquia+"&cod_zona="+cod_zona
		+"&cod_sector="+cod_sector+"&cod_manzana="+cod_manzana+"&grados_la="+grados_la+"&minutos_la="+minutos_la+"&segundos_la="+segundos_la+"&latitud="+latitud+"&grados_lo="+grados_lo
		+"&minutos_lo="+minutos_lo+"&segundos_lo="+segundos_lo+"&longitud="+longitud+"&punto="+punto+"&zona="+zona+"&distrito="+distrito+"&circuito="+circuito+"&calle1="+calle1
		+"&num_calle1="+num_calle1+"&calle2="+calle2+"&num_casa="+num_casa+"&num_lote="+num_lote+"&num_depart="+num_depart+"&num_piso="+num_piso+"&num_tel_fijo1="+num_tel_fijo1
		+"&num_tel_fijo2="+num_tel_fijo2+"&num_celular="+num_celular+"&apellidos="+apellidos+"&nombres="+nombres+"&num_cedula="+num_cedula+"&sexo="+sexo+"&edad="+edad
		+"&discapacidad="+discapacidad+"&carnet_conadis="+carnet_conadis+"&porcentaje_discapacidad="+porcentaje_discapacidad+"&etnia="+etnia+"&instruccion_nivel="+instruccion_nivel
		+"&instruccion_ano="+instruccion_ano+"&trabajo="+trabajo+"&no_trabajo="+no_trabajo+"&no_trabajo1="+no_trabajo1+"&ocupacion="+ocupacion+"&cod_ocupacion="+cod_ocupacion
		+"&categoria_ocupacional="+categoria_ocupacional+"&ingreso_frecuencia="+ingreso_frecuencia+"&ingreso_valor="+ingreso_valor+"&pesca_arrastre="+pesca_arrastre+"&actividad_pesca="+actividad_pesca
		+"&actividad_anos="+actividad_anos+"&actividad_meses="+actividad_meses+"&asociacion="+asociacion+"&deseo_incursion="+deseo_incursion+"&oferta_estatal="+oferta_estatal+"&destreza="+destreza
		+"&rama_actividad="+rama_actividad+"&cod_rama_actividad_t="+cod_rama_actividad_t+"&cod_rama_actividad_n="+cod_rama_actividad_n
		+"&num_fam_1="+num_fam_1+"&edad_fam_1="+edad_fam_1.value+"&ingreso_fam_1="+ingreso_fam_1.value
		+"&num_fam_2="+num_fam_2+"&edad_fam_2="+edad_fam_2.value+"&ingreso_fam_2="+ingreso_fam_2.value
		+"&num_fam_3="+num_fam_3+"&edad_fam_3="+edad_fam_3.value+"&ingreso_fam_3="+ingreso_fam_3.value
		+"&num_fam_4="+num_fam_4+"&edad_fam_4="+edad_fam_4.value+"&ingreso_fam_4="+ingreso_fam_4.value
		+"&num_fam_5="+num_fam_5+"&edad_fam_5="+edad_fam_5.value+"&ingreso_fam_5="+ingreso_fam_5.value
		+"&num_fam_6="+num_fam_6+"&edad_fam_6="+edad_fam_6.value+"&ingreso_fam_6="+ingreso_fam_6.value
		+"&num_fam_7="+num_fam_7+"&edad_fam_7="+edad_fam_7.value+"&ingreso_fam_7="+ingreso_fam_7.value
		+"&num_fam_8="+num_fam_8+"&edad_fam_8="+edad_fam_8.value+"&ingreso_fam_8="+ingreso_fam_8.value
		+"&num_fam_9="+num_fam_9+"&edad_fam_9="+edad_fam_9.value+"&ingreso_fam_9="+ingreso_fam_9.value
		+"&num_fam_10="+num_fam_10+"&edad_fam_10="+edad_fam_10.value+"&ingreso_fam_10="+ingreso_fam_10.value
		+"&num_fam_11="+num_fam_11+"&edad_fam_11="+edad_fam_11.value+"&ingreso_fam_11="+ingreso_fam_11.value
		+"&num_fam_12="+num_fam_12+"&edad_fam_12="+edad_fam_12.value+"&ingreso_fam_12="+ingreso_fam_12.value
		+"&num_fam_13="+num_fam_13+"&edad_fam_13="+edad_fam_13.value+"&ingreso_fam_13="+ingreso_fam_13.value
		+"&num_fam_14="+num_fam_14+"&edad_fam_14="+edad_fam_14.value+"&ingreso_fam_14="+ingreso_fam_14.value
		+"&num_fam_15="+num_fam_15+"&edad_fam_15="+edad_fam_15.value+"&ingreso_fam_15="+ingreso_fam_15.value
		+"&num_fam_16="+num_fam_16+"&edad_fam_16="+edad_fam_16.value+"&ingreso_fam_16="+ingreso_fam_16.value
		+"&observaciones="+observaciones+"&accion=input",true);		
		//ajax.open("GET", "./clases/ingreso_empleado.php?ci_funcionario="+ci_funcionario+"&cod_area="+cod_area+"&cod_entidad="+cod_entidad+"&base_aporte="+base_aporte+"&cargo="+cargo+"&grupo_ocupacional="+grupo_ocupacional+"&imprenta="+imprenta+"&acum_decter="+acum_decter+"&cod_regimen="+cod_regimen+"&cod_proyecto="+cod_proyecto+"&cod_sp="+cod_sp+"&cod_movi="+cod_movi+"&cod_ingreso="+cod_ingreso+"&num_contra="+num_contra+"&autori_nomi="+autori_nomi+"&resp_uarh="+resp_uarh+"&fecha_ingreso="+fecha_ingreso+"&fecha_registro="+fecha_registro+"&cod_estado="+cod_estado+"&primero="+primero+"&segundo="+segundo+"&papellido="+papellido+"&sapellido="+sapellido+"&num_biometrico="+num_biometrico+"&gastos_proyectados="+gastos_proyectados+"&num_meses_impuesto="+num_meses_impuesto+"&fondos_reserva="+fondos_reserva+"&continuidad_fondos_reserva="+continuidad_fondos_reserva+"&num_dias_fondos_reserva="+num_dias_fondos_reserva+"&accion=input",true);
		ajax.onreadystatechange=function() 
		{ 
			if (ajax.readyState==1)
			{
			document.getElementById("DivIngresoEncuesta").innerHTML="cargando..";
			}
			if (ajax.readyState==4)
			{
				document.getElementById("DivIngresoEncuesta").parentNode.innerHTML=ajax.responseText;
			
			} 
		}
		ajax.send(null);
	}
	
}

//VALIDA CAMPOS OBLIGATORIOS
function validar(codigo,cod_provincia,cod_canton,cod_parroquia,calle1,num_calle1,num_piso,num_tel_fijo1,num_celular,apellidos,nombres,num_cedula,sexo,edad,discapacidad,carnet_conadis,porcentaje_discapacidad,etnia,instruccion_nivel,instruccion_ano,trabajo,no_trabajo,no_trabajo1,cod_ocupacion,categoria_ocupacional,ingreso_frecuencia,ingreso_valor,pesca_arrastre,actividad_pesca,actividad_anos,actividad_meses,asociacion,deseo_incursion,oferta_estatal,destreza,rama_actividad,cod_rama_actividad_t,cod_rama_actividad_n,num_fam_1,num_fam_2,num_fam_3,num_fam_4,num_fam_5,num_fam_6,num_fam_7,num_fam_8,num_fam_9,num_fam_10,num_fam_11,num_fam_12,num_fam_13,num_fam_14,num_fam_15,num_fam_16)
{
	if(codigo== "" || /^\s+$/.test(codigo)){
		alert("N.- DE FORMULARIO es obligatorio.");
		return false; 
	}
	
	if(cod_provincia== "" || /^\s+$/.test(cod_provincia)){
		alert("PROVINCIA es obligatorio.");
		return false; 
	}
		
	if(cod_canton== "" || /^\s+$/.test(cod_canton)){
		alert("CANT\u00D3N es obligatorio.");
		return false;
	}
	
	if(cod_parroquia== "" || /^\s+$/.test(cod_parroquia)){
		alert("PARROQUIA es obligatorio.");
		return false;
	}

	if(calle1== "" || /^\s+$/.test(calle1)){
		alert("CALLE 1 es obligatorio.");
		return false;
	}
	
	if(num_calle1== "" || /^\s+$/.test(num_calle1)){
		alert("Nº DE LA CALLE es obligatorio.");
		return false;
	}

	if(num_piso== "" || /^\s+$/.test(num_piso)){
		alert("N\u00DAMERO DE PISO es obligatorio.");
		return false;
	}
	
	if(num_tel_fijo1== "" || /^\s+$/.test(num_tel_fijo1)){
		alert("Nº TELEF\u00D3NICO FIJO 1 es obligatorio.");
		return false;
	}

	if(num_celular== "" || /^\s+$/.test(num_celular)){
		alert("Nº CELULAR es obligatorio.");
		return false;
	}
	
	if(apellidos== "" || /^\s+$/.test(apellidos)){
		alert("APELLIDOS es obligatorio.");
		return false;
	}
	
	if(nombres== "" || /^\s+$/.test(nombres)){
		alert("NOMBRES es obligatorio.");
		return false;
	}
	
	if(num_cedula== "" || /^\s+$/.test(num_cedula)){
		alert("CEDULA DE CIUDADANIA es obligatorio.");
		return false;
	}
	
	if(sexo== "" || /^\s+$/.test(sexo)){
		alert("SEXO es obligatorio.");
		return false;
	}
	
	if(edad== "" || /^\s+$/.test(edad)){
		alert("EDAD es obligatorio.");
		return false;
	}
	
	if(discapacidad== "" || /^\s+$/.test(discapacidad)){
		alert("DISCAPACIDAD es obligatorio.");
		return false;
	}
	
	if(discapacidad== "1")
	{ 
		if(carnet_conadis== "" || /^\s+$/.test(carnet_conadis)){
			alert("CARNET CONADIS es obligatorio.");
			return false;
		}
	}
	
	if(carnet_conadis== "1")
	{ 
		if(porcentaje_discapacidad== "" || /^\s+$/.test(porcentaje_discapacidad)){
			alert("PROCENTAJE DE DISCAPACIDAD es obligatorio.");
			return false;
		}
	}
	
	if(etnia== "" || /^\s+$/.test(etnia)){
		alert("ETNIA es obligatorio.");
		return false;
	}

	if(instruccion_nivel== "" || /^\s+$/.test(instruccion_nivel)){
		alert("	NIVEL DE INSTRUCCION es obligatorio.");
		return false;
	}

	if(instruccion_ano== "" || /^\s+$/.test(instruccion_ano)){
		alert("A\u00D1OS DE INSTRUCCION es obligatorio.");
		return false;
	}

	if(trabajo == "" || /^\s+$/.test(trabajo)){
		alert("TRABAJO es obligatorio.");
		return false;
	}
	
	if(trabajo== "0")
	{ 
		if(no_trabajo == "" || /^\s+$/.test(no_trabajo)){
			alert("CONFIRMACI\u00D3N DE NO TRABAJAR(12)  es obligatorio.");
			return false;
		}
	}
	
	if(no_trabajo== "0")
	{ 
		if(no_trabajo1 == "" || /^\s+$/.test(no_trabajo1)){
			alert("CONFIRMACI\u00D3N DE NO TRABAJAR(13) es obligatorio.");
			return false;
		}
	}
	
	if(no_trabajo1!= "0")
	{ 
		if(cod_ocupacion== "" || /^\s+$/.test(cod_ocupacion)){
				alert("CODIGO CIUO es obligatorio.");
				return false;
			}
	}
	
	if(no_trabajo1== "1")
	{ 
		if(categoria_ocupacional == "" || /^\s+$/.test(categoria_ocupacional)){
			alert("CATEGORIA OCUPACIONAL es obligatorio.");
			return false;
		}
	
	
	}
	
	if(pesca_arrastre== "" || /^\s+$/.test(pesca_arrastre)){
		alert("PESCA DE ARRASTRE es obligatorio.");
		return false;
	}
	
	if(pesca_arrastre == 1){
		
		
		if(actividad_pesca== "" || /^\s+$/.test(actividad_pesca)){
			alert("ACTIVIDAD EN LA PESCA es obligatorio.");
			return false;
		}
		
		if(actividad_anos== "" || /^\s+$/.test(actividad_anos)){
			alert("A\u00D1OS EN LA ACTIVIDAD es obligatorio.");
			return false;
		}
	
		if(actividad_meses== "" || /^\s+$/.test(actividad_meses)){
			alert("MESES EN LA ACTIVIDAD es obligatorio.");
			return false;
		}
		
		if(asociacion== "" || /^\s+$/.test(asociacion)){
			alert("ASOCIACI\u00D3N es obligatorio.");
			return false;
		}
		
		
		if(deseo_incursion== "" || /^\s+$/.test(deseo_incursion)){
			alert("DESEO DE INCURSI\u00D3N es obligatorio.");
			return false;
		}
		
		if(deseo_incursion == "1"){
			if(oferta_estatal== "" || /^\s+$/.test(destreza)){
				alert("OFERTA ESTATAL es obligatorio.");
				return false;
			}
			
			if(destreza== "" || /^\s+$/.test(destreza)){
				alert("DESTREZA es obligatorio.");
				return false;
			}
			
			if(cod_rama_actividad_t== "" || /^\s+$/.test(cod_rama_actividad_t)){
				alert("CODIGO CIIU es obligatorio.");
				return false;
			}
		}
		
	}
	//alert(num_fam_1+","+num_fam_2+","+num_fam_3+","+num_fam_4+","+num_fam_5+","+num_fam_6+","+num_fam_7+","+num_fam_8)
	//alert(num_fam_9+","+num_fam_10+","+num_fam_11+","+num_fam_12+","+num_fam_13+","+num_fam_14+","+num_fam_15+","+num_fam_16);
	if(num_fam_1){
		if(edad_fam_1.value== "" || /^\s+$/.test(edad_fam_1.value)){
			alert("EDAD del familiar numero 1  es obligatorio.");
			return false;
		}
		if(ingreso_fam_1.value== "" || /^\s+$/.test(ingreso_fam_1.value)){
			alert("INGRESO del familiar numero 1  es obligatorio.");
			return false;
		}
	}

	if(num_fam_2){
		if(edad_fam_2.value== "" || /^\s+$/.test(edad_fam_2.value)){
			alert("EDAD del familiar numero 2 es obligatorio.");
			return false;
		}
		if(ingreso_fam_2.value== "" || /^\s+$/.test(ingreso_fam_2.value)){
			alert("INGRESO del familiar numero 2 es obligatorio.");
			return false;
		}
	}

	if(num_fam_3){
		if(edad_fam_3.value== "" || /^\s+$/.test(edad_fam_3.value)){
			alert("EDAD del familiar numero 3 es obligatorio.");
			return false;
		}
		if(ingreso_fam_3.value== "" || /^\s+$/.test(ingreso_fam_3.value)){
			alert("INGRESO del familiar numero 3 es obligatorio.");
			return false;
		}
	}
	
	if(num_fam_4){
		if(edad_fam_4.value== "" || /^\s+$/.test(edad_fam_4.value)){
			alert("EDAD del familiar numero 4 es obligatorio.");
			return false;
		}
		if(ingreso_fam_4.value== "" || /^\s+$/.test(ingreso_fam_4.value)){
			alert("INGRESO del familiar numero 4 es obligatorio.");
			return false;
		}
	}

	if(num_fam_5){
		if(edad_fam_5.value== "" || /^\s+$/.test(edad_fam_5.value)){
			alert("EDAD del familiar numero 5 es obligatorio.");
			return false;
		}
		if(ingreso_fam_5.value== "" || /^\s+$/.test(ingreso_fam_5.value)){
			alert("INGRESO del familiar numero 5 es obligatorio.");
			return false;
		}
	}
	
	if(num_fam_6){
		if(edad_fam_6.value== "" || /^\s+$/.test(edad_fam_6.value)){
			alert("EDAD del familiar numero 6 es obligatorio.");
			return false;
		}
		if(ingreso_fam_6.value== "" || /^\s+$/.test(ingreso_fam_6.value)){
			alert("INGRESO del familiar numero 6 es obligatorio.");
			return false;
		}
	}

	if(num_fam_7){
		if(edad_fam_7.value== "" || /^\s+$/.test(edad_fam_7.value)){
			alert("EDAD del familiar numero 7 es obligatorio.");
			return false;
		}
		if(ingreso_fam_7.value== "" || /^\s+$/.test(ingreso_fam_7.value)){
			alert("INGRESO del familiar numero 7 es obligatorio.");
			return false;
		}
	}

	if(num_fam_8){
		if(edad_fam_8.value== "" || /^\s+$/.test(edad_fam_8.value)){
			alert("EDAD del familiar numero 8 es obligatorio.");
			return false;
		}
		if(ingreso_fam_8.value== "" || /^\s+$/.test(ingreso_fam_8.value)){
			alert("INGRESO del familiar numero 8 es obligatorio.");
			return false;
		}
	}

	if(num_fam_9){
		if(edad_fam_9.value== "" || /^\s+$/.test(edad_fam_9.value)){
			alert("EDAD del familiar numero 9 es obligatorio.");
			return false;
		}
		if(ingreso_fam_9.value== "" || /^\s+$/.test(ingreso_fam_9.value)){
			alert("INGRESO del familiar numero 9 es obligatorio.");
			return false;
		}
	}

	if(num_fam_10){
		if(edad_fam_10.value== "" || /^\s+$/.test(edad_fam_10.value)){
			alert("EDAD del familiar numero 10 es obligatorio.");
			return false;
		}
		if(ingreso_fam_10.value== "" || /^\s+$/.test(ingreso_fam_10.value)){
			alert("INGRESO del familiar numero 10 es obligatorio.");
			return false;
		}
	}

	if(num_fam_11){
		if(edad_fam_11.value== "" || /^\s+$/.test(edad_fam_11.value)){
			alert("EDAD del familiar numero 11 es obligatorio.");
			return false;
		}
		if(ingreso_fam_11.value== "" || /^\s+$/.test(ingreso_fam_11.value)){
			alert("INGRESO del familiar numero 11 es obligatorio.");
			return false;
		}
	}

	if(num_fam_12){
		if(edad_fam_12.value== "" || /^\s+$/.test(edad_fam_12.value)){
			alert("EDAD del familiar numero 12 es obligatorio.");
			return false;
		}
		if(ingreso_fam_12.value== "" || /^\s+$/.test(ingreso_fam_12.value)){
			alert("INGRESO del familiar numero 12 es obligatorio.");
			return false;
		}
	}

	if(num_fam_13){
		if(edad_fam_13.value== "" || /^\s+$/.test(edad_fam_13.value)){
			alert("EDAD del familiar numero 13 es obligatorio.");
			return false;
		}
		if(ingreso_fam_13.value== "" || /^\s+$/.test(ingreso_fam_13.value)){
			alert("INGRESO del familiar numero 13 es obligatorio.");
			return false;
		}
	}

	if(num_fam_14){
		if(edad_fam_14.value== "" || /^\s+$/.test(edad_fam_14.value)){
			alert("EDAD del familiar numero 14 es obligatorio.");
			return false;
		}
		if(ingreso_fam_14.value== "" || /^\s+$/.test(ingreso_fam_14.value)){
			alert("INGRESO del familiar numero 14 es obligatorio.");
			return false;
		}
	}

	if(num_fam_15){
		if(edad_fam_15.value== "" || /^\s+$/.test(edad_fam_15.value)){
			alert("EDAD del familiar numero 15 es obligatorio.");
			return false;
		}
		if(ingreso_fam_15.value== "" || /^\s+$/.test(ingreso_fam_15.value)){
			alert("INGRESO del familiar numero 15 es obligatorio.");
			return false;
		}
	}

	if(num_fam_16){
		if(edad_fam_16.value== "" || /^\s+$/.test(edad_fam_16.value)){
			alert("EDAD del familiar numero 16 es obligatorio.");
			return false;
		}
		if(ingreso_fam_16.value== "" || /^\s+$/.test(ingreso_fam_16.value)){
			alert("INGRESO del familiar numero 16 es obligatorio.");
			return false;
		}
	}
	
	return true;
}


function validarT(e) { 
tecla = (document.all) ? e.keyCode : e.which; 
if(tecla != 0){
	if (tecla==8) return true; 
	patron =/[A-Za-z\s]/; 
	te = String.fromCharCode(tecla); 
	return patron.test(te); 
	} 
}
// NÚMEROS 
function validarN(e) { 
tecla = (document.all) ? e.keyCode : e.which; 
//alert("validar N"+tecla);
if(tecla != 0){
	//alert("tecla="+tecla);
	if (tecla==8) return true; 
	patron = /\d/; 
	te = String.fromCharCode(tecla); 	
	return patron.test(te); 
	}
} 

function validarN_opcion(e) { 
tecla = (document.all) ? e.keyCode : e.which; 
//alert("validar N"+tecla);
if(tecla != 0){
	//alert("tecla="+tecla);
	if (tecla==8) return true; 
	patron = /\d/; 
	te = String.fromCharCode(tecla); 
	if(te == 1 || te == 2 || te == 3)
		num_fam_1.focus();
	return patron.test(te); 
	}
} 

//VALIDAR QUE NUMERO NO SEA MAYOR A
function noMayor(element,num){
	Numer=parseInt(element.value);
	if (!isNaN(Numer)){
		if(Numer >num){ 
			element.value="";
			alert("Debe ingresar valor num\u00E9rico no mayor a "+num);
		}
	}
}

//VALIDAR QUE NUMERO ESTE ENTRE UN RANGO
function entre(element,num_mi,num_ma){
	Numer=parseInt(element.value);
	if (!isNaN(Numer)){
		if(Numer <num_mi || Numer > num_ma){ 
			element.value="";
			alert("Debe ingresar valor num\u00E9rico entre "+num_mi+ " y "+ num_ma);
		}
	}
}

//VALIDAR CEDULA
function check_cedula(element)
{
	  var cedula = element.value;
	  array = cedula.split("");
	  num = array.length;
	  if ( num == 10 )
	  {
		total = 0;
		digito = (array[9]*1);
		for( i=0; i < (num-1); i++ )
		{
		 	mult = 0;
			if ( ( i%2 ) != 0 ) 
			{
				total = total + ( array[i] * 1 );
			}
			else
			{
				mult = array[i] * 2;
				if ( mult > 9 )
					total = total + ( mult - 9 );
				else
					total = total + mult;
			}
		}
		decena = total / 10;
		decena = Math.floor( decena );
		decena = ( decena + 1 ) * 10;
		final = ( decena - total );
		if ( ( final == 10 && digito == 0 ) || ( final == digito ) ) 
		{
		  	return true;	  
		}
		else
		{
		  element.focus();
		  element.value="";
		   alert( "La c\xe9dula NO es v\xe1lida!!!" );
		  return false;
		}
	  }
	  else
	  {
		element.focus();
        element.value="";
		alert("La c\xe9dula no puede tener menos de 10 d\xedgitos");
		return false;
	  }
}


//habilitar discapacidad
function habilita_discapacidad(form)
{ 
	form.carnet_conadis[0].disabled = false;
	form.carnet_conadis[1].disabled = false;
	form.porcentaje_discapacidad.disabled = false;
 }
//deshabilitar discapacidad
function deshabilita_discapacidad(form)
{ 
	form.carnet_conadis[0].disabled = true;
	form.carnet_conadis[1].disabled = true;
	form.porcentaje_discapacidad.disabled = true;
	form.etnia.focus();
}

//habilitar carnet conadis
function habilita_carnet_conadis(form)
{ 
	form.porcentaje_discapacidad.disabled = false;
 }
//deshabilitar carnet conadis
function deshabilita_carnet_conadis(form)
{ 
	form.porcentaje_discapacidad.disabled = true;
	form.etnia.focus();
}

//habilitar trabajo
function habilita_trabajo(form)
{ 
	form.no_trabajo[0].disabled = false;
	form.no_trabajo[1].disabled = false;
	form.no_trabajo1[0].disabled = false;
	form.no_trabajo1[1].disabled = false;
 }
//deshabilitar trabajo
function deshabilita_trabajo(form)
{ 
	form.no_trabajo[0].disabled = true;
	form.no_trabajo[1].disabled = true;
	form.no_trabajo1[0].disabled = true;
	form.no_trabajo1[1].disabled = true;
	form.ocupacion.focus();
}

//habilitar no_trabajo
function habilita_no_trabajo(form)
{ 
	form.no_trabajo1[0].disabled = false;
	form.no_trabajo1[1].disabled = false;
 }
//deshabilitar no_trabajo
function deshabilita_no_trabajo(form)
{ 
	form.no_trabajo1[0].disabled = true;
	form.no_trabajo1[1].disabled = true;
	form.ocupacion.focus();
}

//habilita_no_trabajo1
function habilita_no_trabajo1(form)
{ 
	form.ocupacion.disabled = false;
	form.cod_ocupacion.disabled = false;
	form.categoria_ocupacional.disabled = false;
	form.ingreso_valor.disabled = false;
	form.ingreso_frecuencia.disabled = false;
}
//deshabilita_no_trabajo1
function deshabilita_no_trabajo1(form)
{ 
	form.ocupacion.disabled = true;
	form.cod_ocupacion.disabled = true;
	form.categoria_ocupacional.disabled = true;
	form.ingreso_valor.disabled = true;
	form.ingreso_frecuencia.disabled = true;
	form.pesca_arrastre[0].focus();
}

//habilita_pesca_arrastre
function habilita_pesca_arrastre(form)
{ 
	form.actividad_pesca.disabled = false;
	form.actividad_anos.disabled = false;
	form.actividad_meses.disabled = false;
	form.asociacion[0].disabled = false;
	form.asociacion[1].disabled = false;
	form.deseo_incursion[0].disabled = false;
	form.deseo_incursion[1].disabled = false;
	form.oferta_estatal.disabled = false;
	form.destreza.disabled = false;
	form.rama_actividad.disabled = false;
	form.cod_rama_actividad_t.disabled = false;
	form.cod_rama_actividad_n.disabled = false;
	form.observaciones.disabled = false;
}
//deshabilita_pesca_arrastre
function deshabilita_pesca_arrastre(form)
{ 
	form.actividad_pesca.disabled = true;
	form.actividad_anos.disabled = true;
	form.actividad_meses.disabled = true;
	form.asociacion[0].disabled = true;
	form.asociacion[1].disabled = true;
	form.deseo_incursion[0].disabled = true;
	form.deseo_incursion[1].disabled = true;
	form.oferta_estatal.disabled = true;
	form.destreza.disabled = true;
	form.rama_actividad.disabled = true;
	form.cod_rama_actividad_t.disabled = true;
	form.cod_rama_actividad_n.disabled = true;
	form.observaciones.disabled = true;
	form.num_fam_1.focus();
}

//habilita_deseo_incursion
function habilita_deseo_incursion(form)
{ 
	form.oferta_estatal.disabled = false;
	form.destreza.disabled = false;
	form.rama_actividad.disabled = false;
	form.cod_rama_actividad_t.disabled = false;
	form.cod_rama_actividad_n.disabled = false;
	form.observaciones.disabled = false;
}
//deshabilita_deseo_incursion
function deshabilita_deseo_incursion(form)
{ 
	form.oferta_estatal.disabled = true;
	form.destreza.disabled = true;
	form.rama_actividad.disabled = true;
	form.cod_rama_actividad_t.disabled = true;
	form.cod_rama_actividad_n.disabled = true;
	form.observaciones.disabled = true;
	form.num_fam_1.focus();
}

function fn(form,field,e)
{
	var key=e.keyCode || e.which;
	var next=0;
	var found=false;
	var f=form;
	if(key!=13) return;	
	//alert("field.name="+field.type);
	for(var i=0;i<f.length;i++)	{
		if(field.name==f.elements[i].name){
			if(field.type == "radio")
				next=i+2;
			else
				next=i+1;
			
			found=true;
			break;
			return;
		}
	}
	while(found){
		if( f.elements[next].disabled==false &&  f.elements[next].type!='hidden'){
			f.elements[next].focus();
			break;
		}
		else{
			if(next<f.length-1)
				next=next+1;
			else
				break;
		}
	}
}

function regresar()
		{
			window.location.href="formulario.php";
		}