@extends('layouts.app')

@section('content')	
	<div class="row justify-content-center" style="margin-top:1em">
		<div class="col-10">
		
			<div class="card shadow p-3 mb-5 bg-body rounded">
				<div class="row justify-content-center" style="margin-top:0em;margin-bottom:0em;padding:0em">
					<div class="col-12" align="center" style="color:#222222;font-family:Soho Std;font-size:2.2em">
						Registro de Instituciones
					</div>
				</div>
				<hr/>
				<div class="card-body" style="padding:0em 2em 2em 2em">
					<div class="row justify-content-center" style="padding:1em">
						<div class="col-9" style="padding-right:2em" align="left">
							<strong style="font-size:1.2em">
								Registro finalizado
							</strong>
						</div>
						<div class="col-3" style="padding-right:2em" align="right">
							<button type="button" onclick="closeCurrent()" class="btn btn-primary btn-block" style="margin-top:0em">
								<strong>
									Cerrar
								</strong>
							</button>
						</div>
					</div>
				</div>
			</div>
			
			
		</div>
	</div>
@endsection

@section('js-files')	
	
	<script type="text/javascript">
		
		$( document ).ready(function() {
			document.getElementById('myCollapse').setAttribute("aria-expanded", true);
			document.getElementById('layouts').classList.add("show");			
		});
		
		function closeCurrent(){
			window.close();
		}
		
	</script>
	
@endsection
