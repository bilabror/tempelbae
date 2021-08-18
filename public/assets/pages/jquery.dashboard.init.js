/**
 * Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
 * Author: MannatThemes
 * Module/App: App.js
 */


var dash_spark_1 = {
    
    chart: {
        type: 'area',
        height: 80,
        sparkline: {
            enabled: true
        },
    },
    stroke: {
        curve: 'smooth',
        width: 2
      },
    fill: {
        opacity: 0.05,
    },
    series: [{
      data: [4, 8, 5, 10, 4, 16, 5, 11, 6, 11, 30, 10, 13, 4, 6, 3, 6]
    }],
    yaxis: {
        min: 0
    },
    colors: ['#fbb624'],
  }
  new ApexCharts(document.querySelector("#dash_spark_1"), dash_spark_1).render();


 //dash-colunm-1
  
 var options = {


    
    chart: {
        height:80,
        animations: {
            enabled: false
        },
        sparkline: {
            enabled: true
        },
        type:"bar"
    },
    plotOptions: {
        bar: {
            horizontal: false, 
            endingShape: "rounded", 
            columnWidth: "40%"
        }
    },
    dataLabels: {
        enabled: false
    },
    stroke: {
        show: true, 
        width: 2, 
        colors: ["transparent"]
    },
    colors: ["#1ecab8"],
    series:[ {
        name: "Revenue", 
        data: [50, 60, 70, 80, 90, 100, 95, 85, 75, 65, 55, 65, 75, 85, 95, 105, 80, 70, 60, 50, 40, 30, 45, 55, 65, 75, 85, 95, 100, 80, 60]
    }
    ],
    xaxis: {
        categories: ['1-Jan','2-Jan','3-Jan','4-Jan','5-Jan','6-Jan','7-Jan','8-Jan','9-Jan','10-Jan','11-Jan','12-Jan','13-Jan','14-Jan','15-Jan','16-Jan','17-Jan','18-Jan','19-Jan','20-Jan','21-Jan','22-Jan','23-Jan','24-Jan','25-Jan','26-Jan','27-Jan','28-Jan','29-Jan','30-Jan','31-Jan'],
        crosshairs: {
            show: false,
        },
    },
    fill: {
        opacity: 0.5
    },
    
    tooltip: {
        y: {
            formatter:function(val) {
                return"$ "+val+" thousands"
            },
        },
    }

 }
var chart = new ApexCharts(
    document.querySelector("#apex_column1"),
    options
  );

  chart.render();


  //dash-radialBar
  
var options = {
    chart: {
        height: 180,
        type: "radialBar",
      },
    
      series: [67],
      colors: ["#20E647"],
      plotOptions: {
        radialBar: {
          hollow: {
            margin: 0,
            size: "60%",
            background: "#293450"
          },
          track: {
            dropShadow: {
              enabled: true,
              top: 2,
              left: 0,
              blur: 4,
              opacity: 0.15
            }
          },
          dataLabels: {
            name: {
              offsetY: -5,
              color: "#fff",
              fontSize: "14px",
            },
            value: {
                offsetY: 5,
              color: "#fff",
              fontSize: "14px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "vertical",
          gradientToColors: ["#87D4F9"],
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "round"
      },
      labels: ["Progress"]
    };
    
    var chart = new ApexCharts(document.querySelector("#d1-radialBarMap"), options);
    
    chart.render();


    
//Dash-Map

$('#world-map-markers').vectorMap({
  map : 'world_mill_en',
  scaleColors : ['#eff0f1', '#eff0f1'],
  normalizeFunction : 'polynomial',
  hoverOpacity : 0.7,
  hoverColor : false,
  regionStyle : {
      initial : {
          fill : '#eff0f1'
      }
  },

  markerStyle: {
    initial: {
      stroke: "transparent"
    },
    hover: {
      stroke: "rgba(112, 112, 112, 0.30)"
    }
  },
  backgroundColor : 'transparent',

  markers: [
    {
      latLng: [37.090240, -95.712891],
      name: "USA",
      style: {
        fill: "#f93b7a"
      }
    },
    {
      latLng: [71.706940, -42.604301],
      name: "Greenland",
      style: {
        fill: "#f0961f"
      }
    },
    {
      latLng: [-21.943369, 123.102198],
      name: "Australia",
      style: {
        fill: "#5766da"
      }
    }
  ],
  series: {
    regions: [{
        values: {
            "AU": '#c4c9f2',
            "US": '#fdcede',
            "GL": '#fae1be',
        },
        attribute: 'fill'
    }]
},
});


//payment-widget


var options = {
  chart: {
      height: 250,
      type: 'donut',
  }, 
  series: [10, 65, 25,],
  legend: {
      show: true,
      position: 'bottom',
      horizontalAlign: 'center',
      verticalAlign: 'middle',
      floating: false,
      fontSize: '14px',
      offsetX: 0,
      offsetY: -13
  },
  labels: [ "Cash", "Online", "Creadit Card"],
  colors: ["#00dd9f", "#f8bc60", "#f65f4d"],
  responsive: [{
      breakpoint: 600,
      options: {
          chart: {
              height: 240
          },
          legend: {
              show: false
          },
      }
  }],
  
}

var chart = new ApexCharts(
  document.querySelector("#d1_payment"),
  options
);

chart.render();


