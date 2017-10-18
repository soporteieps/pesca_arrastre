<?php
session_start();
include("clases/cerrar_sesion.php");
if(empty($_SESSION['username']) && empty($_SESSION["password"]))
		{ 
			header('Location: index.html');
		}

include("./lib/dbconfig.php");
if($action=="update")
{	
	if($actualizar_estado=="Actualizar Empleado")
	{
		if($fecha_salida == "")
		 {
			echo "<script type='text/javascript'>alert('La Fecha de Salida es obligatorio.');document.location.href='empleados.php?action=update&ci_funcionario=$ci_funcionario'</script>";
			return; 
		 }
		
		$update="update funcionario set fecha_salida = '$fecha_salida', cod_estado = '$cod_estado' where ci_funcionario = '$ci_funcionario'";
		if(query($update))
		{
		   echo "<script type='text/javascript'>alert('El estado del Empleado fue Actualizado Satisfactoriamente.');</script>";  
		   //echo "href='../empleados.php?ci_funcionario=".$ci_funcionario."&action=update'";
		}
	}
	if($actualizar=="Actualizar Empleado")
	{
		//echo 'FONDO_RESERVA = '.$fondos_reserva.'<br>';
		//echo 'CONTINUIDAD_FONDO_RESERVA='.$_POST['continuidad_fondos_reserva'].'<br>';
		//echo 'DIAS_FONDOS_RESERVA='.$num_dias_fondos_reserva.'<br>';
		$result = "";
		if($continuidad_fondos_reserva)
		{
			$continuidad_fondos_reserva = 'S';
			if(empty($num_dias_fondos_reserva))
			{
				echo "<script type='text/javascript'>alert('El campo FECHA A PAGAR CONTINUIDAD DE FONDOS DE RESERVA es obligatorio.');</script>";
				$result="error";
			}
		}
		else
		{
			$continuidad_fondos_reserva = 'N';
			$num_dias_fondos_reserva = '1900-01-01';
		}
		
		if(empty($result))
		{
			$update="update funcionario 
			set
			cod_area = '$cod_area' , 
			cod_entidad = '$cod_entidad' , 
			cod_regimen = '$cod_regimen' ,
			cod_proyecto = '$cod_proyecto' , 
			cod_sp = '$cod_sp' , 
			base_aporte = '$base_aporte' , 
			cargo = '$cargo' , 
			grupo_ocupacional = '$grupo_ocupacional' ,
			cod_movi = '$cod_movi' , 
			cod_ingreso = '$cod_ingreso' , 
			num_contra = '$num_contra' , 
			autori_nomi = '$autori_nomi' , 
			resp_uarh = '$resp_uarh' ,
			fecha_ingreso = '$fecha_ingreso' ,
			fecha_salida = '$fecha_salida',
			fecha_registro = '$fecha_registro' ,
			cod_estado = '$cod_estado' ,
			primer_nombre = '$primero' ,
			segundo_nombre = '$segundo' ,
			apellido_paterno = '$papellido' ,
			apellido_materno = '$sapellido' ,
			acum_decter = '$acum_decter' ,
			imprenta = '$imprenta',
			gastos_proyectados = '$gastos_proyectados',
			num_meses_impuesto = '$num_meses_impuesto',
			num_biometrico = '$num_biometrico',
			
			fondos_reserva = '$fondos_reserva',
			continuidad_fondos_reserva = '$continuidad_fondos_reserva',
			num_dias_fondos_reserva = '$num_dias_fondos_reserva'
			
			where
			ci_funcionario = '$ci_funcionario'";
			if(query($update))
			   echo "<script type='text/javascript'>alert('La Información General del Empleado fue Actualizada Satisfactoriamente.');</script>";
		}
	}
	$consulta="select * from funcionario where ci_funcionario='$ci_funcionario'";
	$result=query($consulta);
	while($edit_personal=mysql_fetch_object($result))
	{
			$ci_funcionario=$edit_personal->ci_funcionario;
			$cod_area=$edit_personal->cod_area;
			$cod_entidad=$edit_personal->cod_entidad;
			$base_aporte=$edit_personal->base_aporte;
			$cargo=$edit_personal->cargo;
			$grupo_ocupacional=$edit_personal->grupo_ocupacional;
			$imprenta=$edit_personal->imprenta;
			$gastos_proyectados=$edit_personal->gastos_proyectados;
			$num_meses_impuesto =$edit_personal->num_meses_impuesto;
			$acum_decter=$edit_personal->acum_decter;
			$cod_regimen=$edit_personal->cod_regimen;
			$cod_proyecto=$edit_personal->cod_proyecto;
			$cod_sp=$edit_personal->cod_sp;
			$cod_spa=$edit_personal->cod_sp;   // variable auxiliar para posible cambio de sueldo  
			$cod_movi=$edit_personal->cod_movi;
			$cod_ingreso=$edit_personal->cod_ingreso;
			$num_contra=$edit_personal->num_contra;
			$autori_nomi=$edit_personal->autori_nomi;
			$resp_uarh=$edit_personal->resp_uarh;
			$fecha_ingreso=$edit_personal->fecha_ingreso;
			$fecha_registro=$edit_personal->fecha_registro;
			$cod_estado=$edit_personal->cod_estado;
			$primero=$edit_personal->primer_nombre;
			$segundo=$edit_personal->segundo_nombre;
			$papellido=$edit_personal->apellido_paterno;
			$sapellido=$edit_personal->apellido_materno;
			$num_biometrico =$edit_personal->num_biometrico;
			$fecha_salida = $edit_personal->fecha_salida;
			
			$fondos_reserva = $edit_personal->fondos_reserva;
			$continuidad_fondos_reserva = $edit_personal->continuidad_fondos_reserva;
			if($continuidad_fondos_reserva == 'S')
				$continuidad_fondos_reserva = 1;
			else
				$continuidad_fondos_reserva = 0;
			$num_dias_fondos_reserva = $edit_personal->num_dias_fondos_reserva;
	}
	/*	echo 'FONDO_RESERVA = '.$fondos_reserva.'<br>';
		echo 'CONTINUIDAD_FONDO_RESERVA='.$continuidad_fondos_reserva.'<br>';
		echo 'DIAS_FONDOS_RESERVA='.$num_dias_fondos_reserva.'<br>';*/
}
else
{ 
   //echo "Estoy creando Empleado";
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>INGRESO FILIACION DE EMPLEADO</title>

</head>
<script type="text/javascript" src="./js/ingreso_sueldo_personal.js"></script>
<script type="text/javascript" src="./js/ingreso_personal.js"></script>
<script type="text/javascript" src="./js/validar_cedula.js"></script>
<script type="text/javascript" src="./admin/js/validar_general.js"></script>

<link rel="STYLESHEET" type="text/css" href="./dhtmlxcalendar/codebase/dhtmlxcalendar.css">
<script>
      window.dhx_globalImgPath="./dhtmlxcalendar/codebase/imgs/";
</script>
<script  src="./dhtmlxcalendar/codebase/dhtmlxcommon.js"></script>
<script  src="./dhtmlxcalendar/codebase/dhtmlxcalendar.js"></script>

	<script>
	var call1, cal12, call3, call4, call5,call6, newStyleSheet;

	var dateFrom = null;
	var dateTo = null;

	window.onload = function () {
		
		call1 = new dhtmlxCalendarObject('calInput1');
		cal12 = new dhtmlxCalendarObject('calInput2');
		call3 = new dhtmlxCalendarObject('calInput3');
		call6 = new dhtmlxCalendarObject('calInput6');
		document.form1.ci_funcionario.focus();
		EstadoPasivo();
		GastosProyectados();
		FondosReserva();
		ContinuidadFondosReserva();
		
	}

	function EstadoPasivo(){
		if(document.form1.cod_estado.value == 2){
			document.getElementById("trFechaSalida").style.display="";
			document.form1.actualizar.style.display="none";
			document.form1.actualizar_estado.style.display="";
			HabilitarControles(true);
		}
		else{
			document.getElementById("trFechaSalida").style.display="none";
			document.form1.ci_funcionario.focus();
			document.form1.actualizar.style.display="";
			document.form1.actualizar_estado.style.display="none";
			HabilitarControles(false);
		}
	}
	
	function GastosProyectados(){
		if(document.form1.imprenta.value == 'S'){
			document.getElementById("trGatosProyectados").style.display="";
			document.getElementById("trNumMesesImpuesto").style.display="";
		}
		else{
			document.getElementById("trGatosProyectados").style.display="none";
			document.getElementById("trNumMesesImpuesto").style.display="none";
		}
	}
	
	function FondosReserva(){
		if(document.form1.fondos_reserva.value == 'S'){
			document.getElementById("trContinuidadFondosReserva").style.display="";
			ContinuidadFondosReserva();
		}
		else{
			document.getElementById("trContinuidadFondosReserva").style.display="none";
			document.getElementById("trNumDiasFondosReserva").style.display="none";
		}
		
	}
	
	function ContinuidadFondosReserva(){
		if(document.form1.continuidad_fondos_reserva.checked) 
			document.getElementById("trNumDiasFondosReserva").style.display="";
		else
			document.getElementById("trNumDiasFondosReserva").style.display="none";
			
	}
	
	//Habilita/Deshabilita los controles del formulario
	function HabilitarControles(status){
		////alert('status='+status);
//		//alert(document.form1.ci_funcionario.disabled);
//		//document.form1.ci_funcionario.disabled = status;
		document.form1.cod_area.readOnly = status;
		document.form1.cod_entidad.readOnly = status;
		document.form1.base_aporte.readOnly = status;
		document.form1.cargo.readOnly = status;
		document.form1.grupo_ocupacional.readOnly = status;
		document.form1.imprenta.readOnly = status;
		document.form1.gastos_proyectados.readOnly = status;
		document.form1.num_meses_impuesto.readOnly = status;
		document.form1.acum_decter.readOnly = status;
		document.form1.cod_regimen.readOnly = status;
		document.form1.cod_proyecto.readOnly = status;
		document.form1.cod_sp.readOnly = status;
		document.form1.cod_movi.readOnly = status;
		document.form1.cod_ingreso.readOnly = status;
		document.form1.num_contra.readOnly = status;
		document.form1.autori_nomi.readOnly = status;
		document.form1.resp_uarh.readOnly = status;
		document.form1.fecha_ingreso.readOnly = status;
		document.form1.fecha_registro.readOnly = status;
		//document.form1.cod_estado.disabled = status;
		document.form1.primero.readOnly = status;
		document.form1.segundo.readOnly = status;
		document.form1.papellido.readOnly = status;
		document.form1.sapellido.readOnly = status;
		document.form1.num_biometrico.readOnly = status;
//		//boton actualizar sueldos
		document.form1.enviar.disabled = status;
		
		
		document.form1.fondos_reserva.disabled = status;
		document.form1.continuidad_fondos_reserva.disabled = status;
		document.form1.num_dias_fondos_reserva.disabled = status;
	}
	
	function SueldoPasivo(){
		if(document.form1.estado.value == 'P'){
			document.getElementById("trFechaHasta").style.display="";
			document.form1.fec_hasta.focus();
			//HabilitarEtiquetas(true);
		}
		else{
			document.getElementById("trFechaHasta").style.display="none";
			//HabilitarEtiquetas(false);
		}
	}

	//Habilita/Deshabilita los controles del formulario
	function HabilitarEtiquetas(status){
		////alert('status='+status);
		document.form1.enviar.disabled = status;
		}


	function calendario1(){
	cal14 = new dhtmlxCalendarObject('calInput4');
	}
	
	function calendario2(){
	cal15 = new dhtmlxCalendarObject('calInput5');
	}


	function MM_openBrWindow(theURL,winName,features)
	 { 
		window.open(theURL,winName,features); 	
	  }
	
	function regresar()
		{
			window.location.href="./rico/nomina/php/lista_nomina.php?tipo=update";
		}

</script>
<form name="form1" method="post" action="empleados.php?action=update">
<div id="DivUpdateStatusEmpleado">
<table width="100%" border="0" cellpadding="10">
  <tr>
    <td colspan="2"><div align="center"><font color="#003399" size="3" face="Arial, Helvetica, sans-serif"><strong>CREACION MODIFICACION DATOS EMPLEADO</strong></font></div></td>
  </tr>
<tr>
	<td colspan="2" bgcolor="#6B79A5"><center>
	<font color="#ffffff" size="2" face="Arial, Helvetica, sans-serif"><strong>DATOS GENERALES</strong></font>
	</center></td>
</tr>
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">CEDULA:</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
      <? 
       echo "<input name='ci_funcionario' type='text' id='ci_funcionario' size='20' maxlength='10' onBlur='check_cedula(document.form1.ci_funcionario.value);' onKeyPress='numerico_ced();' value='$ci_funcionario'>"; 
	   ?>
    </font></td>
  </tr>
  <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">PRIMER NOMBRE:</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
     <? echo "<input name='primero' type='text' id='primero' size='80' value='$primero' onKeyUp='this.value=this.value.toUpperCase();'>"; ?>
    </font></td>
  </tr>
  <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">SEGUNDO NOMBRE:</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
     <? echo "<input name='segundo' type='text' id='segundo' size='80' value='$segundo' onKeyUp='this.value=this.value.toUpperCase();'>"; ?>
    </font></td>
  </tr>
  <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">APELLIDO PATERNO:</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
     <? echo "<input name='papellido' type='text' id='papellido' size='80' value='$papellido' onKeyUp='this.value=this.value.toUpperCase();'>"; ?>
    </font></td>
  </tr>
  <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">APELLIDO MATERNO:</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
     <? echo "<input name='sapellido' type='text' id='sapellido' size='80' value='$sapellido' onKeyUp='this.value=this.value.toUpperCase();'>"; ?>
    </font></td>
   </tr>
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">ENTIDAD:</font></strong></td>
    <td>
	<?php
    $consulta_entidad="select cod_entidad, entidad from entidad order by cod_entidad";
	$result=query($consulta_entidad);
	echo "<select name='cod_entidad' $cod_entidad><option>---Seleccione Entidad---</option>";
	while($entidad=mysql_fetch_object($result))
		{		
			if($cod_entidad==$entidad->cod_entidad)
				echo "<option value='". $entidad->cod_entidad ."' selected>".$entidad->entidad."</option>";
			else
				echo "<option value='". $entidad->cod_entidad ."'>".$entidad->entidad."</option>";
		}
	?>
	</select>
	</td>
    </tr>
    
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">REGIMEN LABORAL:</font></strong></td>
    <td>
	<?php
    $consulta_regimen="select cod_regimen, descri_regimen from regimen order by cod_regimen";
	$result=query($consulta_regimen);
	echo "<select name='cod_regimen' onChange='ListaPersonal(document.form1.cod_regimen.value);'><option>---Seleccione Regimen Laboral---</option>";
	while($regimen=mysql_fetch_object($result))
		{		
			if($cod_regimen==$regimen->cod_regimen)
				echo "<option value='". $regimen->cod_regimen ."' selected>".$regimen->descri_regimen."</option>";
			else
				echo "<option value='". $regimen->cod_regimen ."'>".$regimen->descri_regimen."</option>";
		}
	?>
	</select>
	</td>
    </tr>

    <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">TIPO PERSONAL:</font></strong></td>
    <td>
	<div id="DivListaPersonal">
	<select name="cod_proyecto"><option>---Seleccione Tipo Personal---</option>
	<?
    $consulta_proyecto="select cod_proyecto, des_proyecto from proyecto where cod_regimen='$cod_regimen'";
	$result=query($consulta_proyecto);
	while($proyecto=mysql_fetch_object($result))

	{
	   if($cod_proyecto==$proyecto->cod_proyecto)
		  echo "<option value='". $proyecto->cod_proyecto ."' selected>".$proyecto->des_proyecto."</option>";
	   else
		  echo "<option value='". $proyecto->cod_proyecto ."'>".$proyecto->des_proyecto."</option>";
	}
	?>
	</select>
	</div></td>
    </tr>

    <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">AREA ADMINISTRATIVA:</font></strong></td>
    <td>
	<?php
    $consulta_area="select * from area order by cod_area";
	$result=query($consulta_area);
	echo "<select name='cod_area' $cod_area><option>---Seleccione Area---</option>";
	while($area=mysql_fetch_object($result))
		{		
			if($cod_area==$area->cod_area)
				echo "<option value='". $area->cod_area ."' selected>".$area->area."</option>";
			else
				echo "<option value='". $area->cod_area ."'>".$area->area."</option>";
		}
	?>
	</select>
	</td>
  </tr>
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">GRUPO OCUPACIONAL:</font></strong></td>
    <td>
	<?php
	$consulta_sueldo="select * from sp order by cod_sp";
	$result=query($consulta_sueldo);
    echo "<select name='cod_sp' onChange='ListaBaseAporte(document.form1.cod_sp.value);'><option>---Seleccione un Grupo---</option>";
	while($sueldo=mysql_fetch_object($result))
		{		
			if($cod_sp==$sueldo->cod_sp)
				echo "<option value='". $sueldo->cod_sp ."' selected>".$sueldo->sp."</option>";
			else
				echo "<option value='". $sueldo->cod_sp ."'>".$sueldo->sp."</option>";
		}
	?>
	</select>
	</td>
    </tr>
    <tr>
	    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">BASE APORTACION:</font></strong></td>
   		<td>
			<div id="DivBaseAporte">
				<table>
			        <? echo "<input name='base_aporte' type='text' id='base_aporte' size='20' maxlength='10' onBlur='check_base(document.form1.base_aporte.value);' onKeyPress='numerico_base();' value='$base_aporte'>";?>
				</table></div>
			</td>
    </tr>
  <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">CARGO:</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
     <? echo "<input name='cargo' type='text' id='cargo' size='100' value='$cargo' onKeyUp='this.value=this.value.toUpperCase();'>"; ?>
    </font></td>
  </tr>
  <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">ADICIONAL:</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
     <? echo "<input name='grupo_ocupacional' type='text' id='grupo_ocupacional' size='100' value='$grupo_ocupacional' onKeyUp='this.value=this.value.toUpperCase();'>"; ?>
    </font></td>
  </tr>
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">ESTADO:</font></strong></td>
    <td>
	<?php
    $consulta_estado="select cod_estado, estado_servidor from estado_servidor order by cod_estado";
	$result=query($consulta_estado);
	echo "<select name='cod_estado' onChange='EstadoPasivo();' $cod_estado ><option>---Seleccione Estado---</option>";
	while($estado=mysql_fetch_object($result))
		{		
			if($cod_estado==$estado->cod_estado)
				echo "<option value='". $estado->cod_estado ."' selected>".$estado->estado_servidor."</option>";
			else
				echo "<option value='". $estado->cod_estado ."'>".$estado->estado_servidor."</option>";
		}
	?>
	</select>
	</td>
  </tr>
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">TIPO MOVIMIENTO:</font></strong></td>
    <td>
	<?php
    $consulta_movi="select cod_movi, tipo_movimiento from tipo_movimiento order by cod_movi";
	$result=query($consulta_movi);
	echo "<select name='cod_movi' $cod_movi><option>---Seleccione Movimiento---</option>";
	while($movimiento=mysql_fetch_object($result))
		{		
			if($cod_movi==$movimiento->cod_movi)
				echo "<option value='". $movimiento->cod_movi ."' selected>".$movimiento->tipo_movimiento."</option>";
			else
				echo "<option value='". $movimiento->cod_movi ."'>".$movimiento->tipo_movimiento."</option>";
		}
	?>
	</select>
	</td>
  </tr>
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">INGRESO POR:</font></strong></td>
    <td>
	<?php
    $consulta_ingre="select cod_forma_ingreso, forma_ingreso from forma_ingreso order by cod_forma_ingreso";
	$result=query($consulta_ingre);
	echo "<select name='cod_ingreso' $cod_ingreso><option>---Seleccione Forma---</option>";
	while($forma=mysql_fetch_object($result))
		{		
			if($cod_ingreso==$forma->cod_forma_ingreso)
				echo "<option value='". $forma->cod_forma_ingreso ."' selected>".$forma->forma_ingreso."</option>";
			else
				echo "<option value='". $forma->cod_forma_ingreso ."'>".$forma->forma_ingreso."</option>";
		}
	?>
	</select>
	</td>
  </tr>
  <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">FECHA DE INGRESO (AAAA-MM-DD):</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
	<? echo '<input type="text" name="fecha_ingreso" id="calInput1" style="width: 80px; font-size:12px;" onBlur="" value="'.$fecha_ingreso.'" readonly="true">';
	?>

    </font></td>
  </tr>
	<? echo
	'<tr id="trFechaSalida" style="display:none";>
    	<td bgcolor="#FF0000"><strong><font size="1" face="Arial, Helvetica, sans-serif">FECHA DE SALIDA (AAAA-MM-DD):</font></strong></td>
		<td><font size="1" face="Arial, Helvetica, sans-serif"><input type="text" name="fecha_salida" id="calInput3" style="width: 80px; font-size:12px;"
			 onBlur="" value="'.$fecha_salida.'"></font>
		</td>
	</tr>';
	?>

   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">No. ACCION PERSONAL:</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
      <? echo "<input name='num_contra' type='text' id='num_contra' size='50' value='$num_contra'>"; ?>   
    </font></td>
  </tr>
  <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">FECHA REGISTRO (AAAA-MM-DD):</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
	<? echo '<input type="text" name="fecha_registro" id="calInput2" style="width: 80px; font-size:12px;" onBlur="" value="'.$fecha_registro.'" readonly="true">';
	?>
    </font></td>
   </tr>
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">MAXIMA AUTORIDAD NOMINADORA:</font></strong></td>
	<td>
	<select name="autori_nomi"><option>Seleccione Autoridad</option>
	<?
		if($autori_nomi==1)
			$aut_si="selected";
		elseif($autori_nomi==0)
			$aut_no="selected";
		echo '<option value="1" '.$aut_si.'>Si Maxima</option>
			  <option value="0" '.$aut_no.'>No Maxima</option>';
	?>
	</select></td>
	</tr>
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">RESPONSABLE DE UARH:</font></strong></td>
	<td><select name="resp_uarh"><option>Seleccione Responsabilidad</option>
	<?
		if($resp_uarh==1)
			$resp_si="selected";
		elseif($resp_uarh==0)
			$resp_no="selected";
		echo '<option value="1" '.$resp_si.'>Si Responsable</option>
			  <option value="0" '.$resp_no.'>No Responsable</option>';
	?>
	</select></td>
	</tr>
   
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">RECIBE FONDOS DE RESERVA:</font></strong></td>
	<td><select name="fondos_reserva" onChange='FondosReserva();' >
	<?
		if($fondos_reserva=="S")
			$aux_fondos_reserva_si="selected";
		elseif($fondos_reserva=="N")
			$aux_fondos_reserva_no="selected";
		echo '<option value="N" '.$aux_fondos_reserva_no.'>No Recibe</option>
	          <option value="S" '.$aux_fondos_reserva_si.'>Si Recibe</option>';
	?>
	</select></td>
	</tr> 
    <? echo
	'<tr id="trContinuidadFondosReserva" style="display:none";>
    	<td width=235><strong><font size="1" face="Arial, Helvetica, sans-serif">TIENE CONTINUIDAD EN LOS FONDOS DE RESERVA:</font></strong></td>
		<td><font size="1" face="Arial, Helvetica, sans-serif">';
			 if($continuidad_fondos_reserva == 1)
			 	echo '<input type="checkbox" name="continuidad_fondos_reserva" style="width: 80px; font-size:12px;"
			 onBlur="" checked onClick="ContinuidadFondosReserva();"></font> </td></tr>';
			else
				echo '<input type="checkbox" name="continuidad_fondos_reserva" style="width: 80px; font-size:12px;"
			 onBlur="" onClick="ContinuidadFondosReserva();"></font> </td></tr>';
	
	
	echo '<tr id="trNumDiasFondosReserva" style="display:none";>
    <td width=235><strong><font size="1" face="Arial, Helvetica, sans-serif">FECHA A PAGAR CONTINUIDAD DE FONDOS DE RESERVA (AAAA-MM-DD):</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
	<input type="text" name="num_dias_fondos_reserva" id="calInput6" style="width: 80px; font-size:12px;" value="'.$num_dias_fondos_reserva.'"
	onChange="ValidarFecha(this)";
	>
    </font></td>
  </tr>';
	?>
    
    
    
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">PAGA IMPUESTO RENTA:</font></strong></td>
	<td><select name="imprenta" onChange='GastosProyectados();' ><option>Seleccione Impuesto</option>
	<?
		if($imprenta=="S")
			$aux_si="selected";
		elseif($imprenta=="N")
			$aux_no="selected";
		echo '<option value="S" '.$aux_si.'>Si Paga</option>
			  <option value="N" '.$aux_no.'>No Paga</option>';
	?>
	</select></td>
	</tr>
    
    	<? echo
	'<tr id="trGatosProyectados" style="display:none";>
    	<td ><strong><font size="1" face="Arial, Helvetica, sans-serif">GASTOS PROYECTADOS:</font></strong></td>
		<td><font size="1" face="Arial, Helvetica, sans-serif"><input type="text" name="gastos_proyectados" style="width: 80px; font-size:12px;"
			 onBlur="" value="'.$gastos_proyectados.'"></font>
		</td>
	</tr>
	<tr id="trNumMesesImpuesto" style="display:none";>
    	<td width=235><strong><font size="1" face="Arial, Helvetica, sans-serif">NUMERO DE MESES EN LOS QUE VA A PAGAR EL IMPUESTO A LA RENTA:</font></strong></td>
		<td><font size="1" face="Arial, Helvetica, sans-serif"><input type="text" name="num_meses_impuesto" style="width: 80px; font-size:12px;" onBlur="numerico_base();" onKeyPress="noMayor(this,12);" value="'.$num_meses_impuesto.'"></font>
		</td>
	</tr>
	';
	?>
    
   <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">ACUMULA DECIMO III:</font></strong></td>
	<td><select name="acum_decter"><option>Seleccione Acumula</option>
	<?
		if($acum_decter=="S")
			$aux_acumula="selected";
		elseif($acum_decter=="N")
			$aux_noacumula="selected";
		echo '<option value="S" '.$aux_acumula.'>Si Acumula</option>
			  <option value="N" '.$aux_noacumula.'>No Acumula</option>';
	?>
	</select></td>
	</tr>
    <tr>
    <td><strong><font size="1" face="Arial, Helvetica, sans-serif">No. BIOMETRICO:</font></strong></td>
    <td><font size="1" face="Arial, Helvetica, sans-serif">
	<? echo '<input type="text" name="num_biometrico" id="num_biometrico" style="width: 80px; font-size:12px;" value="'.$num_biometrico.'">';
	?>
    </font></td>
   </tr>
  <tr><td colspan="3"><center>
<?
if($action=="update")
		{
            echo "<input name='actualizar' id='actualizar' type='submit' value='Actualizar Empleado'>";	
			echo "<input name='actualizar_estado' id='actualizar_estado' type='submit' value='Actualizar Empleado' style='display:none';'>";	
			echo "<input name='enviar' type='button' value='Actualizar Sueldos' onclick='FormularioSueldoEmpleado(0,0); ListaSueldoEmpleado(0, document.form1.ci_funcionario.value);'>";
		echo "<input name='cancelar' type='button' value='Regresar' onClick='regresar();'>";
		}
	else
		{
		echo "<input name='enviar' type='button' value='Ingresar Empleado' onclick=' IngresaEmpleado(document.form1.ci_funcionario.value, document.form1.cod_area.value, document.form1.cod_entidad.value, document.form1.base_aporte.value, document.form1.cargo.value, document.form1.grupo_ocupacional.value, document.form1.imprenta.value, document.form1.acum_decter.value, document.form1.cod_regimen.value, document.form1.cod_proyecto.value, document.form1.cod_sp.value, document.form1.cod_movi.value, document.form1.cod_ingreso.value, document.form1.num_contra.value, document.form1.autori_nomi.value, document.form1.resp_uarh.value, document.form1.fecha_ingreso.value, document.form1.fecha_registro.value, document.form1.cod_estado.value, document.form1.primero.value, document.form1.segundo.value, document.form1.papellido.value, document.form1.sapellido.value, document.form1.num_biometrico.value, document.form1.gastos_proyectados.value,document.form1.num_meses_impuesto.value,document.form1.fondos_reserva.value,
		document.form1.continuidad_fondos_reserva.checked,document.form1.num_dias_fondos_reserva.value);'>";
		echo "<input name='cancelar' type='button' value='Regresar' onClick='regresar();'>";
		}
?>
</center>
</td></tr>
<tr>
	<td colspan="2">
   	<div id="DivIngresaSueldos">
	
	</div>
	</td>
</tr>
<tr>
  <td colspan="2">
  	<div id="DivListaSueldos">
	</div>
  </td>
</tr>
</table>
</div>
</form>
</body>
</html>
