/**
 * Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Jvectormap Js
 */

 
!function($) {
  "use strict";

  var VectorMap = function() {};

  VectorMap.prototype.init = function() {
      //various examples
      $('#world-map-markers').vectorMap({
    map : 'world_mill_en',
    scaleColors : ['#f93b7a', '#f93b7a'],
    normalizeFunction : 'polynomial',
    hoverOpacity : 0.7,
    hoverColor : false,
    regionStyle : {
      initial : {
        fill : '#605daf'
      }
    },
     markerStyle: {
              initial: {
                  r: 9,
                  'fill': '#f93b7a',
                  'fill-opacity': 0.9,
                  'stroke': '#fff',
                  'stroke-width' : 7,
                  'stroke-opacity': 0.4
              },

              hover: {
                  'stroke': '#fff',
                  'fill-opacity': 1,
                  'stroke-width': 1.5
              }
          },
    backgroundColor : 'transparent',
    markers : [ {
      latLng : [-8.51, 179.21],
      name : 'Tuvalu'
    }, {
      latLng : [3.2, 73.22],
      name : 'Maldives'
    }, {
      latLng : [35.88, 14.5],
      name : 'Malta'
    }, {
      latLng : [12.05, -61.75],
      name : 'Grenada'
    }, {
      latLng : [7.35, 134.46],
      name : 'Palau'
    }, {
      latLng : [42.5, 1.51],
      name : 'Andorra'
    },{
      latLng : [26.02, 50.55],
      name : 'Bahrain'
    },]
  });

      $('#usa').vectorMap({map: 'us_aea_en',backgroundColor: 'transparent',
                regionStyle: {
                  initial: {
                    fill: '#fbb624'
                  }
        }});
  $('#canada').vectorMap({map : 'ca_lcc',backgroundColor : 'transparent',
        regionStyle : {
          initial : {
            fill : '#1ecab8'
          }
        }});
      $('#uk').vectorMap({map: 'uk_mill_en',backgroundColor: 'transparent',
        regionStyle: {
          initial: {
            fill: '#00a5bb'
          }
        }});
      $('#chicago').vectorMap({map: 'us-il-chicago_mill_en',backgroundColor: 'transparent',
        regionStyle: {
          initial: {
            fill: '#d0d0e0'
          }
        }});

},


  //init
  $.VectorMap = new VectorMap, $.VectorMap.Constructor = VectorMap
}(window.jQuery),

//initializing 
function($) {
  "use strict";
  $.VectorMap.init()
}(window.jQuery);
