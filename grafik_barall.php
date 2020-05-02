<?php
include('koneksi.php');
$produk = mysqli_query($koneksi,"select * from negara");
while($row = mysqli_fetch_array($produk)){
	$nama[] = $row['nama'];
	
	$query = mysqli_query($koneksi,"select * from covid where id_negara='".$row['id_negara']."'");
	$row = $query->fetch_array();
	$jumlah[] = $row['total_kasus'];
	$baru[] = $row['new_case'];
	$totalmati[] = $row['total_death'];
	$newdeath[] = $row['new_death'];
	$sembuh[] = $row['total_recovered'];
	$positive[] = $row['active_case'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama); ?>,
				datasets: [{
					label: 'Total Kasus',
					data: <?php echo json_encode($jumlah); ?>,
					backgroundColor: 'black',
				},{
					label: 'kasus baru',
					data: <?php echo json_encode($baru); ?>,
					backgroundColor: 'orange',
				},{
					label: 'Total kematian',
					data: <?php echo json_encode($totalmati); ?>,
					backgroundColor: 'red',
				},{
					label: 'Kematian Baru',
					data: <?php echo json_encode($newdeath); ?>,
					backgroundColor: 'gray',
				},{
					label: 'Jumlah Pulih',
					data: <?php echo json_encode($sembuh); ?>,
					backgroundColor: 'green',
				},{
					label: 'Pasien Covid',
					data: <?php echo json_encode($positive); ?>,
					backgroundColor: 'yellow',
				},
				]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>