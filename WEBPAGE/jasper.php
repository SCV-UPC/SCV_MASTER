<html>
	<head>

		<meta name='viewport' content='width=device-width,initial-scale=1'>
		<title>JASPER</title>

	</head>
</html>

<?php
echo 'Soporte web para el Sistema de control por voz';
if (isset($_POST['button0'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/canal.py' '192.168.1.7'");}
if (isset($_POST['button1'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_entrada_0.py' '192.168.1.13'");}
if (isset($_POST['button2'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_hab_principal_1.py' '192.168.1.7'");}
if (isset($_POST['button3'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventilador_1.py' '192.168.1.7'");}
if (isset($_POST['button4'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_jardin_0.py' '192.168.1.13'");}
if (isset($_POST['button5'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_salon_1.py' '192.168.1.7'");}
if (isset($_POST['button6'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/hola.py' '192.168.1.7'");}
if (isset($_POST['button7'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_entrada_0.py' '192.168.1.13'");}
if (isset($_POST['button8'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_hab_ninos_0.py' '192.168.1.7'");}
if (isset($_POST['button9'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_garaje_grande_1.py' '192.168.1.13'");}
if (isset($_POST['button10'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_jardin_1.py' '192.168.1.7'");}
if (isset($_POST['button11'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_salon_0.py' '192.168.1.7'");}
if (isset($_POST['button12'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_hab_principal_0.py' '192.168.1.7'");}
if (isset($_POST['button13'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventilador_0.py' '192.168.1.7'");}
if (isset($_POST['button14'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_exterior_1.py' '192.168.1.13'");}
if (isset($_POST['button15'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventana_salon_0.py' '192.168.1.7'");}
if (isset($_POST['button16'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/agua_jardin_0.py' '192.168.1.13'");}
if (isset($_POST['button17'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_hab_ninos_1.py' '192.168.1.7'");}
if (isset($_POST['button18'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventana_cocina_0.py' '192.168.1.7'");}
if (isset($_POST['button19'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_salon_1.py' '192.168.1.7'");}
if (isset($_POST['button20'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/televisor_0.py' '192.168.1.7'");}
if (isset($_POST['button21'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_hab_principal_0.py' '192.168.1.13'");}
if (isset($_POST['button22'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_exterior_0.py' '192.168.1.13'");}
if (isset($_POST['button23'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/alarma.py' '192.168.1.7'");}
if (isset($_POST['button24'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_hab_ninos_0.py' '192.168.1.13'");}
if (isset($_POST['button25'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_salon_0.py' '192.168.1.7'");}
if (isset($_POST['button26'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_entrada_1.py' '192.168.1.13'");}
if (isset($_POST['button27'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_cocina_0.py' '192.168.1.7'");}
if (isset($_POST['button28'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_hab_principal_1.py' '192.168.1.13'");}
if (isset($_POST['button29'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_cocina_0.py' '192.168.1.7'");}
if (isset($_POST['button30'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventana_hab_principal_0.py' '192.168.1.7'");}
if (isset($_POST['button31'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventana_cocina_1.py' '192.168.1.7'");}
if (isset($_POST['button32'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_jardin_0.py' '192.168.1.7'");}
if (isset($_POST['button33'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventana_garaje_1.py' '192.168.1.13'");}
if (isset($_POST['button34'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/temperatura.py' '192.168.1.7'");}
if (isset($_POST['button35'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/musica_salon_0.py' '192.168.1.7'");}
if (isset($_POST['button36'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_garaje_pequena_1.py' '192.168.1.13'");}
if (isset($_POST['button37'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_entrada_1.py' '192.168.1.13'");}
if (isset($_POST['button38'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventana_hab_principal_1.py' '192.168.1.7'");}
if (isset($_POST['button39'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventana_salon_1.py' '192.168.1.7'");}
if (isset($_POST['button40'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_WC_0.py' '192.168.1.13'");}
if (isset($_POST['button41'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/televisor_1.py' '192.168.1.7'");}
if (isset($_POST['button42'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/hola.py' '192.168.1.7'");}
if (isset($_POST['button43'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/musica_1.py' '192.168.1.13'");}
if (isset($_POST['button44'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_WC_1.py' '192.168.1.13'");}
if (isset($_POST['button45'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_garaje_pequena_0.py' '192.168.1.13'");}
if (isset($_POST['button46'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_garaje_grande_0.py' '192.168.1.13'");}
if (isset($_POST['button47'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_garaje_1.py' '192.168.1.13'");}
if (isset($_POST['button48'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_hab_ninos_1.py' '192.168.1.13'");}
if (isset($_POST['button49'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/puerta_cocina_1.py' '192.168.1.7'");}
if (isset($_POST['button50'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_garaje_0.py' '192.168.1.13'");}
if (isset($_POST['button51'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/agua_jardin_1.py' '192.168.1.13'");}
if (isset($_POST['button52'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventana_garaje_0.py' '192.168.1.13'");}
if (isset($_POST['button53'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/musica_salon_1.py' '192.168.1.7'");}
if (isset($_POST['button54'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_jardin_1.py' '192.168.1.13'");}
if (isset($_POST['button55'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/luz_cocina_1.py' '192.168.1.7'");}
if (isset($_POST['button56'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventana_hab_ninos_0.py' '192.168.1.7'");}
if (isset($_POST['button57'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/ventana_hab_ninos_1.py' '192.168.1.7'");}
if (isset($_POST['button58'])){shell_exec("python /home/pi/SCV/WEBPAGE/executaPHP.py 'python /home/pi/SCV/PYTHONSCRIPTS/musica_0.py' '192.168.1.13'");}
?>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button0">CANAL</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button1">APAGAR LUZ ENTRADA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button2">ENCENDER LUZ HABITACION PRINCIPAL</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button3">ENCENDER VENTILADOR</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button4">APAGAR LUZ JARDIN</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button5">CERRAR PUERTA SALON</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button6">ADIOS</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button7">ABRIR PUERTA ENTRADA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button8">APAGAR LUZ HABITACION NINOS</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button9">CERRAR PUERTA GARAJE GRANDE</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button10">CERRAR PUERTA JARDIN</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button11">APAGAR LUZ SALON</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button12">APAGAR LUZ HABITACION PRINCIPAL</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button13">APAGAR VENTILADOR</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button14">CERRAR PUERTA EXTERIOR</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button15">ABRIR VENTANA SALON</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button16">APAGAR ASPERSORES</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button17">ENCENDER LUZ HABITACION NINOS</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button18">ABRIR VENTANA COCINA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button19">ENCENDER LUZ SALON</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button20">APAGAR TELEVISOR</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button21">ABRIR PUERTA HABITACION PRINCIPAL</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button22">ABRIR PUERTA EXTERIOR</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button23">ALARMA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button24">ABRIR PUERTA HABITACION NINOS</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button25">ABRIR PUERTA SALON</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button26">CERRAR PUERTA ENTRADA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button27">ABRIR PUERTA COCINA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button28">CERRAR PUERTA HABITACION PRINCIPAL</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button29">APAGAR LUZ COCINA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button30">ABRIR VENTANA HABITACION PRINCIPAL</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button31">CERRAR VENTANA COCINA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button32">ABRIR PUERTA JARDIN</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button33">CERRAR VENTANA GARAJE</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button34">TEMPERATURA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button35">APAGAR MUSICA SALON</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button36">CERRAR PUERTA GARAJE PEQUENA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button37">ENCENDER LUZ ENTRADA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button38">CERRAR VENTANA HABITACION PRINCIPAL</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button39">CERRAR VENTANA SALON</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button40">ABRIR PUERTA BANO</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button41">ENCENDER TELEVISOR</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button42">HOLA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button43">PONER MUSICA ENTRADA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button44">CERRAR PUERTA BANO</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button45">ABRIR PUERTA GARAJE PEQUENA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button46">ABRIR PUERTA GARAJE GRANDE</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button47">ENCENDER LUZ GARAJE</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button48">CERRAR PUERTA HABITACION NINOS</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button49">CERRAR PUERTA COCINA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button50">APAGAR LUZ GARAJE</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button51">ENCENDER ASPERSORES</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button52">ABRIR VENTANA GARAJE</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button53">PONER MUSICA SALON</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button54">ENCENDER LUZ JARDIN</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button55">ENCENDER LUZ COCINA</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button56">ABRIR VENTANA HABITACION NINOS</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button57">CERRAR VENTANA HABITACION NINOS</button>';
		?>
	</p>
<FORM NAME="blink" Method='POST'>
	<p>
		<?php
		echo '<button name="button58">CERRAR MUSICA ENTRADA</button>';
		?>
	</p>
</FORM>
