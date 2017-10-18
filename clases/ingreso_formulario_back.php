<?php
include("../lib/dbconfig.php");
if ($accion=="input")
{
	insertar_encuesta($codigo,$cod_provincia,$cod_canton,$cod_parroquia,$cod_zona,$cod_sector,$cod_manzana,$grados_la,$minutos_la,$segundos_la,$latitud,$grados_lo,$minutos_lo,$segundos_lo,$longitud,$punto,$zona,$distrito,$circuito,$calle1,$num_calle1,$calle2,$num_casa,$num_lote,$num_depart,$num_piso,$num_tel_fijo1,$num_tel_fijo2,$num_celular,$apellidos,$nombres,$num_cedula,$sexo,$edad,$discapacidad,$carnet_conadis,$porcentaje_discapacidad,$etnia,$instruccion_nivel,$instruccion_ano,$trabajo,$no_trabajo,$no_trabajo1,$ocupacion,$cod_ocupacion,$categoria_ocupacional,$ingreso_frecuencia,$ingreso_valor,$pesca_arrastre,$actividad_pesca,$actividad_anos,$actividad_meses,$asociacion,$deseo_incursion,$oferta_estatal,$destreza,$rama_actividad,$cod_rama_actividad_t,$cod_rama_actividad_n,$num_fam_1,$edad_fam_1,$ingreso_fam_1,$num_fam_2,$edad_fam_2,$ingreso_fam_2,$num_fam_3,$edad_fam_3,$ingreso_fam_3,$num_fam_4,$edad_fam_4,$ingreso_fam_4,$num_fam_5,$edad_fam_5,$ingreso_fam_5,$num_fam_6,$edad_fam_6,$ingreso_fam_6,$num_fam_7,$edad_fam_7,$ingreso_fam_7,$num_fam_8,$edad_fam_8,$ingreso_fam_8,$num_fam_9,$edad_fam_9,$ingreso_fam_9,$num_fam_10,$edad_fam_10,$ingreso_fam_10,$num_fam_11,$edad_fam_11,$ingreso_fam_11,$num_fam_12,$edad_fam_12,$ingreso_fam_12,$num_fam_13,$edad_fam_13,$ingreso_fam_13,$num_fam_14,$edad_fam_14,$ingreso_fam_14,$num_fam_15,$edad_fam_15,$ingreso_fam_15,$num_fam_16,$edad_fam_16,$ingreso_fam_16,$observaciones);
}

function insertar_encuesta($codigo,$cod_provincia,$cod_canton,$cod_parroquia,$cod_zona,$cod_sector,$cod_manzana,$grados_la,$minutos_la,$segundos_la,$latitud,$grados_lo,$minutos_lo,$segundos_lo,$longitud,$punto,$zona,$distrito,$circuito,$calle1,$num_calle1,$calle2,$num_casa,$num_lote,$num_depart,$num_piso,$num_tel_fijo1,$num_tel_fijo2,$num_celular,$apellidos,$nombres,$num_cedula,$sexo,$edad,$discapacidad,$carnet_conadis,$porcentaje_discapacidad,$etnia,$instruccion_nivel,$instruccion_ano,$trabajo,$no_trabajo,$no_trabajo1,$ocupacion,$cod_ocupacion,$categoria_ocupacional,$ingreso_frecuencia,$ingreso_valor,$pesca_arrastre,$actividad_pesca,$actividad_anos,$actividad_meses,$asociacion,$deseo_incursion,$oferta_estatal,$destreza,$rama_actividad,$cod_rama_actividad_t,$cod_rama_actividad_n,$num_fam_1,$edad_fam_1,$ingreso_fam_1,$num_fam_2,$edad_fam_2,$ingreso_fam_2,$num_fam_3,$edad_fam_3,$ingreso_fam_3,$num_fam_4,$edad_fam_4,$ingreso_fam_4,$num_fam_5,$edad_fam_5,$ingreso_fam_5,$num_fam_6,$edad_fam_6,$ingreso_fam_6,$num_fam_7,$edad_fam_7,$ingreso_fam_7,$num_fam_8,$edad_fam_8,$ingreso_fam_8,$num_fam_9,$edad_fam_9,$ingreso_fam_9,$num_fam_10,$edad_fam_10,$ingreso_fam_10,$num_fam_11,$edad_fam_11,$ingreso_fam_11,$num_fam_12,$edad_fam_12,$ingreso_fam_12,$num_fam_13,$edad_fam_13,$ingreso_fam_13,$num_fam_14,$edad_fam_14,$ingreso_fam_14,$num_fam_15,$edad_fam_15,$ingreso_fam_15,$num_fam_16,$edad_fam_16,$ingreso_fam_16,$observaciones)
{
	$cod_rama_actividad = $cod_rama_actividad_t.''.$cod_rama_actividad_n;
	$result = "";	
	
	if(empty($result))
	{
	//Sentencia para insertar en la tabla organizacion																																																																																		                     
	   //$inserta="insert into encuesta(codigo,cod_provincia,cod_canton,cod_parroquia,cod_zona,cod_sector,cod_manzana,calle1,num_calle1,calle2,num_casa,num_lote,num_depart,num_piso,num_tel_fijo1,num_tel_fijo2,num_celular,sexo,edad,discapacidad,carnet_conadis,porcentaje_discap,etnia,instruccion_nivel,instruccion_ano,trabajo,no_trabajo,no_trabajo1,ocupacion,cod_ocupacion,categoria_ocupacional,ingreso_frecuencia,ingreso_valor,pesca_arrastre,actividad_pesca,actividad_anos,actividad_meses,asociacion,deseo_incursion,oferta_estatal,destreza,rama_actividad,cod_rama_actividad)
		$inserta="insert into encuesta(codigo,cod_provincia,cod_canton,cod_parroquia,cod_zona,cod_sector,cod_manzana,grados_la,minutos_la,segundos_la,latitud,grados_lo,minutos_lo,segundos_lo,longitud,punto,zona,distrito,circuito,calle1,num_calle1,calle2,num_casa,num_lote,num_depart,num_piso,num_tel_fijo1,num_tel_fijo2,num_celular,apellidos,nombres,num_cedula,sexo,edad,discapacidad,carnet_conadis,procentaje_discapacidad,etnia,instruccion_nivel,instruccion_ano,trabajo,no_trabajo,no_trabajo1,ocupacion,cod_ocupacion,categoria_ocupacional,ingreso_frecuencia,ingreso_valor,pesca_arrastre,actividad_pesca,actividad_anos,actividad_meses,asociacion,deseo_incursion,oferta_estatal,destreza,rama_actividad,cod_rama_actividad,num_fam_1,edad_fam_1,ingreso_fam_1,num_fam_2,edad_fam_2,ingreso_fam_2,num_fam_3,edad_fam_3,ingreso_fam_3,num_fam_4,edad_fam_4,ingreso_fam_4,num_fam_5,edad_fam_5,ingreso_fam_5,num_fam_6,edad_fam_6,ingreso_fam_6,num_fam_7,edad_fam_7,ingreso_fam_7,num_fam_8,edad_fam_8,ingreso_fam_8,num_fam_9,edad_fam_9,ingreso_fam_9,num_fam_10,edad_fam_10,ingreso_fam_10,num_fam_11,edad_fam_11,ingreso_fam_11,num_fam_12,edad_fam_12,ingreso_fam_12,num_fam_13,edad_fam_13,ingreso_fam_13,num_fam_14,edad_fam_14,ingreso_fam_14,num_fam_15,edad_fam_15,ingreso_fam_15,num_fam_16,edad_fam_16,ingreso_fam_16,observaciones)
					values('$codigo','$cod_provincia','$cod_canton','$cod_parroquia','$cod_zona','$cod_sector','$cod_manzana','$grados_la','$minutos_la','$segundos_la','$latitud','$grados_lo','$minutos_lo','$segundos_lo','$longitud','$punto','$zona','$distrito','$circuito','$calle1','$num_calle1','$calle2','$num_casa','$num_lote','$num_depart','$num_piso','$num_tel_fijo1','$num_tel_fijo2','$num_celular','$apellidos','$nombres','$num_cedula','$sexo','$edad','$discapacidad','$carnet_conadis','$procentaje_discapacidad','$etnia','$instruccion_nivel','$instruccion_ano','$trabajo','$no_trabajo','$no_trabajo1','$ocupacion','$cod_ocupacion','$categoria_ocupacional','$ingreso_frecuencia','$ingreso_valor','$pesca_arrastre','$actividad_pesca','$actividad_anos','$actividad_meses','$asociacion','$deseo_incursion','$oferta_estatal','$destreza','$rama_actividad','$cod_rama_actividad','$num_fam_1','$edad_fam_1','$ingreso_fam_1','$num_fam_2','$edad_fam_2','$ingreso_fam_2','$num_fam_3','$edad_fam_3','$ingreso_fam_3','$num_fam_4','$edad_fam_4','$ingreso_fam_4','$num_fam_5','$edad_fam_5','$ingreso_fam_5','$num_fam_6','$edad_fam_6','$ingreso_fam_6','$num_fam_7','$edad_fam_7','$ingreso_fam_7','$num_fam_8','$edad_fam_8','$ingreso_fam_8','$num_fam_9','$edad_fam_9','$ingreso_fam_9','$num_fam_10','$edad_fam_10','$ingreso_fam_10','$num_fam_11','$edad_fam_11','$ingreso_fam_11','$num_fam_12','$edad_fam_12','$ingreso_fam_12','$num_fam_13','$edad_fam_13','$ingreso_fam_13','$num_fam_14','$edad_fam_14','$ingreso_fam_14','$num_fam_15','$edad_fam_15','$ingreso_fam_15','$num_fam_16','$edad_fam_16','$ingreso_fam_16','$observaciones')";
	   if(query1($inserta))
	   {
		   //<div id="DivTablaFormulario" align="center" style="background-image:url(../images/Icono_usuario.jpg); background-repeat:no-repeat; background-position:center; opacity:80); ">
		  echo "<div id='DivIngresoEncuesta' align='center' style='background-image:url(images/encuestas.png); background-repeat:no-repeat; background-position:center; opacity:80);'>
		  			<table width='280' height='194' border='1'>
					<div 
						<tr>
							<td bgcolor='#6B79A5' height='20'>
								<font size='2' face='Arial, Helvetica, sans-serif' color='#ffffff'>
									<center><strong>ENCUESTA INGRESADA SATISFACTORIAMENTE</center></strong></font>
							</td>
						</tr>
						<tr>
							<td valign='bottom'>
								<input name='enviar' style='background-image:url(images/nuevo.gif);background-repeat:no-repeat;height:60px;width:100px;background-position:center; cursor: pointer;'  
							 type='button' value='Nuevo' onclick='regresar()'>
							</td>
						</tr>
					</table>
				</div>";
	   }else
	   {
		   echo "<div id='DivIngresoEncuesta'>
		  			<table width='220' height='226' border='1'>
						<tr>
							<td bgcolor='#6B79A5' >
								<font size='2' face='Arial, Helvetica, sans-serif' color='#ffffff'>
									<center><strong>ERROR</center></strong></font>
							</td>
						</tr>
						<tr>
							<td valign='bottom' align='center'>
								<input name='enviar' style='background-image:url(images/regresar.gif);background-repeat:no-repeat;height:221px;width:226px;background-position:center; cursor: pointer;'  
							 type='button' value='Ingresar' onclick='regresar()'>
							</td>
						</tr>

					</table>
				</div>";
		   }
	}
}


?>