/* Insert your javascript here */
$(document).on('click', 'ul li', function() {
    $(this).addClass('active').siblings().removeClass('active')
})