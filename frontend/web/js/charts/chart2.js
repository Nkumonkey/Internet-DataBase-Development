//折线图
(function () {
    $.get("http://localhost/cate/all",{},function(res){
       // console.log(res);
        var pv=[];
        var fav=[];
        var cart=[];
        var buy=[];
        for(var i=0;i<res.length;i++){
            pv.push(res[i].pv);
            fav.push(res[i].fav);
            cart.push(res[i].cart);
            buy.push(res[i].buy);

        }
       
      //  console.log(pv);
       // console.log(fav);
    //实例化
    var myChart = echarts.init(document.querySelector(".line .chart"))
    //配置项
    var option = {
        title: {
          text: 'Stacked Line'
        },
        tooltip: {
          trigger: 'axis'
        },
        legend: {
          data: ['pv', 'fav', 'cart', 'buy']
        },
        grid: {
          left: '3%',
          right: '4%',
          bottom: '3%',
          containLabel: true
        },
        toolbox: {
          feature: {
            saveAsImage: {}
          }
        },
        xAxis: {
          type: 'category',
          boundaryGap: false,
          data: ['0', '1', '2', '3', '4', '5','6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23']
        },
        yAxis: {
          type: 'value'
        },
        series: [
          {
            name: 'pv',
            type: 'line',
            data:pv
          },
          {
            name: 'fav',
            type: 'line',
            data:fav 
          },
          {
            name: 'cart',
            type: 'line',
           
            data: cart
          },
          {
            name: 'buy',
            type: 'line',
         
            data: buy
          },
        ]
      };
    myChart.setOption(option);
},"json")
    window.addEventListener("resize", function () {
        myChart.resize();
    });
})();