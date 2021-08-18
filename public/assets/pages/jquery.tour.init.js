/**
 * Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Tour Js
 */

(function(){
  //initialize constructor
  var productTour = new ProductTour({
    overlay:true,
    onStart: function () {
        console.log("tour Started");
    },
    onChanged:function (e) {
        console.log("Return Value",e);
    },
    onClosed:function (e) {
        console.log("Return Value For On Close",e);
    }
  });
  //can only be called once
  productTour.steps([{//pass an array of tour steps
      element: '#tourJumbotron',//specify the target element #search or .header
      title: 'Jumbotron',
      content: 'This is the Jumbotron',
      image: 'assets/images/logo-sm.png',//specify image to be shown on mobile view
  },{//pass an array of tour steps
      element: '#bg_colorCard',//specify the target element #search or .header
      title: 'Color Card',
      content: 'This is the color card',
      image: 'assets/images/logo-sm.png',//specify image to be shown on mobile view
      position: 'left'//top, bottom, right, left
  },{//pass an array of tour steps
      element: '#img_card',//specify the target element #search or .header
      title: 'Image Card',
      content: 'This is the image card',
      image: 'assets/images/logo-sm.png',//specify image to be shown on mobile view
      position: 'top'//top, bottom, right, left
  }]);

  productTour.startTour();//initialize the tour
})();

  