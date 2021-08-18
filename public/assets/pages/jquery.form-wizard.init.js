/**
 * Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Form Wizard Js
 */

  
$(document).ready(function(){

           

  // Toolbar extra buttons
  var btnFinish = $('<button></button>').text('Finish')
      .addClass('btn btn-info')
      .on('click', function(){ alert('Finish Clicked'); 
  });
  var btnCancel = $('<button></button>').text('Cancel')
      .addClass('btn btn-dark')
      .on('click', function(){ $('#smart_wizard').smartWizard("reset"); 
  });

  $('#smart_wizard').smartWizard({
      selected: 0,
      theme: 'default',
      transitionEffect:'fade',
      showStepURLhash: true,
      toolbarSettings: {
          toolbarButtonPosition: 'end',
          toolbarExtraButtons: [btnFinish, btnCancel]
      }
  });

  // Smart Wizard Arrows
  $('#smart_wizard_arrows').smartWizard({
      selected: 0,
      theme: 'arrows',
      transitionEffect:'fade',
      toolbarSettings: {
          toolbarPosition: 'bottom',
          toolbarExtraButtons: [btnFinish, btnCancel]
      }
  });
  

   // Smart Wizard Circle
   $('#smart_wizard_circles').smartWizard({
      selected: 0,
      theme: 'circles',
      transitionEffect:'fade',
      toolbarSettings: {
          toolbarPosition: 'bottom',
          toolbarExtraButtons: [btnFinish, btnCancel]
      }
  });
});