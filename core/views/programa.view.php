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
                <form action = "core/controllers/addprograma.controller.php" method="POST" id="requestForm" class="form text-center">	
                    <div class="row"> <!-- Date -->
                        <div class="col-md-4 col-sm-4"></div>
                        <div class="col-md-4 col-sm-4">
							<div class="form-group form-group-lg">
								<label for="fecha"><?= $language['__FORM_FECHA_VISITANTE__']?></label>
								<input type="date" class="form-control text-center" name="fecha" id="fecha" placeholder="" value=''>
							</div>
                        </div>
                        <div class="col-md-4 col-sm-4"></div>
                    </div> <!-- Date -->
					<div class="row"> <!-- OracionInicio, VerOracion1-3 -->
						<div class="col-md-12 col-sm-12"> 
							<div class="form-group form-group-lg ">
								<label for="oracion"><?= $language['__FORM_ORACION_PROGRAMA__']?></label>
								<input type="text" class="form-control text-center" name="oracion" id="oracion" placeholder="Juan Carlos*" value="" required>
							</div>
						</div> 
						<div class="col-md-4 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="verOracion1" id="verOracion1*" placeholder="Juan 3:16-18*" value="" required>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="verOracion2" id="verOracion2" placeholder="Juan 3:16-18" value="">
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="verOracion3" id="verOracion3" placeholder="Juan 3:16-18" value="">
							</div>
						</div>
					</div> <!-- OracionInicio, VerOracion1-3 -->
                    <br>
					<hr>
					<div class="row"> <!-- Adoracion, Adoracion1-4 -->
						<div class="col-md-12 col-sm-12"> 
							<div class="form-group form-group-lg ">
								<label for="adoracion"><?= $language['__FORM_ADORACION_PROGRAMA__']?></label>
								<input type="text" class="form-control text-center" name="adoracion" id="adoracion" placeholder="Set o Mupa*" value="" required>
							</div>
						</div> 
						<div class="col-md-3 col-sm-3">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="adoracion1" id="adoracion1" placeholder="Adorar" value="">
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="adoracion2" id="adoracion2" placeholder="Adorar" value="">
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="adoracion3" id="adoracion3" placeholder="Adorar" value="">
							</div>
						</div>
						<div class="col-md-3 col-sm-3">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="adoracion4" id="adoracion4" placeholder="Adorar" value="">
							</div>
						</div>
					</div> <!-- Adoracion, Adoracion1-4 -->
					<br>
					<hr>
					<div class="row"> <!-- Anuncios, Anuncio1-6 -->
						<div class="col-md-12 col-sm-12"> 
							<div class="form-group form-group-lg ">
								<label for="anuncios"><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></label>
								<input type="text" class="form-control text-center" name="anuncios" id="anuncios" placeholder="Juan Ignacio*" value="" required>
							</div>
						</div> 
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="anuncio1" id="anuncio1" placeholder="Actividad 1*" value="" required>
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="anuncio2" id="anuncio2" placeholder="Actividad 2*" value="" required>
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="anuncio3" id="anuncio3" placeholder="Actividad 3*" value="" required>
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="anuncio4" id="anuncio4" placeholder="Actividad 4" value="">
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="anuncio5" id="anuncio5" placeholder="Actividad 5" value="">
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="anuncio6" id="anuncio6" placeholder="Actividad 6" value="">
							</div>
						</div>
					</div> <!-- Anuncios, Anuncio1-6 -->
					<br>
					<hr>
					<div class="row"> <!-- Ofrenda, VerOfrenda1 -->
						<div class="col-md-12 col-sm-12"> 
							<div class="form-group form-group-lg ">
								<label for="ofrenda"><?= $language['__FORM_OFRENDA_PROGRAMA__']?></label>
								<input type="text" class="form-control text-center" name="ofrenda" id="ofrenda" placeholder="Juan Carlos*" value="" required>
							</div>
						</div> 
						<div class="col-md-4 col-sm-4"></div>
						<div class="col-md-4 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="verOfrenda1" id="verOfrenda1" placeholder="Juan 3:16-18*" value="" required>
							</div>
						</div>
						<div class="col-md-4 col-sm-4"></div>
					</div> <!-- Ofrenda, VerOfrenda1 -->
                    <br>
					<hr>
					<div class="row"> <!-- Extra -->
						<h1><?= $language['__FORM_EXTRA_PROGRAMA__']?></h1>
						<div class="col-md-6 col-sm-6 orden"> 
							<label for="extra1" class="orden">1</label>
							<div class="form-group form-group-lg ">	
								<input type="text" class="form-control text-center" name="extra1" id="extra1" placeholder="Danza especial" value="">
							</div>
						</div> 
						<div class="col-md-6 col-sm-6 orden"> 
							<label for="extra2" class="orden">2</label>
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="extra2" id="extra2" placeholder="Presentacion de bebe" value="">
							</div>
						</div> 
						<div class="col-md-6 col-sm-6 orden"> 
							<label for="extra3" class="orden">3</label>
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="extra3" id="extra3" placeholder="Video" value="">
							</div>
						</div> 
						<div class="col-md-6 col-sm-6 orden"> 
							<label for="extra4">4</label>
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="extra4" id="extra4" placeholder="Drama" value="">
							</div>
						</div> 
					</div> <!-- Extra -->
					<br>
					<hr>
					<div class="row"> <!-- Predica, Versiculo1-6 -->
						<div class="col-md-12 col-sm-12"> 
							<div class="form-group form-group-lg ">
								<label for="predica"><?= $language['__FORM_PREDICA_PROGRAMA__']?></label>
								<input type="text" class="form-control text-center" name="predica" id="predica" placeholder="Ramon Hernandez*" value="" required>
							</div>
						</div> 
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="verPredica1" id="verPredica1" placeholder="Ver Clave*" value="" required>
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="verPredica2" id="verPredica2" placeholder="Juan 3:16-18" value="">
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="verPredica3" id="verPredica3" placeholder="Juan 3:16-18" value="">
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="verPredica4" id="verPredica4" placeholder="Juan 3:16-18" value="">
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="verPredica5" id="verPredica5" placeholder="Juan 3:16-18" value="">
							</div>
						</div>
						<div class="col-md-2 col-sm-4">
							<div class="form-group form-group-lg ">
								<input type="text" class="form-control text-center" name="verPredica6" id="verPredica6" placeholder="Juan 3:16-18" value="">
							</div>
						</div>
					</div> <!-- Anuncios, Anuncio1-6 -->
					<hr>
					<br>
					<hr>
					<div class="row orden"> <!-- Orden -->
						<h1><?= $language['__FORM_ORDEN_PROGRAMA__']?></h1>
						<div class="col-md-3 col-sm-4">
							<label for="orden1">1</label>
							<select name="orden1" id="orden1" class="form-control" required="required">
								<option value="noaplica"><?= $language['__FORM_NOAPLICA_PROGRAMA__']?></option>
								<option value="oracion" selected><?= $language['__FORM_ORACION_PROGRAMA__']?></option>
								<option value="adoracion"><?= $language['__FORM_ADORACION_PROGRAMA__']?></option>
								<option value="anuncios"><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></option>
								<option value="ofrenda"><?= $language['__FORM_OFRENDA_PROGRAMA__']?></option>
								<option value="predica"><?= $language['__FORM_PREDICA_PROGRAMA__']?></option>
								<option value="extra1"><?= $language['__FORM_EXTRA_PROGRAMA__']?></option>
								<option value="extra2"><?= $language['__FORM_EXTRA2_PROGRAMA__']?></option>
								<option value="extra3"><?= $language['__FORM_EXTRA3_PROGRAMA__']?></option>
								<option value="extra4"><?= $language['__FORM_EXTRA4_PROGRAMA__']?></option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="orden2">2</label>
							<select name="orden2" id="orden2" class="form-control" required="required">
								<option value="noaplica"><?= $language['__FORM_NOAPLICA_PROGRAMA__']?></option>
								<option value="oracion"><?= $language['__FORM_ORACION_PROGRAMA__']?></option>
								<option value="adoracion" selected><?= $language['__FORM_ADORACION_PROGRAMA__']?></option>
								<option value="anuncios"><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></option>
								<option value="ofrenda"><?= $language['__FORM_OFRENDA_PROGRAMA__']?></option>
								<option value="predica"><?= $language['__FORM_PREDICA_PROGRAMA__']?></option>
								<option value="extra1"><?= $language['__FORM_EXTRA_PROGRAMA__']?></option>
								<option value="extra2"><?= $language['__FORM_EXTRA2_PROGRAMA__']?></option>
								<option value="extra3"><?= $language['__FORM_EXTRA3_PROGRAMA__']?></option>
								<option value="extra4"><?= $language['__FORM_EXTRA4_PROGRAMA__']?></option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="orden3">3</label>
							<select name="orden3" id="orden3" class="form-control" required="required">
								<option value="noaplica"><?= $language['__FORM_NOAPLICA_PROGRAMA__']?></option>
								<option value="oracion"><?= $language['__FORM_ORACION_PROGRAMA__']?></option>
								<option value="adoracion"><?= $language['__FORM_ADORACION_PROGRAMA__']?></option>
								<option value="anuncios" selected><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></option>
								<option value="ofrenda"><?= $language['__FORM_OFRENDA_PROGRAMA__']?></option>
								<option value="predica"><?= $language['__FORM_PREDICA_PROGRAMA__']?></option>
								<option value="extra1"><?= $language['__FORM_EXTRA_PROGRAMA__']?></option>
								<option value="extra2"><?= $language['__FORM_EXTRA2_PROGRAMA__']?></option>
								<option value="extra3"><?= $language['__FORM_EXTRA3_PROGRAMA__']?></option>
								<option value="extra4"><?= $language['__FORM_EXTRA4_PROGRAMA__']?></option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="orden4">4</label>
							<select name="orden4" id="orden4" class="form-control" required="required">
								<option value="noaplica"><?= $language['__FORM_NOAPLICA_PROGRAMA__']?></option>
								<option value="oracion"><?= $language['__FORM_ORACION_PROGRAMA__']?></option>
								<option value="adoracion"><?= $language['__FORM_ADORACION_PROGRAMA__']?></option>
								<option value="anuncios"><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></option>
								<option value="ofrenda" selected><?= $language['__FORM_OFRENDA_PROGRAMA__']?></option>
								<option value="predica"><?= $language['__FORM_PREDICA_PROGRAMA__']?></option>
								<option value="extra1"><?= $language['__FORM_EXTRA_PROGRAMA__']?></option>
								<option value="extra2"><?= $language['__FORM_EXTRA2_PROGRAMA__']?></option>
								<option value="extra3"><?= $language['__FORM_EXTRA3_PROGRAMA__']?></option>
								<option value="extra4"><?= $language['__FORM_EXTRA4_PROGRAMA__']?></option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="orden5">5</label>
							<select name="orden5" id="orden5" class="form-control" required="required">
								<option value="noaplica"><?= $language['__FORM_NOAPLICA_PROGRAMA__']?></option>
								<option value="oracion"><?= $language['__FORM_ORACION_PROGRAMA__']?></option>
								<option value="adoracion"><?= $language['__FORM_ADORACION_PROGRAMA__']?></option>
								<option value="anuncios"><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></option>
								<option value="ofrenda"><?= $language['__FORM_OFRENDA_PROGRAMA__']?></option>
								<option value="predica" selected><?= $language['__FORM_PREDICA_PROGRAMA__']?></option>
								<option value="extra1"><?= $language['__FORM_EXTRA_PROGRAMA__']?></option>
								<option value="extra2"><?= $language['__FORM_EXTRA2_PROGRAMA__']?></option>
								<option value="extra3"><?= $language['__FORM_EXTRA3_PROGRAMA__']?></option>
								<option value="extra4"><?= $language['__FORM_EXTRA4_PROGRAMA__']?></option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="orden6">6</label>
							<select name="orden6" id="orden6" class="form-control">
								<option value="noaplica" selected><?= $language['__FORM_NOAPLICA_PROGRAMA__']?></option>
								<option value="oracion"><?= $language['__FORM_ORACION_PROGRAMA__']?></option>
								<option value="adoracion"><?= $language['__FORM_ADORACION_PROGRAMA__']?></option>
								<option value="anuncios"><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></option>
								<option value="ofrenda"><?= $language['__FORM_OFRENDA_PROGRAMA__']?></option>
								<option value="predica"><?= $language['__FORM_PREDICA_PROGRAMA__']?></option>
								<option value="extra1"><?= $language['__FORM_EXTRA_PROGRAMA__']?></option>
								<option value="extra2"><?= $language['__FORM_EXTRA2_PROGRAMA__']?></option>
								<option value="extra3"><?= $language['__FORM_EXTRA3_PROGRAMA__']?></option>
								<option value="extra4"><?= $language['__FORM_EXTRA4_PROGRAMA__']?></option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="orden7">7</label>
							<select name="orden7" id="orden7" class="form-control" required="required">
								<option value="noaplica" selected><?= $language['__FORM_NOAPLICA_PROGRAMA__']?></option>
								<option value="oracion"><?= $language['__FORM_ORACION_PROGRAMA__']?></option>
								<option value="adoracion"><?= $language['__FORM_ADORACION_PROGRAMA__']?></option>
								<option value="anuncios"><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></option>
								<option value="ofrenda"><?= $language['__FORM_OFRENDA_PROGRAMA__']?></option>
								<option value="predica"><?= $language['__FORM_PREDICA_PROGRAMA__']?></option>
								<option value="extra1"><?= $language['__FORM_EXTRA_PROGRAMA__']?></option>
								<option value="extra2"><?= $language['__FORM_EXTRA2_PROGRAMA__']?></option>
								<option value="extra3"><?= $language['__FORM_EXTRA3_PROGRAMA__']?></option>
								<option value="extra4"><?= $language['__FORM_EXTRA4_PROGRAMA__']?></option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="orden8">8</label>
							<select name="orden8" id="orden8" class="form-control" required="required">
								<option value="noaplica" selected><?= $language['__FORM_NOAPLICA_PROGRAMA__']?></option>
								<option value="oracion"><?= $language['__FORM_ORACION_PROGRAMA__']?></option>
								<option value="adoracion"><?= $language['__FORM_ADORACION_PROGRAMA__']?></option>
								<option value="anuncios"><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></option>
								<option value="ofrenda"><?= $language['__FORM_OFRENDA_PROGRAMA__']?></option>
								<option value="predica"><?= $language['__FORM_PREDICA_PROGRAMA__']?></option>
								<option value="extra1"><?= $language['__FORM_EXTRA_PROGRAMA__']?></option>
								<option value="extra2"><?= $language['__FORM_EXTRA2_PROGRAMA__']?></option>
								<option value="extra3"><?= $language['__FORM_EXTRA3_PROGRAMA__']?></option>
								<option value="extra4"><?= $language['__FORM_EXTRA4_PROGRAMA__']?></option>
							</select>
						</div>
						<div class="col-md-3"></div>
						<div class="col-md-3">
							<label for="orden9">9</label>
							<select name="orden9" id="orden9" class="form-control" required="required">
								<option value="noaplica" selected><?= $language['__FORM_NOAPLICA_PROGRAMA__']?></option>
								<option value="oracion"><?= $language['__FORM_ORACION_PROGRAMA__']?></option>
								<option value="adoracion"><?= $language['__FORM_ADORACION_PROGRAMA__']?></option>
								<option value="anuncios"><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></option>
								<option value="ofrenda"><?= $language['__FORM_OFRENDA_PROGRAMA__']?></option>
								<option value="predica"><?= $language['__FORM_PREDICA_PROGRAMA__']?></option>
								<option value="extra1"><?= $language['__FORM_EXTRA_PROGRAMA__']?></option>
								<option value="extra2"><?= $language['__FORM_EXTRA2_PROGRAMA__']?></option>
								<option value="extra3"><?= $language['__FORM_EXTRA3_PROGRAMA__']?></option>
								<option value="extra4"><?= $language['__FORM_EXTRA4_PROGRAMA__']?></option>
							</select>
						</div>
						<div class="col-md-3">
							<label for="orden10">10</label>
							<select name="orden10" id="orden10" class="form-control" required="required">
								<option value="noaplica" selected><?= $language['__FORM_NOAPLICA_PROGRAMA__']?></option>
								<option value="oracion"><?= $language['__FORM_ORACION_PROGRAMA__']?></option>
								<option value="adoracion"><?= $language['__FORM_ADORACION_PROGRAMA__']?></option>
								<option value="anuncios"><?= $language['__FORM_ANUNCIOS_PROGRAMA__']?></option>
								<option value="ofrenda"><?= $language['__FORM_OFRENDA_PROGRAMA__']?></option>
								<option value="predica"><?= $language['__FORM_PREDICA_PROGRAMA__']?></option>
								<option value="extra1"><?= $language['__FORM_EXTRA_PROGRAMA__']?></option>
								<option value="extra2"><?= $language['__FORM_EXTRA2_PROGRAMA__']?></option>
								<option value="extra3"><?= $language['__FORM_EXTRA3_PROGRAMA__']?></option>
								<option value="extra4"><?= $language['__FORM_EXTRA4_PROGRAMA__']?></option>
							</select>
						</div>
						<div class="col-md-3"></div>
					</div> <!-- Orden -->
					<br>
					<hr>
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