@extends('layouts.app')

@section('template_title')
    Fault
@endsection

@section('content')
<div class="row justify-content-center" style="margin-top:1em">
    <div class="col-10">
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <div class="row justify-content-center" style="margin-top:0em;margin-bottom:0em;padding:0em">
                <div class="col-12" align="center" style="color:#222222;font-family:Soho Std;font-size:2.2em">
                    Descripción de faltas
                </div>
            </div>
            <hr/>
            <div class="card-body" style="padding:0em 2em 2em 2em">
                <div class="row justify-content-center">
                    <div class="col-12" style="" align="right">
                        <a class="text-primary" href="{{ route('faults.create') }} "style="cursor: pointer;text-decoration: none;font-size:1.2em;font-weight:bold">
                            Nuevo
                        </a>
                        </div>
                     <div class="row justify-content-center" style="margin-top:0.2em">
						<div class="col-12 table-responsive">
							<table id="table_info"  class="table table-bordered" style="">
								<thead>
								<tr>
										<th>Descripción</th>
										<th>Clasificación</th>
										<th><center>Categoría de faltas</center></th>
                                        <th></th><th></th><th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faults as $fault)
                                        <tr>
											<td>{{ $fault->description }}</td>
											<td><center>{{ $fault->rating }}<center></td>
                                                @isset( $fault->faultCategory )
											<td>{{ $fault->faultCategory->name }}</td>
                                               @else 
                                               <td>Sin categoría </td>
                                            @endisset
                                                <form  class="delete" action="{{ route('faults.destroy',$fault->id) }}" method="POST">
                                                    <th> <a class="text-info" href="{{ route('faults.show',$fault->id) }}" style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'> Ver</a>
                                                    </th>
                                                    <th> <a class="text-success" href="{{ route('faults.edit',$fault->id) }}"style='padding:0em 0.3em;text-decoration:none;font-weight:bold;'> Editar</a></th>
                                                    @csrf
                                                    @method('DELETE')
                                                    <th><button class="btn btn-link text-danger" style='padding:0em 0.2em;text-decoration:none;font-weight:bold;' type="submit" > Eliminar </button></th>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    @endsection
    @section('js-files')

	<script type="text/javascript">

		$( document ).ready(function() {

			document.getElementById('psychosocialCollapse').setAttribute("aria-expanded", true);
			document.getElementById('psychosocial').classList.add("show");

			$('#table_info').DataTable( {
				language: {url: 'datatables/Spanish.json'},
				dom: 'Bfrtip',
				searching:true,
				paging:true,
				ordering:true,
				bLengthChange: false,
			} );

		});


    $('.delete').submit(function(event) {
    event.preventDefault();
     Swal.fire({
        title: "¿Estas seguro que deseas eliminar la descripción de falta?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        confirmButtonColor: '#DC3545',
        cancelButtonText: "Cancelar",
    }).then(function(result){

        if (result.isConfirmed) {
            event.target.submit();

  }
})
});


	</script>
@endsection
