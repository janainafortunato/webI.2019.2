<!DOCTYPE html>
<html>
<head>
	<title>Tabela em PHP</title>
	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>


<div class="container">
  <h2>Estudos de Tabela com PHP</h2>
  <p>Lista de compras </p>            
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Item</th>
        <th>Descrição</th>
        <th>Quantidade</th>
      </tr>
  
    <?php 
    	$item = [ 'item-1'=>'1', 'item-2'=>'2', 'item-3'=>'3','item-4'=>'4','item-5'=>'5'];

    	$descricao= [

    		'F' => 'Feijão',
    		'A' => 'Arroz',
    		'M'=> 'Macarrão',
    		'F' => 'Fuba',
    		'L' => 'Leite'
    	];

    	$qt= [ 'qt2 '=>'2', 'qt4'=>'4', 'qt6'=>'6', 'qt7'=>'7', 'qt8'=>'8' ];

     ?>

   
    	<?php foreach ($item as  $kei => $ordem): ?>
    		<?php foreach ($descricao as $key => $valor): ?>
    			<?php foreach ($qt as $kei => $quanti): ?>

   		<tr>
   			<td><?= $ordem ?></td>	
   			<td><?= $valor ?></td>	
   			<td><?= $quanti ?></td>	
   		</tr>
   	</therad>
   	 	<?php endforeach ?>
   	 		<?php endforeach ?>
   	 			<?php endforeach ?>
  
</table>

</body>
</html>