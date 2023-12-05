<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<?php
use yii\web\JsExpression;

$this->title = 'Gold Amount Chart';
$this->params['breadcrumbs'][] = $this->title;
$js = <<<JS
var data = $chartData;
var ctx = document.getElementById('goldChart').getContext('2d');

var datasets = [];
for (var accountId in data) {
    var dataset = {
        label: 'Account ' + accountId,
        data: data[accountId].data,
        fill: false,
        borderColor: getRandomColor()
    };
    datasets.push(dataset);
}

new Chart(ctx, {
    type: 'line',
    data: {
        labels: data[Object.keys(data)[0]].labels, // Assuming labels are the same for all accounts
        datasets: datasets
    },
    options: {
        responsive: true,
        maintainAspectRatio: true,
        scales: {
            x: {
                ticks: {
                    autoSkip: true,
                    maxTicksLimit: 200 // Adjust the maximum number of X-axis ticks
                }
            },
            y: {
                ticks: {
                    beginAtZero: true,
                    max: 100000 // Adjust the maximum value on the Y-axis
                }
            }
        },
        legend: {
            display: true,
            position: 'bottom'
        },
        title: {
            display: true,
            text: 'Gold Amount Chart'
        }
    }
});

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
JS;

$this->registerJs($js);
?>

<div class="waveWrapper waveAnimation">
    <div class="waveWrapperInner3 bgTop">
        <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
    </div>
    <div class="waveWrapperInner3 bgMiddle">
        <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
    </div>
    <div class="waveWrapperInner3 bgBottom">
        <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
    </div>
</div>

<body class="container-fluid justify-content-center text-center">
    <h1 class="text-center">Math is overrated</h1>
    <a>Here you can witness a scrape of report's DB visualised</a>
    <canvas id="goldChart"></canvas>

</body>