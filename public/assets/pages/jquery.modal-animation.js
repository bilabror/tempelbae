/**
 * Theme: Frogetor - Responsive Bootstrap 4 Admin Dashboard
 * Author: Mannatthemes
 * Modal Animation Js
 */


$('[data-plugin="custommodal"]').on('click', function( e ) {
    var modal = new Custombox.modal({
        content: {
            target: $(this).attr("href"),
            effect: $(this).attr("data-animation")
        }
    });
    modal.open();
});
