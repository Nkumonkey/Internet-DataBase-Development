/*//饼图
(function () {
    //实例化
    var myChart = echarts.init(document.querySelector(".pie .chart"))
    //配置项
    var option = {
        tooltip: {
            trigger: 'item',
            formatter: '{a} <br/>{b}: ({c}%)'
        },
        legend: {
            orient: 'vertical',
            left: '13%',
            top: '20%',
            textStyle: {
                color: "rgba(255,255,255,.5)",
                fontSize: "12"
            }
        },
        series: [
            {
                name: '销售占比',
                type: 'pie',
                radius: ['50%', '70%'],
                center: ['55%', '60%'],
                avoidLabelOverlap: false,
                label: {
                    show: false,
                    position: 'center'
                },
                emphasis: {
                    label: {
                        show: true,
                        fontSize: '30',
                        fontWeight: 'bold'
                    }
                },
                labelLine: {
                    show: false
                },
                data: [
                    { value: 42.2, name: '服饰鞋靴' },
                    { value: 13.1, name: '美妆护肤' },
                    { value: 13, name: '美食饰品' },
                    { value: 5.2, name: '珠宝钟表' },
                    { value: 3.6, name: '儿童鞋服' },
                    { value: 3.4, name: '家具生活' }
                ]
            }
        ]
    };
    myChart.setOption(option);
    window.addEventListener("resize", function () {
        myChart.resize();
    });
})();*/
(function () {
    $.get("http://localhost/cate/all",{},function(res){
       // console.log(res);
        //初始化echarts实例
        var myChart = echarts.init(document.querySelector(".pie .chart"))
        var value_data=[];
        var pv=0;
        var fav=0;
        var cart=0;
        var buy=0;
        for(var i=0;i<res.length;i++){
            pv+=res[i].pv;
            fav+=res[i].fav;
            cart+=res[i].cart;
            buy+=res[i].buy
        }
        var pvtocart=cart/pv*100;
        var carttofav=fav/cart*100;
        var favtobuy=buy/fav*100;
        value_data.push({value:pvtocart,name:'pv'});
        value_data.push({value:carttofav,name:'cart'});
        value_data.push({value:favtobuy,name:'fav'});
        value_data.push({value:10,name:'buy'});
        
    //配置项
    var option = {
        title: {
          text: 'Funnel'
        },
        tooltip: {
          trigger: 'item',
          formatter: '{a} <br/>{b} : {c}%'
        },
        toolbox: {
          feature: {
            dataView: { readOnly: false },
            restore: {},
            saveAsImage: {}
          }
        },
        grid: {
          top:'30%',
            left: '55%',
            right: '2%',
            bottom: '1%',
            containLabel: true
          },
        legend: {
            data: ['pv', 'fav', 'cart', 'buy']
        },
        series: [
          {
            name: 'Expected',
            type: 'funnel',
            left: '10%',
            width: '80%',
            label: {
              formatter: '{b}Expected'
            },
            labelLine: {
              show: false
            },
            itemStyle: {
              opacity: 0.7
            },
            emphasis: {
              label: {
                position: 'inside',
                formatter: '{b}Expected: {c}%'
              }
            },
            data: [
                { value: 60, name: 'buy' },
                { value: 40, name: 'cart' },
                { value: 80, name: 'fav' },
                { value: 100, name: 'pv' }
              ]
          },
          {
            name: 'Actual',
            type: 'funnel',
            left: '10%',
            width: '80%',
            maxSize: '80%',
            label: {
              position: 'inside',
              formatter: '{c}%',
              color: '#fff'
            },
            itemStyle: {
              opacity: 0.5,
              borderColor: '#fff',
              borderWidth: 2
            },
            emphasis: {
              label: {
                position: 'inside',
                formatter: '{b}Actual: {c}%'
              }
            },
            data:value_data,
            // Ensure outer shape will not be over inner shape when hover.
            z: 100
          }
        ]
      };
    myChart.setOption(option);
    window.addEventListener("resize", function () {
        myChart.resize();
    });
},"json")
})();





