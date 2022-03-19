var $scrollbar = $('.scrollbar-inner');

function init() {
    $scrollbar.scrollbar().scrollLock()
}

if ($scrollbar.length) {
    init();
}

// Variables

var $nav = $('.navbar-nav'),
    $collapse = $('.navbar .navbar-custom-collapse');


// Methods

function hideNavbarCollapse($this) {
    $this.addClass('collapsing-out');
}

function hiddenNavbarCollapse($this) {
    $this.removeClass('collapsing-out');
}


// Events

if ($collapse.length) {
    $collapse.on({
        'hide.bs.collapse': function () {
            hideNavbarCollapse($collapse);
        }
    })

    $collapse.on({
        'hidden.bs.collapse': function () {
            hiddenNavbarCollapse($collapse);
        }
    })
}

var navbar_menu_visible = 0;

$(".sidenav-toggler").click(function () {
    if (navbar_menu_visible == 1) {
        $('body').removeClass('nav-open');
        navbar_menu_visible = 0;
        $('.bodyClick').remove();

    } else {

        var div = '<div class="bodyClick"></div>';
        $(div).appendTo('body').click(function () {
            $('body').removeClass('nav-open');
            navbar_menu_visible = 0;
            $('.bodyClick').remove();

        });

        $('body').addClass('nav-open');
        navbar_menu_visible = 1;

    }

});

