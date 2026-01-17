<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formato Médico Falta Administrativa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
@if(isset($raws[0]))
  @for($i=0; $i < count($raws); $i++)
    <div style="padding:30px;margin-bottom:10px;">
      <p  style="position:relative; height:20px; background-color:#0F2D53;">
      </p>
        <table WIDTH="100%" style="font-size:0.8rem;">
            <tr style="">
                <td width="30%">
                    RND <br>
                    <div style="border: 1px solid; height:2em;" align="center">
                      <div style="margin-bottom:10px;"> {{isset($raws[$i]->rnd)? $raws[$i]->rnd : ''}} </div>
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
        <p style="font-size:0.9rem; margin-left:10px; text-align:center; margin-top:30px;">
            <strong>
                SECRETARÍA DE SEGURIDAD Y PROTECCIÓN CIUDADANA DEL MUNICIPIO DE SAN LUIS POTOSÍ<br>
                DIRECCIÓN DE JUSTICIA CÍVICA
            </strong>
        </p>
        <p style="font-size:0.9rem;margin-left:10px;text-align:center;margin-top:30px;">
            FOLIO____________SAN LUIS POTOSI.,
            a<u><span>&nbsp;&nbsp;&nbsp;{{$actual_day}}&nbsp;&nbsp;&nbsp;</span></u>de<u><span>&nbsp;&nbsp;&nbsp;{{$actual_month}}&nbsp;&nbsp;&nbsp;</span></u>del<u><span>&nbsp;&nbsp;&nbsp;{{$actual_year}}&nbsp;&nbsp;&nbsp;</span></u><br>
        </p>

        <p style="font-size:0.9rem;margin-left:10px;margin-top:10px;margin-bottom:10px;">
            C. PERITO MEDICO EN TURNO <br>
            P R E S E N T E:
        </p>

        <p style="font-size:0.9rem;margin-left:10px;">
            Con fundamento en los artículos 32, 34 fracciones I, II y III del Bando de Policía y Gobierno del Municipio de San Luis Potosí, me permito dirigirme a Usted para solicitar la certificación de:
        </p>
        <p style="font-size:0.9rem;margin-left:10px; text-align:center; margin-top:10px;margin-bottom:10px;">
            Lesiones ( ) Integridad Física ( ) Influencia Alcohólica ( ) Toxicomanía ( ) Edad Clínica Probable ( )
        </p>

        <p style="font-size:0.9rem;margin-left:10px; text-align:center;">
            ATENTAMENTE <br>
            JUEZ CALIFICADOR EN TURNO
        </p>

        <table WIDTH="100%" style="margin-top:50px;">
            <tr>
                <td colspan="" rowspan="" style="font-size:0.8rem; width:33.33%;text-align:center;">
                </td>

                <th colspan="" rowspan="" style="font-size:0.8rem; width:33.33%;;text-align:center;border-top:1px solid black;">
                    Nombre y Firma
                </th>

                <td colspan="" rowspan="" style="font-size:0.8rem;width:33.33%;;text-align:center;">

                </td>
            </tr>
        </table>
    </div>

    <!-------------------------------------------------------- end card -------------------------------------------------------->
   @if($i+1 < count($raws))
    <div style="page-break-after:auto;"></div>
   @endif
@endfor
@endif
</body>

</html>
