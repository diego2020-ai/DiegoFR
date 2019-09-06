<?php


include ('dbcon.php');

$sq21= "SELECT * FROM lineas";$resultado21 = mysqli_query($con, $sq21);
$sq22= "SELECT * FROM hora_salida";$resultado22 = mysqli_query($con, $sq22);
$sq23= "SELECT * FROM tipo_de_asiento";$resultado23 = mysqli_query($con, $sq23);
$sq24= "SELECT * FROM cantidad_tickets";$resultado24 = mysqli_query($con, $sq24);
?>

<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Reservar</h3>
							<form action="procesos/reservaproceso.php" method="post">
												<div class="row form-group">
													<div class="col-md-12">
														
														<div class="container"><h3><strong><?php echo  $_SESSION['nombre'];?></strong></h3></div>
													<span id="nombre123" style="color: red;"></span>
													</div>
												
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label>Lineas</label>
														<select  id="linea" name="linea" class="form-control">
														    <?php 
while ($row = mysqli_fetch_assoc($resultado21)) {
echo "<option value='$row[id]'</option>$row[nombre]\n"; 
}
?>   
														</select>
													</div>
												</div>
													<div class="row form-group">
													<div class="col-md-12">
														<label>Hora de salida</label>
														<select  id="hora_de_salida" name="hora_de_salida" class="form-control">
														    <?php 
while ($row1 = mysqli_fetch_assoc($resultado22)) {
echo "<option value='$row1[id]'</option>$row1[nombre]\n"; 
}
?>   
														</select>
													</div>
												</div>
													<div class="row form-group">
													<div class="col-md-12">
														<label>Fecha de salida</label>
														<input id="date" type="date" name="fecha_de_salida" class="form-control">
														<span id="spanfecha" style="color:red;"></span> 
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<label>Tipos de asiento</label>
														<select id="tipo_de_asiento" name="tipo_de_asiento" class="form-control">
														    <?php 
while ($row2 = mysqli_fetch_assoc($resultado23)) {
echo "<option value='$row2[id]'</option>$row2[nombre]\n"; 
}
?>   
														</select>
													</div>
												</div>
													<div class="row form-group">
													<div class="col-md-12">
														<label>Cantidad de tickets</label>
											<input class="form-control" type="text" name="cantidad_tickets" id="cantidad_tickets">
											<span id="mayora20" style="color:red;"></span> 
													</div>
												</div>
												
											

												<div class="row form-group">
													<div class="col-md-12">
														<button type="submit" onclick="return validacionFecha()" class="btn btn-primary">Registrar </button>
														</form>
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
						<?php include('separados/validacionreserva.php') ?>