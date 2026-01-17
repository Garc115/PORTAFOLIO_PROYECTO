
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Acta de Audiencia</title>
        <style>
           /*  table, th, td {
                border: 1px solid black;
            } */
            .page_break {
                page-break-before: always;

            }
            p{
                font-size:1rem;
            }
        </style>
    </head>
    <body>
        
        <table WIDTH="100%" style="font-size:0.8rem;">
            <tr>
                <td width="50%" style="vertical-align: top;"></td> <!-- Celda vacía para centrado -->
                <td width="34%" style="vertical-align: top; text-align: center;">
                    <img src="{{ public_path('/images/logo_sspc.png') }}" alt="logo_sspc" style="height:8em; display: inline-block;" class="header_logo">
                </td>
                <th style="font-size:0.8rem;border:solid black 1px; width:13%; vertical-align: top;">
                    <table WIDTH="100%" style="">
                        <tr>
                            <th style="font-size:0.8rem;border-bottom:solid black 1px; padding:5px;">NO.FOLIO</th>
                        </tr>
                        <tr>
                                <td style="font-size:0.8rem; text-align:center;padding:5px;">{{ $arrested_log_sheet_id }}</td> <!-- Aquí se imprime el valor de log_sheet_id -->                       
                        </tr>

                        <tr>
                            <th style="font-size:0.8rem;border-bottom:solid black 1px; padding:5px;"></th>
                        </tr>
                        <tr>
                            <td style="font-size:0.8rem; text-align:center;padding:5px;">{{ $num_part }}</td> <!-- Aquí se imprime el valor de log_sheet_id -->                       
                        </tr>

                        
                    </table>
                </th>
                <td width="3%" style="vertical-align: top;"></td> <!-- Celda vacía -->
                <td width="33%" style="vertical-align: top; text-align: right;">
                    <img src="{{ public_path('/images/pair_arrows2.png') }}" alt="flechas_spc" style="height:8em; width:70%;" class="header_logo">
                </td>
            </tr>
        </table>
        <p style="text-align: center; font-size: 0.8rem;"> <!-- Estilos para el texto -->
            <b>
                SECRETARÍA DE SEGURIDAD Y PROTECCIÓN CIUDADANA <br>
                DIRECCIÓN DE JUSTICIA CÍVICA<br>
                ACTA DE AUDIENCIA DE INFRACTOR<br>
            </b>
        </p>
        
        
        <p style="text-align:justify;margin-left:10px;">
            En la Ciudad de San Luis potosí, capital del estado del mismo nombre siendo las<u><b><span>&nbsp;</span> {{$actual_hour}} <span>&nbsp;</span></b></u>del día<u><b><span>&nbsp;</span> {{$actual_day}}<span>&nbsp;</span></b></u>de<u><b> <span>&nbsp;</span> {{$actual_month}} <span>&nbsp;</span></b></u>
            del <u><b><span>&nbsp;</span> {{$actual_year}}<span>&nbsp;</span></b></u> ante  el C. Juez Calificador Licenciado.<u>{{$user_name}}<span>&nbsp;</span>{{$user_first_lastname}}<span>&nbsp;</span>{{$user_second_lastname}}</u>,en turno adscrito a la
            Secretaria de Seguridad y Proteccion Ciudadana se hizo presente a quien dijo llamarse <u>{{$arrested_name}}<span>&nbsp;</span>{{$arrested_first_lastname}}<span>&nbsp;</span>{{$arrested_second_lastname}}</u> de <u>{{$age}}</u> años de edad, de estado civil <u>{{$estado_civil}}</u>
            de ocupación <u>{{$ocupation}}</u>, con un ingreso $<u>{{$income}}</u> semanales, originario de <u>{{$origin}}</u>
            con domicilio en calle <u>{{$street_address}}</u> número <u>{{$interior_number_address}}</u> de la colonia <u>{{$colony_address}}</u>,
            teléfono <u>{{$phone}}</u>, que <u>{{$read}}</u> sabe leer y escribir, con el objeto de desahogar la audiencia prevista en
            el numeral 72 del Bando de Policía y buen Gobierno  del Municipio de San Luis Potosí constando su desahogo
            en la presente actuación a efecto de dejar constancia de garantías de audiencia y de seguridad jurídica prevista
            por la Constitución Política de los Estados Unidos Mexicanos.
            
            --------------------------------------------------------------------------------------------------------------------------------------
        </p>
        <p style="text-align:justify;margin-left:10px; padding:0; margin-top:-10px;">
            -------------------------------------------------------------<strong>DERECHOS</strong>--------------------------------------------------------
        </p>

        <p style="text-align:justify;margin-left:10px;">
            El suscrito Juez Calificador procede a hacer del pleno conocimiento del probable infractor los derechos que en su favor consagra el artículo 48 del Bando de Policía y Gobierno del Municipio de San Luis Potosí, siendo los siguientes:<u>{{ $rights}}</u>___________________________________________________________<br><br>
            <strong>I.-</strong> Gozar del respeto y protección de los derechos humanos reconocidos por la Constitución Política de los
            Estados Unidos Mexicanos y los tratados y convenciones internacionales aplicables ;<br>
            <strong>II.-</strong> Ser informada sobre los hechos que se le atribuyen y los derechos que le asisten ;<br>
            <strong>III.-</strong> A que se reconozca su derecho a la presunción de inocencia y a ser tratada como tal ;<br>
            <strong>IV.-</strong> Recibir un trato digno ;<br>
            <strong>V.-</strong> Recibir alimentación, agua y asistencia médica o psicológica ;<br>
            <strong>VI.-</strong> Ser asistida por persona de su confianza, con quien podré entrevistarse en privado de manera previa a comparecer con la persona juzgadora ;<br>
            <strong>VII.-</strong> Ser oída en audiencia pública por la persona juzgadora ;<br>
            <strong>VIII.-</strong> Presentar los medios de prueba pertinentes si así lo solicita; para tal efecto, la persona juzgadora brindará las facilidades necesarias, tales como la realización de una llamada o el espacio de tiempo razonable y suficiente para que la persona presunta infractora pueda ejercer este derecho ;<br>
            <strong>IX.-</strong> Realizar una llamada telefénica efectiva, mediante los medios que para tal efecto se le proporcionen, con el propósito de hacer del conocimiento de un familiar o persona de su confianza, los motivos de su detención, el lugar en que se encuentra bajo custodia y, en su caso, requerir la asistencia de persona de su confianza a la audiencia ;<br>
            <strong>X.-</strong> Cumplir su arresto en espacios dignos, limpios y con espacios privados para realizar sus necesidades fisiológicas ;<br>
            <strong>XI.-</strong> Recibir asistencia consular cuando la persona detenida por la presunta comisión de una infracción sea de nacionalidad extranjera, para tal efecto se informará a la embajada o consulado que corresponda ;<br>
            <strong>XII.-</strong> Recibir gratuitamente la asistencia de una persona intérprete o traductor cuando la persona presunta infractora pertenezca a un grupo étnico o pueblo indígena o no conozca o no comprenda el idioma español o presente discapacidad auditiva ;<br>
            <strong>XIII.-</strong> No recibir sanciones que excedan lo dispuesto en la Constitución Política de los Estados UnidosMexicanos, y;<br>
            <strong>XIV.-</strong> Recurrir las sanciones impuestas por la persona juzgadora, en los términos que establecen este Bando y las leyes y normas aplicables. ;<br>
            El probable infractor manifiesta que ha quedado enterado de sus derechos y además de querer hacer uso de la voz manifestando lo siguiente:
        </p>

        <p style="text-align:justify;margin-left:10px;margin-top:-15px;">
            <u>{{$stating}}</u>__________________________________________________________________________________________
        </p>


        <div class="page_break">
            <p style="text-align:justify;margin-left:10px;margin-top:-10px;">
                --------------------------------------------------------<strong>ANTECEDENTES</strong>-----------------------------------------------------
            </p>

            <p style="text-align:justify;margin-left:10px;">
                En la presente diligencia se procede a realizar relatoría de constancias existentes así como las pruebas y precisando que mediante informe de policía el cual se anexa a la presente diligencia suscrito por el o los oficiales <u>{{$officers}}</u> agentes de la policía de Seguridad Pública: <u>{{$police_agency}}</u>, fue dejado  a disposición del juez Cívico en Turno al C. <u>{{$arrested_name}}<span>&nbsp;</span>{{$arrested_first_lastname}}<span>&nbsp;</span>{{$arrested_second_lastname}}</u> así como  las constancias  concistentes <u>{{$cons}}</u> a quien se le imputan hechos contrarios al estado de Derecho los que se hacen consistir en: <u>{{$actas}}</u>
                Dando lectura a dicho documento y cuenta de las constancias y/o pruebas existentes: <u>{{$evidence}}</u>
                Conforme al contenido del numeral 72 del Bando de Policía y  Gobierno del Municipio de San Luis Potosí.  Para el caso específico se hace constar que adicionado a las pruebas de cargo consistentes en lo manifestado por los elementos aprehensores, se presentan las siguientes evidencias e información circunstanciada: <u>{{$information}}</u> una vez desahogadas las pruebas ofrecidas por las partes………………………………………………………………………………………... acto seguido se le da el uso de la voz a las partes para que aleguen lo que a su interés convenga, quienes manifiestan:
            </p>

            <p style="text-align:justify;margin-left:10px;margin-top:-15px;">
                <u>{{$manifest}}</u>__________________________________________________________________________________________
            </p>

            <p style="text-align:justify;margin-left:10px;margin-top:-10px;">
                -------------------------------------------------------<strong>DETERMINACIÓN</strong>----------------------------------------------------
            </p>
            <p style="text-align:justify;margin-left:10px;margin-top:-10px;">
                Tomando en consideración, todos y cada uno de los elementos de convicción y probanzas ofrecidas por las partes que obran en el presente sumario, los antecedentes personales del infractor y el riesgo a que los bienes jurídicos tutelados en materia de la preservación de la seguridad pública y el orden públicos <u>{{$antecedents}}</u> fueron expuestos, así como las circunstancias agravantes y atenuantes en la comisión de los derechos en términos del numeral 58, 61 del Bando de Policía y  Gobierno vigente del Municipio de San Luis Potosí y en uso de las atribuciones que me han sido conferidas por los numerales 8 fracción XVI, 14, 72 fraccion X del Bando de Policía y Gobierno del Municipio de San Luis Potosí, se procede a determinar  lo siguiente de acuerdo a los hechos denunciados y probanzas existentes se considera que  la conducta desplegada por el sujeto aquí presente <u>{{$conduct}}</u> se considera infracción al Bando de Policía y Gobierno del Municipio de San Luis Potosí, de
                conformidad en el numeral <u>{{$numeral}}</u> fracción <u>{{$fraction}}</u> de la legislación en comento por lo que conforme a lo expuesto y fundado es procedente decretar en prejuicio del infractor las siguientes sancion <u>{{$santion}}</u> arresto por el término de <u>{{$hours}}</u> horas, el cual considera como cumplido por el infractor a las <u>{{$dateTimeTime}}</u> horas, del día <u>{{$dayNumber}}</u> del mes de <u>{{$monthInLetters}}</u>
                del 2024 mismo <u>{{$commutation}}</u> que podrá ser conmutado  (ser sustituido a petición del infractor) por el importe de una MULTA DE $ <u>{{$fine}}</u> -( <u>{{$amountInWords}} </u>0/100 m.n.).
                TRABAJO A FAVOR DE LA COMUNIDAD por el término de <u>{{$community_service}}</u> horas las cuales serán
                cumplidas por el infractor, en el lugar que se designe en la carta compromiso que firmara. <u>{{$job}}</u> TRABAJO
                A FAVOR DE LA COMUNIDAD CON COMPONENTE TERAPÉUTICO por el término de las horas que
                determine la Institución a donde será canalizado mediante carta compromiso que firma en el entendido que este
                juzgado vigilara su cumplimiento. Notificación que se realiza personalmente en estos momentos de lo antes
                acordado al ciudadano de referencia, así lo acordé y firma el C. Juez Cívico en turno adscrito a la Secretaria de
                Seguridad y Protección Ciudadana del Municipio de San Luis Potosí que resolvió de la presente causa.
            </p>
            
            <p style="text-align:justify;margin-left:10px;">
                _________________________________________conste__________________________________________
            </p>

            <p style="text-align:center;margin-left:10px;">
            <strong>JUEZ CIVICO EN TURNO</strong>
            </p>

            <p style="text-align:center;margin-left:10px;">
            <strong>C. LIC.</strong>_________________________________________
            </p>

            <table WIDTH="100%">
                <tr style="">
                    <td colspan="" rowspan="" style="width:.5%;">
                    </td>
                    <td colspan="" rowspan="" style=" width:33%;text-align:center;">
                        TESTIGO
                    </td>

                    <td colspan="" rowspan="" style=" width:33%;text-align:center;">
                        INFRACTOR
                    </td>

                    <td colspan="" rowspan="" style="width:33%;text-align:center;">
                        TESTIGO
                    </td>
                </tr>
            </table>
            <table WIDTH="100%" style="margin-top:24px">
                <tr style="">
                    <td colspan="" rowspan="" style="width:5%;">
                    </td>
                    <td colspan="" rowspan="" style=" width:33%;text-align:center;border-bottom:1px solid black;">

                    </td>

                    <td colspan="" rowspan="" style="width:5%;">
                    </td>

                    <td colspan="" rowspan="" style="font-size:0.8rem; width:33%;text-align:center;border-bottom:1px solid black;">

                    </td>

                    <td colspan="" rowspan="" style="width:5%;">
                    </td>

                    <td colspan="" rowspan="" style="font-size:0.8rem;width:33%;text-align:center;border-bottom:1px solid black;">

                    </td>
                </tr>
            </table>
            <p style="text-align:center;margin-left:10px;">
                <strong>NOMBRE Y FIRMA DE ENTERADO DE LOS ANTES ACORDADO</strong>
            </p>
        </div>


        <script>
            // Obtener el nombre que ingresó el usuario (puedes obtenerlo de tu formulario)
            var nombreLicenciado = "ocupacion"; // Reemplaza con el nombre real
        
            // Agregar el nombre al documento HTML
            document.getElementById("nombreLicenciado").innerText = nombreLicenciado;
        </script>
        
    </body>
</html>


