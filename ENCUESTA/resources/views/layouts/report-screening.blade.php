<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('tittle')
    </title>
    <style>
        html {
            margin: 20px;
            font: Arial, sans-serif;
        }

        th {
            background-color: #222222;
            font-weight: bold;
            font-size: 0.8rem;
            color: white;
        }

        .page_break {
            page-break-before: always;
        }

        .underline {
            text-align: center;
            border-bottom: 1px solid black;
        }

        .surroundingline {
            text-align: center;
            border: 1px solid black;
        }

        .footer {
            position: absolute;
            bottom: 0;
            font-size: 0.8rem;
            text-align: center;
            opacity: 0.5;
        }

        .footer__signature {
            text-decoration: underline;
        }


        .footer__privacy-notice-tittle {
            font-size: 0.4rem;
        }

        .footer__privacy-notice-content {
            font-size: 0.4rem;
            text-align: justify;
        }

        .image {
            text-align: center;
        }
    </style>
    @yield('style')
</head>

<body>
    <header>
        @yield('header')
        <table style="width: 100%;font-size:0.8em;">
            <tr>
                <th colspan="2">Datos del entrevistado:
                    {{ trim($arrestedFault->full_name) !== '' ? $arrestedFault->full_name : 'Sin nombre registrado' }}
                </th>
                <td style="text-align:right;">
                    San Luis Potosí S. L. P. a
                    {{ $day }}
                    de
                    {{ $monthName }}
                    del
                    {{ $year }}
                </td>
            </tr>
            <tr>
                <td WIDTH="17%">Folio</td>
                <td>{{ $folio }}
                </td>
                <td rowspan="6">
                    <table WIDTH="100%" style="font-size:0.8rem;">
                        <tr>
                            <td width="33%">
                            </td>
                            <td rowspan="1" align="center" style="font-size:0.8rem;" width="33%">
                                <img src="{{ public_path('/images/logo_sspc.png') }}" alt="Logosspc"
                                    style="height:7em; opacity:1;">
                            </td>
                            <td rowspan="1" style="font-size:0.8rem;text-align:right;" width="33%">
                                <img src="{{ public_path('/images/pair_arrows2.png') }}" alt="Flechasspc"
                                    style="height:4em; opacity:1">
                            </td>
                        </tr>
                    </table>
                    <p style="font-size:0.8em;text-align:center;">
                        <b>
                            SECRETARÍA DE SEGURIDAD Y PROTECCIÓN CIUDADANA <br>
                            DEL MUNICIPIO DE SAN LUIS POTOSÍ.<br>
                            SÍNTESIS DE RESULTADOS (TAMIZAJE)
                        </b>
                    </p>
                </td>
            </tr>
            <tr>
                <td>Fecha de detención</td>
                <td>{{ isset($arrestedFault->detention_date) ? $arrestedFault->carbon_detention_date->format('d/m/Y') : 'S/D' }}
                </td>
            </tr>
            <tr>
                <td>Edad</td>
                <td>{{ isset($arrestedFault->age) ? $arrestedFault->age : 'S/D' }}</td>
            </tr>
            <tr>
                <td>Género</td>
                <td>{{ isset($arrestedFault->arrested_gender) ? $arrestedFault->arrested_gender : 'S/D' }}
                </td>
            </tr>
            <tr>
                <td>Municipio</td>
                <td>{{ isset($arrestedFault->township_address) ? $arrestedFault->township_address : 'S/D' }}
                </td>
            </tr>
            <tr>
                <td>Colonia</td>
                <td>{{ isset($arrestedFault->colony_address) ? $arrestedFault->colony_address : 'S/D' }}
                </td>
            </tr>
        </table>
    </header>
    <footer class="footer">
        @yield('footer')
            <b> Aplicó: </b>
            <br>
            <br>
            <span class="footer__signature">
                {{ $psychosocialFullName }}
            </span>
            <br>
        <b class="footer__privacy-notice-tittle">AVISO DE PRIVACIDAD</b>
        <p class="footer__privacy-notice-content">
            Esta Secretaria de Seguridad y Protección Ciudadana del Municipio de San Luis Potosí, S.L.P., hace de su
            conocimiento que los datos personales recopilados con motivo de los diversos trámites presentados ante
            cualquier
            Dirección, Área y/o Unidad dependiente de esta Secretaría, no serán transmitidos, difundidos ni distribuidos
            a
            cualquier otra dependencia ajena a la misma, salvo las excepciones contempladas en los artículos 22, 66 y 70
            de
            la Ley General de Protección de Datos Personales en Posesión de los Sujetos Obligados, y artículos 19 y 98
            de la
            Ley de Protección de Datos Personales del Estado de San Luis Potosí.
            <br>
            Usted tiene en todo momento el derecho a conocer que datos personales tenemos de usted, para que los
            utilizamos
            y las condiciones del uso que damos (Acceso). Así mismo, es su derecho solicitar la corrección de
            información
            personal en caso de que este desactualizada, sea inexacta o incompleta (Rectificación); de igual manera,
            tiene
            derecho a que su Información se elimine de nuestros registros o base de datos cuando considere que la misma
            no
            está sien do utilizada adecuadamente (Cancelación), así como también a oponerse al uso de sus datos
            personales
            para fines específicos (Oposición). Estos derechos se conocen como ARCO.
            <br>
            Para el ejercicio del derecho ARCO, deberá presentar su solicitud vía correo electrónico a la Plataforma de
            Trasparencia con el siguiente link:
            <a href="https://www.transparenciamunicipalslp.gob.mx">www.transparenciamunicipalslp.gob.mx</a> o podrá
            acudir
            de manera personal o por conducto de su representante Legal en días y horas hábiles en el horario de 08.00 a
            15:00 horas, en la oficina de la Unidad de Transparencia ubicada en Boulevard Salvador Nava Martínez No.
            1580/
            Col Santuario, CP 78380/ San Luis Potosí, S.L.P., México, Tel. (444) 834 5400.
            <br>
            <br>
            Enterado del contenido del aviso de privacidad simplificado,
            ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
            (nombre y firma
            del titular de los datos personales)
        </p>
        @switch($year)
            @case(2022)
                “2022, AÑO DE LAS Y LOS MIGRANTES DE SAN LUIS POTOSÍ”
            @break

            @case(2023)
                “2023, Año del Centenario del Voto de las Mujeres en San Luis Potosí, Precursor Nacional”
            @break

            @default
        @endswitch
        <img src="{{ public_path('/images/footer.png') }}" alt="GOBIERNO DE LA CAPITAL" style="width:100%">
    </footer>
    <main>
        @yield('content')
        <table style="width: 100%;font-size:0.8em;border: 1px solid black" rules="rows">
            <thead>
                <tr>
                    <th style="border: 1px solid black">Sección</th>
                    <th style="border: 1px solid black">Puntaje</th>
                    <th style="border: 1px solid black">Porcentaje</th>
                    <th style="border: 1px solid black">Nivel de riesgo</th>
                </tr>
            </thead>
            <tbody align="center">
                @foreach ($results as $key => $result)
                    <tr>
                        @if ($key !== 'total')
                            <td style="border: 1px solid black">{{ $result['name'] }}</td>
                            <td style="border: 1px solid black">{{ $result['points'] }}</td>
                            <td style="border: 1px solid black">{{ bcdiv($result['percentage'] * 100, '1', 2) }}%</td>
                            <td>{{ $result['riskLevel'] }}</td>
                        @else
                            <th style="border: 1px solid black"><strong>{{ $result['name'] }}</strong></th>
                            <th style="border: 1px solid black"><strong>{{ $result['points'] }}</strong></th>
                            <th style="border: 1px solid black">
                                <strong>{{ bcdiv($result['percentage'] * 100, '1', 2) }}%</strong>
                            </th>
                            <th style="border: 1px solid black"><strong>{{ $result['riskLevel'] }}</strong></th>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div style="margin-top:1em;font-size:0.8em" align="center">
            <strong> GRÁFICA DE RIESGO </strong>
        </div>
        <div class="image">
            @if ($svg)
                <img src="data:image/svg+xml;base64,{{ $svg }}" width="750" height="150" />
            @endif
        </div>
        <div style="margin-top:1em">
            <table WIDTH="100%" style="font-size:0.9em;border-collapse:collapse">
                <thead>
                    <tr>
                        <th>Comentarios</th>
                        <th>Recomendación para canalizar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td WIDTH="50%" border="1px" style="border-collapse:collapse" class="surroundingline">
                            {!! nl2br(e($comments)) !!}
                        </td WIDTH="50%">
                        <td border="1px" style="border-collapse:collapse" class="surroundingline">
                            {!! nl2br(e($recomendations)) !!}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>
