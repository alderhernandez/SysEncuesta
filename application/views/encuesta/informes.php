<!-- page content -->
        <div class="right_col" role="main">
            <div class="x_content">
              <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2 class="text-bold">Resultados de la encuesta</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     <!--<li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                          </div>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>-->
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-12 col-sm-12 col-md-12"><div class="col-3 col-sm-3 col-md-3">
                      <select id="selectAreas" class="form-control">
                            <option selected value="-1" disabled>Seleccione un area</option>
                            <?php
                              if(!$areas){
                                echo '<option disabled>No hay datos disponibles</option>';
                              }else{
                                foreach ($areas as $key) {
                                  echo '<option value="'.$key["IdArea"].'">'.$key["Descripcion"].'</option>';
                                }
                              }
                            ?>
                      </select>
                    </div>
                          <div class="col-3 col-sm-3 col-md-3">
                          <select id="selectEncuestas" class="form-control">
                                <option selected value="-1" disabled>Seleccione una encuesta</option>
                                <?php
                                  if(!$encuestas){
                                    echo '<option disabled>No hay datos disponibles</option>';
                                  }else{
                                    foreach ($encuestas as $key) {
                                      echo '<option value="'.$key["IdEncuesta"].'">'.$key["Titulo"].'</option>';
                                    }
                                  }
                                ?>
                          </select>
                        </div>
                        <div class="col-5 col-sm-5 col-md-5">
                        <select id="selectPreguntas" class="form-control">
                              <option selected value="-1" disabled>Seleccione una pregunta</option>
                        </select>
                      </div>
                        <div class="col-1 col-sm-1 col-md-1">
                						<button id="btnFiltrar" class="btn btn-success btn-block">
                							<i class="fa fa-search"></i>
                						</button>
                					</div>
                      </div>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>
                        Usuarios encuestados: <span class="badge bg-green" style="color:white;" id="preguntaResultados">0</span>
                        <small>Pregunta: <span style="color:black !important;" id="preguntaEnc">----------</span></small>
                      </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="canvasChart">
                        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
