<div id="visitante">
	<div class="container-fluid text-center">
		<div class="row">
			<div class="col-md-12 text-center title">
				<h1><?= $language['__TITLE_VISITANTE__']?></h1>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-12">
                <form action = "core/controllers/addrecord.controller.php" method="POST" id="requestForm" class="form text-center">	
                    <div class="row"> <!-- Date -->
                        <div class="col-md-5 col-sm-4"></div>
                        <div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg">
								<label for="fecha"><?= $language['__FORM_FECHA_VISITANTE__']?></label>
								<input type="text" class="form-control text-center" name="fecha" id="fecha" placeholder="" readonly value='<?=date("m-d-Y")?>'>
							</div>
                        </div>
                        <div class="col-md-5 col-sm-4"></div>
                    </div> <!-- Date -->
					<div class="row"> <!-- Name, LastName -->
						<div class="col-md-12"> 
							<div class="col-md-6 col-sm-6">
								<div class="form-group form-group-lg ">
									<label for="nombreVisitante"><?= $language['__FORM_NOMBRE_VISITANTE__']?></label>
									<input type="text" class="form-control text-center" name="nombreVisitante" id="nombreVisitante" placeholder="Ej: Juan Carlos" value="" required>
								</div>
                            </div>
                            <div class="col-md-6 col-sm-6">
								<div class="form-group form-group-lg ">
									<label for="apellidoVisitante"><?= $language['__FORM_APELLIDO_VISITANTE__']?></label>
									<input type="text" class="form-control text-center" name="apellidoVisitante" id="apellidoVisitante" placeholder="Ej: Perez Santos" value="" required>
								</div>
							</div>
						</div> 
					</div> <!-- Name, LastName -->
                    <br>
					<div class="row"> <!-- Phone, Email -->
						<div class="col-md-12"> 
							<div class="col-md-6 col-sm-6">
								<div class="form-group form-group-lg ">
									<label for="telefonoVisitante"><?= $language['__FORM_TELEFONO_VISITANTE__']?></label>
									<input type="number" class="form-control text-center" name="telefonoVisitante" id="telefonoVisitante" placeholder="Ej:8095882525" value="">
								</div>
                            </div>
                            <div class="col-md-6 col-sm-6">
								<div class="form-group form-group-lg ">
									<label for="correoVisitante"><?= $language['__FORM_CORREO_VISITANTE__']?></label>
									<input type="email" class="form-control text-center" name="correoVisitante" id="correoVisitante" placeholder="Ej: fakeemail@gmail.com" value="">
								</div>
							</div>
						</div> 
                    </div> <!-- Phone, Email  -->
                    <div class="row"> <!-- Address, Comment -->
						<div class="col-md-12"> 
							<div class="col-md-12 col-sm-12">
								<div class="form-group form-group-lg ">
									<label for="direccionVisitante"><?= $language['__FORM_DIRECCION_VISITANTE__']?></label>
									<input type="text" class="form-control text-center" name="direccionVisitante" id="direccionVisitante" placeholder="Ej: Calle25, #11, villaCarmen, SDE" value="">
								</div>
                            </div>
                            <div class="col-md-12 col-sm-12">
								<div class="col-md-12 col-sm-12">
									<label for="comentarioVisitante"><?= $language['__FORM_COMENTARIO_VISITANTE__']?></label>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="radio">
										<input type="radio" name="comentarioVisitante" value="amigo" id="radio-one" class="form-radio" checked>
										<label for="radio-one" class="radioLabel">Amigo</label>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="radio">
										<input type="radio" name="comentarioVisitante" value="redes" id="radio-two" class="form-radio">
										<label for="radio-two" class="radioLabel">Redes</label>
									</div>
								</div>
								<div class="col-md-4 col-sm-4">
									<div class="radio">
										<input type="radio" name="comentarioVisitante" value="otro" id="radio-three" class="form-radio">
										<label for="radio-three" class="radioLabel">Otro</label>
									</div>
								</div>
							</div>
						</div> 
					</div> <!-- Address, Comment -->
					<br>
					<div class="row">
						<div class="col-md-12 text-center">
							<button type="submit" class="btn btn-primary btn-lg" id="submit"><?= $language['__FORMS_SUBMIT__']?></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>