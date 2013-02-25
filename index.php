<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>New Web Project</title>
		<link href="css/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/estilos.css" rel="stylesheet" type="text/css"/>
		<link rel="stylesheet" href="themes/CuantoSabes.min.css" />
		<script src="js/jquery-1.9.1.min.js"></script>
		<script src="js/jquery.mobile-1.3.0.min.js"></script>
		<script src="js/cordova-2.2.0.js" type="text/javascript"></script>

		<script type="text/javascript">
			var name = prompt("Por favor, introduce tu nombre", "");
		</script>
		<script language="Javascript">
			function quiz() {
				var i = 0
				var total = document.forms.length - 1
				var ncorrect = 0
				var response = new Array(total)
				var theforms = new Array(total)
				var answer = new Array(total)

				for ( i = 1; i <= total; i++)
					theforms[i] = document.forms[i - 1]

				for ( i = 1; i <= total; i++)
					response[i] = theforms[i].answer.selectedIndex

				for ( i = 1; i <= total; i++)
					answer[i] = theforms[i].correct.value

				var flag = true
				for ( i = 1; i <= total; i++)
					if (response[i] == 0) {
						alert("Atención: no has contestado la pregunta #" + i + "")
						flag = false
					}
				if (flag) {
					for ( i = 1; i <= total; i++)
						if (response[i] == answer[i])
							ncorrect++
					document.total.score.value = ncorrect
					var per = Math.round((ncorrect / total) * 100)
					document.total.percent.value = per
					document.total.outof.value = total

					luser(per);
					medioc(per);
					winer(per);

				} //end if (flag)

			}

			// -->
		</script>
		<script type="text/javascript">
			function luser(per) {
				//alert(per);
				if (per == 0) {
					//location.href='index.html#pop1';}
					setTimeout("location.href='index.php#pop1'", 3000);
				}
			}

			function medioc(per) {
				//alert(per);
				if (per == 50) {
					//location.href='index.html#pop1';}
					setTimeout("location.href='index.php#pop2'", 3000);
				}
			}

			function winer(per) {
				//alert(per);
				if (per == 100) {
					//location.href='index.html#pop1';}
					setTimeout("location.href='index.php#pop3'", 3000);
				}
			}

		</script>
		<script type="text/javascript">
			function close() {
				if (confirm("Seguro que ya no quieres jugar?")) {
					navigator.app.exitApp();
				}
			}
		</script>
	</head>
	<body>
		<!--Inicio-->
		<div data-role="page" id="inicio" data-theme="b">
			<div data-role="header">
				<div id="rand">
					<script type="text/javascript">

//Javascript Created by Computerhope http://www.computerhope.com

//store the quotations in arrays

var images = [], 
index = 0;

images[0] = "<a href = '#'><img src='images/publi1.jpg'></a>";

images[1] = "<a href = '#'><img src='images/publi2.jpg'></a>";

images[2] = "<a href = '#'><img src='images/publi3.jpg'></a>";

images[3] = "<a href = '#'><img src='images/publi4.jpg'></a>";


index = Math.floor(Math.random() * images.length);

document.write(images[index]);

//done

</script>
				</div>
				<br>
			</div>
			<div class="altos" data-role="content" data-theme="b">
				<div style="height:353px;"></div>
				<a data-role="button" data-theme="a" data-transition="slidedown" href="index.php#page1">Jugar</a>
			</div>
			
			<div data-role="footer">
				<br>
			</div>
		</div>
		<!--Finicio-->
		<!--Pagina 1-->
		<div data-role="page" id="page1" data-theme="b">
			<div id="rand">
					<script type="text/javascript">

//Javascript Created by Computerhope http://www.computerhope.com

//store the quotations in arrays

var images = [], 
index = 0;

images[0] = "<a href = '#'><img src='images/publi1.jpg'></a>";

images[1] = "<a href = '#'><img src='images/publi2.jpg'></a>";

images[2] = "<a href = '#'><img src='images/publi3.jpg'></a>";

images[3] = "<a href = '#'><img src='images/publi4.jpg'></a>";


index = Math.floor(Math.random() * images.length);

document.write(images[index]);

//done

</script>
				</div>
			<div data-role="header" class="juego">
				<div class="terapia">
					<font face="Arial" size="2"> Hola <b>
						<script language=Javascript>
							document.write(name);
						</script></b>, &iquest;Qu&eacute; tanto sabes?...
						<br>
						de <h2>Historia</h2> </font>
				</div>
			</div>
			<div data-role="content" data-theme="a">
				<!-------- Pregunta 1 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>&iquest;Qu&eacute; cultura fue una de las mas importantes en guayaquil? </b></font>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. Ts&aacute;chila <option value=2> 2. Huancavilca <option value=3> 3. Huaorani <option value=4> 4. Punae </option>
					</select>
					<input name=correct size=4 type=hidden value=2>
				</form>

				<br>
				<br>
				<!-------- Pregunta 2 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>&iquest; Qui&eacute;nes invadieron Guayaquil durante el dominio español? </b></font>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. Extraterrestres <option value=2> 2. Gringos <option value=3> 3. Ratones <option value=4> 4. Piratas </option>
					</select>
					<input name=correct size=4 type=hidden value=4>
				</form>

				<br>
				<br>
				<!-------- Pregunta 3 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>&iquest; en qu&eacute; a&ntilde;o se creo la "Provincia Libre de Guayaquil"? </b></font>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. 1820 <option value=2> 2. 1492 <option value=3> 3. 2010 <option value=4> 4. 1996 </option>
					</select>
					<input name=correct size=4 type=hidden value=1>
				</form>

				<br>
				<br>

				<!-------- Pregunta 4 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>&iquest; C&oacute;mo se denominaba a los guayaquile&ntilde;os farreros durante la colonia? </b></font>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. Fiesteros <option value=2> 2. Tunantes <option value=3> 3. Madrugados <option value=4> 4. Ociosos </option>
					</select>
					<input name=correct size=4 type=hidden value=2>
				</form>

				<br>
				<br>
				<a data-role="button" href="#page2" data-transition="slide">Siguiente ronda</a>
			</div>
			<div data-role="footer">
				
			</div>
		</div>
		<!--FIN PAGINA -->

		<!--Pagina 2-->
		<div data-role="page" id="page2" data-theme="b">
			<div id="rand">
					<script type="text/javascript">

//Javascript Created by Computerhope http://www.computerhope.com

//store the quotations in arrays

var images = [], 
index = 0;

images[0] = "<a href = '#'><img src='images/publi1.jpg'></a>";

images[1] = "<a href = '#'><img src='images/publi2.jpg'></a>";

images[2] = "<a href = '#'><img src='images/publi3.jpg'></a>";

images[3] = "<a href = '#'><img src='images/publi4.jpg'></a>";


index = Math.floor(Math.random() * images.length);

document.write(images[index]);

//done

</script>
				</div>
			<div data-role="header" class="juego">
				<div class="terapia">
					<font face="Arial" size="2"> Bien hecho <b>
						<script language=Javascript>
							document.write(name);
						</script></b>, &iquest;Qu&eacute; tanto sabes?...
						<br>
						de <h2>Leyendas Urbanas</h2> </font>
				</div>
			</div>
			<div data-role="content" data-theme="a">

				<!-------- Pregunta 5 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>&iquest;Qu&eacute; otra aparicion de la noche guayaquile&ntilde;a asustaba a los borrachos? </b></font>
					<br>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. El chupacabras <option value=2> 2. La Dama Tapada <option value=3> 3. El chuzalongo <option value=4> 4. Freddy Krueger </option>
					</select>
					<input name=correct size=4 type=hidden value=2>
				</form>

				<br>
				<br>
				<!-------- Pregunta 6 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>&iquest; Qu&eacute; hacia La viuda con los borrachos antes de convertirse en cadaver? </b></font>
					<br>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. 1PT <option value=2> 2. Regalaba caf&eacute; <option value=3> 3. Asaltaba <option value=4> 4. Daba un beso en la boca </option>
					</select>
					<input name=correct size=4 type=hidden value=4>
				</form>

				<br>
				<br>
				<!-------- Pregunta 7 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>&iquest; El tintin, a quienes preferia para llevarse? </b></font>
					<br>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. Hombres <option value=2> 2. Muchachas jovenes <option value=3> 3. Ancianos <option value=4> 4. Los Gatos </option>
					</select>
					<input name=correct size=4 type=hidden value=2>
				</form>

				<br>
				<br>

				<!-------- Pregunta 8 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>&iquest; De qu&eacute; material esta hecha la tumba de Victor Emilio Estrada? </b></font>
					<br>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. Cu <option value=2> 2. Au <option value=3> 3. H1N1 <option value=4> 4. Aa </option>
					</select>
					<input name=correct size=4 type=hidden value=1>
				</form>

				<br>
				<br>
				<a data-role="button" href="#page3" data-transition="slide">Siguiente ronda</a>

			</div>
			<div data-role="footer">
			
			</div>
		</div>
		<!--FIN PAGINA -->

		<!--Pagina 3-->
		<div data-role="page" id="page3" data-theme="b">
			<div id="rand">
					<script type="text/javascript">

//Javascript Created by Computerhope http://www.computerhope.com

//store the quotations in arrays

var images = [], 
index = 0;

images[0] = "<a href = '#'><img src='images/publi1.jpg'></a>";

images[1] = "<a href = '#'><img src='images/publi2.jpg'></a>";

images[2] = "<a href = '#'><img src='images/publi3.jpg'></a>";

images[3] = "<a href = '#'><img src='images/publi4.jpg'></a>";


index = Math.floor(Math.random() * images.length);

document.write(images[index]);

//done

</script>
				</div>
			<div data-role="header" class="juego">
				<div class="terapia">
					<font face="Arial" size="2"> Bien hecho <b>
						<script language=Javascript>
							document.write(name);
						</script></b>, &iquest;Qu&eacute; tanto sabes?...
						<br>
						de <h2>Cultura Local</h2> </font>
				</div>
			</div>
			<div data-role="content" data-theme="a">

				<!-------- Pregunta 9 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>El sitio desde donde se defendia la ciudad de las invasiones piratas. </b></font>
					<br>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. El Puerto Maritimo <option value=2> 2. Mirador de Urbanor <option value=3> 3. Duran <option value=4> 4. El fortin de las Pe&ntilde;as </option>
					</select>
					<input name=correct size=4 type=hidden value=4>
				</form>

				<br>
				<br>
				<!-------- Pregunta 10 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>Con que Artista estaban vinculados los dise&ntilde;adores originales del Palacio de Cristal</b></font>
					<br>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. Oswaldo Guayasam&iacute;n <option value=2> 2. Salvador Dal&iacute; <option value=3> 3. Alexandre Gustave Eiffel <option value=4> 4. Thomas Edison </option>
					</select>
					<input name=correct size=4 type=hidden value=3>
				</form>

				<br>
				<br>
				<!-------- Pregunta 11 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>&iquest; Por que delito se hizo famoso Sigifredo Dante Reyes Moreno "El Cuentero de Muisne"? </b></font>
					<br>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. Vender la Torre del Reloj del Malecon <option value=2> 2. Trata de blancas <option value=3> 3. Grafiti en la via Publica <option value=4> 4. Medicina Clandestina </option>
					</select>
					<input name=correct size=4 type=hidden value=1>
				</form>

				<br>
				<br>

				<!-------- Pregunta 12 -------------->

				<form action=index.php method=post name=form1>

					<font face="Arial" size="2"><b>&iquest; Cuantos escalones tiene el Cerro Santa Ana? </b></font>
					<br>
					<br>

					<select name=answer size=1 data-theme="b">
						<option selected value=0><option value=1> 1. 215 <option value=2> 2. 456 <option value=3> 3. 575 <option value=4> 4. 420 </option>
					</select>
					<input name=correct size=4 type=hidden value=2>
				</form>

				<br>
				<br>

				<a data-role="button" data-theme="a" onclick="quiz()" href="#page4" data-transition="pop">Pulsa AQUI pasa saber tu resultado</a>
				<a data-role="button" data-theme="b" href="javascript:close();">Salir</a>

			</div>
			<div data-role="footer">
				
			</div>
		</div>
		<!--FIN PAGINA -->

		<!--Pagina 4-->
		<div data-role="page" id="page4" data-theme="b">
			<div id="rand">
					<script type="text/javascript">

//Javascript Created by Computerhope http://www.computerhope.com

//store the quotations in arrays

var images = [], 
index = 0;

images[0] = "<a href = '#'><img src='images/publi1.jpg'></a>";

images[1] = "<a href = '#'><img src='images/publi2.jpg'></a>";

images[2] = "<a href = '#'><img src='images/publi3.jpg'></a>";

images[3] = "<a href = '#'><img src='images/publi4.jpg'></a>";


index = Math.floor(Math.random() * images.length);

document.write(images[index]);

//done

</script>
				</div>
			<div data-role="header" data-theme="b">
				<h1>Resultado</h1>
			</div>
			<div data-role="content" data-theme="b">
				<form action=index.php method=post name=total>
					<b>
					<script language=Javascript>
						document.write(name);
					</script></b>: has contestado correctamente a
					<br>
					<br>
					<input data-theme="b" name=score width="100px" size=2>
					preguntas de un total de
					<input data-theme="b" name=outof width="100px" size=2>
					Has obtenido un porcentaje de calificaci&oacute;n del
					<input data-theme="b" name=percent width="100px" size=2>
					%
					<br>
				</form>
				<br>
				<a data-role="button" data-theme="b" href="index.php#page1" data-transition="slideup">Jugar Otra ves</a>
				<a data-role="button" data-theme="b" href="javascript:close();">Salir</a>
			</div>
			<div data-role="footer">
			
			</div>
		</div>
		<!--FIN PAGINA -->

		<!--Pagina Lusr1-->
		<div data-role="header" data-theme="b">
			<div id="rand">
					<script type="text/javascript">

//Javascript Created by Computerhope http://www.computerhope.com

//store the quotations in arrays

var images = [], 
index = 0;

images[0] = "<a href = '#'><img src='images/publi1.jpg'></a>";

images[1] = "<a href = '#'><img src='images/publi2.jpg'></a>";

images[2] = "<a href = '#'><img src='images/publi3.jpg'></a>";

images[3] = "<a href = '#'><img src='images/publi4.jpg'></a>";


index = Math.floor(Math.random() * images.length);

document.write(images[index]);

//done

</script>
				</div>
		</div>
		<div data-role="page" id="pop1">
			<div data-role="header" data-theme="b">
			<div id="rand">
					<script type="text/javascript">

//Javascript Created by Computerhope http://www.computerhope.com

//store the quotations in arrays

var images = [], 
index = 0;

images[0] = "<a href = '#'><img src='images/publi1.jpg'></a>";

images[1] = "<a href = '#'><img src='images/publi2.jpg'></a>";

images[2] = "<a href = '#'><img src='images/publi3.jpg'></a>";

images[3] = "<a href = '#'><img src='images/publi4.jpg'></a>";


index = Math.floor(Math.random() * images.length);

document.write(images[index]);

//done

</script>
				</div>
		</div>
			<div data-role="content" class="juego" data-theme="b">
				<div class="terapia">

				</div>
			</div>
			<div data-role="controlgroup">
				<a data-role="button" href="index.php#page1" data-transition="slideup">Jugar Otra ves</a>
				<a data-role="button" href="javascript:close();">Salir</a>
			</div>
			<div data-role="footer">
		
			</div>
		</div>
		<!--FIN PAGINA -->
		<!--Pagina Lusr1-->
		<div data-role="page" id="pop2">
			<div data-role="content" class="juego" data-theme="b">
				<div class="terapia">

				</div>
			</div>
			<div data-role="controlgroup">
				<a data-role="button" href="index.php#page1" data-transition="slideup">Jugar Otra ves</a>
				<a data-role="button" href="javascript:close();">Salir</a>
			</div>
			<div data-role="footer">
			
			</div>
		</div>
		<!--FIN PAGINA -->
		<!--Pagina Lusr1-->
		<div data-role="page" id="pop3">
			<div data-role="header" data-theme="b">
			<div id="rand">
					<script type="text/javascript">

//Javascript Created by Computerhope http://www.computerhope.com

//store the quotations in arrays

var images = [], 
index = 0;

images[0] = "<a href = '#'><img src='images/publi1.jpg'></a>";

images[1] = "<a href = '#'><img src='images/publi2.jpg'></a>";

images[2] = "<a href = '#'><img src='images/publi3.jpg'></a>";

images[3] = "<a href = '#'><img src='images/publi4.jpg'></a>";


index = Math.floor(Math.random() * images.length);

document.write(images[index]);

//done

</script>
				</div>
		</div>
			<div data-role="content" class="juego" data-theme="b">
				<div class="terapia">

				</div>
			</div>
			<div data-role="controlgroup">
				<a data-role="button" href="index.php#page1" data-transition="slideup">Jugar Otra ves</a>
				<a data-role="button" href="javascript:close();">Salir</a>
			</div>
			<div data-role="footer">
				
			</div>
		</div>
		<!--FIN PAGINA -->

	</body>
</html>