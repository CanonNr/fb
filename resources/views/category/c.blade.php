@include('common.header')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div id="main" style="width: 600px;height:400px;"></div>
</div>
<script src="/js/echarts.min.js"></script>
<script>
    // 基于准备好的dom，初始化echarts实例
    var myChart = echarts.init(document.getElementById('main'));

    // 指定图表的配置项和数据
    var option = {
        title: {
            text: "<?php echo date('Y-m',time())?>"+'销量柱状图'
        },
        tooltip: {},
        legend: {
            data:['销量']
        },
        xAxis: {
            data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
        },
        yAxis: {},
        series: [{
            name: '销量',
            type: 'bar',
            data: [5, 20, 36, 10, 10, 20]
        }]
    };

    // 使用刚指定的配置项和数据显示图表。
    myChart.setOption(option);

</script>
<!-- END MAIN CONTENT-->
@include('common.footer')
