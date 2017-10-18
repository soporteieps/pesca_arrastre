<?php
include("./lib/dbconfig.php");

?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head><title>ENCUESTA DE CARACTERIZACIÓN DE GRUPOS RELACIONADOS CON LA PESCA DE ARRASTRE</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style type="text/css">
body,td,th {
	font-size: 12px;
}
</style>
</head>
<script type="text/javascript" src="./js/ingreso_formulario.js"></script>
<script>
<STYLE type="text/css">
.botonimagen{
  background-image:url(images/encuesta.jpg);
  background-repeat:no-repeat;
  height:100px;
  width:100px;
  background-position:center;
}

 </STYLE>

//DISCAPACIDAD

// LETRAS 
//function validarT(e) { 
//tecla = (document.all) ? e.keyCode : e.which; 
//if(tecla != 0){
//	if (tecla==8) return true; 
//	patron =/[A-Za-z\s]/; 
//	te = String.fromCharCode(tecla); 
//	return patron.test(te); 
//	} 
//}
//// NÚMEROS 
//function validarN(e) { 
//tecla = (document.all) ? e.keyCode : e.which; 
////alert("validar N"+tecla);
//if(tecla != 0){
//	if (tecla==8) return true; 
//	patron = /\d/; 
//	te = String.fromCharCode(tecla); 
//	return patron.test(te); 
//	}
//} 
//
////VALIDAR QUE NUMERO NO SEA MAYOR A
//function noMayor(element,num){
//	Numer=parseInt(element.value);
//	if (!isNaN(Numer)){
//		if(Numer >num){ 
//			element.value="";
//			alert("Debe ingresar valores numéricos no mayor a "+num);
//		}
//	}
//}
//
////VALIDAR CEDULA
//function check_cedula(element)
//{
//	  var cedula = element.value;
//	  array = cedula.split("");
//	  num = array.length;
//	  if ( num == 10 )
//	  {
//		total = 0;
//		digito = (array[9]*1);
//		for( i=0; i < (num-1); i++ )
//		{
//		 	mult = 0;
//			if ( ( i%2 ) != 0 ) 
//			{
//				total = total + ( array[i] * 1 );
//			}
//			else
//			{
//				mult = array[i] * 2;
//				if ( mult > 9 )
//					total = total + ( mult - 9 );
//				else
//					total = total + mult;
//			}
//		}
//		decena = total / 10;
//		decena = Math.floor( decena );
//		decena = ( decena + 1 ) * 10;
//		final = ( decena - total );
//		if ( ( final == 10 && digito == 0 ) || ( final == digito ) ) 
//		{
//		  	return true;	  
//		}
//		else
//		{
//		  element.focus();
//		  element.value="";
//		   alert( "La c\xe9dula NO es v\xe1lida!!!" );
//		  return false;
//		}
//	  }
//	  else
//	  {
//		element.focus();
//        element.value="";
//		alert("La c\xe9dula no puede tener menos de 10 d\xedgitos");
//		return false;
//	  }
//}	

</script>
<form id="form1" name="form1" method="post" action="" width="100%">
  <div id="DivIngresoEncuesta">
    <table width="80%">
      <tr>
        <td>
          <img src="images/encabezado_izq.png" height="79" width="100%">
        </td>
        <td height="79" align="center" valign="middle" bgcolor="#D9F5FF">
          <p>
            <label><strong>N.- Formulario</strong></label>
          </p>
          <?
            	echo '<input type="text" name="codigo" id="codigo" maxlength="3" size="5" tabindex="0" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);" required="required"/>';
			?>
        </td>
        <td>
          <img src="images/encabezado_der.png" height="79" width="100%">
        </td>
      </tr>
    </table>	
    <table width="80%">
      <tr>
        <td colspan="6" align="center"><img src="images/sub_A.png" height="30" width="100%"/></td>
      </tr>
      <tr>
        <td width="865"><table width="100%" border="1">
          <tr>
            <td width="14%"><label><strong>1. PROVINCIA..........</strong></label></td>
            <td width="23%"><? echo'<input name="cod_provincia" type="text" id="cod_provincia" maxlength="2" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,1,24,this.form);" required="required" />'; ?></td>
            
            <td width="10%"><label><strong>2.</strong> <strong>CANT&Oacute;N.........</strong></label></td>
            <td width="19%"><? echo'<input name="cod_canton" type="text" id="cod_canton" maxlength="2" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,1,1000,this.form);" required="required"/>';?></td>
            <td width="13%"><label><strong>3. PARROQUIA(ECUADOR)..........</strong></label></td>
            <td width="21%"><? echo '<input name="cod_parroquia" type="text" id="cod_parroquia" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,1,1000,this.form);" required="required"/>';?></td>
            </tr>
        </table></td>
      </tr> 
      <tr>
        <td align="center"><img src="images/sub_B.png" height="30" width="100%"/></td>
      </tr>
      <tr>
        <td><table width="100%" border="1">
          <tr>
            <td width="219">CALLE 1 /Camino o Sendero (principal)</td>
            <td colspan="3"><label>
              <? echo '<input name="calle1" type="text" id="calle1" size="100" maxlength="100" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);" required="required"/>';?>
              </label></td>
            <td width="203"><label>N.-
              <? echo '<input type="text" name="num_calle1" id="num_calle1" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);" required="required"/>';?>
              </label></td>
            </tr>
          <tr>
            <td>CALLE 2 /Camino o Sendero (Intersección, transversal)</td>
            <td colspan="4"><label>
              <? echo '<input name="calle2" type="text" id="calle2" size="120" maxlength="100" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);"/>';?>
              </label></td>
            </tr>
          <tr>
            <td>Número de casa. bloque o edificio</td>
            <td width="184"><label>
              <? echo '<input type="text" name="num_casa" id="num_casa" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);"/>';?>
              </label></td>
            <td width="207"><label>Lote N.-
              <? echo '<input type="text" name="num_lote" id="num_lote" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);"/>';?>
              </label></td>
            <td width="229"><label>Depart. N.-
              <? echo '<input type="text" name="num_depart" id="num_depart" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);"/>';?>
              </label></td>
            <td><label>Piso N.-
              <? echo '<input type="text" name="num_piso" id="num_piso" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);"  required="required"/>';?>
              </label></td>
            </tr>
          <tr>
            <td>Número telefónico</td>
            <td><label>Fijo:
              <? echo '<input name="num_tel_fijo1" type="text" id="num_tel_fijo1" maxlength="9" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);" onBlur="igual(this,9,this.form);"/>';?>
              </label></td>
            <td><label>ó
              <? echo '<input name="num_tel_fijo2" type="text" id="num_tel_fijo2" maxlength="9" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);" onBlur="igual(this,9,this.form);"/>';?>
              </label></td>
            <td colspan="2"><label>Celular:
              <? echo '<input name="num_celular" type="text" id="num_celular" maxlength="10" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);" onBlur="igual(this,10,this.form);"/>';?>
              </label></td>
            </tr>
        </table></td>
      </tr>
      <tr>
        <td>
          <table width="100%" border="0">
            <tr>
              <td align="center"><img src="images/sub_C.png" height="30" width="100%"/></td>
            </tr>
            <tr>
              <td align="center"><table width="99%" border="1">
                <tr>
                  <td colspan="3"><p>APELLIDOS Y NOMBRES DEL BENEFICIARIO</p>
                    <p>(LLene los Apellidos y Nombres del Beneficiario según consta en el listado de cargas de trabajo)</p></td>
                  </tr>
                <tr>
                  <td width="29%" height="64" valign="top"><p>
                    <label><strong>1. APELLIDOS
                      <br>
                      </strong></label>
                    <? echo '<input name="apellidos" type="text" id="apellidos" size="40"  onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);" required="required"/>';?>
                    </p></td>
                  <td width="35%" valign="top"><label><strong>2. NOMBRES
                    <br>
                    </strong></label>
                    <? echo '<input name="nombres" type="text" id="nombres" size="40"  onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);" required="required"/>';?>
                  <td width="36%" valign="top"><label><strong>3. CÉDULA DE CIUDADANIA<br>
                    </strong></label>
                    <? echo '<input name="num_cedula" type="text" id="num_cedula" maxlength="10" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="return check_cedula(this.form,this);"   required="required"/>';?>
                    </td>
                  </tr>
                <tr>
                  <td valign="top"><p>
                    <label><strong>4. SEXO</strong></label>
                    </p>
                    <p>(Marque el sexo que identifique el beneficiario o beneficiaria)
                    </p>
                    <table width="138" border="1" align="center">
                      <tr>
                        <td width="7">1</td>
                        <td width="54">Hombre</td>
                        <td width="55" rowspan="8" align="center"><label>VALOR<br>
                          <? echo '<input name="sexo" type="text" id="sexo" size="5" maxlength="1" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,1,2,this.form);"  required="required"/>';?>
                          </label></td>
                        </tr>
                      <tr>
                        <td>2</td>
                        <td>Mujer</td>
                      </tr>
                  </table>                      
                    </p></td>
                  <td valign="top"><label><strong>5. EDAD</strong></label>
                    <p>&iquest;Cuantos a&ntilde;os cumplidos tiene usted?
                      
                      </p>
                    <p>
                      <? echo '<input type="text" name="edad" id="edad"  maxlength="3" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,1,120,this.form);"  required="required"/>';?>
                    a&ntilde;os</p></td>
                  <td valign="top"><label><strong>6. DISCAPACIDAD</strong></label>
                    <p>&iquest;Usted tiene alguna discapacidad permanente, tal como: Ceguera, par&aacute;lisis, amputaciones, sordera, sordomudo, retardo mental, locura, entre otros?
                      </p>
                      
                      <table width="238" border="1" align="center">
                      <tr>
	                   <td width="100"  bgcolor="#FFCC00" align="center"><strong>PASE A PREG. 9</strong> </td>
                        <td width="7">0</td>
                        <td width="54">NO</td>
                        
                        <td width="55" rowspan="8" align="center"><label>VALOR<br>
                          <? echo '<input name="discapacidad" type="text" id="discapacidad" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="discapacidadVerificar(this.value,this.form); entre(this,0,1,this.form);" required="required"/>';?>
                          </label></td>
                        </tr>
                      <tr>
                        <td></td>
                        <td>1</td>
                        <td>SI</td>               
                      </tr>
                  </table>   
                  
                    <!--<table width="200">
                      <tr>
                        <td colspan="2">
                          <?php /*?><? echo '<input type="radio" name="discapacidad" value="1" onClick="habilita_discapacidad(this.form)" onKeyUp="fn(this.form,this,event);"> SI'; ?><?php */?>
                          </td>
                        </tr>
                      <tr>
                        <td>
                          <?php /*?><? echo '<input type="radio" name="discapacidad" value="0" onClick="deshabilita_discapacidad(this.form)" onKeyUp="fn(this.form,this,event);"> NO'; ?><?php */?>
                        </td>
                        <td  bgcolor="#FFCC00" align="center"><strong>PASE A PREG. 9</strong></td>
                     </tr>
                	</table>-->
                </td>
                  </tr>
                <tr>
                  <td id="tdConadis" height="121" valign="top"><label><strong>7. CARNET CONADIS</strong></label>
                    <p>&iquest;(.....)tiene el CARNET del CONADIS?
                      </p>
                    <p>
                    	 <table width="238" border="1" align="center">
                              <tr>
                               <td width="100"  bgcolor="#FFCC00" align="center"><strong>PASE A PREG. 9</strong></td>
                                <td width="7">0</td>
                                <td width="54">NO</td>
                                
                                <td width="55" rowspan="8" align="center"><label>VALOR<br>
                                  <? echo '<input name="carnet_conadis" type="text" id="carnet_conadis" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="carnetConadisVerificar(this.value,this.form); entre(this,0,1,this.form);"/>';?>
                                  </label></td>
                                </tr>
                              <tr>
                                <td></td>
                                <td>1</td>
                                <td>SI</td>               
                              </tr>
                          </table>   
                      <!--<table width="200">
                        <tr>
                          <td colspan="2">
                            <?php /*?><? echo '<input type="radio" name="carnet_conadis" value="1" onClick="habilita_carnet_conadis(this.form)" onKeyUp="fn(this.form,this,event);"/>SI';?><?php */?>
                            </td>
                        </tr>
                        <tr>
                          <td>
                            <?php /*?><? echo '<input type="radio" name="carnet_conadis" value="0" onClick="deshabilita_carnet_conadis(this.form)" onKeyUp="fn(this.form,this,event);"/>NO';?><?php */?>
                          </td>
                          <td  bgcolor="#FFCC00" align="center"><strong>PASE A PREG. 9</strong></td>
                        </tr>
                      </table>-->
                    </p></td>
                  <td id="tdPorcentaje" valign="top"><strong>8. PROCENTAJE DE DISCAPACIDAD</strong>
                    <p>(Sr. Investigador: Registe el procentaje de discapacidades  directamente del Carnet del CONADIS)
                      </p>
                    <p>
                      <? echo '<input name="porcentaje_discapacidad" type="text" id="porcentaje_discapacidad" size="10" maxlength="3" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,1,100,this.form);" required="required"/>';?>                    																												  	
                    %</p></td>
                  <td valign="top"><strong>9. ETNIA</strong>
                    <p>&iquest;C&oacute;mo se identifica usted seg&uacute;n su cultura y costumbres:?
                      </p>
                    <?php /*?><p><? echo '
        	          <select name="etnia" id="etnia">
        	            <option value="1">Indigena?</option>
        	            <option value="2">Afroecuatoriano(a)/Afrodescendiente?</option>
        	            <option value="3">Negro(a)?</option>
        	            <option value="4">Mulato(a)?</option>
        	            <option value="5">Montubio(a)?</option>
        	            <option value="6">Mestizo(a)?</option>
        	            <option value="7">Blanco(a)</option>
        	            <option value="8">Otro(a)</option>
      	            </select>';
					?>
   	              </p><?php */?>
                    <table width="297" border="1" align="center">
                      <tr>
                        <td width="14">1</td>
                        <td width="192">Indigena?</td>
                        <td width="69" rowspan="8" align="center"><label>VALOR<br>
                          <? echo '<input name="etnia" type="text" id="etnia" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,1,8,this.form);" required="required"/>';?>
                          </label></td>
                        </tr>
                      <tr>
                        <td>2</td>
                        <td>Afroecuatoriano(a)/Afrodescendiente.?</td>
                        </tr>
                      <tr>
                        <td>3</td>
                        <td>Negro(a)?</td>
                        </tr>
                      <tr>
                        <td>4</td>
                        <td>Mulato(a)?</td>
                        </tr>
                      <tr>
                        <td>5</td>
                        <td>Montubio(a)?</td>
                        </tr>
                      <tr>
                        <td>6</td>
                        <td>Mestizo(a)?</td>
                        </tr>
                      <tr>
                        <td>7</td>
                        <td>Blanco(a)?</td>
                        </tr>
                      <tr>
                        <td>8</td>
                        <td>Otro(a)?</td>
                        </tr>
                    </table></td>
                  </tr>
                <tr>
                  <td><strong>10. INSTRUCCIÓN</strong>
                    <p>&iquest;Cu&aacute;l es el nivel de instrucci&oacute;n y a&ntilde;o mas alto que aprob&oacute;?</p>
                    <table width="250" border="1" align="center">
                      <tr>
                        <td width="15">0</td>
                        <td width="175">Ninguno</td>
                        <td width="38" rowspan="5" align="center"><label>NIVEL
                          <? echo '<input name="instruccion_nivel" type="text" id="instruccion_nivel" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="noMayor(this,9,this.form);" required="required"/>';?>
                          </label></td>
                        </tr>
                      <tr>
                        <td>1</td>
                        <td>Centro de alfabetizaci&oacute;n</td>
                        </tr>
                      <tr>
                        <td>2</td>
                        <td>Edu. B&aacute;sica de Adultos</td>
                        </tr>
                      <tr>
                        <td>3</td>
                        <td>Primaria</td>
                        </tr>
                      <tr>
                        <td>4</td>
                        <td>Educaci&oacute;n B&aacute;sica</td>
                        </tr>
                      <tr>
                        <td>5</td>
                        <td>Secundaria</td>
                        <td rowspan="5" align="center"><label>A&Ntilde;O<? echo '<input name="instruccion_ano" type="text" id="instruccion_ano" size="5" maxlength="2" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,0,10,this.form);" required="required"/>';?> </label></td>
                        </tr>
                      <tr>
                        <td>6</td>
                        <td>Educaci&oacute;n Media</td>
                        </tr>
                      <tr>
                        <td>7</td>
                        <td>Superior No Universitaria</td>
                        </tr>
                      <tr>
                        <td>8</td>
                        <td>Superior Universitaria</td>
                        </tr>
                      <tr>
                        <td>9</td>
                        <td>Postgrado</td>
                        </tr>
                      </table>
                    <p>&nbsp;</p></td>
                  <td colspan="2">&nbsp;</td>
                  </tr>                
              </table></td>
            </tr>
            <tr>
              <td align="center"><img src="images/sub_D.png" height="30" width="100%"/></td>
            </tr>
            <tr>
              
              <td align="center">
                <table width="100%" >
                  <tr>
                    <td align="center"><table width="100%" border="1">
                      <tr>
                        <td width="33%" valign="top"><label><strong>11. TRABAJO<br>
                          <br>
                          </strong></label>                        <label>&iquest;Trabaj&oacute; usted la SEMANA PASADA AL MENOS UNA HORA? <br />
                            </label>
                            <table width="238" border="1" align="center">
                              <tr>
                               <td></td>
                                <td width="7">0</td>
                                <td width="54">NO</td>
                                
                                <td width="55" rowspan="8" align="center"><label>VALOR<br>
                                  <? echo '<input name="trabajo" type="text" id="trabajo" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="trabajoVerificar(this.value,this.form); entre(this,0,1,this.form);"/>';?>
                                  </label></td>
                                </tr>
                              <tr>
                                <td width="100"  bgcolor="#FFCC00" align="center"><strong>PASE A PREG. 14</strong> </td>
                                <td>1</td>
                                <td>SI</td>               
                              </tr>
                          </table>   
                          </td>
                        <td id="tdNoTrabajo"; width="33%" valign="top"><label><strong>12. CONFIRMACIÓN DE NO TRABAJO</strong></label>
                          <p>&iquest;Ni atendiendo o ayudando en alg&uacute;n negocio familiar, ni trabajando en cultivos agricolas o crianza de aminales, ni ayudando a alg&uacute;n miembro del hogar en una finca del hogar, ni como aprendiz remunerado en dinero o en especie, ni vendiendo alg&uacute;n producto, loter&iacute;a o peri&oacute;dico, bi vendiendo en la calle o en un puesto fijo o como ambulante, ni preparando alimentos, tejiendo, cosiendo u otras actividades para la venta, ni prestando servicios a otras personas por alguna remuneraci&oacute;n, ni realizando alguna otra actividad por la cual gan&oacute; dinero?</p>
                          <p>
                          <table width="238" border="1" align="center">
                              <tr>
                               <td></td>
                                <td width="7">0</td>
                                <td width="54">NO</td>
                                
                                <td width="55" rowspan="8" align="center"><label>VALOR<br>
                                  <? echo '<input name="no_trabajo" type="text" id="no_trabajo" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="no_trabajoVerificar(this.value,this.form); entre(this,0,1,this.form);"/>';?>
                                  </label></td>
                                </tr>
                              <tr>
                                <td width="100"  bgcolor="#FFCC00" align="center"><strong>PASE A PREG. 14</strong> </td>
                                <td>1</td>
                                <td>SI</td>               
                              </tr>
                          </table>   
                        </td>
                        <td id="tdNoTrabajo1"; width="34%" valign="top"><label><strong>13. CONFIRMACIÓN DE NO TRABAJO</strong></label>
                          <p>&iquest;Aunque usted no trabaj&oacute; durante la SEMANA PASADA, tiene alg&uacute;n empleo o negocio del cual estuvo ausente por enfermedad, huelga, licencia, vacaci&oacute;n, maternidad u otro motivo?</p>
                          <p>
                          	<table width="238" border="1" align="center">
                              <tr>
                               <td width="100"  bgcolor="#FFCC00" align="center"><strong>PASE A PREG. 17</strong> </td>
                                <td width="7">0</td>
                                <td width="54">NO</td>
                                
                                <td width="55" rowspan="8" align="center"><label>VALOR<br>
                                  <? echo '<input name="no_trabajo1" type="text" id="no_trabajo1" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="no_trabajo1Verificar(this.value,this.form); entre(this,0,1,this.form);"/>';?>
                                  </label></td>
                                </tr>
                              <tr>
                                <td></td>
                                <td>1</td>
                                <td>SI</td>               
                              </tr>
                          </table>   
                          </td>
                        </tr>
                      <tr>
                        <td height="275" valign="top" id="tdOcupacion"><label><strong>14. OCUPACIÓN<br>
                          <br>
                          </strong></label>
                          <label><strong> </strong></label>
                          <label>
                            &iquest;Cu&aacute;l fue la ocupaci&oacute;n que tuvo usted la (SEMANA PASADA o la ULTIMA SEMANA QUE TRABAJ&Oacute;)?(Si tuvo m&aacute;s de una, digame la ocupaci&oacute;n a que dedic&oacute; MAS HORAS de trabajo a la semana)<br>
                            <? echo '<textarea name="ocupacion" id="ocupacion" disabled="true" cols="35" rows="8" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);"></textarea>'; ?>
                            <br />
                            C&Oacute;DIGO CIUO
							<? echo '<input name="cod_ocupacion" type="text" id="cod_ocupacion" size="10" maxlength="4" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);" required="required">'; ?>
                          </label></td>
                        <td id="tdOcupacional" valign="top"><label><strong>15. CATEGORÍA OCUPACIONAL</strong></label>
                          <p>&iquest;En la ocupaci&oacute;n, tarea o labor de (OCUPACI&Oacute;N Preg. 14)... usted trabaja como:
                            </p>
                          <table width="239" border="1" align="center">
                            <tr>
                              <td width="19">1</td>
                              <td width="164">Empleado/Obrero Gobierno</td>
                              <td width="34" rowspan="7" align="center"><label>VALOR<br>
                                <? echo '<input name="categoria_ocupacional" type="text" id="categoria_ocupacional" size="5" maxlength="1" onkeypress="return validarN(event)"  onKeyUp="fn(this.form,this,event);"  onBlur="entre(this,1,7,this.form);"/>'; ?>
                                </label></td>
                              </tr>
                            <tr>
                              <td>2</td>
                              <td>Empleado/Obrero Privado</td>
                              </tr>
                            <tr>
                              <td>3</td>
                              <td>Jornalero o Pe&oacute;n</td>
                              </tr>
                            <tr>
                              <td>4</td>
                              <td>Patrono</td>
                              </tr>
                            <tr>
                              <td>5</td>
                              <td>Cuenta Propia</td>
                              </tr>
                            <tr>
                              <td>6</td>
                              <td>Trabajador del Hogar sin Pago</td>
                              </tr>
                            <tr>
                              <td>7</td>
                              <td>Empleada(o) Dom&eacute;stica(o)</td>
                              </tr>
                          </table></td>
                        <td id="tdIngreso" valign="top"><label><strong>16. INGRESO</strong></label>
                          <p>&iquest;Cu&aacute;l fue su &uacute;ltimo INGRESO, GANANCIA NETA, SALARIO o JORNAL que tuvo como (OCUPACI&Oacute;N Preg. 14) y cada cu&aacute;nto lo obtiene?                        </p>
                          <table width="208" border="1" align="center">
                            <tr>
                              <td width="15" height="19">1</td>
                              <td width="80">Diario</td>
                              <td width="91" rowspan="4" align="center"><label> DOLARES<br>
                                <? echo '<input name="ingreso_valor" type="text" id="ingreso_valor" size="16" maxlength="5" onkeypress="return validarN(event)" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);"/>';?> </label></td>
                              </tr>
                            <tr>
                              <td>2</td>
                              <td>Semanal</td>
                              </tr>
                            <tr>
                              <td>3</td>
                              <td>Quincenal</td>
                              </tr>
                            <tr>
                              <td>4</td>
                              <td>Mensual</td>
                              </tr>
                            <tr>
                              <td>5</td>
                              <td>Trimestral</td>
                              <td rowspan="3" align="center"><label>FRECUENCIA<br>
                                <? echo'<input name="ingreso_frecuencia" type="text" id="ingreso_frecuencia" size="5" maxlength="1" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,1,7,this.form)" />';?>
                                </label></td>
                              </tr>
                            <tr>
                              <td>6</td>
                              <td>Semestral</td>
                              </tr>
                            <tr>
                              <td>7</td>
                              <td>Anual</td>
                              </tr>
                          </table></td>
                        </tr>
                      <tr>
                        <td valign="top"><label><strong>17. PESCA DE ARRASTRE</strong></label>
                          <p>&iquest;Durante los &Uacute;LTIMOS DOCE MESES, usted trabaj&oacute; en actividades relacionadas con la PESCA DE ARRASTRE?                        
                            <p>
                                <table width="238" border="1" align="center">
                                  <tr>
                                   <td width="100"  bgcolor="#FFCC00" align="center"><strong>PASE A PREG. 25</strong> </td>
                                    <td width="7">0</td>
                                    <td width="54">NO</td>
                                    
                                    <td width="55" rowspan="8" align="center"><label>VALOR<br>
                                      <? echo '<input name="pesca_arrastre" type="text" id="pesca_arrastre" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="pesca_arrastreVerificar(this.value,this.form); entre(this,0,1,this.form);" />';?>
                                      </label></td>
                                    </tr>
                                  <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>SI</td>               
                                  </tr>
                              </table>   
                          </td>
                        <td valign="top"><p><strong>18. ACTIVIDAD EN LA PESCA</strong></p>
                          <p>&iquest;Enla actividad relacionada con la PESCA DE ARRASTRE usted realizaba tareas como:                        </p>
                          <table width="283" border="1" align="center">
                            <tr>
                              <td width="18">1</td>
                              <td width="135">Tripulante?</td>
                              <td width="25" rowspan="11" align="center"><label>VALOR<br>
                                <? echo '<input name="actividad_pesca" type="text" id="actividad_pesca" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,1,9,this.form);" />'; ?>
                                </label></td>
                              </tr>
                            <tr>
                              <td>2</td>
                              <td>Armador?</td>
                              </tr>
                            <tr>
                            <tr>
                              <td>3</td>
                              <td>Esvicerador(a)?</td>
                              </tr>
                            <tr>
                            <tr>
                              <td>4</td>
                              <td>Clasificadores de camar&oacute;n?</td>
                              </tr>
                            <tr>
                            <td>5</td>
                              <td>Fileteador(a)?</td>
                              </tr>
                            <tr>
                              <td>6</td>
                              <td>Cargador(a)?</td>
                              </tr>
                            <tr>
                              <td>7</td>
                              <td>Motorizado?</td>
                              </tr>
                            <tr>
                              <td>8</td>
                              <td>Comerciante?</td>
                              </tr>
                            <tr>
                              <td>9</td>
                              <td>Suministrador(a) de hielo, agua, entre otros?</td>
                              </tr>
                            </table>
                          <p>&nbsp;</p></td>
                        <td valign="top"><strong>19. TIEMPO EN LA ACTIVIDAD</strong>                        <label><br>
                          <br>
                          &iquest;Cu&aacute;nto tiempo trabaja o trabaj&oacute; usted como (Actividad Preg. 18)?<br>
                          <br />
                          A&Ntilde;OS
                          <? echo '<input name="actividad_anos" type="text" id="actividad_anos" size="5" maxlength="2" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" required="required"/>';?>
                          MESES
                          <? echo '<input name="actividad_meses" type="text" id="actividad_meses" size="5" maxlength="2" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="noMayor(this,11,this.form);" />';?>
                          </label></td>
                        </tr>
                      <tr>
                        <td valign="top"><strong>20. ASOCIACIÓN</strong>
                          <p>&iquest;Si usted tuviera la oportunidad de asociarse en una cooperativa, asociaci&oacute;n o agrupaci&oacute;n se asociar&iacute;a?</p>
                          <p>
                            <label>
                              <?php /*?><? echo '<select name="asociacion" id="asociacion">
                              <option value="1">SI</option>
                              <option value="0">NO</option>
                            </select>'; ?><?php */?>
                              </label>
                              <table width="238" border="1" align="center">
                                  <tr>
                                   <td></td>
                                    <td width="7">0</td>
                                    <td width="54">NO</td>
                                    
                                    <td width="55" rowspan="8" align="center"><label>VALOR<br>
                                      <? echo '<input name="asociacion" type="text" id="asociacion" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="entre(this,0,1,this.form);" required="required"/>';?>
                                      </label></td>
                                    </tr>
                                  <tr>
                                    <td></td>
                                    <td>1</td>
                                    <td>SI</td>               
                                  </tr>
                              </table>   
                            <!--<table width="200">
                              <tr>
                                <td>
                                  <?php /*?><? echo '<input type="radio" name="asociacion" value="1" onKeyUp="fn(this.form,this,event);" > SI'; ?><?php */?>
                                </td>
                              </tr>
                              <tr>
                                <td>
                                  <?php /*?><? echo '<input type="radio" name="asociacion" value="0" onKeyUp="fn(this.form,this,event);" > NO'; ?><?php */?>
                                </td>
                              </tr>
                            </table>-->
                          </p></td>
                        <td valign="top"><strong>21. DESEO DE INCURSIÓN</strong>
                          <p>&iquest;Si usted tuviera la oportunidad de establecer su negocio propio individual o familiar en las ramas de la producci&oacute;n, comercializaci&oacute;n o servicios, lo establecer&iacute;a?</p>
                          <p>
                          	<table width="238" border="1" align="center">
                              <tr>
                               <td width="100"  bgcolor="#FFCC00" align="center"><strong>PASE A PREG. 25</strong> </td>
                                <td width="7">0</td>
                                <td width="54">NO</td>
                                
                                <td width="55" rowspan="8" align="center"><label>VALOR<br>
                                  <? echo '<input name="deseo_incursion" type="text" id="deseo_incursion" size="5" maxlength="1" onkeypress="return validarN(event);" onKeyUp="fn(this.form,this,event);" onBlur="deseo_incursionVerificar(this.value,this.form); entre(this,0,1,this.form);" />';?>
                                  </label></td>
                                </tr>
                              <tr>
                                <td></td>
                                <td>1</td>
                                <td>SI</td>               
                              </tr>
                          </table>   
                        </td>
                        <td valign="top"><strong>22. OFERTA ESTATAL</strong>
                          <p>&iquest;El Gobierno a trav&eacute;s de sus instituciones<br>
                            impulsar&aacute; 3 tipos de negocios, en cu&aacute;l de ellos<br>
                            usted podr&iacute;a o le gustar&iacute;a emprender:                        </p>
                          <table>
                          <tr>
                          	<td>
                          <table width="37" border="1">
                            <tr>
                              <td height="75" align="center" bgcolor="#FFCC00"><p><strong>PASE A PREG 25</strong></p></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                            </tr>
                          </table>
                          </td>
                          <td>
                          <table width="243" border="1" align="center">
                            <tr>
                              <td width="7">1</td>
                              <td width="197">Servicios de Limpieza?</td>
                              <td width="17" rowspan="4" align="center"><p>VALOR
                                <label>
                                  <? echo '<input name="oferta_estatal" type="text" id="oferta_estatal" size="5" maxlength="1" onKeyUp="fn(this.form,this,event);" onkeypress="return validarN(event);" onBlur="oferta_estatalVerificar(this.value,this.form); entre(this,1,4,this.form);" />'; ?>
                                  </label>
                                </p></td>
                              </tr>
                            <tr>
                              <td>2</td>
                              <td>Servicios de preparaci&oacute;n de alimentos?</td>
                              </tr>
                            <tr>
                              <td>3</td>
                              <td>Servicios de guardian&iacute;a?</td>
                              </tr>
                            <tr>
                              <td>4</td>
                              <td>Ninguno de los mencionados?</td>
                              </tr>
                            </table>
                            </td>
                            </tr>
                            </table>
                          <p>&nbsp;</p></td>
                        </tr>
                      <tr>
                        <td valign="top"><p><strong>23. DESTREZA</strong></p>
                          <p>&iquest;Cu&aacute;l cree usted que es su principal destreza para iniciar su propio negocio, taller o empresa?<br />
                            </p>
                          <table width="298" border="1" align="center">
                            <tr>
                              <td width="17">1</td>
                              <td width="205">Artesanias y Manualidades</td>
                              <td width="42" rowspan="14" align="center"><label>VALOR<br>
                                <? echo '<input name="destreza" type="text" id="destreza" size="5" maxlength="2"  onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"  onBlur="entre(this,1,12,this.form);"  />'; ?>
                                </label></td>
                              </tr>
                            <tr>
                              <td>2</td>
                              <td>Textiles y Confecciones</td>
                              </tr>
                            <tr>
                              <td>3</td>
                              <td>Cosmetolog&iacute;a y belleza</td>
                              </tr>
                            <tr>
                              <td>4</td>
                              <td>Gastronom&iacute;a/Cocina</td>
                              </tr>
                            <tr>
                              <td>5</td>
                              <td>Actividades Agropecuarias</td>
                              </tr>
                            <tr>
                              <td>6</td>
                              <td>Mec&aacute;nica/Metalmec&aacute;nica</td>
                              </tr>
                            <tr>
                              <td>7</td>
                              <td>Conducci&oacute;n</td>
                              </tr>
                            <tr>
                              <td>8</td>
                              <td>Turismo y recreaci&oacute;n</td>
                              </tr>
                            <tr>
                              <td>9</td>
                              <td>Carpinter&iacute;a/Ebanister&iacute;a</td>
                              </tr>
                            <tr>
                              <td>10</td>
                              <td>Construcci&oacute;n/Electricidad/Fontaner&iacute;a</td>
                              </tr>
                            <tr>
                              <td>11</td>
                              <td>Otros</td>
                              </tr>
                            <tr>
                              <td>12</td>
                              <td>Ninguno</td>
                              </tr>
                            </table>
                          <p>&nbsp;</p></td>
                        <td valign="top"><strong>24. RAMA DE ACTIVIDAD</strong>                        <label><br>
                          <br>
                          &iquest;A qu&eacute; se dedicar&iacute;a el negocio o la empresa en la cual establecer&iacute;a o que producir&iacute;a, vender&iacute;a o que servicios prestar&iacute;a?<br />
                          <? echo '<textarea name="rama_actividad" id="rama_actividad" disabled="true" cols="35" rows="3" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);"></textarea>'; ?>
                          <br />
                          C&Oacute;DIGO CIIU
                          <? echo '<input name="cod_rama_actividad_t" type="text" id="cod_rama_actividad_t" size="2" maxlength="1" onKeyUp="this.value=this.value.toUpperCase(); fn(this.form,this,event);" onkeypress="return validarT(event)" />
						  		   <input name="cod_rama_actividad_n" type="text" id="cod_rama_actividad_n" size="8" maxlength="4" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);" />	
						  ';?>
                          </label></td>   
                        <td align="center" rowspan="2">
                          <table width="100%">
                            <tr>
                              <td align="center" colspan="3"><p><img src="images/sub_E_cop.png" width="100%" height="30" align="top"/></td>
                              </tr>
                            <tr>
                              <td><br><strong>25. EDAD E INGRESO FAMILIAR</strong></br>	
                                </td>
                              </tr>
                            <tr>
                              <td><br>Prodia ahora informarme cuantos miembros del hogar a mas de usted residen en su hogar, cuantos años tiene cada uno y su ingreso mensual promedio?<br />
                                </td>
                              </tr>
                            </table>
                          <table border="1">
                            <tr align="center">
                              <td>NUMERO
                                </td>
                              <td>EDAD
                                </td>
                              <td>INGRESO
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_1" type="checkbox" id="num_fam_1" onKeyUp="fn(this.form,this,event);"/>1';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_1" type="text" id="edad_fam_1" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_1" type="text" id="ingreso_fam_1" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_2" type="checkbox" id="num_fam_2" onKeyUp="fn(this.form,this,event);"/>2';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_2" type="text" id="edad_fam_2" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_2" type="text" id="ingreso_fam_2" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_3" type="checkbox" id="num_fam_3" onKeyUp="fn(this.form,this,event);"/>3';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_3" type="text" id="edad_fam_3" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_3" type="text" id="ingreso_fam_3" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_4" type="checkbox" id="num_fam_4" onKeyUp="fn(this.form,this,event);"/>4';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_4" type="text" id="edad_fam_4" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_4" type="text" id="ingreso_fam_4" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_5" type="checkbox" id="num_fam_5" onKeyUp="fn(this.form,this,event);"/>5';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_5" type="text" id="edad_fam_5" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_5" type="text" id="ingreso_fam_5" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_6" type="checkbox" id="num_fam_6" onKeyUp="fn(this.form,this,event);"/>6';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_6" type="text" id="edad_fam_6" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_6" type="text" id="ingreso_fam_6" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_7" type="checkbox" id="num_fam_7" onKeyUp="fn(this.form,this,event);"/>7';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_7" type="text" id="edad_fam_7" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_7" type="text" id="ingreso_fam_7" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_8" type="checkbox" id="num_fam_8" onKeyUp="fn(this.form,this,event);"/>8';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_8" type="text" id="edad_fam_8" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_8" type="text" id="ingreso_fam_8" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_9" type="checkbox" id="num_fam_9" onKeyUp="fn(this.form,this,event);"/>9';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_9" type="text" id="edad_fam_9" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_9" type="text" id="ingreso_fam_9" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_10" type="checkbox" id="num_fam_10" onKeyUp="fn(this.form,this,event);"/>10';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_10" type="text" id="edad_fam_10" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_10" type="text" id="ingreso_fam_10" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_11" type="checkbox" id="num_fam_11" size="2" maxlength="2" onKeyUp="fn(this.form,this,event);"/>11';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_11" type="text" id="edad_fam_11" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_11" type="text" id="ingreso_fam_11" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_12" type="checkbox" id="num_fam_12" size="2" maxlength="2" onKeyUp="fn(this.form,this,event);"/>12';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_12" type="text" id="edad_fam_12" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_12" type="text" id="ingreso_fam_12" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_13" type="checkbox" id="num_fam_13" size="2" maxlength="2" onKeyUp="fn(this.form,this,event);"/>13';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_13" type="text" id="edad_fam_13" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_13" type="text" id="ingreso_fam_13" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_14" type="checkbox" id="num_fam_14" size="2" maxlength="2" onKeyUp="fn(this.form,this,event);"/>14';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_14" type="text" id="edad_fam_14" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_14" type="text" id="ingreso_fam_14" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_15" type="checkbox" id="num_fam_15" size="2" maxlength="2" onKeyUp="fn(this.form,this,event);"/>15';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_15" type="text" id="edad_fam_15" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_15" type="text" id="ingreso_fam_15" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            <tr align="center">
                              <td>
                                <? echo '<input name="num_fam_16" type="checkbox" id="num_fam_16" size="2" maxlength="2" onKeyUp="fn(this.form,this,event);"/>16';?>
                                </td>
                              <td>
                                <? echo '<input name="edad_fam_16" type="text" id="edad_fam_16" size="2" maxlength="2" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              <td>
                                <? echo '<input name="ingreso_fam_16" type="text" id="ingreso_fam_16" size="5" maxlength="5" onkeypress="return validarN(event)" onKeyUp="fn(this.form,this,event);"/>';?>
                                </td>
                              </tr>
                            </table>
                          </td>                   
                        </tr>
                      <tr>
                        <td align="center" colspan="2" valign="top"><label><strong>OBSERVACIONES
                          <br>
                          </strong>
                          <br>
                          <textarea name="observaciones" id="observaciones" cols="70" rows="15"></textarea>
                          </label>
                          
                          </td>
                        </tr>
                      
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>
            <!--<td align="center"><img src="images/sub_E.png" height="30" width="40px"/></td>-->
            <tr>
              <td colspan="3" align="center">
                <? echo "<input name='enviar' style='background-image:url(images/encuesta.jpg);background-repeat:no-repeat;height:60px;width:100px;background-position:center;  cursor: pointer;' 
			 type='button' value='Ingresar' onclick='IngresoEncuesta(document.form1.codigo.value,document.form1.cod_provincia.value,document.form1.cod_canton.value,document.form1.cod_parroquia.value,
			 document.form1.calle1.value,document.form1.num_calle1.value,document.form1.calle2.value,
			 document.form1.num_casa.value,document.form1.num_lote.value,document.form1.num_depart.value,document.form1.num_piso.value,document.form1.num_tel_fijo1.value,document.form1.num_tel_fijo2.value,
			 document.form1.num_celular.value,document.form1.apellidos.value,document.form1.nombres.value,document.form1.num_cedula.value,document.form1.sexo.value,document.form1.edad.value,
			 document.form1.discapacidad.value,
			 document.form1.carnet_conadis.value,document.form1.porcentaje_discapacidad.value,document.form1.etnia.value,document.form1.instruccion_nivel.value,
			 document.form1.instruccion_ano.value,document.form1.trabajo.value,
			 document.form1.no_trabajo.value,
			 document.form1.no_trabajo1.value,
			 document.form1.ocupacion.value,document.form1.cod_ocupacion.value,
			 document.form1.categoria_ocupacional.value,document.form1.ingreso_frecuencia.value,document.form1.ingreso_valor.value,
			 document.form1.pesca_arrastre.value,
			 document.form1.actividad_pesca.value,document.form1.actividad_anos.value,document.form1.actividad_meses.value,
			 document.form1.asociacion.value,
			 document.form1.deseo_incursion.value,
			 document.form1.oferta_estatal.value,document.form1.destreza.value,
			 document.form1.rama_actividad.value,document.form1.cod_rama_actividad_t.value,document.form1.cod_rama_actividad_n.value,document.form1.observaciones.value,
             document.form1.num_fam_1,document.form1.num_fam_2,document.form1.num_fam_3,document.form1.num_fam_4,
			 document.form1.num_fam_5,document.form1.num_fam_6,document.form1.num_fam_7,document.form1.num_fam_8,
			 document.form1.num_fam_9,document.form1.num_fam_10,document.form1.num_fam_11,document.form1.num_fam_12,
			 document.form1.num_fam_13,document.form1.num_fam_14,document.form1.num_fam_15,document.form1.num_fam_16);'>";?>
                
            </tr>
          </table>
  </table>
  </div>
</form>
</body>
</html>
