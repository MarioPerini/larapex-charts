<script>
    var options =
    {
        theme:{
          mode:'{!! $chart->themeMode() !!}'
        },
        chart: {
            type: '{!! $chart->type() !!}',
            height: {!! $chart->height() !!},
            width: '{!! $chart->width() !!}',
            toolbar: {!! $chart->toolbar() !!},
            zoom: {!! $chart->zoom() !!}
        },
        plotOptions: {
            {!! $chart->type() !!}:{
                horizontal: {!! $chart->horizontal() !!},
                dataLabels: {!! $chart->dataLabels() !!},
                {!! $chart->plotOptions() !!}
            },
        },
        colors: {!! $chart->colors() !!},
        series: {!! $chart->dataset() !!},
        @if($chart->labels())
            labels: {!! json_encode($chart->labels(), true) !!},
        @endif
        title: {
            text: "{!! $chart->title() !!}"
        },
        subtitle: {
            text: '{!! $chart->subtitle() !!}',
            align: '{!! $chart->subtitlePosition() !!}'
        },
        xaxis: {
            categories: {!! $chart->xAxis() !!}
        },
        grid: {!! $chart->grid() !!},
        markers: {!! $chart->markers() !!},
        legend: {!! $chart->legend() !!},
        @if($chart->stroke())
            stroke: {!! $chart->stroke() !!},
        @endif
    }

    var chart = new ApexCharts(document.querySelector("#{!! $chart->id() !!}"), options);
    chart.render();

</script>
