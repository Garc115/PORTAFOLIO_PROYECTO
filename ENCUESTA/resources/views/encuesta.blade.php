<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Encuesta de Perfiles Policiales - SSPC 2025</title>

  <style>
    /* Estilos base: copia rápida del look limpio y profesional */
    :root{
      --accent: #23345B;
      --primary: #F3B400; /* amarillo para acentos si quieres */
      --card-bg: #ffffff;
      --page-bg: #f2f4f8;
    }
    body{ font-family: "Titillium Web", Arial, Helvetica, sans-serif; background:var(--page-bg); margin:0; padding:24px 12px; color:#222; }
    .wrap{ max-width:1000px; margin:0 auto; }
    .header{
      display:flex; align-items:center; gap:1rem; margin-bottom:18px;
    }
    .title{ font-size:1.9rem; color:var(--accent); font-weight:800; font-style:italic; }
    .card{ background:var(--card-bg); border-radius:10px; padding:20px; box-shadow:0 6px 18px rgba(10,20,40,0.06); border:1px solid #e6e9ef; }
    h2.section-title{ font-size:1.0rem; color:var(--accent); margin:0 0 10px 0; text-align:center; }
    fieldset{ border:1px solid #e0e6ef; padding:14px 16px; margin-bottom:16px; border-radius:8px; }
    legend{ font-weight:700; color:var(--accent); padding:0 8px; }
    label.q{ display:block; margin-top:10px; font-weight:700; }
    .help{ font-weight:400; color:#666; font-size:0.9rem; }
    input[type="text"], input[type="number"], select, textarea{
      width:100%; padding:10px 12px; border-radius:6px; border:1px solid #cfd8ea; margin-top:6px;
      font-size:0.95rem;
    }
    .radio-group, .checkbox-group{ margin-top:8px; }
    .radio-group label, .checkbox-group label{ display:block; margin:6px 0; font-weight:500; cursor:pointer; }
    .two-cols{ display:grid; grid-template-columns:1fr 1fr; gap:12px; }
    .btn-row{ display:flex; gap:12px; justify-content:center; margin-top:10px; }
    button[type="submit"]{ background:var(--accent); color:#fff; padding:12px 18px; border:none; border-radius:8px; cursor:pointer; font-size:1rem; }
    .small{ font-size:0.9rem; color:#555; margin-top:6px; }
    @media (max-width:760px){ .two-cols{ grid-template-columns:1fr; } .header{ flex-direction:column; align-items:flex-start; } }
  </style>
</head>
<body>
  <div class="wrap">
    <div class="header">
      <div class="title">ENCUESTA DE PERFILES POLICIALES DEL MUNICIPIO DE SAN LUIS POTOSÍ, 2025</div>
    </div>

    <div style="
    background-color: #fff3cd;
    border: 1px solid #ffecb5;
    color: #664d03;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
    font-size: 15px;
    display: flex;
    align-items: center;
">
    <span style="font-size: 24px; margin-right: 10px;">⚠️</span>
    <div>
        <strong>¡Advertencia importante!</strong><br>
        Antes de enviar la encuesta, asegúrate de que todas tus respuestas sean correctas.
        <strong>Este formulario solo puede ser respondido una vez.</strong>
    </div>
</div>


    <div class="card">
      <h2 class="section-title">El presente cuestionario busca actualizar el perfil sociodemográfico, las necesidades de profesionalización y
        de fortalecimiento del servicio de carrera policial y analizar el clima organizacional, con base en la percepción de las las personas
         que laboran en la Secretaría de Seguridad y Protección Ciudadana del Municipio de San Luis Potosí. 

        La información proporcionada es estrictamente confidencial y no implica ninguna responsabilidad para las personas participantes.
        En consecuencia, no se les solicita ningún dato de identificación personal. 
        
        Por favor subraye la respuesta a cada reactivo de manera franca, con el objeto de que este ejercicio aporte lo necesario para su mejor aprovechamiento.
        </h2>

      <form method="POST" action="{{ route('encuesta.guardar') }}">
        @csrf

        <!-- 1 Edad -->
        <fieldset>
          <legend>1. Edad</legend>
          <label class="q">1. Edad</label>
          <input type="number" name="q1" min="16" max="120" required>
        </fieldset>

        <!-- 2 Sexo -->
        <fieldset>
          <legend>2. Sexo</legend>
          <label class="q">2. Sexo</label>
          <div class="radio-group">
            <label><input type="radio" name="q2" value="Hombre" required> Hombre</label>
            <label><input type="radio" name="q2" value="Mujer"> Mujer</label>
            <label><input type="radio" name="q2" value="Otro"> Otro</label>
          </div>
        </fieldset>

        <!-- 3 Estado civil -->
        <fieldset>
          <legend>3. Estado civil o conyugal</legend>
          <label class="q">3. Estado civil</label>
          <div class="radio-group">
            <label><input type="radio" name="q3" value="Soltera/o" required> Soltera (o)</label>
            <label><input type="radio" name="q3" value="Casada/o"> Casada (o)</label>
            <label><input type="radio" name="q3" value="Union libre"> Union libre</label>
            <label><input type="radio" name="q3" value="Divorciada/o"> Divorciada (o)</label>
            <label><input type="radio" name="q3" value="Viuda/o"> Viuda (o)</label>
          </div>
        </fieldset>

        <!-- 4 Escolaridad -->
        <fieldset>
          <legend>4. Grado máximo de estudios (con titulo o certificado oficial)</legend>
          <label class="q">4. ¿Cuál es su grado máximo de estudios?</label>
          <div class="radio-group">
            <label><input type="radio" name="q4" value="Primaria" required> Primaria</label>
            <label><input type="radio" name="q4" value="Secundaria"> Secundaria</label>
            <label><input type="radio" name="q4" value="Preparatoria o bachillerato"> Preparatoria o bachillerato</label>
            <label><input type="radio" name="q4" value="Carrera tecnica"> Carrera tecnica</label>
            <label><input type="radio" name="q4" value="Licenciatura"> Licenciatura</label>
            <label><input type="radio" name="q4" value="Maestria"> Maestria</label>
            <label><input type="radio" name="q4" value="Doctorado"> Doctorado</label>
          </div>
        </fieldset>

        <!-- 5 Carrera técnica -->
        <fieldset>
          <legend>5. En caso de carrera técnica</legend>
          <label class="q">5. En caso de contar con título de alguna carrera técnica, especifique cuál es ésta</label>
          <div class="radio-group">
            <label><input type="radio" name="q5" value="No aplica" required> No aplica</label>
            <label><input type="radio" name="q5" value="Computacion e informatica"> Computacion e informatica</label>
            <label><input type="radio" name="q5" value="Mantenimiento de maquinaria"> Mantenimiento de maquinaria</label>
            <label><input type="radio" name="q5" value="Operador de maquinaria pesada"> Operador de maquinaria pesada</label>
            <label><input type="radio" name="q5" value="Electricidad industrial"> Electricidad industrial</label>
            <label><input type="radio" name="q5" value="Sistemas de refrigeracion"> Sistemas de refrigeracion</label>
            <label><input type="radio" name="q5" value="Tecnico en sonido"> Tecnico en sonido</label>
            <label><input type="radio" name="q5" value="Tecnico en deporte y preparación física"> Tecnico en deporte y preparación fisica</label>
            <label><input type="radio" name="q5" value="Farmaceutico"> Farmaceutico</label>
            <label><input type="radio" name="q5" value="Nutricion"> Nutricion</label>
            <label><input type="radio" name="q5" value="Otra"> Otra</label>
          </div>
        </fieldset>

        <!-- 6 Licenciatura -->
        <fieldset>
          <legend>6. En caso de licenciatura</legend>
          <label class="q">6. En caso de estar titulado(a) de una licenciatura, indique cuál es</label>
          <div class="radio-group">
            <label><input type="radio" name="q6" value="Derecho" required> Derecho</label>
            <label><input type="radio" name="q6" value="Administracion"> Administracion</label>
            <label><input type="radio" name="q6" value="Contabilidad"> Contabilidad</label>
            <label><input type="radio" name="q6" value="Medicina"> Medicina</label>
            <label><input type="radio" name="q6" value="Veterinaria"> Veterinaria</label>
            <label><input type="radio" name="q6" value="Psicologia"> Psicologia</label>
            <label><input type="radio" name="q6" value="Trabajo Social"> Trabajo Social</label>
            <label><input type="radio" name="q6" value="Criminologia"> Criminologia</label>
            <label><input type="radio" name="q6" value="Sociologia"> Sociologia</label>
            <label><input type="radio" name="q6" value="Ingenieria civil"> Ingenieria civil</label>
            <label><input type="radio" name="q6" value="Informatica y sistemas"> Informatica y sistemas</label>
            <label><input type="radio" name="q6" value="Comunicacion"> Comunicacion</label>
            <label><input type="radio" name="q6" value="Diseño"> Diseño</label>
            <label><input type="radio" name="q6" value="Otra"> Otra</label>
          </div>
        </fieldset>

        <!-- 7 Aplicar conocimientos -->
        <fieldset>
          <legend>7. Aplicación de la profesión</legend>
          <label class="q">7. ¿Le gustaría aplicar sus conocimientos en alguna actividad institucional?</label>
          <div class="radio-group">
            <label><input type="radio" name="q7" value="Si" required> Si</label>
            <label><input type="radio" name="q7" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 8 Antigüedad -->
        <fieldset>
          <legend>8. Antigüedad en la institución</legend>
          <label class="q">8. Antigüedad (indique años)</label>
          <input type="number" name="q8_years" min="0" max="100" required>
          <label class="q">8. Antigüedad (indique meses)</label>
          <input type="number" name="q8_months" min="0" max="11" required>
        </fieldset>

        <!-- 9 Grado policial -->
        <fieldset>
          <legend>9. Grado policial</legend>
          <label class="q">9. ¿Cuál es su grado policial?</label>
          <div class="radio-group">
            <label><input type="radio" name="q9" value="No aplica, soy personal sin grado policial" required> No aplica, soy personal sin grado policial</label>
            <label><input type="radio" name="q9" value="Comisario"> Comisario</label>
            <label><input type="radio" name="q9" value="Inspector"> Inspector</label>
            <label><input type="radio" name="q9" value="Subinspector"> Subinspector</label>
            <label><input type="radio" name="q9" value="Oficial"> Oficial</label>
            <label><input type="radio" name="q9" value="Suboficial"> Suboficial</label>
            <label><input type="radio" name="q9" value="Policia Primero"> Policia Primero</label>
            <label><input type="radio" name="q9" value="Policia Segundo"> Policia Segundo</label>
            <label><input type="radio" name="q9" value="Policia Tercero"> Policia tercero</label>
            <label><input type="radio" name="q9" value="Policia"> Policia</label>
          </div>
        </fieldset>

        <!-- 10 Tiempo en grado -->
        <fieldset>
          <legend>10. Tiempo en el mismo grado</legend>
          <label class="q">10. ¿Cuánto tiempo lleva en el mismo grado (años)?</label>
          <input type="number" name="q10_years" min="0" max="100" required>
          <label class="q">10. ¿Cuánto tiempo lleva en el mismo grado (meses)?</label>
          <input type="number" name="q10_months" min="0" max="11" required>
        </fieldset>

        <!-- 11 Ascenso -->
        <fieldset>
          <legend>11. Ascensos</legend>
          <label class="q">11. ¿Ha tenido algun ascenso en su grado policial?</label>
          <div class="radio-group">
            <label><input type="radio" name="q11" value="Si" required> Si</label>
            <label><input type="radio" name="q11" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 12 Funciones -->
        <fieldset>
          <legend>12. Funciones en la institución</legend>
          <label class="q">12. Sus funciones son:</label>
          <div class="radio-group">
            <label><input type="radio" name="q12" value="Operativas" required> Operativas</label>
            <label><input type="radio" name="q12" value="Administrativas"> Administrativas</label>
          </div>
        </fieldset>

        <!-- 13 Hijos totales -->
        <fieldset>
          <legend>13. Hijos</legend>
          <label class="q">13. ¿Cuántos hijos o hijas tiene usted?</label>
          <div class="radio-group">
            <label><input type="radio" name="q13" value="Ninguno" required> Ninguno</label>
            <label><input type="radio" name="q13" value="1"> 1</label>
            <label><input type="radio" name="q13" value="2"> 2</label>
            <label><input type="radio" name="q13" value="3"> 3</label>
            <label><input type="radio" name="q13" value="4"> 4</label>
            <label><input type="radio" name="q13" value="5"> 5</label>
            <label><input type="radio" name="q13" value="6"> 6</label>
            <label><input type="radio" name="q13" value="7 o mas"> 7 o mas</label>
          </div>
        </fieldset>

        <!-- 14 Hijos menores -->
        <fieldset>
          <legend>14. Hijos menores de 18</legend>
          <label class="q">14. ¿Cuántos hijos o hijas menores de 18 años tiene usted?</label>
          <div class="radio-group">
            <label><input type="radio" name="q14" value="Ninguno" required> Ninguno</label>
            <label><input type="radio" name="q14" value="1"> 1</label>
            <label><input type="radio" name="q14" value="2"> 2</label>
            <label><input type="radio" name="q14" value="3"> 3</label>
            <label><input type="radio" name="q14" value="4"> 4</label>
            <label><input type="radio" name="q14" value="5"> 5</label>
            <label><input type="radio" name="q14" value="6"> 6</label>
            <label><input type="radio" name="q14" value="7 o mas"> 7 o mas</label>
          </div>
        </fieldset>

        <!-- 15 Hijos con discapacidad -->
        <fieldset>
          <legend>15. Hijos con discapacidad</legend>
          <label class="q">15. ¿Alguno de sus hijos o hijas padece alguna discapacidad?</label>
          <div class="radio-group">
            <label><input type="radio" name="q15" value="Si" required> Si</label>
            <label><input type="radio" name="q15" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 16 Tipo discapacidad -->
        <fieldset>
          <legend>16. Tipo de discapacidad (si aplica)</legend>
          <label class="q">16. Si contestó afirmativamente, indique ¿cuál es la discapacidad?</label>
          <div class="radio-group">
            <label><input type="radio" name="q16" value="Discapacidad motriz"> Discapacidad motriz (dificultad para caminar)</label>
            <label><input type="radio" name="q16" value="Discapacidad visual"> Discapacidad visual</label>
            <label><input type="radio" name="q16" value="Discapacidad auditiva"> Discapacidad auditiva</label>
            <label><input type="radio" name="q16" value="Discapacidad de habla o comunicacion"> Discapacidad de habla o comunicacion</label>
            <label><input type="radio" name="q16" value="TEA"> Trastornos del espectro autista (TEA)</label>
            <label><input type="radio" name="q16" value="TDAH"> Trastorno por deficit de atención e hiperactividad (TDAH)</label>
            <label><input type="radio" name="q16" value="Síndrome de Dawn"> Sindrome de Dawn</label>
            <label><input type="radio" name="q16" value="Otro"> Otro</label>
          </div>
        </fieldset>

        <!-- 17 Número de dependientes -->
        <fieldset>
          <legend>17. Dependientes económicos</legend>
          <label class="q">17. ¿Cuál es el número de personas que dependen económicamente de usted?</label>
          <div class="radio-group">
            <label><input type="radio" name="q17" value="Ninguna persona" required> Ninguna persona</label>
            <label><input type="radio" name="q17" value="1 persona"> 1 persona</label>
            <label><input type="radio" name="q17" value="2 personas"> 2 personas</label>
            <label><input type="radio" name="q17" value="3 personas"> 3 personas</label>
            <label><input type="radio" name="q17" value="4 personas"> 4 personas</label>
            <label><input type="radio" name="q17" value="5 personas"> 5 personas</label>
            <label><input type="radio" name="q17" value="6 personas"> 6 personas</label>
            <label><input type="radio" name="q17" value="7 personas"> 7 personas</label>
            <label><input type="radio" name="q17" value="8 personas"> 8 personas</label>
            <label><input type="radio" name="q17" value="9 personas"> 9 personas</label>
            <label><input type="radio" name="q17" value="10 o mas personas"> 10 o mas personas</label>
          </div>
        </fieldset>

        <!-- 18 Actividad extra -->
        <fieldset>
          <legend>18. Actividad adicional</legend>
          <label class="q">18. Además de su actividad en la SSPC, ¿realiza alguna otra actividad para generar ingresos adicionales?</label>
          <div class="radio-group">
            <label><input type="radio" name="q18" value="Si" required> Si</label>
            <label><input type="radio" name="q18" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 19 Condecoraciones -->
        <fieldset>
          <legend>19. Condecoraciones</legend>
          <label class="q">19. ¿Ha recibido alguna condecoración o medalla por actos de servicio o méritos?</label>
          <div class="radio-group">
            <label><input type="radio" name="q19" value="Si" required> Si</label>
            <label><input type="radio" name="q19" value="Si, varias veces"> Si, varias veces</label>
            <label><input type="radio" name="q19" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 20 Estímulos económicos -->
        <fieldset>
          <legend>20. Estímulos económicos</legend>
          <label class="q">20. ¿Ha recibido en los últimos doce meses un estímulo económico como reconocimiento a actos de servicio?</label>
          <div class="radio-group">
            <label><input type="radio" name="q20" value="Si, mas de cinco veces" required> Si, mas de cinco veces</label>
            <label><input type="radio" name="q20" value="Si, entre dos y cinco veces"> Si, entre dos y cinco veces</label>
            <label><input type="radio" name="q20" value="Si, una vez"> Si, una vez</label>
            <label><input type="radio" name="q20" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 21 Reconocimiento familia -->
        <fieldset>
          <legend>21. Reconocimiento familiar</legend>
          <label class="q">21. ¿Usted considera que su trabajo es reconocido y valorado por su familia?</label>
          <div class="radio-group">
            <label><input type="radio" name="q21" value="Si" required> Si</label>
            <label><input type="radio" name="q21" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 22 Reconocimiento sociedad -->
        <fieldset>
          <legend>22. Reconocimiento social</legend>
          <label class="q">22. ¿Usted considera que su trabajo es reconocido y valorado por la sociedad?</label>
          <div class="radio-group">
            <label><input type="radio" name="q22" value="Si" required> Si</label>
            <label><input type="radio" name="q22" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 23 Reconocimiento institución -->
        <fieldset>
          <legend>23. Reconocimiento institucional</legend>
          <label class="q">23. ¿Usted considera que su trabajo es reconocido y valorado por la Institución?</label>
          <div class="radio-group">
            <label><input type="radio" name="q23" value="Si" required> Si</label>
            <label><input type="radio" name="q23" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 24 Igualdad ingreso -->
        <fieldset>
          <legend>24. Igualdad de oportunidades: ingreso</legend>
          <label class="q">24. ¿Usted considera que, en la Institución, las mujeres y los hombres tienen igualdad de oportunidades para el ingreso?</label>
          <div class="radio-group">
            <label><input type="radio" name="q24" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="q24" value="Con frecuencia"> Con frecuencia</label>
            <label><input type="radio" name="q24" value="Algunas veces"> Algunas veces</label>
            <label><input type="radio" name="q24" value="Nunca"> Nunca</label>
          </div>
        </fieldset>

        <!-- 25 Igualdad capacitación -->
        <fieldset>
          <legend>25. Igualdad de oportunidades: capacitación</legend>
          <label class="q">25. ¿Usted considera que, en la Institución, las mujeres y los hombres tienen igualdad de oportunidades para recibir capacitación?</label>
          <div class="radio-group">
            <label><input type="radio" name="q25" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="q25" value="Con frecuencia"> Con frecuencia</label>
            <label><input type="radio" name="q25" value="Algunas veces"> Algunas veces</label>
            <label><input type="radio" name="q25" value="Nunca"> Nunca</label>
          </div>
        </fieldset>

        <!-- 26 Igualdad asignación tareas -->
        <fieldset>
          <legend>26. Igualdad de oportunidades: asignación de tareas</legend>
          <label class="q">26. ¿Usted considera que, en la Institución, las mujeres y los hombres tienen igualdad de oportunidades en la asignación de tareas y funciones?</label>
          <div class="radio-group">
            <label><input type="radio" name="q26" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="q26" value="Con frecuencia"> Con frecuencia</label>
            <label><input type="radio" name="q26" value="Algunas veces"> Algunas veces</label>
            <label><input type="radio" name="q26" value="Nunca"> Nunca</label>
          </div>
        </fieldset>

        <!-- 27 Embarazo discriminación -->
        <fieldset>
          <legend>27. Despido/renuncia por embarazo</legend>
          <label class="q">27. ¿Usted considera que alguna mujer ha sido despedida, obligada a renunciar o discriminada por estar embarazada?</label>
          <div class="radio-group">
            <label><input type="radio" name="q27" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="q27" value="Con frecuencia"> Con frecuencia</label>
            <label><input type="radio" name="q27" value="Algunas veces"> Algunas veces</label>
            <label><input type="radio" name="q27" value="Nunca"> Nunca</label>
          </div>
        </fieldset>

        <!-- 28 Competencia justa -->
        <fieldset>
          <legend>28. Competencia por mejorar condiciones</legend>
          <label class="q">28. ¿Usted considera que, en la Institución, la competencia por mejorar en las condiciones laborales y de desempeño del servicio son justas y equitativas?</label>
          <div class="radio-group">
            <label><input type="radio" name="q28" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="q28" value="Con frecuencia"> Con frecuencia</label>
            <label><input type="radio" name="q28" value="Algunas veces"> Algunas veces</label>
            <label><input type="radio" name="q28" value="Nunca"> Nunca</label>
          </div>
        </fieldset>

        <!-- 29 Represalias -->
        <fieldset>
          <legend>29. Represalias</legend>
          <label class="q">29. ¿Usted considera que en su trabajo ha recibido represalias sin razón o amenazas en relación con su permanencia en el trabajo?</label>
          <div class="radio-group">
            <label><input type="radio" name="q29" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="q29" value="Con frecuencia"> Con frecuencia</label>
            <label><input type="radio" name="q29" value="Algunas veces"> Algunas veces</label>
            <label><input type="radio" name="q29" value="Nunca"> Nunca</label>
          </div>
        </fieldset>

        <!-- 30 Mandos tratan con respeto -->
        <fieldset>
          <legend>30. Respeto de mandos</legend>
          <label class="q">30. ¿Usted siente que los mandos le tratan con respeto?</label>
          <div class="radio-group">
            <label><input type="radio" name="q30" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="q30" value="Con frecuencia"> Con frecuencia</label>
            <label><input type="radio" name="q30" value="Algunas veces"> Algunas veces</label>
            <label><input type="radio" name="q30" value="Nunca"> Nunca</label>
          </div>
        </fieldset>

        <!-- 31 Compañeros tratan con respeto -->
        <fieldset>
          <legend>31. Respeto de compañeros</legend>
          <label class="q">31. ¿Usted siente que sus compañeros le tratan con respeto?</label>
          <div class="radio-group">
            <label><input type="radio" name="q31" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="q31" value="Con frecuencia"> Con frecuencia</label>
            <label><input type="radio" name="q31" value="Algunas veces"> Algunas veces</label>
            <label><input type="radio" name="q31" value="Nunca"> Nunca</label>
          </div>
        </fieldset>

        <!-- 32 ¿Usted trata con respeto? -->
        <fieldset>
          <legend>32. Respeto hacia otros</legend>
          <label class="q">32. ¿Usted trata con respeto a sus compañeros, mandos o subordinados?</label>
          <div class="radio-group">
            <label><input type="radio" name="q32" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="q32" value="Con frecuencia"> Con frecuencia</label>
            <label><input type="radio" name="q32" value="Algunas veces"> Algunas veces</label>
            <label><input type="radio" name="q32" value="Nunca"> Nunca</label>
          </div>
        </fieldset>

        <!-- 33 Claridad órdenes -->
        <fieldset>
          <legend>33. Comunicación órdenes</legend>
          <label class="q">33. ¿Usted considera que, en la Institución, las órdenes e instrucciones se transmiten de manera clara y precisa?</label>
          <div class="radio-group">
            <label><input type="radio" name="q33" value="Siempre" required> Siempre</label>
            <label><input type="radio" name="q33" value="Con frecuencia"> Con frecuencia</label>
            <label><input type="radio" name="q33" value="Algunas veces"> Algunas veces</label>
            <label><input type="radio" name="q33" value="Nunca"> Nunca</label>
          </div>
        </fieldset>

        <!-- 34 Víctima malos tratos -->
        <fieldset>
          <legend>34. Víctima de malos tratos o discriminación</legend>
          <label class="q">34. ¿Usted ha sido víctima de malos tratos o discriminación durante su trabajo?</label>
          <div class="radio-group">
            <label><input type="radio" name="q34" value="Si" required> Si</label>
            <label><input type="radio" name="q34" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 35 ¿Quién lo cometió? -->
        <fieldset>
          <legend>35. Autor del maltrato (si aplica)</legend>
          <label class="q">35. En caso de haber sido víctima, ¿quién lo cometió?</label>
          <div class="radio-group">
            <label><input type="radio" name="q35" value="Un ciudadano o ciudadana" required> Un ciudadano o ciudadana</label>
            <label><input type="radio" name="q35" value="Un mando"> Un mando</label>
            <label><input type="radio" name="q35" value="Un compañero o compañera de trabajo"> Un compañero o compañera de trabajo</label>
          </div>
        </fieldset>

        <!-- 36 Comentarios sexistas -->
        <fieldset>
          <legend>36. Comentarios sugestivos o sexistas</legend>
          <label class="q">36. ¿Ha recibido comentarios sugestivos o sexistas, miradas obscenas o peticiones relacionadas con asuntos sexuales?</label>
          <div class="radio-group">
            <label><input type="radio" name="q36" value="Si" required> Si</label>
            <label><input type="radio" name="q36" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 37 Contacto físico sexual no deseado -->
        <fieldset>
          <legend>37. Contacto físico sexual no deseado</legend>
          <label class="q">37. ¿Ha vivido algún contacto físico sexual no deseado en su trabajo?</label>
          <div class="radio-group">
            <label><input type="radio" name="q37" value="Si" required> Si</label>
            <label><input type="radio" name="q37" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 38 Proposiciones sexuales -->
        <fieldset>
          <legend>38. Proposiciones o peticiones para relación sexual</legend>
          <label class="q">38. ¿Ha recibido proposiciones o peticiones directas/indirectas para establecer una relación sexual?</label>
          <div class="radio-group">
            <label><input type="radio" name="q38" value="Si" required> Si</label>
            <label><input type="radio" name="q38" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 39 Amenazas por favores sexuales -->
        <fieldset>
          <legend>39. Amenazas por favores sexuales</legend>
          <label class="q">39. ¿Ha recibido amenazas de daño o castigos por no acceder a favores sexuales?</label>
          <div class="radio-group">
            <label><input type="radio" name="q39" value="Si" required> Si</label>
            <label><input type="radio" name="q39" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 40 Acoso laboral -->
        <fieldset>
          <legend>40. Acoso laboral</legend>
          <label class="q">40. ¿Siente que ha sido objeto de acoso laboral (órdenes injustificadas, expresiones agresivas, ignorar su actividad, malos tratos)?</label>
          <div class="radio-group">
            <label><input type="radio" name="q40" value="Si" required> Si</label>
            <label><input type="radio" name="q40" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 41 Formación inicial -->
        <fieldset>
          <legend>41. Formación inicial policial</legend>
          <label class="q">41. ¿Cuenta con estudios de formación inicial policial en Academia?</label>
          <div class="radio-group">
            <label><input type="radio" name="q41" value="Si" required> Si</label>
            <label><input type="radio" name="q41" value="No"> No</label>
            <label><input type="radio" name="q41" value="No aplica"> No aplica</label>
          </div>
        </fieldset>

        <!-- 42 Cursos de actualización -->
        <fieldset>
          <legend>42. Cursos en últimos 12 meses</legend>
          <label class="q">42. ¿Ha recibido cursos de actualización o especialización en los últimos doce meses?</label>
          <div class="radio-group">
            <label><input type="radio" name="q42" value="Si" required> Si</label>
            <label><input type="radio" name="q42" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 43 Tema de capacitación preferido -->
        <fieldset>
          <legend>43. Tema de capacitación preferido</legend>
          <label class="q">43. ¿En qué tema le gustaría más recibir capacitación? (seleccione solo uno)</label>
          <div class="radio-group">
            <label><input type="radio" name="q43" value="Liderazgo y gerencia policial" required> Liderazgo y gerencia policial</label>
            <label><input type="radio" name="q43" value="Investigacion del delito"> Investigacion del delito</label>
            <label><input type="radio" name="q43" value="Primer respondiente"> Primer respondiente</label>
            <label><input type="radio" name="q43" value="Uso de la fuerza"> Uso de la fuerza</label>
            <label><input type="radio" name="q43" value="Policia orientada a la solucion de problemas"> Policia orientada a la solucion de problemas</label>
            <label><input type="radio" name="q43" value="Derechos humanos y grupos vulnerables"> Derechos humanos y grupos vulnerables</label>
            <label><input type="radio" name="q43" value="Criminologia y prevencion del delito"> Criminologia y prevencion del delito</label>
          </div>
        </fieldset>

        <!-- 44 Practica deporte -->
        <fieldset>
          <legend>44. Actividad física</legend>
          <label class="q">44. ¿Practica regularmente algún deporte o actividad física?</label>
          <div class="radio-group">
            <label><input type="radio" name="q44" value="Si" required> situaciones?</label>
            <label><input type="radio" name="q44" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 45 ¿Cuál deporte? -->
        <fieldset>
          <legend>45. Deporte principal</legend>
          <label class="q">45. En caso afirmativo, ¿cuál deporte o actividad física realiza en mayor medida? (marque sólo una)</label>
          <div class="radio-group">
            <label><input type="radio" name="q45" value="Futbol"> Futbol</label>
            <label><input type="radio" name="q45" value="Basquetbol"> Basquetbol</label>
            <label><input type="radio" name="q45" value="Voleibol"> Voleibol</label>
            <label><input type="radio" name="q45" value="Pesas"> Pesas</label>
            <label><input type="radio" name="q45" value="Cardiovasculares"> Cardiovasculares (caminadora, eliptica o bicicleta)</label>
            <label><input type="radio" name="q45" value="Caminar intensamente"> Caminar intensamente más de 30 minutos</label>
            <label><input type="radio" name="q45" value="Correr"> Correr</label>
            <label><input type="radio" name="q45" value="Box o artes marciales"> Box o artes marciales</label>
            <label><input type="radio" name="q45" value="Entrenamiento funcional"> Entrenamiento funcional</label>
            <label><input type="radio" name="q45" value="Bicicleta"> Bicicleta</label>
            <label><input type="radio" name="q45" value="Tenis"> Tenis</label>
            <label><input type="radio" name="q45" value="Ping pong"> Ping pong</label>
            <label><input type="radio" name="q45" value="Yoga"> Yoga</label>
            <label><input type="radio" name="q45" value="Natacion"> Natacion</label>
            <label><input type="radio" name="q45" value="Otro"> Otro</label>
          </div>
        </fieldset>

        <!-- 46 Enfermedades -->
        <fieldset>
          <legend>46. Enfermedades</legend>
          <label class="q">46. ¿Padece alguna de las enfermedades de la siguiente lista? (marque la que corresponda)</label>
          <div class="radio-group">
            <label><input type="radio" name="q46_single" value="Diabetes"> Diabetes</label>
            <label><input type="radio" name="q46_single" value="Hipertension"> Hipertension</label>
            <label><input type="radio" name="q46_single" value="Enfermedades respiratorias"> Enfermedades respiratorias (EPOC, enfisema)</label>
            <label><input type="radio" name="q46_single" value="Enfermedades renales"> Enfermedades renales</label>
            <label><input type="radio" name="q46_single" value="Cirrosis o hepatitis"> Cirrosis, hepatitis</label>
            <label><input type="radio" name="q46_single" value="Anemia"> Anemia</label>
            <label><input type="radio" name="q46_single" value="Cancer"> Cancer</label>
            <label><input type="radio" name="q46_single" value="Estres crónico"> Estres crónico</label>
            <label><input type="radio" name="q46_single" value="Enfermedades del corazon"> Enfermedades del corazon</label>
            <label><input type="radio" name="q46_single" value="Ninguna de las anteriores"> Ninguna de las anteriores</label>
            <label><input type="radio" name="q46_single" value="Varias de las anteriores"> Varias de las anteriores</label>
          </div>
        </fieldset>

        <!-- 47 Síntomas/efectos en los últimos 12 meses (multiple) -->
        <fieldset>
          <legend>47. Síntomas / Situaciones en últimos 12 meses</legend>
          <label class="q">47. En los últimos 12 meses, ¿ha experimentado alguna de las siguientes situaciones? (marque todas las que correspondan)</label>
          <div class="checkbox-group">
            <label><input type="checkbox" name="q47[]" value="Falta de apetito"> Falta de apetito</label>
            <label><input type="checkbox" name="q47[]" value="Aumento o disminucion de peso"> Aumento o disminucion de peso</label>
            <label><input type="checkbox" name="q47[]" value="Impulsividad o falta de control"> Impulsividad o falta de control en sus reacciones</label>
            <label><input type="checkbox" name="q47[]" value="Irritabilidad, problemas de sueño"> Irritabilidad, enojo, problemas de sueño, ansiedad, nerviosismo, fatiga</label>
            <label><input type="checkbox" name="q47[]" value="Problemas auditivos o del habla"> Problemas auditivos o del habla</label>
            <label><input type="checkbox" name="q47[]" value="Problemas respiratorios"> Problemas respiratorios (gripe frecuente, dificultad para respirar, fiebre)</label>
            <label><input type="checkbox" name="q47[]" value="Paralisis o perdida de sensibilidad"> Paralisis o perdida de sensibilidad en extremidades</label>
            <label><input type="checkbox" name="q47[]" value="Problemas estomacales"> Problemas estomacales (diarrea, colitis, ulcera, gastritis)</label>
            <label><input type="checkbox" name="q47[]" value="Fracturas por accidente"> Fracturas a causa de algun accidente</label>
            <label><input type="checkbox" name="q47[]" value="Depresion"> Depresion</label>
            <label><input type="checkbox" name="q47[]" value="Estres"> Estres</label>
            <label><input type="checkbox" name="q47[]" value="Ninguna de las anteriores"> Ninguna de las anteriores</label>
          </div>
        </fieldset>

        <!-- 48 Futuro laboral a 2 años -->
        <fieldset>
          <legend>48. Futuro laboral</legend>
          <label class="q">48. ¿Se ve a sí mismo trabajando en la Secretaría dentro de dos años?</label>
          <div class="radio-group">
            <label><input type="radio" name="q48" value="Si" required> Si</label>
            <label><input type="radio" name="q48" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 49 Satisfacción laboral -->
        <fieldset>
          <legend>49. Satisfacción laboral</legend>
          <label class="q">49. ¿Se encuentra satisfecho con su trabajo en la Secretaría de Seguridad y Protección Ciudadana?</label>
          <div class="radio-group">
            <label><input type="radio" name="q49" value="Si" required> Si</label>
            <label><input type="radio" name="q49" value="No"> No</label>
          </div>
        </fieldset>

        <!-- 50 ¿Mejor institución que hace 3 años? -->
        <fieldset>
          <legend>50. Percepción institucional</legend>
          <label class="q">50. ¿Siente que la Secretaría es una mejor institución que hace tres años?</label>
          <div class="radio-group">
            <label><input type="radio" name="q50" value="Si" required> Si</label>
            <label><input type="radio" name="q50" value="No"> No</label>
          </div>
        </fieldset>

        <div class="btn-row">
          <button type="submit">Enviar Encuesta</button>
        </div>

      </form>
    </div>
  </div>

</body>
</html>