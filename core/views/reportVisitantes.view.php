<div id="reportVisitantes">
    <table class="table table-bordered text-center display" id="tableReport">
      <h1 class="reportTitle text-center"><?= $language['__TITLE_REPORTS_VISITORS__']?></h1>
        <!--Date selection row-->
          <div class="col-md-12 text-center">
            <form action="" method="POST" role="form">
              <!-- Allows me to select the date -->
                <div class="form-group col-md-4 col-sm-4">
                  <label class="control-label" for="beforeDate"><?= $language['__FILTER_BDATE_REPORTS__']?></label>
                  <input type="date" class="form-control" name="beforeDate" id="beforeDate" value = "<?=$bDate?>" placeholder="Desde mm/dd/yyyy">
                </div>
                <div class="form-group col-md-4 col-sm-4">
                  <label class="control-label" for="afterDate"><?= $language['__FILTER_ADATE_REPORTS__']?></label>
                  <input type="date" class="form-control" name="afterDate" id="afterDate" value = "<?=$aDate?>" placeholder="Hasta mm/dd/yyyy">
                </div>
              <!-- Allows me to select the date -->
                <div class="col-md-4 col-sm-4">
                  <br>
                  <button type="submit" class="btn btn-primary"><?= $language['__FORMS_SUBMIT__']?></button>
                </div>
            </form>
          </div>
        <!--Date selection row-->
        <thead>
          <tr class="btn-primary">
            <th><?= $language['__VISITOR_NAME__']?></th>
            <th><?= $language['__VISITOR_PHONE__']?></th>
            <th><?= $language['__VISITOR_EMAIL__']?></th>
            <th><?= $language['__VISITOR_ADDRESS__']?></th>
            <th><?= $language['__VISITOR_REGISTERDATE__']?></th>
            <th><?= $language['__VISITOR_LASTVISIT__']?></th>
            <th><?= $language['__VISITOR_FOLLOWUP__']?></th>
            <th><?= $language['__VISITOR_COMMENT__']?></th>
          </tr>
        </thead>
        <tbody>
          <?php 
            foreach ($records as $value):
          ?>
          <tr>
            <td><?=$value['nombre'] . " " . $value['apellido']  ?></td>
            <td><?=$value['telefono']?></td>
            <td><?=$value['correo']?></td>
            <td><?=$value['direccion']?></td>
            <td><?=$value['fecha_registro']?></td>
            <td><?=$value['fecha_ult_visita']?></td>
            <td><?=$value['fecha_seguimiento']?></td>
            <td><?=$value['comentario']?></td>
          </tr>
          <?php
            endforeach
          ?>
        </tbody>
    </table>
</div>