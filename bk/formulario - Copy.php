<?php
include("./lib/dbconfig.php");

//	if($actualizar=="Insertar")
//	{
//		$result = "";
//		//if($continuidad_fondos_reserva)
////		{
////			$continuidad_fondos_reserva = 'S';
////			if(empty($num_dias_fondos_reserva))
////			{
//				
////				$result="error";
////			}
////		}
////		else
////		{
////			$continuidad_fondos_reserva = 'N';
////			$num_dias_fondos_reserva = '1900-01-01';
////		}
//		
//		if(empty($result))
//		{
//		   $inserta="insert into funcionario(codigo,cod_provincia,cod_canton,cod_parroquia,cod_zona,cod_sector,cod_manzana,calle1,num_calle1,calle2,num_casa,num_lote,num_depart,num_piso,num_tel_fijo1,num_tel_fijo2,num_celular)
//					values($codigo,$cod_provincia,$cod_canton,$cod_parroquia,$cod_zona,$cod_sector,$cod_manzana,'$calle1','$num_calle1','$calle2','$num_casa','$num_lote','$num_depart','$num_piso','$num_tel_fijo1','$num_tel_fijo2','$num_celular')";
//		   if(query1($inserta))
//		}
//	}

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head><title>ENCUESTA DE CARACTERIZACIÓN DE GRUPOS RELACIONADOS CON LA PESCA DE ARRASTRE</title></head>

<script type="text/javascript" src="./js/ingreso_formulario.js"></script>
<script>
	function numerico(element)
	{
		if(element.value != '')
		{
			Numer=parseInt(element.value);
			if (isNaN(Numer)){
				element.value="";
				alert("Debe ingresar valores numéricos.");
			}
		}
	}
</script>

<form id="form1" name="form1" method="post" action="">
<div id="DivIngresoEncuesta">
  <table width="1082" border="0">
  	<tr>
    	<td colspan="6" align="center" bgcolor="#999999"><label><strong>ENCUESTA DE CARACTERIZACIÓN DE GRUPOS RELACIONADOS CON LA PESCA DE ARRASTRE  Nº </strong>
    	 	<?
            	echo '<input type="text" name="codigo" id="codigo" maxlength="3" onKeyUp="numerico(this);"/>';
			?>
          <?php /*?><? 
       		echo "<input name='ci_funcionario' type='text' id='ci_funcionario' size='20' maxlength='10' onBlur='check_cedula(document.form1.ci_funcionario.value);' onKeyPress='numerico_ced();' value='$ci_funcionario'>"; 
	  	 ?><?php */?>
  	  </label></td>
    </tr>
    <tr>
      <td width="865"><table width="100%" border="1">
        <tr>
          <td colspan="6" align="center" bgcolor="#CCCCCC"><strong>A. UBICACIÓN GEOGRÁFICA</strong></td>
          </tr>
        <tr>
          <td width="14%"><label>1. Provincia</label></td>
          <td width="25%"><? echo'<input name="cod_provincia" type="text" id="cod_provincia" maxlength="2" onKeyUp="numerico(this);"/>'; ?></td>
          <td width="10%"><label>2. Cantón</label></td>
          <td width="22%"><? echo'<input name="cod_canton" type="text" id="cod_canton" maxlength="2" onKeyUp="numerico(this);"/>';?></td>
          <td width="8%"><label>3. Parroquia</label></td>
          <td width="21%"><? echo '<input name="cod_parroquia" type="text" id="cod_parroquia" maxlength="2" onKeyUp="numerico(this);"/>';?></td>
        </tr>
        <tr>
          <td><label>4. Zona</label></td>
          <td><? echo '<input name="cod_zona" type="text" id="cod_zona" maxlength="3" onKeyUp="numerico(this);"/>';?></td>
          <td><label>5. Sector</label></td>
          <td><? echo '<input name="cod_sector" type="text" id="cod_sector" maxlength="3" onKeyUp="numerico(this);"/>';?></td>
          <td><label>6. Manzana</label></td>
          <td><? echo '<input name="cod_manzana" type="text" id="cod_manzana" maxlength="2" onKeyUp="numerico(this);"/>';?></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="1">
        <tr>
          <td colspan="11">7. Coordenadas GPS</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td><table width="100%" border="1">
        <tr>
          <td colspan="3">8. Circuitos Administrativos</td>
          </tr>
        <tr>
          <td><label>8.1. Zona
            <? echo '<input name="zona" type="text" id="zona" maxlength="3" onKeyUp="numerico(this);"/>';?>
          </label></td>
          <td><label>8.2. Distrito
            <? echo '<input name="distrito" type="text" id="distrito" maxlength="5" onKeyUp="numerico(this);"/>';?>
          </label></td>
          <td><label>8.3. Circuito
            <? echo '<input type="text" name="circuito" id="circuito" onKeyUp="numerico(this);"/>';?>
          </label></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#CCCCCC"><strong>B. UBICACIÓN DE LA VIVIENDA</strong></td>
    </tr>
    <tr>
      <td><table width="100%" border="1">
        <tr>
          <td width="219">CALLE 1 /Camino o Sendero (principal)</td>
          <td colspan="3"><label>
            <? echo '<input name="calle1" type="text" id="calle1" size="100" maxlength="25"/>';?>
          </label></td>
          <td width="203"><label>N.-
            <? echo '<input type="text" name="num_calle1" id="num_calle1"/>';?>
          </label></td>
        </tr>
        <tr>
          <td>CALLE 2 /Camino o Sendero (Intersección, transversal)</td>
          <td colspan="4"><label>
            <? echo '<input name="calle2" type="text" id="calle2" size="120" maxlength="25"/>';?>
          </label></td>
          </tr>
        <tr>
          <td>Número de casa. bloque o edificio</td>
          <td width="184"><label>
            <? echo '<input type="text" name="num_casa" id="num_casa"/>';?>
          </label></td>
          <td width="207"><label>Lote N.-
            <? echo '<input type="text" name="num_lote" id="num_lote"/>';?>
          </label></td>
          <td width="229"><label>Depart. N.-
            <? echo '<input type="text" name="num_depart" id="num_depart"/>';?>
          </label></td>
          <td><label>Piso N.-
            <? echo '<input type="text" name="num_piso" id="num_piso"/>';?>
          </label></td>
        </tr>
        <tr>
          <td>Número telefónico</td>
          <td><label>Fijo:
            <? echo '<input name="num_tel_fijo1" type="text" id="num_tel_fijo1" maxlength="9" onKeyUp="numerico(this);"/>';?>
          </label></td>
          <td><label>ó
            <? echo '<input name="num_tel_fijo2" type="text" id="num_tel_fijo2" maxlength="9" onKeyUp="numerico(this);"/>';?>
          </label></td>
          <td colspan="2"><label>Celular:
            <? echo '<input name="num_celular" type="text" id="num_celular" maxlength="10" onKeyUp="numerico(this);"/>';?>
          </label></td>
          </tr>
      </table></td>
    </tr>
    <tr>
    	<td>
        	 <? echo "<input name='enviar' type='button' value='Ingresar' onclick='IngresoEncuesta(document.form1.codigo.value,document.form1.cod_provincia.value,document.form1.cod_canton.value,document.form1.cod_parroquia.value,document.form1.cod_zona.value,document.form1.cod_sector.value,document.form1.cod_manzana.value,document.form1.calle1.value,document.form1.num_calle1.value,document.form1.calle2.value,document.form1.num_casa.value,document.form1.num_lote.value,document.form1.num_depart.value,document.form1.num_piso.value,document.form1.num_tel_fijo1.value,document.form1.num_tel_fijo2.value,document.form1.num_celular.value);'>";?>
    </tr>
  </table>
</div>
</form>
</body>
</html>
