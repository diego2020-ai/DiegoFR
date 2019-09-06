
<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="indexusuario.php" style="color:gray;">Agencia rodeo<em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="controlviajeusuario.php" style="color:gray;">Control de mis viajes</a></li>
						<li><?php echo  $_SESSION['nombre'];?></li>
						<li><a  href="logout.php">Cerrar Sesión</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>