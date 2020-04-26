@include('common.header')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div id="main" style="width: 800px;height:400px;margin-left: 30px"></div>
</div>
<script src="/js/echarts.min.js"></script>
<script>
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: "<?php echo date('Y-m',time())?>"+'  销量统计'
        },
        tooltip: {},
        legend: {
            data:['销量']
        },
        xAxis: {
            data: [
                @foreach($goods as $item)
                "{{$item}}",
                @endforeach
            ]
        },
        yAxis: {},
        series: [{
            name: '销量',
            type: 'bar',
            data: [@foreach($total as $item)
                "{{$item}}",
                @endforeach]
        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);

</script>
<!-- END MAIN CONTENT-->
@include('common.footer')
