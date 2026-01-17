
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <!-- //Pertenencias -->
     <div class="row justify-content-center" style="margin-top:2em">
        <h3 class="row justify-content-center" style="color:#222222;font-family:Soho Std;font-size:1.5em"> Pertenencias </h3>
        <hr />
        </div>

        <div class="row justify-content-center" style="margin-top: 1em">
            <div class="col-6">
                <label for="arrested_name" class="form-label">Nombre del infractor:</label>
                <input id="arrested_name" name="arrested_name" type="text" class="form-control" maxlength="255" disabled
                    value="{{ old('arrested_name') ?: $arrestedFault->arrested_name . ' ' . $arrestedFault->arrested_first_lastname . ' ' . $arrestedFault->arrested_second_lastname }}">
            </div>

            <div class="col-3">
                <label for="age" class="form-label">Edad</label>
                <input id="age" name="age" type="number" class="form-control"  disabled
                value="{{ old('age', isset($arrestedFault->age) ? $arrestedFault->age : '') }}">
            </div>
            
            <div class="col-3">
                <label for="arrested_gender" class="form-label">Sexo</label>
                <select id="arrested_gender" name="arrested_gender" class="form-control" disabled>
                    <option value="">-- Seleccione un valor --</option>
                    @if (old('arrested_gender'))
                        <option value="hombre" {{ old('arrested_gender') == 'hombre' ? 'selected' : '' }}>
                            Hombre</option>
                        <option value="mujer" {{ old('arrested_gender') == 'mujer' ? 'selected' : '' }}>
                            Mujer</option>
                        <option value="no_binario"
                            {{ old('arrested_gender') == 'no_binario' ? 'selected' : '' }}>No binario
                        </option>
                    @else
                        <option value="hombre"
                            {{ $arrestedFault->arrested_gender == 'hombre' ? 'selected' : '' }}>Hombre
                        </option>
                        <option value="mujer"
                            {{ $arrestedFault->arrested_gender == 'mujer' ? 'selected' : '' }}>Mujer
                        </option>
                        <option value="no_binario"
                            {{ $arrestedFault->arrested_gender == 'no_binario' ? 'selected' : '' }}>No
                            binario</option> 
                    @endif
                </select>
            </div>  
            
            
            <div class="col-4" class="row justify-content-center" style="margin-top: 1em">
                <label for="fault" class="form-label">Falta cometida:</label>
                <input id="fault" name="fault" type="text" class="form-control" 
                value="{{ $arrestedFault->arrestedBelonging ? $arrestedFault->arrestedBelonging->fault : old('fault') }}" >
            </div>

            <div class="col-8" class="row justify-content-center" style="margin-top: 1em">
                <label for="addres" class="form-label">Domicilio</label>
                <p id="addres" class="form-control" readonly>
                    @php
                        echo isset($arrestedFault->street_address) ? $arrestedFault->street_address : '';
                        echo isset($arrestedFault->exterior_number_address) ? ' ' . $arrestedFault->exterior_number_address : '';
                        echo isset($arrestedFault->interior_number_address) ? 'interior ' . $arrestedFault->interior_number_address : '';
                        echo isset($arrestedFault->colony_address) ? ', ' . $arrestedFault->colony_address : '';
                        echo isset($arrestedFault->postal_code_address) ? ', CP: ' . $arrestedFault->postal_code_address : '';
                        echo isset($arrestedFault->township_address) ? ', ' . $arrestedFault->township_address : '';
                        echo isset($arrestedFault->state_address) ? ', ' . $arrestedFault->state_address : '';
                    @endphp
                </p>
            </div>
        </div>
              <div class="col-12" class="row justify-content-center" style="margin-top: 1em">
                 <label for="bills" class="form-label"><Em></Em>Portaba con:</label>
              </div>
            <table>
                <thead>
                    <tr>
                        <th colspan="1">IMPORTE</th>
                        <th colspan="2">OBJETOS </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Billete(s)</th>
                        <td><input type="text" name="amount_bills" placeholder="Cantidad" value="{{ $arrestedFault->arrestedBelonging ? $arrestedFault->arrestedBelonging->amount_bills : old('amount_bills') }}"></td>
                        <td><input type="text" name="description_bills" placeholder="Valor de billete(s)" value="{{ $arrestedFault->arrestedBelonging ? $arrestedFault->arrestedBelonging->description_bills : old('description_bills') }}" ></td>
                    </tr>
            
                    <tr>
                        <th>Moneda(s)</th>
                        <td><input type="text" name="amount_coins" placeholder="Cantidad" value="{{ $arrestedFault->arrestedBelonging ? $arrestedFault->arrestedBelonging->amount_coins : old('amount_coins') }}" ></td>
                        <td><input type="text" name="description_coins" placeholder="Valor de moneda(s)" value="{{ $arrestedFault->arrestedBelonging ? $arrestedFault->arrestedBelonging->description_coins : old('description_coins') }}" ></td>
                    </tr>
                    
                    <tr>
                        <th>Otros</th>
                        <td><input type="text" name="amount_others" placeholder="Cantidad" value="{{ $arrestedFault->arrestedBelonging ? $arrestedFault->arrestedBelonging->amount_others : old('amount_others') }}" ></td>
                        <td><input type="text" name="description_others" placeholder="Tipo" value="{{ $arrestedFault->arrestedBelonging ? $arrestedFault->arrestedBelonging->description_others : old('description_others') }}" ></td>
                    </tr>
                    
                    <tr>
                        <th>Total:</th>
                        <td><input type="text" name="total_objs" placeholder="Total de pertenencias" 
                            value="{{ $arrestedFault->arrestedBelonging ? $arrestedFault->arrestedBelonging->total_objs : old('total_objs') }}" ></td>
                    </tr>
                    
                </tbody>
             </table>

             <div class="col-12" class="row justify-content-center" style="margin-top:2em">
                <div class="col-12">
                     <label for="receive" class="form-label"><Em></Em>Recibe a entera satisfacción los valores u objetos descritos en el acta anterior, eximiendo de toda responsabilidad Civil, Penal,
                        Administrativa y o de cualquier índole, a este Centro de Internamiento de la Secretaria de Seguridad y Protección Ciudadana.</label>
                     
                </div>
            </div>

            <div class="row">
                <div class="col-6" style="margin-top: 2em;">
                    <label for="received_time" class="form-label">Hora de recibido</label>
                    <input id="received_time" name="received_time" type="time" class="form-control">
                </div>
            
                <div class="col-6" style="margin-top: 2em;">
                    <label for="received_date" class="form-label">Fecha de recibido:</label>
                    <input id="received_date" name="received_date" type="date" class="form-control">
                </div>
            </div>

                                               
            <div class="row justify-content-center" style="margin-top:2em" >
                <div class="col-12" align="right">
                    <button type="submit" class="btn btn-primary btn-block">Guardar Datos</button>
                </div>
            </div>
    
</body>
</html>