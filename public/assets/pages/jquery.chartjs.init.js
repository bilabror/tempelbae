/**
 * Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Chart Js
 */


!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx, {type: 'line', data: data, options: options});
                    break;
                case 'Doughnut':
                    new Chart(ctx, {type: 'doughnut', data: data, options: options});
                    break;
                case 'Pie':
                    new Chart(ctx, {type: 'pie', data: data, options: options});
                    break;
                case 'Bar':
                    new Chart(ctx, {type: 'bar', data: data, options: options});
                    break;
                case 'Radar':
                    new Chart(ctx, {type: 'radar', data: data, options: options});
                    break;
                case 'PolarArea':
                    new Chart(ctx, {data: data, type: 'polarArea', options: options});
                    break;
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },

    //init
    ChartJs.prototype.init = function() {
        //creating lineChart
        var lineChart = {
            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October"],
            datasets: [{
                label: "Conversion Rate",
                fill: false,
                backgroundColor: '#00bcd4',
                borderColor: '#00bcd4',
                data: [-90,-50,-70,20,-35,20,10,50,30,80]
            }, {
                label: "Average Sale Value",
                fill: false,
                backgroundColor: '#e3eaef',
                borderColor: "#e3eaef",
                borderDash: [5, 5],
                data: [10,-50,30,-80,50,-30,30,-80,10,-10]
            }]
        };

        var lineOpts = {
            responsive: true,
            // title:{
            //     display:true,
            //     text:'Chart.js Line Chart'
            // },
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                    display: true,
                    // scaleLabel: {
                    //     display: true,
                    //     labelString: 'Month'
                    // },
                    gridLines: {
                        color: "rgba(0,0,0,0.1)"
                    }
                }],
                yAxes: [{
                    gridLines: {
                        color: "rgba(255,255,255,0.05)",
                        fontColor: '#fff'
                    },
                    ticks: {
                        max: 100,
                        min: -100,
                        stepSize: 20
                    }
                }]
            }
        };

        this.respChart($("#lineChart"),'Line',lineChart, lineOpts);

        //donut chart
        var donutChart = {
            labels: [
                "Bitcoin",
                "Ethereum",
                "Litecoin",
                "Dashcoin",
            ],
            datasets: [
                {
                    data: [80, 50, 100,121],
                    backgroundColor: [
                        "#f7931a",
                        "#1ecab8",
                        "#e3eaef",
                        "#1c75bc",
                    ],
                    hoverBackgroundColor: [
                        "#f7931a",
                        "#1ecab8",
                        "#e3eaef",
                        "#1c75bc",
                    ],
                    hoverBorderColor: "#fff"
                }]
        };
        this.respChart($("#doughnut"),'Doughnut',donutChart);


        //Pie chart
        var pieChart = {
            labels: [
                "Desktops",
                "Tablets",
                "Mobiles",
                "Mobiles",
            ],
            datasets: [
                {
                    data: [80, 50, 100,121],
                    backgroundColor: [
                        "#194a8b",
                        "#00264a",
                        "#e3eaef",
                        "#44a2d2",
                    ],
                    hoverBackgroundColor: [
                        "#194a8b",
                        "#00264a",
                        "#e3eaef",
                        "#44a2d2",
                    ],
                    hoverBorderColor: "#fff"
                }]
        };
        this.respChart($("#pie"),'Pie',pieChart);


        //barchart
        var barChart = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Sales Analytics",
                    backgroundColor: "rgba(68, 162, 210, 0.4)",
                    borderColor: "#44a2d2",
                    borderWidth: 2,
                    barPercentage: 0.3,
                    categoryPercentage: 0.5,
                    hoverBackgroundColor: "rgba(68, 162, 210, 0.7)",
                    hoverBorderColor: "#44a2d2",
                    data: [65, 59, 80, 81, 56, 55, 40,20]
                }
            ]
        };
        var barOpts = {
            responsive: true,
            scales: {
                xAxes: [
                    {
                        barPercentage: 0.8,
                        categoryPercentage: 0.4,
                        display: true
                    }
                ]
            }
            
        };
        this.respChart($("#bar"),'Bar',barChart, barOpts);


        //radar chart
        var radarChart = {
            labels: ["Eating", "Drinking", "Sleeping", "Designing", "Coding", "Cycling", "Running"],
            datasets: [
                {
                    label: "Desktops",
                    backgroundColor: "rgba(152,212,206,0.3)",
                    borderColor: "#98d4ce",
                    pointBackgroundColor: "#038660",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(179,181,198,1)",
                    data: [65, 59, 90, 81, 56, 55, 40]
                },
                {
                    label: "Tablets",
                    backgroundColor: "rgba(21,128,196,0.2)",
                    borderColor: "#1580c4",
                    pointBackgroundColor: "#095d88",
                    pointBorderColor: "#fff",
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(255,99,132,1)",
                    data: [28, 48, 40, 19, 96, 27, 100]
                }
            ]
        };
        this.respChart($("#radar"),'Radar',radarChart);

        //Polar area chart
        var polarChart = {
            datasets: [{
                data: [
                    11,
                    16,
                    7,
                    18
                ],
                backgroundColor: [
                    "#1580c4",
                    "#162546",
                    "#ebeff2",
                    "#ea3c75"
                ],
                label: 'My dataset', // for legend
                hoverBorderColor: "#fff"
            }],
            labels: [
                "Series 1",
                "Series 2",
                "Series 3",
                "Series 4"
            ]
        };
        this.respChart($("#polarArea"),'PolarArea',polarChart);
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);



