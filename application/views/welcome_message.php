<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to Kalkulator Bangun Datar</title>
</head>
<body>

<a href="<?= base_url('persegi') ?>">Persegi</a>
<a href="<?= base_url('segitiga') ?>">Segitiga</a>
<a href="<?= base_url('lingkaran') ?>">Lingkaran</a>
<hr>
<div style="height: 400px; width: 400px">
    <canvas id="myChart" width="200" height="200"></canvas>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha512-s+xg36jbIujB2S2VKfpGmlC3T5V2TF3lY48DX7u2r9XzGzgPsa6wTpOQA7J9iffvdeBN0q9tKzRxVxw1JviZPg==" crossorigin="anonymous"></script>
<?php
    $total = $persegi + $segitiga + $lingkaran;
    $persen_persegi = $persegi / $total * 100;
    $persen_segitiga = $segitiga / $total *100;
    $persen_lingkaran = $lingkaran / $total *100;
?>
<script>
    var ctx = document.getElementById('myChart');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Persegi : <?php echo $persegi; ?>', 'Segitiga : <?php echo $segitiga; ?>', 'Lingkaran : <?php echo $lingkaran; ?>'],
            datasets: [{
                label: '# of Votes',
                data: [<?php echo $persen_persegi; ?>, <?php echo $persen_segitiga; ?>, <?php echo $persen_lingkaran; ?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>

</body>
</html>