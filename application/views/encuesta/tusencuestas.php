 <!-- page content -->
        <div class="right_col" style="height: 100%" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left text-black">
                <h3>Tus Encuesta</h3>
              </div>              
            </div>
            <div class="x_content">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Título</th>
                          <th>Descripción</th>
                          <th>Fecha</th>
                          <th>Resolver</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          if (count($encuestas)>0) {
                            $i =1 ;
                            foreach ($encuestas as $key ) {
                              echo '<tr>
                                    <td>'.$i.'</td>
                                    <td>'.$key["Titulo"].'</td>
                                    <td>'.$key["Descripcion"].'</td>
                                    <td>'.date('Y-m-d',strtotime($key["Fecha"])).'</td>
                                    <td class"text-center">
                                      <a href="'.base_url('index.php/resolverencuesta/'.$key["IdEncuesta"]).'">
                                        <i class="fa fa-indent"></i>
                                      </a>
                                    </td>
                              </tr>';
                              $i++;
                            }
                          }
                        ?>                  
                      </tbody>
                    </table>

                  </div>
          </div>
        </div>
        <!-- /page content -->