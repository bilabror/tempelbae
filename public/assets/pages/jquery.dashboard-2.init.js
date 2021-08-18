/**
 * Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Dashboard-2 Js
 */


//dash-usa-map

$('#user_usa').vectorMap({
  map: 'us_aea_en',
  backgroundColor: 'transparent',
  borderColor: '#818181',
  regionStyle: {
    initial: {
      fill: '#e2e2f1',
    }
  },
  series: {
    regions: [{
        values: {
            "US-VA": '#b7b6d4',
            "US-PA": '#b7b6d4',
            "US-TN": '#b7b6d4',
            "US-WY": '#b7b6d4',
            "US-WA": '#b7b6d4',
            "US-TX": '#b7b6d4',
        },
        attribute: 'fill',
    }]
  },
});
 

// d2_overview

   var options = {
    chart: {
        height: 350,
        type: 'area',
    },
    dataLabels: {
        enabled: false
    },
    colors:['#00bcd4', '#7043c1'],
    stroke: {
        curve: 'smooth'
    },
    markers: {
      size: 3,
      opacity: 0.9,
      colors: ["#f93b7a"],
      strokeColor: "#fff",
      strokeWidth: 2,
      style: 'inverted', // full, hollow, inverted
      hover: {
        size: 5,
      }
    },
    series: [{
        name: 'series1',
        data: [3, 30, 10, 10, 22, 12, 5, 15, 5, 25, 5, 7]
    }, {
        name: 'series2',
        data: [5, 15, 12, 25, 5, 7, 30, 10, 18, 5, 12, 5,]
    }],

    xaxis: {
        type: 'month',
        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec',],                
    },
    tooltip: {
        x: {
            format: 'dd/MM/yy HH:mm'
        },
    }
}

var chart = new ApexCharts(
    document.querySelector("#d2_overview"),
    options
);

chart.render();


// Performance Report

var options = {
  chart: {
    type: 'radialBar',
    height: 300,
  },
  plotOptions: {
    radialBar: {
      size: undefined,
      inverseOrder: true,
      hollow: {
        margin: 5,
        size: '50%',
        background: 'transparent',

      },
      track: {
        show: false,
      },
      startAngle: -180,
      endAngle: 180

    },
  },
  colors: ['#00bcd4', '#fbb624', '#7043c1'],
  stroke: {
    lineCap: 'round'
  },
  series: [71, 63, 77],
  labels: ['Iphones', 'Tablets', 'IMacs'],
  legend: {
    show: true,
    floating: true,
    position: 'right',
    offsetX: 90,
    offsetY: 200
  },
}


var chart = new ApexCharts(
  document.querySelector("#d2_performance"),
  options
);

chart.render();



// d2_visitors


var options = {
  chart: {
      height: 250,
      type: 'bar',
      stacked: true,
      toolbar: {
          show: false
      }
  },
  colors: ['#b7b6d4','#00bcd4'],
  plotOptions: {
      bar: {
          horizontal: true,
          barHeight: '50%',
      },
  },
  dataLabels: {
      enabled: false
  },
  stroke: {
      width: 1,
      colors: ["#ced4da"]
  },
  series: [{
      name: 'Females',
      data: [0.64, 1.65, 1.76, 2.10, 2.5, 3.1, 3.9],
  },
  {
      name: 'Males',
      data: [-0.88, -1.85, -2.06, -2.18, -3.4, -3.2, -3.85]
  }],
  grid: {
      xaxis: {
          showLines: false,
      }
  },
  yaxis: {
    show: false,
      min: -5,
      max: 5,
      title: {
         // text: 'Age',
      },
  },
  tooltip: {
      shared: false,
      x: {
          formatter: function(val) {
              return val
          }
      },
      y: {
          formatter: function(val) {
              return Math.abs(val) + "%"
          }
      }
  },
  xaxis: {
    categories: ['85+', '80-84', '75-79', '70-74', '65-69', '60-64', '55-59', '50-54'],
    title: {
        text: ''
    },
    
    labels: {
      formatter: function(val) {
        return Math.abs(Math.round(val)) + "%"
      }
    }
  },
  legend: {
      show: false,
  },
  grid: {
      borderColor: '#f1f3fa',
      padding: {
        left: 0,
       right: 0
     }
  }
}

var chart = new ApexCharts(
  document.querySelector("#d2_visitors"),
  options
);
chart.render();

// Datatable
$('#datatable').DataTable();