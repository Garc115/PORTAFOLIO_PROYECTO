@extends('layouts.letter')

@section('tittle')
    Cédula de infractor
@endsection

@section('header')
    <u>CÉDULA DE INFRACTOR<u>
@endsection
@section('content')
            @if (!$arresteds->isEmpty())
                @foreach ($arresteds as $arrested)
                    <div>
                        <p style="font-size:0.8em;text-align:right;">
                            San Luis Potosí S. L. P. a
                            {{ isset($arrested->generalDataFault) ? $arrested->generalDataFault->carbon_arrival_date->day : 'S/D' }}
                            de
                            {{ isset($arrested->generalDataFault) ? ucwords($arrested->generalDataFault->carbon_arrival_date->monthName) : 'S/D' }}
                            del
                            {{ isset($arrested->generalDataFault) ? $arrested->generalDataFault->carbon_arrival_date->year : 'S/D' }}
                        </p>
                        <br>
                        <p
                            style="font-size:0.8rem; width:100%; text-align:justify;hyphens: auto; hyphenate-limit-last: always;">

                            Se hace constar que el día de hoy, siendo las <span class="underline">
                                {{ date('H:i', strtotime($arrested->detention_hour)) }}</span> horas se realizó la detención

                            del C.<span class="underline">{{ $arrested->full_name }}</span> de <span class="underline">
                                {{ $arrested->age }} </span>años de edad

                            con domicilio en: <span class="underline">
                                {{ isset($arrested->street_address) ? $arrested->street_address : '' }}
                                {{ isset($arrested->exterior_number_address) ? $arrested->exterior_number_address : '' }}
                                {{ isset($arrested->interior_number_address) ? 'interior ' . $arrested->interior_number_address : '' }}
                            </span>

                            colonia: <span class="underline">
                                {{ isset($arrested->colony_address) ? $arrested->colony_address : '' }}
                                {{ isset($arrested->township_address) ? ', ' . $arrested->township_address : '' }}
                                {{ isset($arrested->postal_code_address) ? ', ' . $arrested->postal_code_address : '' }}
                            </span>, toda vez que fue sorprendido infraganti y como supuesto

                            responsable de ____________________________________
                            falta prevista por el bando de Policía y Gobierno en su artículo ____________
                            fracción_____________ ordenada

                            la misma por el que suscribe el oficial de policía, cuya detención se llevó a cabo en:
                            <span class="underline">
                                {{ isset($arrested->generalDataFault->street) ? $arrested->generalDataFault->street : '' }}
                                {{ isset($arrested->generalDataFault->exterior_number) ? $arrested->exterior_number : '' }}
                                {{ isset($arrested->generalDataFault->interior_number) ? 'interior ' . $arrested->generalDataFault->interior_number : '' }}
                            </span>
                            colonia:
                            <span class="underline">
                                {{ isset($arrested->generalDataFault->colony) ? $arrested->colony : '' }}
                                {{ isset($arrested->generalDataFault->general_township) ? ', ' . $arrested->generalDataFault->general_township : '' }}
                                {{ isset($arrested->generalDataFault->postal_code) ? ', ' . $arrested->generalDataFault->postal_code : '' }}
                            </span>.
                        </p>
                        <div>
                            <table WIDTH="100%">
                                <tr>
                                    <th colspan="" rowspan="" width="300" height="5">

                                    </th>
                                    <th colspan="" rowspan="" width="" height="5" style="">

                                    </th>
                                    <th colspan="" rowspan="" width="300" height="5">

                                    </th>
                                </tr>
                            </table>

                            <table WIDTH="100%">
                                <tr>
                                    <th colspan="" rowspan="" width="50" height="20"
                                        style="font-size:0.8rem; text-align:left;">
                                        INFORMACIÓN CIRCUNSTANCIAL:
                                    </th>
                                </tr>
                                <!-- <tr>
                                                        <th colspan="" rowspan=""  height="20" style="widht:100%; font-size:0.7rem; border-bottom:1px solid black;">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="" rowspan="" width="50" height="20" style="font-size:0.7rem; border-bottom:1px solid black;">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="" rowspan="" width="50" height="20" style="font-size:0.7rem; border-bottom:1px solid black;">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="" rowspan="" width="50" height="20" style="font-size:0.7rem; border-bottom:1px solid black;">
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th colspan="" rowspan="" width="50" height="20" style="font-size:0.7rem; border-bottom:1px solid black;">
                                                        </th>
                                                    </tr> -->
                                <!-- <tr>
                                                        <td colspan="" rowspan="" width="50" height="30" style="font-size:0.7rem; text-align:left;">
                                                            Lo anterior con fundamento en los artículos 2 constitucional y 2do. del Bando de Policía y Gobierno
                                                        </td>
                                                    </tr> -->
                            </table>

                            <p style=" font-size:0.8rem; text-align:justify;">
                                <u>
                                    {{ $arrested->generalDataFault->description }}
                                </u>
                            </p>
                            <br>
                            <p style="font-size:0.8rem;  text-align:center;">
                                <span>Lo anterior con fundamento en los artículos 2 constitucional y 2do. del Bando de
                                    Policía y Gobierno.</span>
                            </p>
                            <div class="tables_no_break">
                                <table WIDTH="100%">
                                    <tr>
                                        <th colspan="" rowspan="" width="100%" style="" height="10">

                                        </th>
                                    </tr>
                                </table>
                                <table WIDTH="100%">
                                    <tr>
                                        <th colspan="" rowspan=""
                                            style="font-size:0.8rem; text-align:center;width:85%;">
                                            ATENTAMENTE
                                        </th>
                                        <td style=" font-size:0.8rem; width:15%;" class="surroundingline">
                                            No. UNIDAD: @if ($arrested->generalDataFault != null)
                                                {{ $arrested->generalDataFault->unit_name }}
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <table WIDTH="100%">
                                    <tr>
                                        <td colspan="" rowspan="" width="50" style="">

                                        </td>
                                        <td colspan="" rowspan="" width="200" class="table_underline">
                                            {{ $arrested->generalDataFault->firstRespondent->fullname }}
                                        </td>
                                        <td colspan="" rowspan="" width="50" style="">
                                        </td>
                                    </tr>
                                </table>
                                <table WIDTH="100%">
                                    <tr>
                                        <th colspan="" rowspan="" width="100%"
                                            style="font-size:0.7rem; text-align:center;">
                                            TRIPULANTE DEL CARRO RADIO PATRULLA
                                        </th>
                                    </tr>
                                </table>
                                <table WIDTH="100%">
                                    <tr>
                                        <th colspan="" rowspan="" width="300" height="20"
                                            style="font-size:1rem;">
                                        </th>
                                        <th colspan="" rowspan="" width="" height="20" style="">
                                        </th>
                                        <th colspan="" rowspan="" width="300" height="20">

                                        </th>
                                    </tr>
                                </table>
                                <table WIDTH="100%">
                                    <tr style="">
                                        <th colspan="" rowspan="" width="50" height="5" style="">
                                        </th>
                                        <td colspan="" rowspan="" width="150" height="5"
                                            class="table_underline">
                                            @if ($arrested->generalDataFault->firstRespondent->id !== $arrested->firstRespondent->id)
                                                {{ $arrested->generalDataFault->firstRespondent->fullname }}
                                            @endif
                                        </td>
                                        <td colspan="" rowspan="" width="100" height="5" style="">

                                        </td>
                                        <td colspan="" rowspan="" width="150" height="5"
                                            class="table_underline">
                                        </td>
                                        <td colspan="" rowspan="" width="50" height="5" style="">

                                        </td>
                                    </tr>
                                    <tr style="">
                                        <th colspan="" rowspan="" width="50" height="5" style="">

                                        </th>
                                        <th colspan="" rowspan="" width="150" height="5"
                                            style="font-size:0.7rem; black;text-align:center;">
                                            POLICIA AGENTE
                                        </th>
                                        <th colspan="" rowspan="" width="100" height="5" style="">

                                        </th>
                                        <th colspan="" rowspan="" width="150" height="5"
                                            style="font-size:0.7rem; text-align:center;">
                                            POLICIA AGENTE
                                        </th>
                                        <th colspan="" rowspan="" width="50" height="5" style="">

                                        </th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <div
                    style="position:fixed; top:5.1em; left:-2.2em; z-index:1000; color:#c3c3c3; font-size:12em; transform: rotate(52deg); width:13em">
                    <strong>SIN DATOS<strong>
                </div>
                <table WIDTH="100%" style="">
                    <tr style="">
                        <td style="font-size:0.8rem;">
                            <img src="{{ public_path('/images/header.png') }}" alt="BTS"
                                style="width:100%; height: 150px; opacity:0.5;">
                        </td>
                        <th colspan="" rowspan="" width="" height="" style="font-size:1rem;">

                        </th>
                        <td style="font-size:0.8rem;text-align:center;">

                        </td>
                    </tr>
                </table>

                <table WIDTH="100%" style="">
                    <tr style="">
                        <td style="font-size:0.8rem;">
                        </td>
                        <th colspan="" rowspan="" width="50%" height=""
                            style="font-size:1.5rem;text-align:center;">
                            <u>CEDULA DE INFRACTOR</u>
                        </th>
                        <td style="font-size:0.8rem;text-align:center;">
                        </td>
                    </tr>
                </table>

                <div style="padding-right:50px;padding-left:50px;padding-top:10px">
                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="100%" height="0">
                            </th>
                        </tr>
                    </table>
                    <table WIDTH="100%">
                        <tr>
                            <td colspan="" rowspan="" width="200" style="">
                            </td>
                            <td colspan="" rowspan="" width="110" style="font-size:0.8rem;">
                                San Luis Potosí, S.L.P a de
                            </td>
                            <td colspan="" rowspan="" width="50"
                                style="border-bottom:1px solid black;text-align:center;">

                            </td>
                            <td colspan="" rowspan="" width="10" style="font-size:0.8rem;">
                                de
                            </td>
                            <td colspan="" rowspan="" width="96"
                                style="border-bottom:1px solid black;text-align:center;">

                            </td>
                            <td colspan="" rowspan="" width="100" style="font-size:0.8rem;">
                                del año en curso
                            </td>
                            <td colspan="" rowspan="" width="50" style="">
                            </td>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="300" height="20">

                            </th>
                            <th colspan="" rowspan="" width="" height="20" style="">

                            </th>
                            <th colspan="" rowspan="" width="300" height="20">

                            </th>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <td colspan="" style="font-size:0.8rem; width:35%;">
                                Se hace constar que el día de hoy, siendo las
                            </td>
                            <td colspan="" style="width:43%; font-size:0.8rem;border-bottom:1px solid black">

                            </td>
                            <td colspan="" style="font-size:0.8rem; width:30%;">
                                horas se realizó la detención
                            </td>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                            <th colspan="" rowspan="" width="" height="5" style="">

                            </th>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <td colspan="" rowspan="" style="font-size:0.8rem;width:6%;">
                                Del C.
                            </td>
                            <td colspan="" rowspan=""
                                style="border-bottom:1px solid black;width:40%;text-align:center;">

                            </td>
                            <td colspan="" rowspan="" style="font-size:0.8rem;width:2%;">
                                de
                            </td>
                            <td colspan="" rowspan=""
                                style="font-size:0.7rem; border-bottom:1px solid black;width:30%;text-align:center;">
                            </td>
                            <td colspan="" rowspan="" style="font-size:0.8rem;width:10%;">
                                años de edad
                            </td>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                            <th colspan="" rowspan="" width="" height="5" style="">

                            </th>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <td colspan="" rowspan="" style="font-size:0.8rem; width:14%;">
                                Con domicilio en
                            </td>
                            <td colspan="" rowspan=""
                                style="font-size:0.7rem;width:83%; border-bottom:1px solid black;">
                            </td>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                            <th colspan="" rowspan="" width="" height="5" style="">

                            </th>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <td colspan="" rowspan="" style="font-size:0.8rem;width:5%;">
                                col.
                            </td>
                            <td colspan="" rowspan=""
                                style="font-size:0.7rem; border-bottom:1px solid black;width:50%;">
                            </td>
                            <td colspan="" rowspan="" style="font-size:0.8rem;">
                                , toda vez que fue sorprendido infraganti y como supuesto
                            </td>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                            <th colspan="" rowspan="" width="" height="5" style="">

                            </th>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <td colspan="" rowspan="" style="font-size:0.8rem; width:13%;">
                                Responsable de:
                            </td>
                            <td colspan="" rowspan=""
                                style="font-size:0.7rem; border-bottom:1px solid black; width:87%;">
                            </td>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                            <th colspan="" rowspan="" width="" height="5" style="">

                            </th>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <td colspan="" rowspan="" style="font-size:0.8rem; width:50%;">
                                Falta prevista por el bando de Policia y Gobierno en su artículo
                            </td>
                            <td colspan="" rowspan="" style="border-bottom:1px solid black; width:10%;">
                            </td>
                            <td colspan="" rowspan="" style="font-size:0.8rem; width:5%;">
                                fracción
                            </td>
                            <td colspan="" rowspan="" style="border-bottom:1px solid black; width:24%;">
                            </td>
                            <td colspan="" rowspan="" style="font-size:0.8rem; width:10%;">
                                ordenada
                            </td>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                            <th colspan="" rowspan="" width="" height="5" style="">

                            </th>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <td colspan="" rowspan="" style="font-size:0.8rem; width:60%;">
                                La misma por el que suscribe el oficial de policía, cuya detención se llevó a cabo en las
                            </td>
                            <td colspan="" rowspan="" style="border-bottom:1px solid black; width:30%;">
                            </td>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                            <th colspan="" rowspan="" width="" height="5" style="">

                            </th>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <td colspan="" rowspan="" style="font-size:0.8rem; width:8%;">
                                Calle de:
                            </td>
                            <td colspan="" rowspan="" style="border-bottom:1px solid black; width:92%;">
                            </td>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                            <th colspan="" rowspan="" width="" height="5" style="">

                            </th>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <td colspan="" rowspan="" style="border-bottom:1px solid black; width:45%;">
                            </td>
                            <td colspan="" rowspan="" style="font-size:0.8rem; width:5%;">
                                Col.
                            </td>
                            <td colspan="" rowspan="" style="border-bottom:1px solid black; width:50%;">
                            </td>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                            <th colspan="" rowspan="" width="" height="5" style="">

                            </th>
                            <th colspan="" rowspan="" width="300" height="5">

                            </th>
                        </tr>
                    </table>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="50" height="20"
                                style="font-size:0.8rem; text-align:left;">
                                INFORMACIÓN CIRCUNSTANCIAL:
                            </th>
                        </tr>
                    </table>

                    <p style="text-align:justify;">
                        <u>
                            <!-- <span></span> -->

                        </u>
                    </p>

                    <table WIDTH="100%">
                        <tr>
                            <th colspan="" rowspan="" width="100%" style="" height="10">

                            </th>
                        </tr>
                    </table>
                    <div class="tables_no_break">
                        <table WIDTH="100%">
                            <tr style="">
                                <th colspan="" rowspan="" style="font-size:0.8rem; text-align:center;width:85%;">
                                    ATENTAMENTE
                                </th>
                                <td style=" border: 1px solid black; width:15%;">
                                    No. UNIDAD: N/A
                                </td>
                            </tr>
                        </table>
                        <table WIDTH="100%">
                            <tr>
                                <td colspan="" rowspan="" width="50" style="">

                                </td>
                                <td colspan="" rowspan="" width="200"
                                    style="font-size:0.7rem; border-bottom:1px solid black;text-align:left;"
                                    height="30">

                                </td>
                                <td colspan="" rowspan="" width="50" style="">

                                </td>
                            </tr>
                            <tr>
                                <th colspan="" rowspan="" width="100%"
                                    style="font-size:0.7rem; text-align:center;">
                                    TRIPULANTE DEL CARRO RADIO PATRULLA
                            </tr>
                        </table>
                        <table WIDTH="100%">
                            <tr>
                                <th colspan="" rowspan="" width="300" height="20">

                                </th>
                                <th colspan="" rowspan="" width="" height="20" style="">

                                </th>
                                <th colspan="" rowspan="" width="300" height="20">

                                </th>
                            </tr>
                        </table>
                        <table WIDTH="100%">
                            <tr style="">
                                <th colspan="" rowspan="" width="50" height="5" style="">

                                </th>
                                <th colspan="" rowspan="" width="150" height="5"
                                    style="font-size:0.7rem; border-top:1px solid black;text-align:center;">
                                    POLICIA AGENTE
                                </th>
                                <th colspan="" rowspan="" width="100" height="5" style="">

                                </th>
                                <th colspan="" rowspan="" width="150" height="5"
                                    style="font-size:0.7rem; border-top:1px solid black;text-align:center;">
                                    POLICIA AGENTE
                                </th>
                                <th colspan="" rowspan="" width="50" height="5" style="">

                                </th>
                            </tr>
                        </table>
                    </div>
                </div>
            @endif
@endsection
