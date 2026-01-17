<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato Médico Delito</title>
    <style>
        .page_break {
            page-break-before: always;
        }

        .underline_box{
          border-bottom:1px solid black;
        }
    </style>
</head>

<body>
@if(isset($raws[0]))
  @for($i=0; $i < count($raws); $i++)

    <table WIDTH="100%" style="font-size:0.8rem;">
        <tr style="">
            <td width="30%">
                RND <br>
                <div style="border: 1px solid; height:2em" align="center" >
                  {{isset($raws[$i]->rnd)? $raws[$i]->rnd : ''}}
                </div>
            </td>
            <td rowspan="2" align="center" style="font-size:0.8rem;" width="40%">
                <img src="{{ public_path("/images/logo_sspc.png") }}" alt="logo_sspc" style="height:8em; opacity:1;">
            </td>
            <td rowspan="2" style="font-size:0.8rem;text-align:center;" width="30%">
                <img src="{{ public_path("/images/pair_arrows2.png") }}" alt="flechas_sspc" style="height:4em; opacity:1">
            </td>
        </tr>
        <tr>
            <td>
                FOLIO DE REFERENCIA <br>
                <div style="border: 1px solid; height:2em" align="center" >
                  {{isset($raws[$i]->log_sheet_id)? $raws[$i]->log_sheet_id : ''}}
                </div>
            </td>
        </tr>
    </table>

    <p style="font-size:0.9rem;margin-left:10px;height:30px;text-align:right;">
        <b>San Luis Potosí S. L. P. a
            <u><span>&nbsp;&nbsp;&nbsp;{{$actual_day}}&nbsp;&nbsp;&nbsp;</span></u>de<u><span>&nbsp;&nbsp;&nbsp;{{$actual_month}}&nbsp;&nbsp;&nbsp;</span></u>del<u><span>&nbsp;&nbsp;&nbsp;{{$actual_year}}&nbsp;&nbsp;&nbsp;</span></u></b>
    </p>

    <p style="font-size:0.8rem;margin-left:10px;height:30px;text-align:left;">
        <b>
            COMISARIO MTRO JUAN ANTONIO VILLA GUTIERREZ <br>
            COMISARIO DE LA DIRECCION GENERAL DE SEGURIDAD PÚBLICA MUNICIPAL.<br>
            P R E S E N T E.-
        </b>
    </p>

    <br>

    <p style="font-size:0.8rem;margin-left:10px;text-align:right;">
        <b>ATN. MEDICO EN TURNO</b>
    </p>

    <p style="font-size:1rem;margin-left:10px;height:30px;text-align:justify;">
        Con fundamento en el Protocolo de Actuación del Consejo Nacional de Seguridad Pública del Primer Respondiente Punto II, de la acción previa a la puesta a disposición por el Primer Respondiente y en lo señalado en el Artículo 21 Apartado b) de
        la Constitución Política de los Estados Unidos Mexicanos, me permito dirigirme a usted para solicitar la certificación sobre: <br>

        (
        )<span>&nbsp;&nbsp;&nbsp;</span>Lesiones<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>(
        )<span>&nbsp;&nbsp;&nbsp;</span>Integridad Física <br>

        ( ) <span>&nbsp;&nbsp;&nbsp;</span>Influencia alcohólica<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> ( )<span>&nbsp;&nbsp;&nbsp;</span>Toxicomanía <br>

        ( )<span>&nbsp;&nbsp;&nbsp;</span>Edad clínica probable
    </p>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <p style="font-size:1rem;margin-left:10px;height:30px;">
        Al C.-
        <u><span>&nbsp;&nbsp;
          {{isset($raws[$i]->arrested_name)? $raws[$i]->arrested_name : ''}} &nbsp;
          {{isset($raws[$i]->arrested_first_lastname)? $raws[$i]->arrested_first_lastname : ''}} &nbsp;
          {{isset($raws[$i]->arrested_second_lastname)? $raws[$i]->arrested_second_lastname : ''}} &nbsp;&nbsp;</span></u>
       de<u><span>&nbsp;&nbsp;&nbsp;&nbsp;
          {{isset($raws[$i]->age)? $raws[$i]->age : ''}}&nbsp;&nbsp;&nbsp;&nbsp;</span>
         </u> años con domicilio en
          <u>
            {{isset($raws[$i]->colony_address)? $raws[$i]->street_address : 'desconocido'}}&nbsp;
            {{isset($raws[$i]->exterior_number_address)? $raws[$i]->exterior_number_address : ''}}&nbsp;
            {{isset($raws[$i]->interior_number_address)? $raws[$i]->interior_number_address : ''}}&nbsp;
          </u>
          Colonia
          <u>
            {{isset($raws[$i]->colony_address)? $raws[$i]->colony_address : 'desconocida'}}&nbsp;
          </u> de la Ciudad de
          <u>
            {{isset($raws[$i]->township_address)? $raws[$i]->township_address : 'desconocida'}}. &nbsp;
          </u>
    </p>

    <p style="font-size:1rem;margin-left:10px;height:30px;margin-top:40px;">
        Se presenta por (motivo) ________________________________________________________________
        <br>En calidad de: <strong>( ) VICTIMA ( ) OFENDIDO ( ) PRESUNTO RESOINSABLE</strong>
        <br>Trasladado en el C. R. P.
        <u>
          {{isset($raws[$i]->unit_name)? $raws[$i]->unit_name : ''}}&nbsp;&nbsp;&nbsp;
        </u>
        de la corporación
        <u>
          {{isset($raws[$i]->f1_institution)? $raws[$i]->f1_institution : ''}}.&nbsp;&nbsp;&nbsp;
        </u>
    </p>

    <br>

    <p style="font-size:0.8rem;text-align:center;">
        <b>RESPETUOSAMENTE</b>
    </p>

    <p style="font-size:1rem;text-align:left;margin-top:-12px;">
        Nombre
        <u>
          {{isset($raws[$i]->f1_name)? $raws[$i]->f1_name : ''}}&nbsp;
          {{isset($raws[$i]->f1_first_lastname)? $raws[$i]->f1_first_lastname : ''}}&nbsp;
          {{isset($raws[$i]->f1_second_lastname)? $raws[$i]->f1_second_lastname : ''}}. &nbsp;
        </u><br>
        No. Identificación(INE/CUIP O INSTITUCIONAL).___________________________________________
        Firma_________________________________________________________________________________
        Autorización de la persona a certificar_______________________________________________________
    </p>

    <table WIDTH="100%">
        <tr>
            <th colspan="" rowspan="" width="100%" style="font-size:1rem; text-align:center;">
                NOMBRE Y FIRMA
            </th>
        </tr>
    </table>
    <table WIDTH="100%">
        <tr>
            <td colspan="" rowspan="" width="50" style="">

            </td>
            <td colspan="" rowspan="" width="200" style="font-size:0.7rem; border-bottom:1px solid black;text-align:left;" height="20">

            </td>
            <td colspan="" rowspan="" width="50" style="">

            </td>
        </tr>

    </table>
    <table WIDTH="100%">
        <tr>
            <th colspan="" rowspan="" width="100%" style="font-size:1rem; text-align:center;">
                MEDICO
            </th>
        </tr>
    </table>

    <table WIDTH="100%">
        <tr>
            <th colspan="" rowspan="" width="300" height="30">

            </th>
            <th colspan="" rowspan="" width="" height="30" style="">

            </th>
            <th colspan="" rowspan="" width="300" height="30">

            </th>
        </tr>
    </table>
    <table WIDTH="100%">
        <tr>
            <th colspan="" rowspan="" width="50" height="5" style="">

            </th>
            <th colspan="" rowspan="" width="150" height="5" style="font-size:1rem; border-top:1px solid black;text-align:center;">
                JUEZ EN TURNO <br>
                NOMBRE Y FIRMA
            </th>
            <th colspan="" rowspan="" width="100" height="5" style="">

            </th>
            <th colspan="" rowspan="" width="150" height="5" style="font-size:1rem; border-top:1px solid black;text-align:center;">
                TESTIGO <br>
                NOMBRE Y FIRMA
            </th>
            <th colspan="" rowspan="" width="50" height="5" style="">

            </th>
        </tr>
    </table>
    <div id="footer" colspan="" rowspan="" width="100%">
        <table WIDTH="100%" style="margin-top:30px;">
            <tr>
                <td colspan="3" style="font-size:0.7rem; text-align:center;opacity:0.5;">
                    “2022, AÑO DE LAS Y LOS MIGRANTES DE SAN LUIS POTOSÍ”
                </td>
            </tr>
            <tr style="">
                <td style="font-size:0.8rem;text-align:center;opacity:0.5;">
                    <img src="{{ public_path("/images/footer.png") }}" alt="BTS" style="width:100%">
                </td>
            </tr>
        </table>
    </div>
    @if($i+1 < count($raws))
     <div style="page-break-after:auto;"></div>
    @endif
  @endfor
@endif
</body>

</html>
