<?= $this->Html->link(__('Alta de Partido'), ['controller' => 'partidos', 'action' => 'add', $torneo])  ?>
<div class="row vertical">
<div class="col-xs-12 col-md-12">
<table class="table tablep table-striped table-hover table-condensed">

<tbody>
<?php foreach ($results as $partido):?>
<tr class = <?php echo "Jornada".$partido['jornada'];?> >
	<td><?php echo "<img src='../../img/equipos/".$partido['logol']."'/>"; ?>
	<p class="pa"><?php echo "Tecnico: ".$partido['TecnicoLocal']; ?>
	</td>
	<td align="left" >
		<?= $this->Html->link(__($partido['nombreL']), ['controller' => 'partidos', 'action' => 'resultados', $partido['torneoid'], $partido['idlocal']])?>
				
	
	</td>
	<td><h1><?php echo $partido['goleslocal']; ?>-<?php echo $partido['golesvisitante']; ?></h1>
	<p class="pa"><?= $this->Html->link(__($partido['arbitro']), ['controller' => 'partidos', 'action' => 'arbitros', $partido['torneoid'], $partido['idarbitro']])?> </p>

	<td><?php echo $partido['nombrev']; ?></td>
	<td align="right"><?php echo "<img src='../../img/equipos/".$partido['logov']."'/>"; ?>
	<p class="pa"><?php echo "Tecnico: ".$partido['TecnicoVisitante']; ?>
	</td>
	<td><p class="pa"><?php echo "Jornada: ".$partido['jornada']." Partido: ".$partido['num_partido'] ?></p>
		
		<p class="pa"><span class="hora"><img src='../../img/calendario.png'/></span><?php echo $partido['fecha']."   " ?><span class="hora"><img src='../../img/reloj.jpg'/> </span><?php echo $partido['hora'] ?></p>

		<p class="pa"><span class="hora"><img src='../../img/estadio.png'/> </span><?php echo $partido['estadio'].",".$partido['ciudad'] ?></p>
		<p class="pa"><span class="hora"><img src='../../img/gente.png'/></span><?php echo "Asistencia: ".$this->Number->format($partido['asistencia']) ?></p>
		
		<p class="pa"><?= $this->Html->link(__('Editar'), ['controller' => 'partidos', 'action' => 'edit', $partido['partidoid']])?> <?= $this->Html->link(__('Detalle'), ['controller' => 'partidos', 'action' => 'view', $partido['partidoid']])?> </p>
	</td>
</tr>


<?php
endforeach
 ?>
 </tbody>
 </table>
</div>
</div>
