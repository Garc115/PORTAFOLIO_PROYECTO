@extends('layouts.app')


@section('content')
<main class="mt-5 pt-3">
    <div class="container-fluid">
<div class="row justify-content-center" style="margin-top:1em">
    <div class="col-11">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>.col-4 input[type="number"] {width: 100%; padding: 10px; font-size: 16px;} 
            .col-12 input[type="datetime-local"] {width: 100%;padding: 10px;font-size: 16px;}
            .col-6 input[type="number"], .col-6 select {width: 48%;padding: 10px;font-size: 16px;margin-right: 2%;}

            table {width: 100%; border-collapse: collapse; border-radius: 10px; overflow: hidden; margin: 20px 0;}
            th, td {padding: 15px;text-align: center;border: 1px solid #add8e6; border-radius: 15px;}
            th, tr{text-align: center;}
            td input[type="text"] {width: 100%; box-sizing: border-box; padding: 10px; border: 1px solid #add8e6; border-radius: 5px;}
            td[contenteditable="true"] {background-color: #e1e1e1}
        </style>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        </head>

{{-- resources/views/arrested_belongings/register.blade.php --}}
{{-- Partial: bloque base (instancia #1) que será incluido dentro del <form> en create.blade.php --}}
    <div id="formsContainer">
        <div class="arrested-block card p-3 mb-4 bg-light" data-instance="1" data-base-id="1">
            <div class="row">
                <div class="col-12 text-center" style="font-family:Soho Std;font-size:1.4em">
                    Infractor <span class="instance-label">#1</span>
                </div>
            </div>
    
            <div class="row justify-content-center" style="margin-top:0.5em">
                {{-- IMPORTANCIA (solo cliente; no tiene name) --}}
                <div class="col-3">
                    <!-- reemplaza el select actual por este -->
<label for="importancia_select_1" class="form-label">Importancia:</label>
<select id="importancia_select_1" name="importancia" class="form-select importancia-field" required>
    <option value="1">Barandilla</option>
    <option value="0">C. Medico</option>
</select>

                </div>
    
                {{-- FOLIO --}}
                <div class="col-3">
                    <label for="log_sheet_id_1" class="form-label">Folio:</label>
                    <input id="log_sheet_id_1" name="log_sheet_id" type="text" class="form-control log-sheet-field"
                        value="{{ old('log_sheet_id', $arrestedFault->arrestedBelonging->log_sheet_id ?? '') }}">
                </div>
    
                {{-- Ingresó por --}}
                <div class="col-3">
                    <label for="arrest_type_1" class="form-label">Ingresó por:</label>
                    <select id="arrest_type_1" name="arrest_type" class="form-select">
                        <option value="Falta administrativa" {{ (old('arrest_type') == 'Falta administrativa' || (isset($arrestedFault->arrestedBelonging->arrest_type) && $arrestedFault->arrestedBelonging->arrest_type == 'Falta administrativa')) ? 'selected' : '' }}>Falta administrativa</option>
                        <option value="Delito" {{ (old('arrest_type') == 'Delito' || (isset($arrestedFault->arrestedBelonging->arrest_type) && $arrestedFault->arrestedBelonging->arrest_type == 'Delito')) ? 'selected' : '' }}>Delito</option>
                        <option value="Certificación" {{ (old('arrest_type') == 'Certificación' || (isset($arrestedFault->arrestedBelonging->arrest_type) && $arrestedFault->arrestedBelonging->arrest_type == 'Certificación')) ? 'selected' : '' }}>Certificación</option>
                    </select>
                </div>
    
                {{-- CORPORACIÓN --}}
                <div class="col-3">
                    <label for="corporation_1" class="form-label">CORPORACIÓN:</label>
                    <select id="corporation_1" name="corporation" class="form-select">
                        <option value="GUARDIA CIVIL ESTATAL" {{ (old('corporation') == 'GUARDIA CIVIL ESTATAL' || (isset($arrestedFault->arrestedBelonging->corporation) && $arrestedFault->arrestedBelonging->corporation == 'GUARDIA CIVIL ESTATAL')) ? 'selected' : '' }}>GUARDIA CIVIL ESTATAL</option>
                        <option value="GUARDIA MUNICIPAL SSPCSLP" {{ (old('corporation') == 'GUARDIA MUNICIPAL SSPCSLP' || (isset($arrestedFault->arrestedBelonging->corporation) && $arrestedFault->arrestedBelonging->corporation == 'GUARDIA MUNICIPAL SSPCSLP')) ? 'selected' : '' }}>GUARDIA MUNICIPAL SSPCSLP</option>
                        <option value="POLICIA VIAL SSPCSLP" {{ (old('corporation') == 'POLICIA VIAL SSPCSLP' || (isset($arrestedFault->arrestedBelonging->corporation) && $arrestedFault->arrestedBelonging->corporation == 'POLICIA VIAL SSPCSLP')) ? 'selected' : '' }}>POLICIA VIAL SSPCSLP</option>
                        <option value="POLICIA DE INVESTIGACION" {{ (old('corporation') == 'POLICIA DE INVESTIGACION' || (isset($arrestedFault->arrestedBelonging->corporation) && $arrestedFault->arrestedBelonging->corporation == 'POLICIA DE INVESTIGACION')) ? 'selected' : '' }}>POLICIA DE INVESTIGACION</option>
                        <option value="GUARDIA NACIONAL" {{ (old('corporation') == 'GUARDIA NACIONAL' || (isset($arrestedFault->arrestedBelonging->corporation) && $arrestedFault->arrestedBelonging->corporation == 'GUARDIA NACIONAL')) ? 'selected' : '' }}>GUARDIA NACIONAL</option>
                        <option value="PUBI" {{ (old('corporation') == 'PUBI' || (isset($arrestedFault->arrestedBelonging->corporation) && $arrestedFault->arrestedBelonging->corporation == 'PUBI')) ? 'selected' : '' }}>PUBI</option>
                    </select>
                </div>


                <div class="col-3">
                    <label for="num_part" class="form-label">Numero de partida:</label>
                    <input id="num_part" name="num_part" type="number" class="form-control" required
                        value="{{ old('num_part') ? old('num_part') : (isset($arrestedFault->arrestedBelonging->num_part) ? $arrestedFault->arrestedBelonging->num_part : '') }}">
                </div>

            </div>
    
            <br>
    
            <div class="row justify-content-center">
                <div class="col-3">
                    <label for="arrest_date_1" class="form-label">Fecha de arresto:</label>
                    <input id="arrest_date_1" name="arrest_date" type="date" class="form-control" value="{{ old('arrest_date', $arrestedFault->arrestedBelonging->arrest_date ?? '') }}">
                </div>
    
                <div class="col-3">
                    <label for="arrest_time_1" class="form-label">Hora de arresto:</label>
                    <input id="arrest_time_1" name="arrest_time" type="time" class="form-control" value="{{ old('arrest_time', $arrestedFault->arrestedBelonging->arrest_time ?? '') }}">
                </div>
    
                <div class="col-3">
                    <label for="arrest_birth_1" class="form-label">Fecha de nacimiento</label>
                    <input id="arrest_birth_1" name="arrest_birth" type="date" class="form-control birth-field" value="{{ old('arrest_birth', $arrestedFault->arrestedBelonging->arrest_birth ?? '') }}">
                </div>
    
                <div class="col-3">
                    <label for="place_detention_1" class="form-label">Lugar de detención:</label>
                    <input id="place_detention_1" name="place_detention" type="text" class="form-control" value="{{ old('place_detention', $arrestedFault->place_detention ?? '') }}">
                </div>
            </div>
    
            <br>
    
            <div class="row justify-content-center" style="margin-top:1em">
                <div class="col-4">
                    <label for="arrested_name_1" class="form-label">Nombre(s):</label>
                    <input id="arrested_name_1" name="arrested_name" type="text" class="form-control" maxlength="255" value="{{ old('arrested_name', $arrestedFault->arrested_name ?? '') }}">
                </div>
    
                <div class="col-4">
                    <label for="arrested_first_lastname_1" class="form-label">Apellido Paterno:</label>
                    <input id="arrested_first_lastname_1" name="arrested_first_lastname" type="text" class="form-control" maxlength="255" value="{{ old('arrested_first_lastname', $arrestedFault->arrested_first_lastname ?? '') }}">
                </div>
    
                <div class="col-4">
                    <label for="arrested_second_lastname_1" class="form-label">Apellido Materno:</label>
                    <input id="arrested_second_lastname_1" name="arrested_second_lastname" type="text" class="form-control" maxlength="255" value="{{ old('arrested_second_lastname', $arrestedFault->arrested_second_lastname ?? '') }}">
                </div>
            </div>
    
            <div class="row justify-content-center" style="margin-top:1em">
                <div class="col-3">
                    <label for="age_1" class="form-label">Edad</label>
                    <input id="age_1" name="age" type="number" class="form-control age-field" value="{{ old('age', $arrestedFault->arrestedBelonging->age ?? '') }}">
                </div>
    
                <div class="col-3">
                    <label for="apparent_age_1" class="form-label">Edad Aparente</label>
                    <input id="apparent_age_1" name="apparent_age" type="number" class="form-control apparent-age-field" value="{{ old('apparent_age', $arrestedFault->arrestedBelonging->apparent_age ?? '') }}">
                </div>
    
                <div class="col-3">
                    <label for="estado_civil_1" class="form-label">Estado civil:</label>
                    <input id="estado_civil_1" name="estado_civil" type="text" class="form-control" value="{{ old('estado_civil', $arrestedFault->arrestedBelonging->estado_civil ?? '') }}">
                </div>
    
                <div class="col-2">
                    <label for="arrested_gender_1" class="form-label">Sexo:</label>
                    <select id="arrested_gender_1" name="arrested_gender" class="form-control arrested-gender-field">
                        <option value="hombre" {{ (old('arrested_gender') == 'hombre' || (isset($arrestedFault->arrestedBelonging->arrested_gender) && $arrestedFault->arrestedBelonging->arrested_gender == 'hombre')) ? 'selected' : '' }}>Hombre</option>
                        <option value="mujer" {{ (old('arrested_gender') == 'mujer' || (isset($arrestedFault->arrestedBelonging->arrested_gender) && $arrestedFault->arrestedBelonging->arrested_gender == 'mujer')) ? 'selected' : '' }}>Mujer</option>
                        <option value="indefinido" {{ (old('arrested_gender') == 'indefinido' || (isset($arrestedFault->arrestedBelonging->arrested_gender) && $arrestedFault->arrestedBelonging->arrested_gender == 'indefinido')) ? 'selected' : '' }}>Indefinido</option>
                    </select>
                </div>
    
                <div class="col-4">
                    <label for="address_1" class="form-label">Domicilio:</label>
                    <input id="address_1" name="address" type="text" class="form-control" value="{{ old('address', $arrestedFault->arrestedBelonging->address ?? '') }}">
                </div>
            </div>
    
            <br>
    
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="ocupation_1" class="form-label">Ocupación:</label>
                    <input id="ocupation_1" name="ocupation" type="text" class="form-control" value="{{ old('ocupation', $arrestedFault->arrestedBelonging->ocupation ?? '') }}">
                </div>
    
                <div class="col-4">
                    <label for="income_1" class="form-label">Ingreso:</label>
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input id="income_1" name="income" type="text" class="form-control income-field" placeholder="monto" title="Ingresa un monto válido" value="{{ old('income', $arrestedFault->arrestedBelonging->income ?? '') }}">
                    </div>
                </div>
    
                <div class="col-4">
                    <label for="origin_1" class="form-label">Originario de:</label>
                    <input id="origin_1" name="origin" type="text" class="form-control" value="{{ old('origin', $arrestedFault->arrestedBelonging->origin ?? '') }}">
                </div>
            </div>
    
            <br>
    
            <div class="row justify-content-center">
                <div class="col-4">
                    <label for="phone_1" class="form-label">Teléfono:</label>
                    <input id="phone_1" name="phone" type="text" class="form-control phone-field" maxlength="14" value="{{ old('phone', $arrestedFault->arrestedBelonging->phone ?? '') }}">
                </div>
    
                <div class="col-4">
                    <label for="fault_1" class="form-label">Falta cometida:</label>
                    <input id="fault_1" name="fault" type="text" class="form-control" value="{{ old('fault', $arrestedFault->arrestedBelonging->fault ?? '') }}">
                </div>
    
                <div class="col-4">
                    <label for="read_1" class="form-label">¿Sabe leer y escribir?</label>
                    <input id="read_1" name="read" type="text" class="form-control" placeholder="Escribe 'Sí' o 'No'" value="{{ old('read', $arrestedFault->arrestedBelonging->read ?? '') }}">
                </div>
            </div>
    
            <hr>
    
            {{-- PERTENENCIAS --}}
            <div class="row">
                <div class="col-12">
                    <label class="form-label" style="color:#222222;font-family:Soho Std;font-size:1.25em">Portaba con:</label>
                    <table id="pertenenciasTable">
                        <thead>
                            <tr>
                                <th>IMPORTE</th>
                                <th colspan="2">OBJETOS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Billete(s)</th>
                                <td><input id="amount_bills_1" name="amount_bills" type="text" placeholder="Cantidad" class="form-control" value="{{ old('amount_bills', $arrestedFault->arrestedBelonging->amount_bills ?? '') }}"></td>
                                <td><input id="description_bills_1" name="description_bills" type="text" placeholder="Valor de billete(s)" class="form-control" value="{{ old('description_bills', $arrestedFault->arrestedBelonging->description_bills ?? '') }}"></td>
                            </tr>
                            <tr>
                                <th>Moneda(s)</th>
                                <td><input id="amount_coins_1" name="amount_coins" type="text" placeholder="Cantidad" class="form-control" value="{{ old('amount_coins', $arrestedFault->arrestedBelonging->amount_coins ?? '') }}"></td>
                                <td><input id="description_coins_1" name="description_coins" type="text" placeholder="Valor de moneda(s)" class="form-control" value="{{ old('description_coins', $arrestedFault->arrestedBelonging->description_coins ?? '') }}"></td>
                            </tr>
                            <tr>
                                <th>Otros</th>
                                <td><input id="amount_others_1" name="amount_others" type="text" placeholder="Cantidad" class="form-control" value="{{ old('amount_others', $arrestedFault->arrestedBelonging->amount_others ?? '') }}"></td>
                                <td><input id="description_others_1" name="description_others" type="text" placeholder="Tipo" class="form-control" value="{{ old('description_others', $arrestedFault->arrestedBelonging->description_others ?? '') }}"></td>
                            </tr>
                            <tr>
                                <th>Total:</th>
                                <td colspan="2"><input id="total_objs_1" name="total_objs" type="text" placeholder="Total de pertenencias" class="form-control" value="{{ old('total_objs', $arrestedFault->arrestedBelonging->total_objs ?? '') }}"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    
            <div class="col-12" style="margin-top:1em">
                <label class="form-label">Recibe a entera satisfacción los valores u objetos descritos en el acta anterior...</label>
            </div>
    
            <div class="row mt-3">
                <div class="col-6">
                    <label for="received_time_1" class="form-label">Hora de recibido</label>
                    <input id="received_time_1" name="received_time" type="time" class="form-control received-time-field" value="{{ old('received_time', $arrestedFault->arrestedBelonging->received_time ?? '') }}">
                </div>
    
                <div class="col-6">
                    <label for="received_date_1" class="form-label">Fecha de recibido:</label>
                    <input id="received_date_1" name="received_date" type="date" class="form-control received-date-field" value="{{ old('received_date', $arrestedFault->arrestedBelonging->received_date ?? '') }}">
                </div>
            </div>
    
        </div> {{-- /.arrested-block --}}
    </div> {{-- /#formsContainer --}}
    
    {{-- HIDDENs y BOTONES FINALES --}}
    {{-- Estos deben ir dentro del <form> que incluye este partial (create.blade.php) --}}
    <input type="hidden" id="form_action" name="form_action" value="save_and_close">
    <input type="hidden" id="importance_sent" name="importance_sent" value="1">
    
    {{-- Hidden defaults para pertenencias (si la sección se oculta, estos serán 0 y enviados) --}}
    <input type="hidden" id="h_amount_bills" name="amount_bills" value="{{ old('amount_bills', 0) }}">
    <input type="hidden" id="h_description_bills" name="description_bills" value="{{ old('description_bills', 0) }}">
    <input type="hidden" id="h_amount_coins" name="amount_coins" value="{{ old('amount_coins', 0) }}">
    <input type="hidden" id="h_description_coins" name="description_coins" value="{{ old('description_coins', 0) }}">
    <input type="hidden" id="h_amount_others" name="amount_others" value="{{ old('amount_others', 0) }}">
    <input type="hidden" id="h_description_others" name="description_others" value="{{ old('description_others', 0) }}">
    <input type="hidden" id="h_total_objs" name="total_objs" value="{{ old('total_objs', 0) }}">
    
    <div class="row mt-3">
        <div class="col-12 d-flex justify-content-end gap-2">
            {{-- Guardar normal (redirige fuera) --}}
            <button type="submit" class="btn btn-primary" id="btnSaveClose">Guardar Datos</button>
    
            {{-- Agregar Infractor: guarda y queda en esta página --}}
            <button type="button" id="btnSaveAdd" class="btn btn-secondary">Agregar Infractor</button>
        </div>
    </div>
    
    {{-- JavaScript: controla IMPORTANCIA, hidden defaults y acciones de botones --}}
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Elementos clave
        const importanceSelect = document.getElementById('importancia_select_1');
        const btnSaveAdd = document.getElementById('btnSaveAdd');
        const btnSaveClose = document.getElementById('btnSaveClose');
        const form = document.querySelector('form'); // el form envolvente (create.blade.php)
        const formActionInput = document.getElementById('form_action');
        const importanceSent = document.getElementById('importance_sent');
    
        // Pertenencias: tabla específica
        const pertenenciasTable = document.getElementById('pertenenciasTable');
    
        // Hidden inputs
        const h_amount_bills = document.getElementById('h_amount_bills');
        const h_description_bills = document.getElementById('h_description_bills');
        const h_amount_coins = document.getElementById('h_amount_coins');
        const h_description_coins = document.getElementById('h_description_coins');
        const h_amount_others = document.getElementById('h_amount_others');
        const h_description_others = document.getElementById('h_description_others');
        const h_total_objs = document.getElementById('h_total_objs');
    
        // Visible inputs (si existen)
        const v_amount_bills = document.querySelector('input[name="amount_bills"]');
        const v_description_bills = document.querySelector('input[name="description_bills"]');
        const v_amount_coins = document.querySelector('input[name="amount_coins"]');
        const v_description_coins = document.querySelector('input[name="description_coins"]');
        const v_amount_others = document.querySelector('input[name="amount_others"]');
        const v_description_others = document.querySelector('input[name="description_others"]');
        const v_total_objs = document.querySelector('input[name="total_objs"]');
    
        // received fields: rellenar si están vacíos
        const receivedTime = document.getElementById('received_time_1');
        const receivedDate = document.getElementById('received_date_1');
        if (receivedTime && !receivedTime.value) {
            const now = new Date();
            receivedTime.value = String(now.getHours()).padStart(2,'0') + ':' + String(now.getMinutes()).padStart(2,'0');
        }
        if (receivedDate && !receivedDate.value) {
            receivedDate.value = new Date().toISOString().slice(0,10);
        }


        function saveImportanceToSession(logSheetId, importanceValue) {
            if (!logSheetId) return; // no guardamos si no hay folio
        // traducir binario a texto
                const text = (importanceValue === '1' || importanceValue === 1) ? 'Barandilla' : 'C. Medico';
        // clave por folio (sessionStorage se elimina al cerrar pestaña)
                const key = 'importancia_' + String(logSheetId);
                try {
                    sessionStorage.setItem(key, text);
                } catch (e) {
                    console.warn('No fue posible guardar importancia en sessionStorage', e);
                }
        }
    
        // Función para ocultar/desocultar pertenencias según importancia
        function updatePertenenciasVisibility() {
            if (!importanceSelect) return;
            const val = importanceSelect.value;
            importanceSent.value = val; // enviamos esta info
    
            if (val === '0') {
                // Ocultar tabla de pertenencias
                if (pertenenciasTable) pertenenciasTable.style.display = 'none';
    
                // Deshabilitar visibles (no se enviarán)
                [v_amount_bills, v_description_bills, v_amount_coins, v_description_coins, v_amount_others, v_description_others, v_total_objs].forEach(el => {
                    if (el) el.disabled = true;
                });
    
                // Forzar hidden a 0
                if (h_amount_bills) h_amount_bills.value = 0;
                if (h_description_bills) h_description_bills.value = 0;
                if (h_amount_coins) h_amount_coins.value = 0;
                if (h_description_coins) h_description_coins.value = 0;
                if (h_amount_others) h_amount_others.value = 0;
                if (h_description_others) h_description_others.value = 0;
                if (h_total_objs) h_total_objs.value = 0;
            } else {
                // Mostrar tabla y habilitar visibles
                if (pertenenciasTable) pertenenciasTable.style.display = '';
                [v_amount_bills, v_description_bills, v_amount_coins, v_description_coins, v_amount_others, v_description_others, v_total_objs].forEach(el => {
                    if (el) el.disabled = false;
                });
    
                // sincronizar hidden con visibles (si existen)
                if (h_amount_bills && v_amount_bills) h_amount_bills.value = v_amount_bills.value || 0;
                if (h_description_bills && v_description_bills) h_description_bills.value = v_description_bills.value || 0;
                if (h_amount_coins && v_amount_coins) h_amount_coins.value = v_amount_coins.value || 0;
                if (h_description_coins && v_description_coins) h_description_coins.value = v_description_coins.value || 0;
                if (h_amount_others && v_amount_others) h_amount_others.value = v_amount_others.value || 0;
                if (h_description_others && v_description_others) h_description_others.value = v_description_others.value || 0;
                if (h_total_objs && v_total_objs) h_total_objs.value = v_total_objs.value || 0;
            }
        }
    
        // Inicializar y asignar listener
        if (importanceSelect) {
            importanceSelect.addEventListener('change', updatePertenenciasVisibility);
            updatePertenenciasVisibility();
        }
    
        // Acciones de botones
        btnSaveAdd.addEventListener('click', function () {
            // Sincronizar visibles a hidden antes de enviar
            if (importanceSelect && importanceSelect.value === '1') {
                if (h_amount_bills && v_amount_bills) h_amount_bills.value = v_amount_bills.value || 0;
                if (h_description_bills && v_description_bills) h_description_bills.value = v_description_bills.value || 0;
                if (h_amount_coins && v_amount_coins) h_amount_coins.value = v_amount_coins.value || 0;
                if (h_description_coins && v_description_coins) h_description_coins.value = v_description_coins.value || 0;
                if (h_amount_others && v_amount_others) h_amount_others.value = v_amount_others.value || 0;
                if (h_description_others && v_description_others) h_description_others.value = v_description_others.value || 0;
                if (h_total_objs && v_total_objs) h_total_objs.value = v_total_objs.value || 0;
            }

        // === NUEVO: guardar en sessionStorage la selección de importancia asociada al folio ===
        const logSheetInput = document.querySelector('input[name="log_sheet_id"]');
        const folio = logSheetInput ? logSheetInput.value.trim() : '';
        if (importanceSelect && folio) {
            saveImportanceToSession(folio, importanceSelect.value);
        }
        // ==============================================================================

            
            formActionInput.value = 'save_and_add';
            form.submit();
        });
    
        btnSaveClose.addEventListener('click', function () {
            // Sincronizar visibles a hidden (por si)
            if (importanceSelect && importanceSelect.value === '1') {
                if (h_amount_bills && v_amount_bills) h_amount_bills.value = v_amount_bills.value || 0;
                if (h_description_bills && v_description_bills) h_description_bills.value = v_description_bills.value || 0;
                if (h_amount_coins && v_amount_coins) h_amount_coins.value = v_amount_coins.value || 0;
                if (h_description_coins && v_description_coins) h_description_coins.value = v_description_coins.value || 0;
                if (h_amount_others && v_amount_others) h_amount_others.value = v_amount_others.value || 0;
                if (h_description_others && v_description_others) h_description_others.value = v_description_others.value || 0;
                if (h_total_objs && v_total_objs) h_total_objs.value = v_total_objs.value || 0;
            }

        // === NUEVO: guardar en sessionStorage la selección de importancia asociada al folio ===
        const logSheetInputClose = document.querySelector('input[name="log_sheet_id"]');
        const folioClose = logSheetInputClose ? logSheetInputClose.value.trim() : '';
        if (importanceSelect && folioClose) {
            saveImportanceToSession(folioClose, importanceSelect.value);
        }
        // ==============================================================================
            
            formActionInput.value = 'save_and_close';
            // submit será realizado naturalmente por el botón type="submit"
        });
    
    });
    </script>