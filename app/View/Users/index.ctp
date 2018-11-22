<div class="panel-title">
  <h3>Dashboard</h3>
</div>

<div class="panel-container">
  <div class="panel-content">
    <ul class="department">
      <li class="department-list">
        <span class="department-title">CITCS <small> ( 2000 ) </small></span>
        <span class="department-feedbacks">210</span>
      </li>
      <li class="department-list">
        <span class="department-title">CAS <small> ( 4124 ) </small></span>
        <span class="department-feedbacks">10</span>
      </li>
      <li class="department-list">
        <span class="department-title">CBA <small> ( 414 ) </small></span>
        <span class="department-feedbacks">189</span>
      </li>
      <li class="department-list">
        <span class="department-title">CTE <small> ( 4124 ) </small></span>
        <span class="department-feedbacks">781</span>
      </li>
      <li class="department-list">
        <span class="department-title">CCJ <small> ( 532 ) </small></span>
        <span class="department-feedbacks">900</span>
      </li>
      <li class="department-list">
        <span class="department-title">OFFICES <small> ( 1239 ) </small></span>
        <span class="department-feedbacks">123</span>
      </li>
    </ul>
    <div class="panel-chart">
      <canvas id="myChart"></canvas>
    <div>
  </div>
</div>

<script>
  window.chartColors = {
      red: 'rgb(255, 0, 0)',
      green: 'rgb(0, 163, 51)',
      blue: 'rgb(54, 162, 235)',
      yellow: 'rgb(255, 255, 1)',
      violet: 'rgb(238, 130, 238)',
      orange: 'rgb(255, 165, 1)'
  };

  var config = {
    type: 'pie',
    data: {
      datasets: [{
        data: [10, 20, 50,5,20,10], // commentan mo
        labelColor: '#FFF',
        labelFontSize: '16',
        backgroundColor: [
          window.chartColors.green,
          window.chartColors.red,
          window.chartColors.blue,
          window.chartColors.yellow,
          window.chartColors.violet,
          window.chartColors.orange
        ],
        label: 'Chart'
      }],
      labels: [
        'CITCS',
        'CAS',
        'CBA',
        'CTE',
        'CCJ',
        'OFFICES'
      ]
    },
    options: {
      responsive: true,
      legend: {
        display: true,
        position: 'right',
      },
      animation: false,
      plugins: {
        datalabels: {
          formatter: function(value, context) {
            var length = Object.keys(context['dataset']['data']).length
            var total = 0;

            for ( let a = 0; a < length; a++ ) {
              var b = context['dataset']['data'][a];
              total = total + b;
            }

            if (value != 0) {
              return Math.round((value/total)*10000) / 100 + '%';
            } else {
              return '';
            }
          },
          color: "#FFFFFF"
        }
      }
    },
  };

  window.onload = function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    window.myPie = new Chart(ctx, config);
  };
</script>