/*//柱状图1
(function () {
    //实例化
    var myChart = echarts.init(document.querySelector(".bar .chart"))
    //配置项
    var option = {
        color: ["#2f89cf"],
        tooltip: {
            trigger: "axis",
            axisPointer: {
                type: "shadow"
            },
            formatter:"{b}年<br/>{c} 亿元"
        },
        // 修改图表的大小
        grid: {
            left: "23%",
            top: "25%",
            right: "5%",
            bottom: "15%",
            // containLabel: true
        },
        xAxis: [
            {
                type: "category",
                data: ['2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'],
                axisTick: {
                    alignWithLabel: true
                },
                // 修改刻度标签 相关样式
                axisLabel: {
                    color: "rgba(255,255,255,.6) ",
                    fontSize: "12"
                },
                // 不显示x坐标轴的样式
                axisLine: {
                    show: false
                }
            }
        ],
        yAxis: [
            {
                type: "value",
                // 修改刻度标签 相关样式
                axisLabel: {
                    color: "rgba(255,255,255,.6) ",
                    fontSize: 12
                },
                // y轴的线条改为了 2像素
                axisLine: {
                    lineStyle: {
                        color: "rgba(255,255,255,.1)",
                        width: 2
                    }
                },
                // y轴分割线的颜色
                splitLine: {
                    lineStyle: {
                        color: "rgba(255,255,255,.1)"
                    }
                }
            }
        ],
        series: [
            {
                name: "成交额",
                type: "bar",
                barWidth: "35%",
                data: [0.72, 9.36, 52, 191, 362, 571, 920, 1207, 1682, 2135, 2684],
                itemStyle: {
                    // 修改柱子圆角
                    barBorderRadius: 5
                }
            }
        ]
    };
    myChart.setOption(option);
    window.addEventListener("resize", function () {
        myChart.resize();
    });
})();*/
(function(){
    $.get("http://localhost/cate/view",{},function(res){
       // console.log(res);
        //初始化echarts实例
        var myChart = echarts.init(document.querySelector(".bar .chart"))
        var value_data=[];
        for(var i=0;i<res.length;i++){
            value_data.push({value:res[i].sum,name:res[i].catename})
        }
        //设置配置项
        var option = {
tooltip: {
trigger: 'item',
formatter: '{a} <br/>{b}: {c} ({d}%)'
},
grid: {
    left: "23%",
    top: "20%",
    right: "5%",
    bottom: "10%",
    containLabel: true
},

series: [
{
name: 'Access From',
type: 'pie',
selectedMode: 'single',
radius: [0, '30%'],
label: {
position: 'inner',
fontSize: 10
},
labelLine: {
show: false
},
data: [
{ value: res[0].sum, name: res[0].catename },
{ value: res[1].sum, name: res[1].catename },
{value: res[2].sum, name: res[2].catename }
]
},
{
name: 'Access From',
type: 'pie',
radius: ['45%', '60%'],
labelLine: {
length: 30
},
data:value_data
}
]
};
        //关联echarts实例与配置项
        myChart.setOption(option);
    },"json");
    window.addEventListener("resize", function () {
        myChart.resize();
    });
})();


