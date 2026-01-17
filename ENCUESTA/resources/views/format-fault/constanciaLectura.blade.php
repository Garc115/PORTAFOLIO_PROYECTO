@extends('layouts.letter')

@section('tittle')
    Constancia de lectura de derechos
@endsection

@section('header')
    <u>DIRECCIÓN DE JUSTICIA CÍVICA<u>
@endsection
@section('content')

<table WIDTH="100%">
    <tr>
        <td colspan="" rowspan="" width="340" style="">
            En la ciudad de San Luis Potosí, capital del mismo nombre, con fecha
        </td>
        <td colspan="" rowspan="" width="120" style="border-bottom:1px solid black; text-align:center;">
            {{ $arrested->generalDataFault->carbon_arrival_date->format("d-m-Y") }}
        </td>
        <td colspan="" rowspan="" width="100" style="">
            . Se hace
        </td>
    </tr>
</table>

<table WIDTH="100%">
    <tr>
        <td colspan="" rowspan="" width="" height="5" style="width:50%; text-align:justify;">
            presente ante el C. Juez Calificador en turno al C.
        </td>
        <!--   <td colspan="" rowspan="" width="5" height="" style="text-align:justify;">

                </td> -->
        <td colspan="" rowspan="" width="" height=""
            style="width:50%; border-bottom:1px solid black;text-align:center;">
            {{ $arrested->full_name }}
        </td>
    </tr>
</table>

<!--         <table WIDTH="100%">
            <tr>
                <td colspan="" rowspan="" width="5" height="" style="text-align:justify;">
                    C.
                </td>
                <td colspan="" rowspan="" width="300" height="" style="border-bottom:1px solid black;">

                </td>
            </tr>
        </table> -->

<table WIDTH="100%">
    <tr>
        <td colspan="" rowspan="" width="100%" style="">
            que se le pone a disposición del Juez Calificador por los siguientes motivos:
        </td>
    </tr>
</table>

<table WIDTH="100%">
    <tr>
        <td colspan="" rowspan="" width="300" height="10" style="border-bottom:1px solid black;">

        </td>
    </tr>
</table>

<table WIDTH="100%">
    <tr style="">
        <td colspan="" rowspan="" width="100%" style="text-align:justify;">
            Así mismo el suscrito Juez Calificador procede a hacer del conocimiento del probable infractor los derechos
            que a su favor consagra en el artículo 37
            El Bando de Policía y Gobierno, siendo esto los siguientes:
        </td>
    </tr>
</table>

<p style="text-align:justify; margin-top:-1px;">
    <strong>I.-</strong> A que se presuma su inocencia; <br>
    <strong>II.-</strong> A que no se le incomunique de forma alguna en ningún momento, las personas retenidas podrán
    entrevistarse en forma privada y previa a su declaración con su abogado o persona de su confianza cuando así lo
    soliciten;<br>
    <strong>III.-</strong> A ser retenidas en espacios acordes a su edad, sexo, y condiciones físicas; las personas
    retenidas permanecerán en espacios donde exclusivamente se encuentren personas de su mismo sexo;<br>
    <strong>IV.-</strong> A no declarar respecto a los hechos si así lo desea;<br>
    <strong>V.-</strong> A que se informe acerca de los cargos que se le imputen, los hechos en los que se basan , así
    como los nombres de las personas o agentes que se los atribuyan, y respecto a los artículos de este bando a que se
    refiere la presunta violación cometida.<br>
    <strong>VI.-</strong> A defenderse de las imputaciones que se le hagan, por si o por abogado;<br>
    <strong>VII.-</strong> A comunicares con un familiar y con su defensor cuando sea detenido, debiendo brindare el o
    la Juez calificador o la policía, todas las facilidades para lograrlo;<br>
    <strong>VIII.-</strong> A que no se le tomen fotografías, huellas dactilares, ni ser objeto de cualquier acto
    tendiente al menoscabo de su seguridad y fomente la intimidación, ni será exhibido ante otras personas o medios de
    comunicación.<br>
    <strong>IX.-</strong> A estar presente en las audiencias que se realicen con motivo de la calificación de los actos
    que sé que se atribuyen, así como de que se le reciban las pruebas que ofrezcan para realizar su inocencia;<br>
    <strong>X.-</strong> A qué se le proporciones alimentos por sus familiares durante el cumplimiento de su arresto, y
    <br>
    <strong>XI.-</strong> A quedar inmediatamente en libertad al momento de haber pagado la multa impuesta o haber
    cumplido con el arresto correspondiente.<br>
    <strong>XII.-</strong> Si fuese extranjero, se le permitirá la intervención del cónsul o algún representante de su
    país; si no demuestra su legal estancia en el país, con los documentos legales correspondientes, será puesto bajo
    responsabilidad de la secretaria de Gobernación.<br>
    <strong>XIII.-</strong> Cuando no hable español, o se trate de un sordomudo, y no cuente con traductor o interprete,
    se le proporcionara uno, sin cuya presencia el procedimiento administrativo no podrá dar inicio.
</p>

<table WIDTH="100%">
    <tr>
        <th colspan="" rowspan="" width="100%" style="border-bottom:1px solid black;">
            CONSTE
        </th>
    </tr>
</table>
<br>
<table WIDTH="100%">
    <tr>
        <td colspan="" rowspan="" width="50" style="">

        </td>
        <td colspan="" rowspan="" width="50"
            style="font-size:1rem; border-bottom:1px solid black;text-align:center;" >
            {{ $arrested->generalDataFault->judge->full_name }}
        </td>
        <td colspan="" rowspan="" width="50" style="">

        </td>
    </tr>

</table>

<table WIDTH="100%">
    <tr>
        <th colspan="" rowspan="" width="100%" style="font-size:0.7rem;">
            JUEZ CALIFICADOR EN TURNO
        </th>
    </tr>
</table>

<table WIDTH="100%">
    <tr>
        <td colspan="" rowspan="" height="20" style="">

        </td>
    </tr>
</table>

<table WIDTH="100%">
    <tr>
        <td colspan="" rowspan="" width="80" height="5"
            style="font-size:1rem; black;text-align:center;">
            {{ $arrested->generalDataFault->firstRespondent->full_name }}
        </td>
        <td colspan="" rowspan="" width="20" height="5" style="">

        </td>
        <td colspan="" rowspan="" width="80" height="5"
            style="font-size:1rem; black;text-align:center;">
            {{ $arrested->full_name }}
        </td>
        <td colspan="" rowspan="" width="20" height="5" style="">

        </td>
        <td colspan="" rowspan="" width="80" height="5"
            style="font-size:1rem;text-align:center;">

        </td>
    </tr>
    <tr>
        <th colspan="" rowspan="" width="80" height="5"
            style="font-size:0.7rem; border-top:1px solid black;text-align:center;">
            PATRULLERO QUE PRESENTA
        </th>
        <th colspan="" rowspan="" width="20" height="5" style="">

        </th>
        <th colspan="" rowspan="" width="80" height="5"
            style="font-size:0.7rem; border-top:1px solid black;text-align:center;">
            PROBABLE INFRACTOR
        </th>
        <th colspan="" rowspan="" width="20" height="5" style="">

        </th>
        <th colspan="" rowspan="" width="80" height="5"
            style="font-size:0.7rem; border-top:1px solid black;text-align:center;">
            TESTIGO
        </th>
    </tr>
</table>
@endsection
