<div class="modal fade" id="modalFormNewStream" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title text-white" id="exampleModalLabel"> Crea un streaming</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		  <form name="frmNewStream" class="row" id="frmNewStream">
			  <div class="form-group col-md-6">
				  <label for="tituloStream">Título</label>
				  <input type="text" class="form-control" id="tituloStream" name="tituloStream">
			  </div>
			  <div class="form-group col-md-6">
				  <label for="nameHost">Nombre del Host</label>
				  <input type="text" class="form-control" id="nameHost" name="nameHost">
			  </div>
			  <div class="form-group col-md-12">
				  <label for="zonahoraria">Zona Horaria</label>
                  <select class="form-control" name="zonahoraria" id="zonahoraria">
                      <?php 
                      $zonahorarias = zonasHorarias();
                      foreach ($zonahorarias as $zonahoraria) { ?>
                          <option value="<?= $zonahoraria ?>"><?= $zonahoraria ?></option>
                      <?php }?>
                  </select>
			  </div>
			  <div class="form-group col-md-12">
				  <label for="usuariosMax">Usuarios Máximos</label>
				  <input type="number" min="0" class="form-control" id="usuariosMax" name="usuariosMax">
			  </div>
			  <div class="form-group col-md-12">
				  <label for="resolucionStream">Resolución de la emisión</label>
				  <select id="resolucionStream" class="form-control" name="resolucionStream">
					  <option value="480">480p</option>
					  <option value="720">720p</option>
					  <option value="1080">1080</option>
				  </select>
			  </div>
			  <div class="form-group col-md-12">
			  	<label for="duracionStream">Duración del streaming</label>
				  <select id="duracionStream" class="form-control" name="duracionStream">
					  <option value="30">30 min</option>
					  <option value="45">45 min</option>
					  <option value="60">60 min</option>
				  </select>
			  </div>

			  <div class="form-group col-md-6">
				  <label for="fechahoraStream">Fecha de la emisión</label>
				  <input type="date" class="form-control" id="fechahoraStream" name="fechahoraStream">
			  </div>

			  <div class="form-group col-md-6">
				  <label for="fechahoraStream">Hora de la emisión</label>
				  <input type="time" class="form-control" id="fechahoraStream" name="fechahoraStream">
			  </div>

			  <div class="form-group col-md-12">
			  	<label for="codificacionStream">Codificación de la emisión</label>
				  <select id="codificacionStream" class="form-control" name="codificacionStream">
					  <option value="H264">H264</option>
					  <option value="VP8">VP8</option>
				  </select>
			  </div>

			  <div class="form-group m-2 col-md-4">
				<input class="form-check-input" type="checkbox" value="" id="chatActivo">
				<label class="form-check-label" for="chatActivo">
					Chat Activo
				</label>
			  </div>

              <div class="form-group col-md-4">
                  <p>Logo</p>
                <div id="containerImages">
                    <div class="prevImage w-100"></div>

                    <input type="file" name="logoImg" id="logoImg" class="inputUploadfile">
                    <label for="logoImg" class="btnUploadfile"><i data-feather="upload" class="icons"></i> </label>
                  </div>

              </div>


			  
		  </form>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"><i data-feather="plus" class="icons"></i>  Guardar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i data-feather="x" class="icons"></i> Close</button>
      </div>
    </div>
  </div>
</div>
