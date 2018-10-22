<div class="dashboard">
    <span class="dashboard-title">Numbers of Feedback and Suggested on each Department</span>
    <div class="dashboard-feedbacks">
        <span class="dashboard-feedback-department">CITCS</span>
        <span class="dashboard-feedback-count">200</span>
    </div>
    <div class="dashboard-feedbacks">
        <span class="dashboard-feedback-department">CAS</span>
        <span class="dashboard-feedback-count">40</span>
    </div>
    <div class="dashboard-feedbacks">
        <span class="dashboard-feedback-department">CBA</span>
        <span class="dashboard-feedback-count">123</span>
    </div>
    <div class="dashboard-feedbacks">
        <span class="dashboard-feedback-department">CTE</span>
        <span class="dashboard-feedback-count">989</span>
    </div>
    <div class="dashboard-feedbacks">
        <span class="dashboard-feedback-department">CCJ</span>
        <span class="dashboard-feedback-count">12</span>
    </div>
    <div class="dashboard-feedbacks">
        <span class="dashboard-feedback-department">OFFICES</span>
        <span class="dashboard-feedback-count">100000</span>
    </div>
</div>

<div class="dashboard-chart">
    <canvas id="myChart"></canvas>
</div>

<script>
window.chartColors = {
    red: 'rgb(255, 0, 0)',
    green: 'rgb(0, 163, 51)',
    blue: 'rgb(54, 162, 235)',
    yellow: 'rgb(255, 255, 1)',
    orange: 'rgb(255, 165, 1)',
    violet: 'rgb(220, 0, 202)',
};

var config = {
    type: 'pie',
    data: {
        datasets: [{
            data: [15,15,5,10,25,30],
            backgroundColor: [
                window.chartColors.green,
                window.chartColors.red,
                window.chartColors.blue,
                window.chartColors.yellow,
                window.chartColors.orange,
                window.chartColors.violet,
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
            position: 'bottom',
        }
    },
    
};

window.onload = function() {
    var ctx = document.getElementById('myChart').getContext('2d');
    window.myPie = new Chart(ctx, config);
};
</script>