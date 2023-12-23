//柱状图2
(function () {
    $.get("http://localhost/cate/items",{},function(res){
        var value_data=[];
        var name_data=[];
        for(var i=0;i<res.length;i++){
            value_data.push(res[i].itemCount);
            name_data.push(res[i].itemId);
        }
    //实例化
 //   console.log(value_data);
//    console.log(name_data);
    var myChart = echarts.init(document.querySelector(".bar2 .chart"))
    //配置项
    var option = {
        tooltip: {
            trigger: "axis",
            axisPointer: {
                type: "shadow"
            },
            formatter: "{b}<br/>人均 {c} 元"
        },
        color: "#8b78f6",
        grid: {
            left: "23%",
            top: "18%",
            right: "0%",
            bottom: "0%"
        },
        xAxis: {
            show: false
        },
        yAxis: {
            type: 'category',
            data: name_data.reverse(),
            axisLine: {
                show: false
            },
            axisTick: {
                show: false
            },
            axisLabel: {
                color: "rgba(255,255,255,.5)"
            }

        },
        series: [
            {
                name: "人均",
                type: 'bar',
                data: value_data.reverse(),
                itemStyle: {
                    barBorderRadius: 20
                },
                barWidth: 10,
                barCategoryGap: 50,
                label: {
                    normal: {
                        show: true,
                        position: "inside",
                        formatter: "{c}",
                        color: "rgba(255,255,255,.8)"
                    }
                }
            }
        ]
    };


    myChart.setOption(option);
},'json')
    window.addEventListener("resize", function () {
        myChart.resize();
    });
})();




