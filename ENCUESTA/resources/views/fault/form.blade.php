
  
      <div class="row justify-content-center" style="margin-top:1em">
        <div class="col-12">
          <label for="description" class="form-label">Descripción</label>
          <input id="description"  name="description" type="text" class="form-control" value="{{ $fault->description }}"
           required autofocus>
        </div>
      </div>
        <div class="row justify-content-center" style="margin-top:1em">
        <div class="col-6"> 
          <label for="rating" class="form-label">Clasificación</label>
          <select id="rating" name="rating" class="form-control" required>
                  <option value="">-- Seleccione un valor --</option>
                  @if($fault->rating == "A")
                    <option value="A" selected>A</option>
                  @else
                    <option value="A">A</optio>
                  @endif
                  @if($fault->rating == "B")
                    <option value="B" selected>B</option>
                  @else
                    <option value="B">B</optio>
                  @endif
                  @if($fault->rating == "C")
                    <option value="C" selected>C</option>
                  @else
                    <option value="C">C</optio>
                  @endif
                  @if($fault->rating == "D")
                    <option value="D" selected>D</option>
                  @else
                    <option value="D">D</option>
                  @endif
          </select>
        </div>
        <div class="col-6">
          <label for="fault_category_id" class="form-label">Categoria de faltas</label>
          <select id="fault_category_id" name="fault_category_id" class="form-control"  required>
                  <option value="">-- Seleccione un valor --</option>
          @foreach($faultCategories as $key => $value)
                  @if($fault->fault_category_id == $key)
                    <option value="{{ $key }}" selected>{{ $value }}</option>
                  @else
                    <option value="{{ $key }}"> {{ $value }}</option>
                  @endif
          @endforeach
          </select>
          </div>
      </div>

