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
		td:first-child, td:third-child, td:last-child {
			text-align: center;
		}
	</style>
</head>
<body>
<?php
$s = [
			[
				'vardas' => 'Antanas',
				'amzius' => '30',
				'patiekalas' => 'blynai'
			],
			[
				'vardas' => 'Andrius',
				'amzius' => '29',
				'patiekalas' => 'cepai'
			],
			[
				'vardas' => 'Pranas',
				'amzius' => '28',
				'patiekalas' => 'sriuba'
			]
		];

?>
<table>
		<tr>
			<th>Nr</th>
			<th>Vardas</th>
			<th>amzius</th>
			<th>patiekalas</th>

		</tr>
		<?php
		$n = 0;
			foreach($s as $svecias){
				?>
				<tr>
					<td><?php echo ++$n . '.' ?></td>
					<td><?php echo $svecias['vardas'] ?></td>
					<td><?php echo $svecias['amzius'] ?></td>
					<td><?php echo $svecias['patiekalas'] ?></td>
				</tr>
				<?php
			}

		?>
	</table>

</body>
</html>