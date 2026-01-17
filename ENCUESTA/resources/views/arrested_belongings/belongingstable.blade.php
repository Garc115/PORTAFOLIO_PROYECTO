@extends('layouts.app')
<hr>
<hr>
<main class="mt-5 pt-3">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11">
                <div class="card shadow p-3 mb-5 bg-body rounded">
                    <div class="row justify-content-center" style="margin-top: 0em; margin-bottom: 0em; padding: 0em">
                        <div class="col-12" align="center" style="color: #110f0f; font-family: Soho Std; font-size: 2.2em">
                            Listado actas de Pertenecias
                        </div>
                        <hr>
                        <form action="{{ route('arrested_belongings.index') }}" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="search" placeholder="Buscar por nombre" value="{{ request()->get('search') }}">
                                <button class="btn btn-outline-secondary" type="submit">Buscar</button>
                            </div>
                        </form>                        
                        <div class="table-responsive">
                            <table id="table_info" class="table table-bordered">
                                <thead class="thead-light">
                                    <tr>
                                        <th>FOLIO</th>
                                        <th>IMPORTANCIA</th>
                                        <th>NOMBRE</th>
                                        <th>APELLIDO PATERNO</th>
                                        <th>APELLIDO MATERNO</th>
                                        <th>DESCARGAR PDF</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($arrested_items as $item)
                                    <tr>
                                        <td>{{ $item->log_sheet_id }}</td>
                                        <td>{{ $item->importancia == 1 ? 'Barandilla' : 'C. Medico' }}</td>
                                        <td>{{ $item->arrested_name }}</td>
                                        <td>{{ $item->arrested_first_lastname }}</td>
                                        <td>{{ $item->arrested_second_lastname }}</td>
                                        <td class="text-center">
                                            <a class='text-dark' href="{{ route('download_formato_pertenecias', $item->log_sheet_id) }}" target='_blank' style='padding:0em 0.3em;'>
                                               <i class="fas fa-file-download text-warning"></i>
                                            </a>        
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center">
                                {{$arrested_items->onEachSide(1)->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Para cada fila de la tabla, lee el folio y si existe una clave en sessionStorage escribe la importancia
        const table = document.getElementById('table_info');
        if (!table) return;
    
        // Obtén todas las filas del tbody
        const rows = table.querySelectorAll('tbody tr');
        rows.forEach(row => {
            // Asumimos que la primera celda es FOLIO (según tu vista)
            const folioCell = row.cells[0];
            const importanceCell = row.cells[1]; // columna IMPORTANCIA (vacía actualmente)
            if (!folioCell || !importanceCell) return;
    
            const folio = folioCell.textContent.trim();
            if (!folio) return;
    
            const key = 'importance_' + folio;
            const importanceText = sessionStorage.getItem(key);
            if (importanceText) {
                importanceCell.textContent = importanceText;
            } else {
                // opcional: mostrar texto por defecto si no hay registro en sessionStorage
                // importanceCell.textContent = ''; // dejar vacío
                // o: importanceCell.textContent = '—';
            }
        });
    });
    </script>