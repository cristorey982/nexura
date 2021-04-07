<div class="panel panel-primary">
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                  Listado de Usuarios </a>
                </h4>
              </div>

              <div id="collapse2" class="panel-collapse collapse in">
                <div class="panel-body">
                  <table id="datatable" class="table  display table-striped  table-hover table-bordered" cellspacing="0" width="100%">
                    <thead>
                      <tr class="">
                       
                        <th>Usuario</th>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Edad</th>
                        <th>Archivo</th>
                        <th></th>
                      </tr>
                    </thead>

                    <tbody>

                      <?php 

                      $regis = new Usuario();
                      $array_articles = $regis->get_usuario();

                                              //print_r($array_articles);
                      ?>

                      <?php foreach ($array_articles as $key => $value) { ?>
                      <tr class="odd gradeX">
                     
                      <td><a href="javascript:void(0);" onClick="window.location='editar_material_ind.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["usu_usu"]; ?></a></td></td>
                      <td><a href="javascript:void(0);" onClick="window.location='editar_material_ind.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["nom_usu"]; ?></a></td></td>
                      <td><a href="javascript:void(0);" onClick="window.location='editar_material_ind.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["tel_usu"]; ?></a></td></td>
                      <td><a href="javascript:void(0);" onClick="window.location='editar_material_ind.php?id=<?php echo $value["id"];?>';" data-toggle="tooltip" title="Editar" style='text-decoration:none;color:black;'><?php echo $value["eda_usu"]; ?></a></td></td>
                      <td><div class="text-center"><?php echo "<img class=\"imagen img-responsive img-thumbnail\" src=\""."archivos/".$value["fot_nom"]."\"/>";?></div></td>
                       <td>
                          <div class="text-center">
                           <?php echo '<a href="Acciones/eliminar_usuario.php?eliminar='.$value['id'].'" title="Eliminar usuario" data-toggle="tooltip" data-placement="bottom" class="btn btn-xs btn-outline-danger"><i class="glyphicon glyphicon-trash"></i></a>';?>
                          </div>
                      </td>        
                     
                    </tr>
                    <?php } ?>

                  </tbody>
                </table>

              </div>
            </div>
          </div>
          <!-- end panel -->


          
          var datos=$('#formularioUsuario').serialize(); 
            var formData = new FormData($("#formularioUsuario")[0]);
             
                      
          //  alert(datos);
            //return false;

           if ($('#nombre').val() == "") {
                alertify.alert("Debes agregar el nombre completo");
                return false;
            } else if ($('#email').val() == "") {
                alertify.alert("Debes agregar el correo");
                return false;
            } else if ($('#descripcion').val() == "") {
                alertify.alert("Debes agregar el descripción");
                return false;
            }

            /*datos = "usu_usu=" + $('#usu_usu').val() +
                "&nom_usu=" + $('#nom_usu').val() +
                "&con_usu=" + $('#con_usu').val() +
                "&tel_usu=" + $('#tel_usu').val() +
                "&eda_usu=" + $('#eda_usu').val() +
                "&gen_usu=" + $('#gen_usu').val() +
                "&lib_usu=" + $('#lib_usu').val() +
                "&ema_usu=" + $('#ema_usu').val() +
                "&fec_usu=" + $('#fec_usu').val() +
                "&fot_usu=" + $('#fot_usu').val();
                */

              $.ajax({
                type: "POST",
                url: "registro.php",
                data: formData,
                success: function(r) {
            }
            });

            return false;


            echo "<input type='radio' name='roles' id='roles' value='".$lista2["id"]."'>"." ".$lista2["nombre"]."<br>";

            echo "<input type='radio' value='".$lista2["id"]."'>"." ".$lista2["nombre"]."<br>";

            <div class="form-group has-success">
                      <label class="control-label hidden-xs  col-sm-4 col-md-4" for="boletin"></label>
                        <div class="col-xs-12 col-sm-7 col-md-7">
                        <div class="text-center">
                                         <div class="btn-group" data-placement="bottom" data-toggle="buttons">
                                          <label class="btn btn-outline-warning" for="radio1">
                                            <input type="radio" name="boletin" id="boletin" value="1"> Deseo recibir boletin informativo
                                          </label>
                                         
                                        </div>
                                      </div>
                        </div>
                        </div>


                        ****************************************


                        
                  

                        <div class="form-group has-warning">
                        <label class="control-label hidden-xs  col-sm-4 col-md-4" for="Area">Area</label>
                        <div class="col-xs-12 col-sm-7 col-md-7">
                          <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                            <select name="area_id" id="area_id"class="custom-select input-lg btn-block" data-style="btn-primary" data-toggle="tooltip" title="Selecciona una area">
                                    <?php
                                    while($lista1=mysqli_fetch_array($res1)){
                                      echo "<option value='".$lista1["id"]."'>".$lista1["nombre"]."</option>";
                                    }
                                    ?>
                                  </select></div>
                        </div>
                        </div>

                       

                        <div class="form-group has-warning">
                        <label class="control-label hidden-xs  col-sm-4 col-md-4" for="descripcion">Descripción</label>
                        <div class="col-xs-12 col-sm-7 col-md-7">
                          <div class="input-group">
                          <textarea class="form-control" rows="10" id="descripcion" name="descripcion"></textarea>
                          </div>
                        </div>
                        </div>

                        <div class="form-group has-success">
                        <label class="control-label hidden-xs  col-sm-4 col-md-4" for="Roles">Roles</label>
                        <div class="col-xs-12 col-sm-7 col-md-7">
                          <div class="input-group">
                           
                            <?php
                                    while($lista2=mysqli_fetch_array($res2)){
                                      echo "<input type='radio' name='roles' id='roles' value='".$lista2["id"]."'>"." ".$lista2["nombre"]."<br>";
                                                                          
                                    }
                                    ?>
                            </div>
                        </div>
                        </div>


                        -------------

                        $sql1="insert into empleado_rol (empleado_id,rol_id) values (null,'$emp_rol')";
                        
                        mysqli_query($conexion,$sql1);


