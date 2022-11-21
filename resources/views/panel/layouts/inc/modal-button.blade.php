<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
	<i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">¿Desea realmente salir del sistema?</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">Selecciona salir del sistema para cerrar su sesion o cancelar para volver al menu anterior.</div>
			<form method="POST" action="{{ route('logout') }}"  role="form" enctype="multipart/form-data">
				@csrf

				<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-primary">Salir del sistema</button>  
			</div>
			</form>
			
		</div>
	</div>
</div>