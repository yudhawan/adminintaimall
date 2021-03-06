<div class="col-xs-12">
<div class="row">
<div class="space-6"></div>

<div class="col-sm-7 infobox-container">
	<div class="chart-container" style="height:10vh; width:30vw">
		<canvas id="myChart" width="400" height="400"></canvas>
	</div>
	

</div>

<div class="vspace-12-sm"></div>

<div class="col-sm-5">
	<div class="infobox infobox-green">
		<div class="infobox-icon">
			<i class="ace-icon fa fa-comments"></i>
		</div>

		<div class="infobox-data">
			<span class="infobox-data-number">-</span>
			<div class="infobox-content">comments + 2 reviews</div>
		</div>

		<div class="stat stat-success">8%</div>
	</div>

	<!-- <div class="infobox infobox-blue">
		<div class="infobox-icon">
			<i class="ace-icon fa fa-twitter"></i>
		</div>

		<div class="infobox-data">
			<span class="infobox-data-number">11</span>
			<div class="infobox-content">new followers</div>
		</div>

		<div class="badge badge-success">
			+32%
			<i class="ace-icon fa fa-arrow-up"></i>
		</div>
	</div> -->

	<div class="infobox infobox-pink">
		<div class="infobox-icon">
			<i class="ace-icon fa fa-shopping-cart"></i>
		</div>

		<div class="infobox-data">
			<span class="infobox-data-number">-</span>
			<div class="infobox-content">new orders</div>
		</div>
		<div class="stat stat-important">4%</div>
	</div>

	<!-- <div class="infobox infobox-red">
		<div class="infobox-icon">
			<i class="ace-icon fa fa-flask"></i>
		</div>

		<div class="infobox-data">
			<span class="infobox-data-number">7</span>
			<div class="infobox-content">experiments</div>
		</div>
	</div> -->

	<div class="infobox infobox-orange2">
		<div class="infobox-chart">
			<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
		</div>

		<div class="infobox-data">
			<span class="infobox-data-number">-</span>
			<div class="infobox-content">pageviews</div>
		</div>

		<div class="badge badge-success">
			7.2%
			<i class="ace-icon fa fa-arrow-up"></i>
		</div>
	</div>

	<div class="infobox infobox-blue2">
		<div class="infobox-progress">
			<div class="easy-pie-chart percentage" data-percent="0" data-size="46">
				<span class="percent">0</span>%
			</div>
		</div>

		<div class="infobox-data">
			<span class="infobox-text">traffic used</span>

			<div class="infobox-content">
				<span class="bigger-110">~</span>
				100GB remaining
			</div>
		</div>
	</div>

	<div class="space-6"></div>

	<div class="infobox infobox-green infobox-small infobox-dark">
		<div class="infobox-progress">
			<div class="easy-pie-chart percentage" data-percent="0" data-size="39">
				<span class="percent">0</span>%
			</div>
		</div>

		<div class="infobox-data">
			<div class="infobox-content">Task</div>
			<div class="infobox-content">Completion</div>
		</div>
	</div>

	<div class="infobox infobox-blue infobox-small infobox-dark">
		<div class="infobox-chart">
			<span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
		</div>

		<div class="infobox-data">
			<div class="infobox-content">Earnings</div>
			<div class="infobox-content">$0</div>
		</div>
	</div>
	
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1', '2', '3', '4', '5', '6'],
        datasets: [{
            label: '# of Votes',
            data: [0],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
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