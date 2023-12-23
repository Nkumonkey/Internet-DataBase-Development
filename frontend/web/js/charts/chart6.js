//饼图2
(function () {
    
    $.get("http://localhost/cate/total",{},function(res){
        var data1=0;
        var data2=0;
        var data3=0;
        var data4=0;
        for(var i=0;i<res.length;i++){
            if(res[i].total>100)  data1++;
            else if(res[i].total<=100&&res[i].total>40)  data2++;
            else if(res[i].total<=40&&res[i].total>5)  data3++;
            else if(res[i].total<=5)  data4++;
        }
        console.log(res);
        console.log(data1);
        console.log(data2);
        console.log(data3);
        console.log(data4);
    //实例化
    var myChart = echarts.init(document.querySelector(".pie2 .chart"))
    //配置项
    var option = {
        color: [
            "#006cff",
            "#FFF0F5",
           // "#0096ff",
            //"#ed8884",
            "#60cda0",
            "#ff9f7f",
            //"#0096ff",
           // "#9fe6b8",
           // "#32c5e9",
           // "#1d9dff"
        ],
        tooltip: {
            trigger: "item",
            formatter: "{a} <br/>{b} : {c} 位 ({d}%)"
        },
        legend: {
            orient: "vertical",
            right: "5%",
            top: "20%",
            // bottom: "0%",
            itemWidth: 10,
            itemHeight: 10,
            textStyle: {
                color: "rgba(255,255,255,.5)",
                fontSize: "12"
            }
        },
        series: [
            {
                name: "用户活跃度分析",
                type: "pie",
                radius: ["10%", "70%"],
                center: ['40%', '65%'],
                roseType: "radius",
                label: {
                    fontSize: 10
                },
                labelLine: {
                    length: 6,
                    length2: 8
                },
                data: [
                    { value: data1, name: "最活跃用户" },
                    { value: data2, name: "活跃用户" },
                    { value: data3, name: "一般用户" },
                    { value: data4, name: "不活跃用户" },
                ]
            }
        ]
    };

    myChart.setOption(option);
},'json')
    window.addEventListener("resize", function () {
        myChart.resize();
    });
})();




