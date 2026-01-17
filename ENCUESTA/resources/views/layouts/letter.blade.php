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
        th,
        td,
        p,
        div,
        b ... {
            margin: 0;
            padding: 0
        }

        html {
            margin: 20px
        }

        header {
            position: fixed;
            width: 731px;
            margin-top: -200px;
            font-size: 1.1em;
            text-align: center;
            font-weight: bold;
        }

        footer {
            position: fixed;
            bottom: 0;
            text-align: center;
            opacity: 0.5;
        }

        .page_break {
            page-break-inside: auto;
            margin-top: 200px;
            margin-bottom: 120px;
        }

        .tables_no_break {
            page-break-inside: avoid;
        }

        .underline {
            text-align: center;
            padding-right: 2em;
            padding-left: 2em;
            border-bottom: 1px solid black;
        }

        .table_underline {
            text-align: center;
            border-bottom: 1px solid black;
        }

        .surroundingline {
            text-align: center;
            border: 1px solid black;
        }

        .header_logo {
            opacity: 0.5;
        }

        .footer_logo {
            max-width: 100%;
        }

        pagenum-container {
            text-align: right;
        }

        footer .pagenum:before {
            content: counter(page);
        }
    </style>
    @yield('style')
</head>

<body class="page_break">
    <header>
        <table WIDTH="100%" style="font-size:0.8rem;">
            <tr>
                <td width="33%">
                </td>
                <td rowspan="1" align="center" style="font-size:0.8rem;" width="33%">
                    <img src="{{ public_path('/images/logo_sspc.png') }}" alt="logo_sspc" style="height:8em;"
                        class="header_logo">
                </td>
                <td rowspan="1" style="font-size:0.8rem;text-align:right;" width="33%">
                    <img src="{{ public_path('/images/pair_arrows2.png') }}" alt="flechas_spc" style="height:4em;"
                        class="header_logo">
                </td>
            </tr>
        </table>
        <p>
            <b>
                SECRETARÍA DE SEGURIDAD Y PROTECCIÓN CIUDADANA <br>
                DEL MUNICIPIO DE SAN LUIS POTOSÍ<br>
            </b>
        </p>
        @yield('header')
    </header>
    <footer class="footer">
        @yield('footer')
        <div class="pagenum-container">
            <p>Página <span class="pagenum"></span>
            <p>
        </div>
        <p>
        @isset($updatedAtYear)
        @switch($updatedAtYear)
            @case(2022)
                “2022, AÑO DE LAS Y LOS MIGRANTES DE SAN LUIS POTOSÍ”
                @break

            @case(2023)
                “2023, Año del Centenario del Voto de las Mujeres en San Luis Potosí, Precursor Nacional”
                @break

            @default

        @endswitch
        @endisset
        </p>
        <img src="{{ public_path('/images/footer.png') }}" alt="GOBIERNO DE LA CAPITAL" class="footer_logo">
    </footer>
    <main>
        @yield('content')
    </main>
</body>
