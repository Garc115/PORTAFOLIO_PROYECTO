<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formato de pertenencias</title>
        <style>
            /* Estilo global para el texto */
            body, p, td, th {
                font-size: 0.6rem;
            }
    
            /* Eliminar márgenes de las tablas */
            table {
                border-collapse: collapse;
                margin: 0;
                padding: 0;
            }
    
            /* Resto de tus estilos */
            /* table, th, td {
                border: 1px solid black;
            } */
            .page_break {
                page-break-before: always;
            }
        </style>
    </head>
    <body>
        
        <table WIDTH="100%" style="font-size:0.6rem;">
            <tr>
                <td width="50%" style="vertical-align: top;"></td> <!-- Celda vacía para centrado -->
                <td width="34%" style="vertical-align: top; text-align: center;">
                    <img src="{{ public_path('/images/logo_sspc.png') }}" alt="logo_sspc" style="height:6em; display: inline-block;" class="header_logo">
                </td>
                <th style="font-size:0.6rem;border:solid black 0.75px; width:9.75%; vertical-align: top;">
                    <table WIDTH="100%" style="">
                        <tr>
                            <th style="font-size:0.6rem;border-bottom:solid black 0.75px; padding:3.75px;">NO.FOLIO</th>
                        </tr>
                        <tr>
                            <td style="font-size:0.6rem; text-align:center;padding:3.75px;">{{ $log_sheet_id }}</td> <!-- Aquí se imprime el valor de log_sheet_id -->
                        </tr>
                    </table>
                </th>
               

                <td width="3%" style="vertical-align: top;"></td> <!-- Celda vacía -->
                <td width="33%" style="vertical-align: top; text-align: right;">
                    <img src="{{ public_path('/images/pair_arrows2.png') }}" alt="flechas_spc" style="height:6em; width:52.5%;" class="header_logo">
                </td>
            </tr>
        </table>
        
        
        
        <p style="text-align: center; font-size: 0.6rem;"> <!-- Estilos para el texto -->
            <b>
                SECRETARÍA DE SEGURIDAD Y PROTECCIÓN CIUDADANA <br>
                DIRECCIÓN DE JUSTICIA CÍVICA<br>
                FORMATO DE PERTENENCIAS DE INFRACTOR<br>
            </b>
        </p>
        
        <div style="border: solid black 1px; border-radius: 6px; width: 91%; margin: 0 auto; padding: 15px;">
            <table style="width: 100%; table-layout: auto;">
                <tr>
                    <td style="width: 5%; font-size: 0.6rem;">HORA</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$arrest_time}}</td>
                    <td style="width: 5%; font-size: 0.6rem;">FECHA</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$arrest_date}}</td>
                    <td style="width: 10%; font-size: 0.6rem;">FECHA DE NACIMIENTO</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$arrest_birth}}</td>
                    <td style="width: 10%; font-size: 0.6rem;">LUGAR DE DETENCIÓN</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$place_detention}}</td>
                </tr>
            </table>
            <br>
        
            <table style="width: 100%; table-layout: auto;">
                <tr>
                    <td style="width: 21%; font-size: 0.6rem;">NOMBRE COMPLETO</td>
                    <td style="border-bottom: 1px solid black; font-size: 0.6rem; word-break: break-all; word-wrap: break-word;">
                        <div style="display: inline-block; margin-right: 5rem;">{{$arrested_name}}</div>
                        <div style="display: inline-block; margin-right: 10rem;">{{$arrested_first_lastname}}</div>
                        <div style="display: inline-block;">{{$arrested_second_lastname}}</div>
                    </td>
                </tr>
            </table>
        
            <table style="width: 100%; table-layout: auto;">
                <tr>
                    <td style="width: 25%;"></td>
                    <td style="width: 7%; font-size: 0.6rem;">NOMBRE</td>
                    <td style="width: 8%;"></td>
                    <td style="width: 18%; font-size: 0.6rem;">APELLIDO PATERNO</td>
                    <td style="width: 8%;"></td>
                    <td style="width: 18%; font-size: 0.6rem;">APELLIDO MATERNO</td>
                    <td style="width: 5%;"></td>
                </tr>
            </table>
        
            <table style="width: 100%; table-layout: auto;">
                <tr>
                    <td colspan="" rowspan="" style="" height="5"></td>
                </tr>
            </table>
        
            <table style="width: 100%; table-layout: auto;">
                <tr>
                    <td style="width: 5%; font-size: 0.6rem;">EDAD</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$age}}</td>
                    <td style="width: 5%; font-size: 0.6rem;">SEXO</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$arrested_gender}}</td>
                    <td style="width: 10%; font-size: 0.6rem;">OCUPACIÓN</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$ocupation}}</td>
                    <td style="width: 10%; font-size: 0.6rem;">ESTADO CIVIL</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$estado_civil}}</td>
                </tr>
            </table>
            
            <table style="width: 100%; table-layout: auto;">
                <tr>
                    <td colspan="" rowspan="" style="" height="5"></td>
                </tr>
            </table>
        
            <table style="width: 100%; table-layout: auto;">
                <tr>
                    <td style="width: 2%; font-size: 0.7rem;">DOMICILIO</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$address}}</td>
                    <td style="width: 5%; font-size: 0.7rem;">FALTA COMETIDA</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$fault}}</td>
                    <td style="width: 5%; font-size: 0.6rem;">INGRESÓ POR</td>
                    <td style="border-bottom: 1px solid black; text-align: center; word-break: break-all; word-wrap: break-word;">{{$arrest_type}}</td>
                </tr>
            </table>
        </div>
        
    <table WIDTH="100%">
            <tr>
                <td colspan="" rowspan="" style="" height="10">
                </td>
            </tr>
    </table>

    <div style="border:solid black 1px; border-radius:6px; width:91%;margin:0 auto;padding: 5px 15px;">

        <p style="text-align:justify; font-size:0.8rem; margin: 2px;">
            Se procede a levantar una Acta de Pertenencias de valor de esta persona según se detallan a continuación:
        </p>

        <table style="border:solid black 1px; border-collapse: collapse;" WIDTH="100%">
            <tr>
                <th style="border: 1px solid black;border-collapse: collapse; text-align:center; width:38%; font-size:0.7rem;" height="30">IMPORTE</th>
                <th style="border: 1px solid black;border-collapse: collapse; text-align:center;font-size:0.7rem;" colspan="2">OBJETOS</th>
            </tr>
            <tr>
                <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:0.7rem;" height="30">BILLETE (S)</th>
                <td style="border: 1px solid black;border-collapse: collapse; text-align:center;">{{$amount_bills}}</td>
                <td style="border: 1px solid black;border-collapse: collapse; text-align:center;">{{$description_bills}}</td>
            </tr>
            <tr>
                <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:0.7rem;" height="30">MONEDA (S)</th>
                <td style="border: 1px solid black;border-collapse: collapse; text-align:center;">{{$amount_coins}}</td>
                <td style="border: 1px solid black;border-collapse: collapse; text-align:center;">{{$description_coins}}</td>
            </tr>
            <tr>
                <th style="border:1px solid black;border-collapse: collapse;text-align:center;font-size:0.7rem;" height="30">OTRO (S)</th>
                <td style="border:1px solid black;border-collapse: collapse; text-align:center;">{{$amount_others}}</td>
                <td style="border:1px solid black;border-collapse: collapse; text-align:center;">{{$description_others}}</td>
            </tr>
            <tr>
                <th style="border:1px solid black;border-collapse: collapse;text-align:center;font-size:0.7rem;" height="30">TOTAL:</th>
                <td style="border:1px solid black;border-collapse: collapse; text-align:center;">{{$total_objs}}</td>
                <td style="border:1px solid black;border-collapse: collapse; text-align:center;"></td>
            </tr>
        </table>
    </div>

    <table WIDTH="100%">
        <tr>
            <td colspan="" rowspan="" style="" height="10">
            </td>
        </tr>
    </table>

    <div style="border:solid black 1px; border-radius:6px; width:92%;margin:0 auto;padding: 2px 15px;">
        <p style="text-align:justify; font-size:0.8rem; margin: 1px;">
            Estos objetos quedan a disposición del infractor y bajo la responsabilidad del Responsable de alcaides de este Centro de Internamiento:
        </p>
        <table WIDTH="100%" style="margin-top:24px">
            <tr style="">
                <td colspan="" rowspan="" style="width:32.33%;" height="5">
                </td>

                </td>
                <th colspan="" rowspan="" style="font-size:0.8rem; width:35.33%;">

                </th>
                <td colspan="" rowspan="" style="width:32.33%;">
                </td>
            </tr>
        </table>
        <table WIDTH="100%" style="margin-top:7px">
            <tr style="">
                <td colspan="" rowspan="" style="width:32.33%;">
                </td>
                </td>
                <th colspan="" rowspan="" style="font-size:0.6rem; width:35.33%;text-align:center;border-top:1px solid black;">
                    FIRMA O HUELLA DEL INFRACTOR
                </th>
                <td colspan="" rowspan="" style="width:32.33%;">
                </td>
            </tr>
        </table>

        <table WIDTH="100%" style="margin-top:15px">
            <tr style="">
                <th colspan="" rowspan="" style="width:32.33%;font-size:0.6rem;border-top:1px solid black;text-align:center;">
                    RESPONSABLE DE TURNO DE ALCAIDES DEL CENTRO DE INTERNAMIENTO
                </th>
                </td>
                <th colspan="" rowspan="" style="font-size:0.8rem; width:35.33%;">
                </th>
                <th colspan="" rowspan="" style="width:32.33%;font-size:0.6rem;border-top:1px solid black;text-align:center;">
                    ALCAIDE DE GUARDIA DEL CENTRO DE INTENAMIENTO
                </th>
            </tr>
        </table>

        <table WIDTH="100%" style="">
            <tr style="">
                <td colspan="" rowspan="" style="width:32.33%;" height="10">
                </td>

                </td>
                <th colspan="" rowspan="" style="font-size:0.8rem; width:35.33%;">

                </th>
                <td colspan="" rowspan="" style="width:32.33%;">
                </td>
            </tr>
        </table>

        <table WIDTH="100%" style="margin-top:15px">
            <tr style="">
                <th colspan="" rowspan="" style="width:32.33%;font-size:0.6rem;border-top:1px solid black;text-align:center;">
                    PATRULLERO QUE REMITE
                    <br>
                   <label colspan="" rowspan="" style="width:32.33%;font-size:0.6rem; black;text-align:center;">{{$corporation}}</label> 
                </th>
               

                </td>
                <th colspan="" rowspan="" style="font-size:0.8rem; width:35.33%;">
                </th>
                <th colspan="" rowspan="" style="width:32.33%;font-size:0.6rem;border-top:1px solid black;text-align:center;">
                    AYUDANTE DE PATRULLERO
                </th>
            </tr>
        </table>

        <table WIDTH="100%" style="margin-top:15px">
            <tr style="">
                <td colspan="" rowspan="" style="width:32.33%;">
                </td>

                </td>
                <th colspan="" rowspan="" style="font-size:0.6rem; width:35.33%;text-align:center;border-top:1px solid black;">
                    C.R.P
                </th>
                <td colspan="" rowspan="" style="width:32.33%;">
                </td>
            </tr>
        </table>
    </div>
    <div class="page_break" style="margin-top:50px;">

    <table WIDTH="100%">
        <tr>
            <td colspan="" rowspan="" style="" height="10">
            </td>
        </tr>
    </table>

    <div style="border:solid black 1px; border-radius:8px; width:92%;margin:0 auto;padding: 5px 15px;">
        <p style="text-align:justify; font-size:0.8rem; margin: 1px;">
            Recibe a entera satisfacción los valores u objetos descritos en el acta anterior, eximiendo de toda responsabilidad Civil, Penal,
            Administrativa y o de cualquier índole, a este Centro de Internamiento de la Secretaria de Seguridad y Protección Ciudadana.          
        </p>
   
          <p style="font-size:0.8rem;">
                San Luis Potosí, S.L.P., siendo las <span><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></span>,horas del día; <span><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></span> del mes

                de <span><u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</u></span> , del año <span><u>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;</u></span>.

          </p>

            <table WIDTH="100%">
                <tr>
                    <td colspan="" rowspan="" style="" height="5">
                    </td>
                </tr>
            </table>
            <p style="font-size:0.6rem;">
                <b> ENTREGADO POR:</b>
            </p>

            <table WIDTH="100%">
                <tr>
                    <td colspan="" rowspan="" style="" height="5">
                    </td>
                </tr>
            </table>
            <table WIDTH="100%" style="margin-top:24px">
                <tr style="">
                    <th colspan="" rowspan="" style="width:35.33%;font-size:0.6rem;border-top:1px solid black;text-align:center;">
                        RESPONSABLE DE TURNO DE LA GUARDIA DEL CENTRO DE INTERNAMIENTO
                    </th>
                    </td>
                    <th colspan="" rowspan="" style="font-size:0.8rem; width:20%;">
                    </th>
                    <th colspan="" rowspan="" style="width:65.33%;font-size:0.6rem;border-top:1px solid black;text-align:center;">
                        NOMBRE, FIRMA Y/O HUELLA DEL INFRACTOR
                    </th>
                </tr>
             </table>

             <div style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 100%;">
                <img src="{{ public_path('/images/footer.png') }}" alt="GOBIERNO DE LA CAPITAL" style="width: 100%; height: auto; margin: 0; padding: 0;">
            </div>
                               
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
        <div>
    <p style="text-align:center;margin-left:10px;margin-top:-10px; font-size: 17px;" >
        <strong>AVISO DE PRIVACIDAD</strong>
    </p>
    <p style="text-align:justify;margin-left:10px;margin-top:-10px; font-size: 15px;"> <!-- Aumenta el tamaño de la letra -->
        Esta Secretaria de Seguridad y Protección Ciudadana del Municipio de San Luis Potosí, S.L.P., hace de su
        conocimiento que los datos personales recopilados con motivo de los diversos trámites presentados ante
        cualquier Dirección, Área y/o Unidad dependiente de esta Secretaria, no serán transmitidos, difundidos ni
        distribuidos a cualquier otra dependencia ajena a la misma, salvo las excepciones contempladas en los artículos
        22, 66 y 70 de la Ley General de Protección de Datos Personales en Posesión de los Sujetos Obligados, y
        artículos 19 y 98 de la Ley de Protección de Datos Personales del Estado de San Luis Potosí. Usted tiene en
        todo momento el derecho a conocer que datos personales tenemos de usted, para que los utilizamos y las
        condiciones del uso que damos (Acceso). Así mismo, es su derecho solicitar la corrección de información
        personal en caso de que este desactualizada, sea inexacta o incompleta (Rectificación); de igual manera, tiene
        derecho a que su Información se elimine de nuestros registros o base de datos cuando considere que la misma
        no está siendo utilizada adecuadamente (Cancelación), así como también a oponerse al uso de sus datos
        personales para fines específicos (Oposición). Estos derechos se conocen como ARCO. Para el ejercicio del
        derecho ARCO, deberá presentar su solicitud vía correo electrónico a la Plataforma de Transparencia con el
        siguiente link: www.transparenciamunicipalslp.gob.mx o podrá acudir de manera personal o por conducto de
        su representante Legal en días y horas hábiles en el horario de 08.00 a 15:00 horas, en la oficina de la Unidad
        de Transparencia ubicada en Boulevard Salvador Nava Martínez No. 1580/ Col Santuario, CP 78380/ San Luis
        Potosí, S.L.P., México, Tel. (444) 834 5400.<br><br>
        Enterado del contenido del aviso de privacidad simplificado,
    </p>

    <table WIDTH="100%" style="margin-top: 60px; text-align: center;"> <!-- Centra horizontalmente -->
        <tr style="vertical-align: middle;"> <!-- Centra verticalmente -->
            <td colspan="2" style="width: 32.33%;"></td>
            <th colspan="1" style="font-size:17px; width: 35.33%; border-top: 1px solid black; padding-top: 15px; margin-top: 1px;"> <!-- Aumenta el tamaño de la letra -->
                nombre y firma del titular de los datos personales
            </th>
            <td colspan="2" style="width: 32.33%;"></td>
        </tr>
    </table>                             
    
</div>


        <div style="position: absolute; bottom: 0; left: 50%; transform: translateX(-50%); width: 100%;">
            <img src="{{ public_path('/images/footer.png') }}" alt="GOBIERNO DE LA CAPITAL" style="width: 100%; height: auto; margin: 0; padding: 0;">
        </div>
                       
        </div>

    </div>
         <script>
    // Obtener el nombre que ingresó el usuario (puedes obtenerlo de tu formulario)
    var nombreLicenciado = "ocupacion"; // Reemplaza con el nombre real

    // Agregar el nombre al documento HTML
    document.getElementById("nombreLicenciado").innerText = nombreLicenciado;
         </script>

     </body>
</html>