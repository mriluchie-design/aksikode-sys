Highcharts.chart('container-project', {
    chart: {
        type: 'column'
    },
    title: {
        text: ''
    },
    subtitle: {
        text:
            ''
    },
	
    xAxis: {
        categories: ['Anggaran', 'Realisasi', '2025', '2026'],
        crosshair: true,
        accessibility: {
            description: ''
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rupiah'
        }
    },
    tooltip: {
        valueSuffix: ''
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y}'
            }
        }
    },
    series: [
        {
            name: '',
            data: [780, 880,]
        },
        
        
        
    ]
});
