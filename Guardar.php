<?php 

require("classConnectionMySQL.php");

// Creamos una nueva instancia
$NewConn = new ConnectionMySQL();

// Creamos una nueva conexion
$NewConn->CreateConnection();

session_start();

					$fechaSoli = $_POST['Fsolicitud'];
					$pustD = $_POST['PuestoDeseado'];
					$sueldoD = $_POST['SueldoDeseado'];
					$sueldoA = $_POST['SueldoAprobado'];
					$fechaContra = $_POST['Fcontrata'];
					$nombre = $_POST['nombre'];
					$edad = $_POST['edad'];
					$sexo = $_POST['sexo'];
					$direccion = $_POST['direc'];
					$colonia = $_POST['colo'];
					$codigoP = $_POST['codPos'];
					$Estado = $_POST['Estado'];
					$municipio = $_POST['muni'];
					$lugarNac = $_POST['lugarN'];
					$nacionalidad = $_POST['nacional'];
					$FechaNac = $_POST['fechaNac'];
					$telefono = $_POST['telef'];
					$celular = $_POST['tCel'];
					$correoE = $_POST['correoE'];
					$peso = $_POST['peso'];
					$estatura = $_POST['estatura'];
					$viveCon = $_POST['viveC'];
					$estadoCivil = $_POST['EsCivil'];
					$Dependientes = $_POST['PersDep'];
					$curp = $_POST['curp'];
					$afore = $_POST['afore'];
					$rfc = $_POST['RFC'];
					$imss = $_POST['IMSS'];
					$cartilla = $_POST['cartilla'];
					$pasaporte = $_POST['pasaporte'];
					$licencia = $_POST['Man'];
					$noLicencia = $_POST['licn'];
					$docExtra = $_POST['docuExtra'];
					$estadoSalud = $_POST['estaSalud'];
					$enfermedadPade = $_POST['enferPad'];
					$deporte = $_POST['depor'];
					$club = $_POST['club'];
					$pasatiempo = $_POST['pasa'];
					$metaVida = $_POST['meta'];
					$nombreP = $_POST['padreN'];
					$viveP = $_POST['pv'];
					$domiP = $_POST['domiP'];
					$ocupP = $_POST['ocup'];
					$nombreM = $_POST['nomM'];
					$viveM = $_POST['mv'];
					$domM = $_POST['domM'];
					$ocupM = $_POST['ocupM'];
					$nombreEs = $_POST['nomEs'];
					$viveE = $_POST['ev'];
					$domE = $_POST['domE'];
					$ocupE = $_POST['ocupE'];
					$hijos = $_POST['hijos'];
					$primaria = $_POST['prim'];
					$dirP = $_POST['dirP'];
					$deP = $_POST['dp'];
					$aP = $_POST['ap'];
					$aniosP = $_POST['anioP'];
					$tituloP = $_POST['titP'];
					$secundaria = $_POST['secu'];
					$dirS = $_POST['dirS'];
					$deS = $_POST['ds'];
					$aS = $_POST['as'];
					$aniosS = $_POST['anioS'];
					$tituloS = $_POST['titS'];
					$prepa = $_POST['prep'];
					$dirPr = $_POST['dirPr'];
					$dePr = $_POST['dPr'];
					$aPr = $_POST['aPr'];
					$aniosPr = $_POST['anioPr'];
					$tituloPr = $_POST['titPr'];
					$comercial = $_POST['comer'];
					$dirO = $_POST['dirO'];
					$deO = $_POST['dO'];
					$aO = $_POST['aO'];
					$aniosO = $_POST['anioO'];
					$titO = $_POST['titO'];
					$escuelaActual = $_POST['escA'];
					$horaI = $_POST['hor'];
					$horaF = $_POST['horS'];
					$carrera = $_POST['carr'];
					$grado = $_POST['gra'];
					$profecional = $_POST['profe'];
					$dirPo = $_POST['dirPo'];
					$dePo = $_POST['dPo'];
					$aPo = $_POST['aPo'];
					$aniosPo = $_POST['anioPo'];
					$titPo = $_POST['titPo'];
					echo "<h1>Datos de solicitud</h1>" ;
					echo "Fecha de solicitud: ".$fechaSoli."<br>";
					echo "Puesto deseado: ".$pustD."<br>";
					echo "Sueldo deseado es : ".$sueldoD."<br>";
					echo "Sueldo Aprobado: ".$sueldoA."<br>";
					echo "Fecha de contratación: ".$fechaContra."<br>";
					echo "<h2>Datos personales</h2>" ;
					echo "Nombre Completo: ".$nombre."<br>";
					echo "Edad: ".$edad."<br>";
					echo "Sexo: ".$sexo."<br>";
					echo "Dirección: ".$direccion."<br>";
					echo "Colonia: ".$colonia."<br>";
					echo "Codigo Postal: ".$codigoP."<br>";
					echo "Estado: ".$Estado."<br>";
					echo "Municipio: ".$municipio."<br>";
					echo "Lugar de nacimiento: ".$lugarNac."<br>";
					echo "Nacionalidad: ".$nacionalidad."<br>";
					echo "Fecha de nacimiento: ".$FechaNac."<br>";
					echo "Telefono: ".$telefono."<br>";
					echo "Telefono Celular: ".$celular."<br>";
					echo "Correo: ".$correoE."<br>";
					echo "Peso: ".$peso."<br>";
					echo "Estatura: ".$estatura."<br>";
					echo "Vive Con: ".$viveCon."<br>";
					echo "Personas dependientes: ".$Dependientes."<br>";
					echo "<h2>Documentación</h2>" ;
					echo "Curp: ".$curp."<br>";
					echo "Afore: ".$afore."<br>";
					echo "RFC: ".$rfc."<br>";
					echo "Imss: ".$imss."<br>";
					echo "Cartilla: ".$cartilla."<br>";
					echo "No. pasaporte: ".$pasaporte."<br>";
					echo "Licencia de Manejo: ".$licencia."<br>";
					echo " No. y clase de Licencia: ".$noLicencia."<br>";
					echo "Documento que permite trabajar en el pais: ".$docExtra."<br>";
					echo "<h2>Estado de salud</h2>" ;
					echo "Estado de salud: ".$estadoSalud."<br>";
					echo "Enfermedades Cronicas: ".$enfermedadPade."<br>";
					echo "Deporte: ".$deporte."<br>";
					echo "Club Social: ".$club."<br>";
					echo "Pasatiempo: ".$pasatiempo."<br>";
					echo " Meta a la vida: ".$metaVida."<br>";
					echo "<h2>Datos familiares</h2>";
					echo "<h3>Datos Padre</h3>";
					echo "Nombre: ".$nombreP."<br>";
					echo "Vive: ".$viveP."<br>";
					echo "Dirección: ".$domiP."<br>";
					echo "Ocupación: ".$ocupP."<br>";
					echo "<h3>Datos Madre</h3>";
					echo "Madre: ".$nombreM."<br>";
					echo "vive: ".$viveM."<br>";
					echo " Dirección: ".$domM."<br>";
					echo "Ocupación: ".$ocupM."<br>";
					echo "<h3>Datos Esposo(a)</h3>";
					echo "Nombre: ".$nombreEs."<br>";
					echo "vive: ".$viveE."<br>";
					echo "Dirección: ".$domE."<br>";
					echo "Ocupación: ".$ocupE."<br>";
					echo "Hijos: ".$hijos."<br>";
					echo "<h2>Escolaridad</h2>";
					echo "<h3>Datos Primaria</h3>";
					echo "Nombre: ".$primaria."<br>";
					echo "Domicilio: ".$dirP."<br>";
					echo "Año de: ".$deP." a: ".$aP."<br>";
					echo "Años cursados: ".$aniosP."<br>";
					echo "Titulo Otorgado: ".$tituloP."<br>";
					echo "<h3>Datos Secundaria</h3>";
					echo "Nombre: ".$secundaria."<br>";
					echo "Domicilio: ".$dirS."<br>";
					echo "Año de: ".$deS." a: ".$aS."<br>";
					echo "Años cursados: ".$aniosS."<br>";
					echo "Titulo Otorgado: ".$tituloS."<br>";
					echo "<h3>Datos Preparatoria</h3>";
					echo "Nombre: ".$prepa."<br>";
					echo "Domicilio: ".$dirPr."<br>";
					echo "Año de: ".$dePr." a: ".$aPr."<br>";
					echo "Años cursados: ".$aniosPr."<br>";
					echo "Titulo Otorgado: ".$tituloPr."<br>";
					echo "<h3>Datos Profecional</h3>";
					echo "Nombre: ".$profecional."<br>";
					echo "Domicilio: ".$dirPo."<br>";
					echo "Año de: ".$dePo." a: ".$aPo."<br>";
					echo "Años cursados: ".$aniosPo."<br>";
					echo "Titulo Otorgado: ".$titPo."<br>";
					echo "<h3>Datos Comerciales</h3>";
					echo "Nombre: ".$comercial."<br>";
					echo "Domicilio: ".$dirO."<br>";
					echo "Año de: ".$deO." a: ".$aO."<br>";
					echo "Años cursados: ".$aniosO."<br>";
					echo "Titulo Otorgado: ".$titO."<br>";
					echo "<h3>Estudios que efectua en la actualidad</h3>";
					echo "Escuela Actual: ".$escuelaActual."<br>";
					echo "Horario: ".$horaI." a: ".$horaF."<br>";
					echo "Curso o Carrera: ".$carrera."<br>";
					echo "Grado: ".$grado."<br>";

					$query="INSERT INTO  personas_solicitantes VALUES (NULL,'$nombre','$sexo','$edad','$FechaNac','$celular')";
					$result=$NewConn->ExecuteQuery($query);
						if($result){
							$RowCount =  $NewConn->GetCountAffectedRows();
							if($RowCount > 0){
								echo "Query ejecutado exitosamente<BR>";
							}
						}else{
							echo "<h3>Error ejecutando la consulta</h3>";
						}


?>
