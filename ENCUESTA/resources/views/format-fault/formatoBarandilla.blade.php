<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formato Barandilla</title>
        <style>

            .page_break { 
                page-break-before: always; 
            }
            /** 
            * Define the width, height, margins and position of the watermark.
            **/        
            #watermark {
                position: fixed;
                bottom:   0px;
                left:     0px;
                top:20px;
                right:0px;
                /** The width and height may change 
                    according to the dimensions of your letterhead
                **/
                width:    21.8cm;
                height:   28cm;

                /** Your watermark should be behind every content**/
                z-index:  -1000;
            }
            
            #footer {
                position: fixed;
                height: 80px;
                bottom: 0px;
                left: 0px;
                right: 0px;
                margin-bottom: 0px;
            }     
        </style>
    </head>
    <body>

<!--         <div id="watermark" colspan="" rowspan="" width="80%" height="10%" style="">
            <img src="{{ public_path("/images/watermark.png") }}" alt="BTS" style="width: 100%; height: 105px; opacity:0.5">
        </div> -->
        <table WIDTH="100%" style="">    
            <tr style="">
                <td style="font-size:0.8rem;">
                    <img src="{{ public_path("/images/logo_estrella.png") }}" alt="BTS" style="width:18%; height: 100px; opacity:0.5;">
                </td>
                <th colspan="" rowspan="" width="50%" height="" style="font-size:1rem;">
                    CEDULA DE INGRESO
                </th>
               
                <td style="font-size:0.8rem;text-align:center;">
                    <img src="{{ public_path("/images/LOGOAZUL-VERTICAL.png") }}" alt="BTS" style="width:150px; height: 120px; opacity:0.5;">    
                </td>            
            </tr>    
        </table>

        <table WIDTH="100%">    
            <tr>
                <th colspan="" rowspan="" width="100%" height="10">
                </th>            
            </tr>    
        </table>
        <table  WIDTH="100%">    
            <tr>
                <td colspan="" rowspan="" width="200" style="">
                </td>
                <td colspan="" rowspan="" width="110" style="font-size:0.8rem;">
                    San Luis Potosí, S.L.P a de
                </td>            
                <td colspan="" rowspan="" width="50" style="border-bottom:1px solid black;">
                </td>
                <td colspan="" rowspan="" width="10" style="font-size:0.8rem;">
                    de
                </td>
                <td colspan="" rowspan="" width="96" style="border-bottom:1px solid black;">
                </td>
                <td colspan="" rowspan="" width="100" style="font-size:0.8rem;">
                    de 2022
                </td>
                <td colspan="" rowspan="" width="50" style="">
                </td>    
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
                <td colspan="" style="font-size:0.8rem;width:35%;">
                    Se hace constar que el día de hoy, siendo las
                </td>            
                <td colspan="" style="width:43%; font-size:0.8rem;border-bottom:1px solid black;">
                </td>
                <td colspan="" style="font-size:0.8rem;width;15%;">
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
                <td colspan="" rowspan=""  style="border-bottom:1px solid black;width:40%;">
                </td>
                <td colspan="" rowspan=""  style="font-size:0.8rem;width:2%;">
                    de
                </td>
                <td colspan="" rowspan=""  style="font-size:0.7rem; border-bottom:1px solid black;width:30%;">
                </td>
                <td colspan="" rowspan=""  style="font-size:0.8rem;width:10%;">
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
                <td colspan="" rowspan="" style="font-size:0.7rem;width:83%; border-bottom:1px solid black;">
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
                <td colspan="" rowspan="" style="font-size:0.7rem; border-bottom:1px solid black;width:50%;">
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
                <td colspan="" rowspan="" style="font-size:0.7rem; border-bottom:1px solid black; width:87%;">
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
<!--                 <td colspan="" rowspan="" style="width:5%;">
                </td> -->
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
              <!--   <td colspan="" rowspan="" style="font-size:0.8rem; width:6%;">
                </td> -->         
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
                <th colspan="" rowspan="" width="50" height="20" style="font-size:0.8rem; text-align:left;">
                    INFORMACIÓN CIRCUNSTANCIAL:
                </th>
            </tr>
            <tr>
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
            </tr>
            <tr>
                <td colspan="" rowspan="" width="50" height="30" style="font-size:0.7rem; text-align:left;">
                    Lo anterior con fundamento en los artículos 2 constitucional y 2do. del Bando de Policía y Gobierno
                </td>
            </tr>
        </table>
        <table WIDTH="100%">    
            <tr>
                <th colspan="" rowspan="" width="100%" style="" height="5">
                    
                </th>            
            </tr>    
        </table>
        <table WIDTH="100%">    
            <tr>
                <th colspan="" rowspan="" width="100%" style="font-size:0.8rem; text-align:center;">
                    ATENTAMENTE
                </th>            
            </tr>    
        </table>
        <table WIDTH="100%">    
            <tr>
                <td colspan="" rowspan="" width="50" style="">
                    
                </td>     
                <td colspan="" rowspan="" width="200" style="font-size:0.7rem; border-bottom:1px solid black;text-align:left;" height="40">
                   
                </td>
                <td colspan="" rowspan="" width="50" style="">
                    
                </td>                 
            </tr>
            
        </table>
        <table WIDTH="100%">    
            <tr>
                <th colspan="" rowspan="" width="100%" style="font-size:0.7rem; text-align:center;">
                    TRIPULANTE DEL CARRO RADIO PATRULLA
                </th>            
            </tr>    
        </table>
        <!-- <table WIDTH="100%">    
            <tr>
                <th colspan="" rowspan="" width="200" style="">
                </th>    
                <th colspan="" rowspan="" width="1" style="font-size:0.7rem; text-align:left;" height="2">
                    CRP
                </th>
                <td colspan="" rowspan="" width="50" style="font-size:0.7rem; border-bottom:1px solid black;" height="2">
                </td>
                <th colspan="" rowspan="" width="200" style="">
                </th>            
            </tr>    
        </table> -->
        <table WIDTH="100%">    
            <tr>
                <th colspan="" rowspan="" width="300" height="50">
                   
                </th>
                <th colspan="" rowspan="" width="" height="50" style="">
                   
                </th>
                <th colspan="" rowspan="" width="300" height="50">
                    
                </th>                
            </tr>       
        </table>
        <table WIDTH="100%">    
            <tr>
                <th colspan="" rowspan="" width="50" height="5" style="">

                </th>
                <th colspan="" rowspan="" width="150" height="5" style="font-size:0.7rem; border-top:1px solid black;text-align:center;">
                    POLICIA AGENTE
                </th>
                <th colspan="" rowspan="" width="100" height="5" style="">
                   
                </th>
                <th colspan="" rowspan="" width="150" height="5" style="font-size:0.7rem; border-top:1px solid black;text-align:center;">
                    POLICIA AGENTE
                </th>
                <th colspan="" rowspan="" width="50" height="5" style="">
                   
                </th>                
            </tr>       
        </table>
        <div id="footer" colspan="" rowspan="" width="100%">
            <table WIDTH="100%" style="margin-top:25px;">
                <tr>
                    <td colspan="3" style="font-size:0.7rem; text-align:center;opacity:0.5;">
                        “2021, Año de la solidaridad médica, administrativa y civil que colabora en la contingencia sanitaria del Covid19”
                    </td>
                    <td></td>
                    <td></td>
                </tr>    
                <tr style="">
                    <td style="font-size:0.8rem; width:40%; height:10px;opacity:0.5;">
                      <!--   <img src="{{ public_path("/images/logo1.png") }}" alt="BTS" style="width:15%; height: 78px;"> -->
                        Calle 6a.OrienteNo.455, Col. Central de Abastos <br>
                        C.P.78390/San Luis Potosí, S.L.P., México <br>
                        Tel. (444)1440120
                    </td>
                    <th colspan="" rowspan="" width="" height="" style="font-size:1rem;width:50%;">
                    </th>
                    
                    <td style="font-size:0.8rem;text-align:center;opacity:0.5;">
                        <img src="{{ public_path("/images/logo-ayunta.png") }}" alt="BTS" style="width:150px;">    
                    </td>            
                </tr>    
            </table>
        </div>
       <!--  <div id="footer" colspan="" rowspan="" width="80%" height="10%" style="">
            <img src="{{ public_path("/images/footer.jpg") }}" alt="BTS" style="width: 100%; height: 105px; opacity:0.5">
        </div> -->

        <div class="page_break">
            <table WIDTH="100%" style="">    
                <tr>
                    <td style="font-size:0.8rem;">
                        <img src="{{ public_path("/images/logo_estrella.png") }}" alt="BTS" style="width:18%; height: 100px; opacity:0.5;">
                    </td>
                    <th colspan="" rowspan="" width="64%" height="" style="font-size:1rem;text-align:center;">
                        DIRECCION GENERAL DE SEGURIDAD PÚBLICA  MUNICIPAL<br>
                        JUSTICIA CÍVICA <br> <br>
                        CONSTANCIA DE LECTURA DE DERECHOS
                    </th>
                    <td style="font-size:0.8rem;text-align:center;">
                        <img src="{{ public_path("/images/LOGOAZUL-VERTICAL.png") }}" alt="BTS" style="width:150px; height: 100px; opacity:0.5;">    
                    </td>                
                </tr>    
            </table>
            <table WIDTH="100%">    
                <tr>
                    <th colspan="" rowspan="" width="100%" height="10">
                    </th>            
                </tr>    
            </table>
            <table  WIDTH="100%">    
                <tr>
                    <td colspan="" rowspan="" width="340" style="">
                        En la ciudad de San Luis Potosí, capital del mismo nombre, con fecha 
                    </td>            
                    <td colspan="" rowspan="" width="120" style="border-bottom:1px solid black;">
                    </td>
                    <td colspan="" rowspan="" width="100" style="">
                        . Se hace 
                    </td>    
                </tr>
            </table>
        
            <table WIDTH="100%">    
                <tr>
                    <td colspan="" rowspan="" width="100%" height="5" style="text-align:justify;">
                    presente ante el C. Juez Calificador en turno al
                    </td>                
                </tr>       
            </table>

            <table WIDTH="100%">    
                <tr>
                    <td colspan="" rowspan="" width="5" height="" style="text-align:justify;">
                        C.
                    </td>
                    <td colspan="" rowspan="" width="300" height="" style="border-bottom:1px solid black;">

                    </td>                
                </tr>       
            </table>

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
                <tr>
                    <td colspan="" rowspan="" width="100%" height="5" style="text-align:justify;">
                        Así mismo el suscrito Juez Calificador procede a hacer del conocimiento del probable infractor los derechos que a su favor consagra en el artículo 37 
                        El Bando de Policía y Gobierno, siendo esto los siguientes:
                    </td>                
                </tr>       
            </table>
        
            <p style="text-align:justify;">
                <strong>I.-</strong> A que se presuma su inocencia; <br>
                <strong>II.-</strong> A que no se le incomunique de forma alguna en ningún momento, las personas retenidas podrán entrevistarse en forma privada y previa a su declaración con su abogado o persona de su confianza cuando así lo soliciten;<br>
                <strong>III.-</strong> A ser retenidas en espacios acordes a su edad, sexo,  y condiciones físicas; las personas retenidas permanecerán en espacios donde exclusivamente se encuentren personas de su mismo sexo;<br>
                <strong>IV.-</strong> A  no declarar respecto a los hechos si así lo desea;<br>
                <strong>V.-</strong> A que se informe acerca de los cargos que se le imputen, los hechos en los que se basan , así como los nombres de las personas o agentes que se los atribuyan, y respecto a los artículos de este bando a que se refiere la presunta violación cometida.<br>
                <strong>VI.-</strong> A  defenderse de las imputaciones que se le hagan, por si o por abogado;<br>
                <strong>VII.-</strong> A comunicares con un familiar y con su defensor cuando sea detenido, debiendo brindare el o la Juez calificador o la policía, todas las facilidades para lograrlo;<br>
                <strong>VIII.-</strong> A  que no se le tomen fotografías, huellas dactilares, ni ser objeto de cualquier acto tendiente al menoscabo de su seguridad y fomente la intimidación, ni será exhibido ante otras personas o medios de comunicación.<br>
                <strong>IX.-</strong> A estar presente en las audiencias que se realicen con motivo de la calificación de los actos que sé que se atribuyen, así como de que se le reciban las pruebas que ofrezcan para realizar su inocencia;<br>
                <strong>X.-</strong> A qué se le proporciones alimentos por sus familiares durante el cumplimiento de su arresto, y <br>   
                <strong>XI.-</strong> A quedar inmediatamente en libertad al momento de haber pagado la multa impuesta o haber cumplido con el arresto correspondiente.<br>
                <strong>XII.-</strong> Si fuese extranjero, se le permitirá la intervención del cónsul o algún representante de su país; si no demuestra su legal estancia en el país, con los documentos legales correspondientes, será puesto bajo responsabilidad de la secretaria de Gobernación.<br>
                <strong>XIII.-</strong> Cuando no hable español, o se trate de un sordomudo, y no cuente con traductor o interprete, se le proporcionara uno, sin cuya presencia el procedimiento administrativo no podrá dar inicio.
            </p>

            <table WIDTH="100%">    
                <tr>
                    <th colspan="" rowspan="" width="100%" style="border-bottom:1px solid black;">
                        CONSTE
                    </th>            
                </tr>    
            </table>
        
            <table WIDTH="100%">    
                <tr>
                    <td colspan="" rowspan="" width="50" style="">
                        
                    </td>     
                    <td colspan="" rowspan="" width="50" style="font-size:0.7rem; border-bottom:1px solid black;text-align:left;" height="30">
                    
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
                    <td colspan="" rowspan="" height="27" style="">
                        
                    </td>                      
                </tr>
            </table>

            <table WIDTH="100%">    
                <tr>
                    <th colspan="" rowspan="" width="80" height="5" style="font-size:0.7rem; border-top:1px solid black;text-align:center;">
                        PATRULLERO QUE PRESENTA
                    </th>
                    <th colspan="" rowspan="" width="20" height="5" style="">
                    
                    </th>
                    <th colspan="" rowspan="" width="80" height="5" style="font-size:0.7rem; border-top:1px solid black;text-align:center;">
                        PROBABLE INFRACTOR
                    </th>
                    <th colspan="" rowspan="" width="20" height="5" style="">
                    
                    </th>
                    <th colspan="" rowspan="" width="80" height="5" style="font-size:0.7rem; border-top:1px solid black;text-align:center;">
                        TESTIGO
                    </th>                
                </tr>       
            </table>
        </div>
        <div class="page_break">
            <table WIDTH="100%" style="">    
                <tr style="">
                    <td style="font-size:0.8rem;">
                        <img src="{{ public_path("/images/logo_estrella.png") }}" alt="BTS" style="width:18%; height: 100px; opacity:0.5;">
                    </td>
                    <th colspan="" rowspan="" width="50%" height="" style="font-size:0.8rem;">
                    </th>
                    <th style="font-size:0.8rem;width:13%;" >
                        
                    </th>
                    <td style="font-size:0.8rem;text-align:center;">
                        <img src="{{ public_path("/images/LOGOAZUL-VERTICAL.png") }}" alt="BTS" style="width:150px; height: 100px; opacity:0.5;">    
                    </td>                    
                </tr>    
            </table>
            <div style="border:solid black 1px;padding:20px;">
               <p style="text-align:center;font-size:0.8rem;">
                   <b>PASE DE SALIDA   PARA INFRACTOR</b>
               </p>
                <table WIDTH="100%">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.7rem;text-align:left;width:2%;" height="20">
                                FECHA
                            </th>
                            <th colspan="" rowspan="" style="width:7%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="font-size:0.7rem;width:5.5%;text-align:left;">
                                HORA DE SALIDA
                            </th>
                            <th colspan="" rowspan="" style="width:10%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="font-size:0.7rem;width:10%;text-align:center;border:solid black 1px;">
                                GARITA
                            </th>                
                        </tr>       
                </table>
                
                <table WIDTH="100%" style="margin-top:10px;">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.8rem;text-align:left; width:18%;">
                                NUMERO DE FOLIO
                            </th>
                            <th colspan="" rowspan="" style="width:25%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:50%;">
                            
                            </th>                
                        </tr>       
                </table>

                <table WIDTH="100%">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.8rem;text-align:left;">
                                SITUACIÓN FINAL:
                            </th>
                            <th colspan="" rowspan="" style="">
                                
                            </th>                
                        </tr>       
                </table>

                <table WIDTH="100%">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.8rem;text-align:left; width:10%;">
                                CUMPLIDO
                            </th>
                            <th colspan="" rowspan="" style="width:5%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:5%;font-size:0.8rem;">
                                MULTA
                            </th>
                            <th colspan="" rowspan="" style="width:5%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:10%;font-size:0.8rem;">
                                APERCIBIDO
                            </th>
                            <th colspan="" rowspan="" style="width:5%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:10%;font-size:0.8rem;">
                                NO RESPONSABLE
                            </th>
                            <th colspan="" rowspan="" style="border:solid black 1px;width:5%;">
                            
                            </th>                
                        </tr>       
                </table>
                
                <table WIDTH="100%">    
                    <tr>
                        <td colspan="" rowspan="" width="50" style="">
                            
                        </td>     
                        <td colspan="" rowspan="" width="50" style="font-size:0.7rem; border-bottom:1px solid black;text-align:left;" height="30">
                        
                        </td>
                        <td colspan="" rowspan="" width="50" style="">
                            
                        </td>                 
                    </tr>
                    
                </table>

                <table WIDTH="100%">    
                    <tr>
                        <th colspan="" rowspan="" width="100%" style="font-size:0.7rem;">
                        DETERMINO JUEZ CALIFICADOR
                        </th>            
                    </tr>    
                </table>
            </div>
            <!-- INICIO PASE SALIDA2 -->
            <div style="border:solid black 1px;padding:20px;">
                <p style="text-align:center;font-size:0.8rem;">
                    <b>PASE DE SALIDA PARA INFRACTOR</b>
                </p>
                <table WIDTH="100%">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.7rem;text-align:left;width:2%;" height="20">
                                FECHA
                            </th>
                            <th colspan="" rowspan="" style="width:7%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="font-size:0.7rem;width:5.5%;text-align:left;">
                                HORA DE SALIDA
                            </th>
                            <th colspan="" rowspan="" style="width:10%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="font-size:0.7rem;width:10%;text-align:center;border:solid black 1px;">
                                GARITA
                            </th>                
                        </tr>       
                </table>
                
                <table WIDTH="100%" style="margin-top:10px;">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.8rem;text-align:left; width:18%;">
                                NUMERO DE FOLIO
                            </th>
                            <th colspan="" rowspan="" style="width:25%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:50%;">
                            
                            </th>                
                        </tr>       
                </table>

                <table WIDTH="100%">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.8rem;text-align:left;">
                                SITUACIÓN FINAL:
                            </th>
                            <th colspan="" rowspan="" style="">
                                
                            </th>                
                        </tr>       
                </table>

                <table WIDTH="100%">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.8rem;text-align:left; width:10%;">
                                CUMPLIDO
                            </th>
                            <th colspan="" rowspan="" style="width:5%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:5%;font-size:0.8rem;">
                                MULTA
                            </th>
                            <th colspan="" rowspan="" style="width:5%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:10%;font-size:0.8rem;">
                                APERCIBIDO
                            </th>
                            <th colspan="" rowspan="" style="width:5%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:10%;font-size:0.8rem;">
                                NO RESPONSABLE
                            </th>
                            <th colspan="" rowspan="" style="border:solid black 1px;width:5%;">
                            
                            </th>                
                        </tr>       
                </table>
                
                <table WIDTH="100%">    
                    <tr>
                        <td colspan="" rowspan="" width="50" style="">
                            
                        </td>     
                        <td colspan="" rowspan="" width="50" style="font-size:0.7rem; border-bottom:1px solid black;text-align:left;" height="30">
                        
                        </td>
                        <td colspan="" rowspan="" width="50" style="">
                            
                        </td>                 
                    </tr>
                    
                </table>

                <table WIDTH="100%">    
                    <tr>
                        <th colspan="" rowspan="" width="100%" style="font-size:0.7rem;">
                        DETERMINO JUEZ CALIFICADOR
                        </th>            
                    </tr>    
                </table>
            </div>
            <!-- FIN PASE SALIDA2 -->

            <!-- INICIO PASE SALIDA3 -->
            <div style="border:solid black 1px;margin-bottom:30px;padding:20px;">
                <p style="text-align:center;font-size:0.8rem;">
                    <b>PASE DE SALIDA PARA INFRACTOR</b>
                </p>
                <table WIDTH="100%">    
                    <tr>
                        <th colspan="" rowspan="" style="font-size:0.7rem;text-align:left;width:2%;" height="20">
                            FECHA
                        </th>
                        <th colspan="" rowspan="" style="width:7%;border:solid black 1px;">
                        
                        </th>
                        <th colspan="" rowspan="" style="font-size:0.7rem;width:5.5%;text-align:left;">
                            HORA DE SALIDA
                        </th>
                        <th colspan="" rowspan="" style="width:10%;border:solid black 1px;">
                        
                        </th>
                        <th colspan="" rowspan="" style="font-size:0.7rem;width:10%;text-align:center;border:solid black 1px;">
                            GARITA
                        </th>                
                    </tr>       
                </table>
                
                <table WIDTH="100%" style="margin-top:10px;">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.8rem;text-align:left; width:18%;">
                                NUMERO DE FOLIO
                            </th>
                            <th colspan="" rowspan="" style="width:25%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:50%;">
                            
                            </th>                
                        </tr>       
                </table>

                <table WIDTH="100%">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.8rem;text-align:left;">
                                SITUACIÓN FINAL:
                            </th>
                            <th colspan="" rowspan="" style="">
                                
                            </th>                
                        </tr>       
                </table>

                <table WIDTH="100%">    
                        <tr>
                            <th colspan="" rowspan="" style="font-size:0.8rem;text-align:left; width:10%;">
                                CUMPLIDO
                            </th>
                            <th colspan="" rowspan="" style="width:5%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:5%;font-size:0.8rem;">
                                MULTA
                            </th>
                            <th colspan="" rowspan="" style="width:5%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:10%;font-size:0.8rem;">
                                APERCIBIDO
                            </th>
                            <th colspan="" rowspan="" style="width:5%;border:solid black 1px;">
                            
                            </th>
                            <th colspan="" rowspan="" style="width:10%;font-size:0.8rem;">
                                NO RESPONSABLE
                            </th>
                            <th colspan="" rowspan="" style="border:solid black 1px;width:5%;">
                            
                            </th>                
                        </tr>       
                </table>
                
                <table WIDTH="100%">    
                    <tr>
                        <td colspan="" rowspan="" width="50" style="">
                            
                        </td>     
                        <td colspan="" rowspan="" width="50" style="font-size:0.7rem; border-bottom:1px solid black;text-align:left;" height="30">
                        
                        </td>
                        <td colspan="" rowspan="" width="50" style="">
                            
                        </td>                 
                    </tr>
                    
                </table>

                <table WIDTH="100%">    
                    <tr>
                        <th colspan="" rowspan="" width="100%" style="font-size:0.7rem;">
                        DETERMINO JUEZ CALIFICADOR
                        </th>            
                    </tr>    
                </table>
            </div>
            <!-- FIN PASE SALIDA3 -->
            
            <!-- INICIO FORMATO MEDICO DELITO -->
                <div class="page_break">
                    <table WIDTH="100%" style="">    
                        <tr style="">
                            <td style="font-size:0.8rem;">
                                <img src="{{ public_path("/images/logo_estrella.png") }}" alt="BTS" style="width:18%; height: 100px; opacity:0.5;">
                            </td>
                            <th colspan="" rowspan="" width="50%" height="" style="font-size:0.8rem;">
                            </th>
                            <th style="font-size:0.8rem;width:13%;" >

                            </th>
                            <td style="font-size:0.8rem;text-align:center;">
                                <img src="{{ public_path("/images/LOGOAZUL-VERTICAL.png") }}" alt="BTS" style="width:150px; height: 100px;opacity:0.5;">    
                            </td>                
                        </tr>    
                    </table>

                    <p style="font-size:0.8rem;margin-left:10px;height:30px;text-align:right;">
                        <b>San Luis Potosí S. L. P. a _________ de __________del ____</b>
                    </p>

                    <p style="font-size:0.8rem;margin-left:10px;height:30px;text-align:left;">
                        <b>
                            MTRO. JUAN ANTONIO DE JESUS VILLA GUTIERREZ <br> 
                            COMISARIO DE LA DIRECCION GENERAL DE SEGURIDAD PÚBLICA MUNICIPAL.<br>                 	
                            P R E S E N T E.-
                        </b>                                                                                                                              
                    </p>

                    <br>

                    <p style="font-size:0.8rem;margin-left:10px;text-align:right;">
                        <b>ATN. MEDICO EN TURNO</b> 
                    </p>

                    <p style="font-size:1rem;margin-left:10px;height:30px;text-align:justify;">
                        Con fundamento en el Protocolo de Actuación del Consejo Nacional de Seguridad Pública del Primer Respondiente Punto II, de la acción previa a la puesta a disposición por el Primer Respondiente y en lo señalado en el Artículo 21 Apartado b) de la Constitución Política de los Estados Unidos Mexicanos, me permito dirigirme a usted para solicitar la certificación sobre: <br>

                        (  )<span>&nbsp;&nbsp;&nbsp;</span>Lesiones<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>(  )<span>&nbsp;&nbsp;&nbsp;</span>Integridad Física <br>

                        (  ) <span>&nbsp;&nbsp;&nbsp;</span>Influencia alcohólica<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> (  )<span>&nbsp;&nbsp;&nbsp;</span>Toxicomanía <br>

                        (  )<span>&nbsp;&nbsp;&nbsp;</span>Edad clínica probable
                    </p>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <p style="font-size:1rem;margin-left:10px;height:30px;">
                        Al C.- _______________________________________________________________________________
                        De _____Años de edad con domicilio en ___________________________________________________
                        Colonia _______________________________ de la Ciudad de__________________________________
                    </p>

                    <p style="font-size:1rem;margin-left:10px;height:30px;margin-top:40px;">
                        Se presenta por (motivo) ________________________________________________________________ 
                        <br>En calidad de: (  ) Victima 	(  ) Ofendido	(  ) Presunto responsable
                        <br>Trasladado en el C. R. P. _______________de la corporación___________________________________
                    </p>

                    <br>
                    <br>
                    <p style="font-size:0.8rem;text-align:center;">
                        <b>RESPETUOSAMENTE</b> 
                    </p>

                    <p style="font-size:1rem;text-align:center;margin-top:-12px;">
                        Nombre _______________________________________________________________________________
                        N IDENTIFICACION (INE/CUIP O INSTITUCIONAL).________________________________________
                        FIRMA________________________________________________________________________________
                        Autorización de la persona a certificar________________________________________________________
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
                        <td colspan="" rowspan="" width="200" style="font-size:0.7rem; border-bottom:1px solid black;text-align:left;" height="40">
                        
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
                            <th colspan="" rowspan="" width="300" height="50">
                                
                            </th>
                            <th colspan="" rowspan="" width="" height="50" style="">
                                
                            </th>
                            <th colspan="" rowspan="" width="300" height="50">
                                
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
                </div>
            <!-- FIN FORMATO MEDICO DELITO -->
        </div>

        <!-- INICIO FORMATO 1 -->
        <div class="page_break">
            <div style="padding:30px;margin-bottom:10px; border:1px solid black;">
                <table WIDTH="100%" style="">    
                    <tr style="">
                        <td style="font-size:0.8rem;">
                            <img src="{{ public_path("/images/logo_estrella.png") }}" alt="BTS" style="width:18%; height: 100px; opacity:0.5;">
                        </td>
                        <th colspan="" rowspan="" width="50%" height="" style="font-size:0.8rem;">
                        </th>
                        <th style="font-size:0.8rem;width:13%;" >
                            
                        </th>
                        <td style="font-size:0.8rem;text-align:center;">
                            <img src="{{ public_path("/images/LOGOAZUL-VERTICAL.png") }}" alt="BTS" style="width:150px; height: 100px;opacity:0.5;">    
                        </td>                
                    </tr>    
                </table>
                <p style="font-size:0.9rem;margin-left:10px;text-align:center;margin-top:30px;">
                    FOLIO____________SAN LUIS POTOSI., a______de________________del 20___ <br> 
                </p>

                <p style="font-size:0.9rem;margin-left:10px;margin-top:10px;margin-bottom:10px;">
                    C. PERITO MEDICO EN TURNO <br>
                    P R E S E N T E:	
                </p>

                <p style="font-size:0.9rem;margin-left:10px;">
                    Con fundamento en los artículos 32, 34 fracciones I, II y III del Bando de Policía y Gobierno del Municipio de San Luis Potosí, me permito dirigirme a Usted para solicitar la certificación de: 
                </p>
                <p style="font-size:0.9rem;margin-left:10px; text-align:center; margin-top:10px;margin-bottom:10px;">
                    Lesiones (  )   Integridad Física (  )   Influencia Alcohólica (  )  Toxicomanía (  )  Edad Clínica Probable (  )
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
            <!-- FIN FORMATO 1 -->
            
            <!-- INICIO FORMATO 2 -->
            <div style="padding:30px;margin-bottom:10px; border:1px solid black;">
                <table WIDTH="100%" style="">    
                    <tr style="">
                        <td style="font-size:0.8rem;">
                            <img src="{{ public_path("/images/logo1.png") }}" alt="BTS" style="width:15%; height: 78px;opacity:0.5;">
                        </td>
                        <th colspan="" rowspan="" width="50%" height="" style="font-size:0.8rem;">
                        </th>
                        <th style="font-size:0.8rem;width:13%;" >
                            
                        </th>
                        <td style="font-size:0.8rem;text-align:center;">
                            <img src="{{ public_path("/images/LOGOAZUL-VERTICAL.png") }}" alt="BTS" style="width:150px; height: 100px;opacity:0.5;">    
                        </td>                    
                    </tr>    
                </table>
                <p style="font-size:0.9rem;margin-left:10px;text-align:center;margin-top:30px;">
                    FOLIO____________SAN LUIS POTOSI., a______de________________del 20___ <br> 
                </p>

                <p style="font-size:0.9rem;margin-left:10px;margin-top:10px;margin-bottom:10px;">
                    C. PERITO MEDICO EN TURNO <br>
                    P R E S E N T E:	
                </p>

                <p style="font-size:0.9rem;margin-left:10px;">
                    Con fundamento en los artículos 32, 34 fracciones I, II y III del Bando de Policía y Gobierno del Municipio de San Luis Potosí, me permito dirigirme a Usted para solicitar la certificación de: 
                </p>
                <p style="font-size:0.9rem;margin-left:10px; text-align:center; margin-top:10px;margin-bottom:10px;">
                    Lesiones (  )   Integridad Física (  )   Influencia Alcohólica (  )  Toxicomanía (  )  Edad Clínica Probable (  )
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
            <!-- FIN FORMATO 2 -->
        </div>
    </body>
</html>