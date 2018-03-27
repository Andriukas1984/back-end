<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<style>
		table{
		border-collapse: collapse;
		}
		
		td, th{
		border: 1px solid #ccc;
		padding: 5px 10px;
		}
		td:first-child, td:last-child {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		$m = [
			[
				'vardas' => 'jonas',
				'pareigos' => 'direktoriu',
				'atlyginimas' => 5000
			],
			[
				'vardas' => 'petras',
				'pareigos' => 'pavaduotojas',
				'atlyginimas' => 3000
			],
			[
				'vardas' => 'juozas',
				'pareigos' => 'valytojas',
				'atlyginimas' => 5000
			]
		];


	?>

	<table>
		<tr>
			<th>Nr</th>
			<th>Vardas</th>
			<th>pareigos</th>
			<th>atlyginimas</th>

		</tr>
		<?php
		$n = 0;
			foreach($m as $darb){
				?>
				<tr>
					<td><?php echo ++$n . '.' ?></td>
					<td><?php echo $darb['vardas'] ?></td>
					<td><?php echo $darb['pareigos'] ?></td>
					<td><?php echo $darb['atlyginimas'] ?></td>
				</tr>
				<?php
			}

		?>
	</table>

</body>
</html>