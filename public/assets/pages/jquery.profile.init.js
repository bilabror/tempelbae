/**
 * Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Profile Js
 */


//Doughnut
      
var ctx = document.getElementById("pro-doughnut").getContext('2d');

gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke1.addColorStop(0, '#00e795');
  gradientStroke1.addColorStop(1, '#0095e2');

gradientStroke2 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke2.addColorStop(1, '#f6d365');
  gradientStroke2.addColorStop(0, '#ff7850');

gradientStroke3 = ctx.createLinearGradient(0, 0, 0, 300);
  gradientStroke3.addColorStop(0, '#f56348');
  gradientStroke3.addColorStop(1, '#f81f8b');

  var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Computers", "IPhones", "Tablates"],
      datasets: [{
        backgroundColor: [
          gradientStroke1,
          gradientStroke2,
          gradientStroke3,
        ],
        hoverBackgroundColor: [
          gradientStroke1,
          gradientStroke2,
          gradientStroke3,
        ],
        data: [22, 25, 25],
        borderWidth: [.8, .8, .8]
      }]
    },
    options: {
        cutoutPercentage: 75,
        legend: {
          position: 'bottom',
          display: false,
          labels: {
            boxWidth:12
          }
      },          
    }
  }); 

// bar
$('.peity-bar').each(function () {
    $(this).peity("bar", $(this).data());
});

$('.js-conveyor-example').jConveyorTicker({reverse_elm: true});

// File Uploead

$('.dropify').dropify();


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