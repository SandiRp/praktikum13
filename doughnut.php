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
    <style>
        .container {
          width: 100%;
		  margin: 0 auto;
		 padding: 10px;
		 background-color: #00a2c6;
        }

        .Chart {
		float:left;
          width: 50%;
		  text-align: center;
		  border: 1px solid 'rgba(14, 3, 110)';
		}
		*{
			box-sizing : border-box;
		}
		.card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    border-radius: 5px;
    padding: 30px;
    margin-top: 20px;
 }

      </style>
</head>
<body>
    <div class="container">
	<div class="Chart card">
		<canvas id="myChart"></canvas>
    </div>
	<div class="Chart card">
		<canvas id="Charter"></canvas>
	</div>
	<div class="Chart card">
		<canvas id="cart"></canvas>
    </div>
	<div class="Chart card">
		<canvas id="charte"></canvas>
	</div>
	<div class="Chart card">
		<canvas id="art"></canvas>
    </div>
	<div class="Chart card">
		<canvas id="arte"></canvas>
    </div>
	</div>



	<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: <?php echo json_encode($nama); ?>,
				datasets: [{
					label: 'Total Kasus',
                    data: <?php echo json_encode($jumlah); ?>,
                    backgroundColor: [
					'rgba(255, 0, 0, 1)',
					'rgba(251, 0, 255, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(188, 232, 225, 1)',
					'rgba(255,72,0,1)',
					'rgba(0,255,0,1)',
					'rgba(0,242,255,1)',
					'rgba(171,243,0,1)',
					'rgba(176,0,255,1)',
					'rgba(255,242,0,1)'
					],

                }]
            },options: {
    title: {
      display: true,
      text: 'Total Case in each country'
    }
  }
        });

        
        var cv = document.getElementById("Charter");
		var myChart = new Chart(cv, {
			type: 'doughnut',
			data: {
				labels: <?php echo json_encode($nama); ?>,
				datasets: [{
					label: 'Total Kasus',
                    data: <?php echo json_encode($baru); ?>,
					backgroundColor: [
					'rgba(255, 0, 0, 1)',
					'rgba(251, 0, 255, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(188, 232, 225, 1)',
					'rgba(255,72,0,1)',
					'rgba(0,255,0,1)',
					'rgba(0,242,255,1)',
					'rgba(171,243,0,1)',
					'rgba(176,0,255,1)',
					'rgba(255,242,0,1)'
					],
				}]
			},
			options: {
    title: {
      display: true,
      text: 'New Case in each country'
    }
  }
        });
		var vc = document.getElementById("cart");
		var myChart = new Chart(vc, {
			type: 'doughnut',
			data: {
				labels: <?php echo json_encode($nama); ?>,
				datasets: [{
					label: 'Total Kasus',
                    data: <?php echo json_encode($totalmati); ?>,
					backgroundColor: [
						'rgba(255, 0, 0, 1)',
					'rgba(251, 0, 255, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(188, 232, 225, 1)',
					'rgba(255,72,0,1)',
					'rgba(0,255,0,1)',
					'rgba(0,242,255,1)',
					'rgba(171,243,0,1)',
					'rgba(176,0,255,1)',
					'rgba(255,242,0,1)'
					],
				}]
			},
			options: {
    title: {
      display: true,
      text: 'Total Death in each country'
    }
  }
        });
		var vb = document.getElementById("charte");
		var myChart = new Chart(vb, {
			type: 'doughnut',
			data: {
				labels: <?php echo json_encode($nama); ?>,
				datasets: [{
					label: 'Total Kasus',
                    data: <?php echo json_encode($newdeath); ?>,
					backgroundColor: [
						'rgba(255, 0, 0, 1)',
					'rgba(251, 0, 255, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(188, 232, 225, 1)',
					'rgba(255,72,0,1)',
					'rgba(0,255,0,1)',
					'rgba(0,242,255,1)',
					'rgba(171,243,0,1)',
					'rgba(176,0,255,1)',
					'rgba(255,242,0,1)'
					],
				}]
			},
			options: {
    title: {
      display: true,
      text: 'New Death in each country'
    }
  }
        });
		var bx = document.getElementById("art");
		var myChart = new Chart(bx, {
			type: 'doughnut',
			data: {
				labels: <?php echo json_encode($nama); ?>,
				datasets: [{
					label: 'Total Kasus',
                    data: <?php echo json_encode($sembuh); ?>,
					backgroundColor: [
						'rgba(255, 0, 0, 1)',
					'rgba(251, 0, 255, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(188, 232, 225, 1)',
					'rgba(255,72,0,1)',
					'rgba(0,255,0,1)',
					'rgba(0,242,255,1)',
					'rgba(171,243,0,1)',
					'rgba(176,0,255,1)',
					'rgba(255,242,0,1)'
					],
				}]
			},
			options: {
    title: {
      display: true,
      text: 'TotAL recovered in each country'
    }
  }
        });

		var bv = document.getElementById("arte");
		var myChart = new Chart(bv, {
			type: 'doughnut',
			data: {
				labels: <?php echo json_encode($nama); ?>,
				datasets: [{
					label: 'Total Kasus',
                    data: <?php echo json_encode($positive); ?>,
					backgroundColor: [
						'rgba(255, 0, 0, 1)',
					'rgba(251, 0, 255, 1)',
					'rgba(255, 206, 86, 1)',
					'rgba(188, 232, 225, 1)',
					'rgba(255,72,0,1)',
					'rgba(0,255,0,1)',
					'rgba(0,242,255,1)',
					'rgba(171,243,0,1)',
					'rgba(176,0,255,1)',
					'rgba(255,242,0,1)'
					],
				}]
			},
			options: {
    title: {
      display: true,
      text: 'Active Case in each country'
    }
  }
        });



        
	</script>
</body>
</html>