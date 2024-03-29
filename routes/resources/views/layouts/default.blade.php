<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-COMPATIBLE" content="IE=edge, chrome=1"/>
    <meta charset="utf-8"/>
    <title>IRet Solution</title>
    <meta name="description" content="overview"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <!-- bootstrap & fontawesonme -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::to('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}" />
    <!-- page specific plugin styles -->
    <!-- text fonts -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/fonts.googleapis.com.css') }}" />
    <!-- ace styles -->
    <link rel="stylesheet" href="{{ URL::to('assets/css/ace.min.css') }}" class="ace-main-stylesheet" id="main-ace-style" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ URL::to('assets/css/ace-part2.min.css') }}" class="ace-main-stylesheet" />
    <![endif]-->
    <link rel="stylesheet" href="{{ URL::to('assets/css/ace-skins.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::to('assets/css/ace-rtl.min.css') }}" />
    <!--[if lte IE 9]>
    <link rel="stylesheet" href="{{ URL::to('assets/css/ace-ie.min.css') }}" />
    <![endif]-->

    <!--[if !IE]> -->
    <script src="{{ URL::to('assets/js/jquery-2.1.4.min.js') }}"></script>
    <!-- <![endif]-->

    <!--[if IE]>
    <script src="{{ URL::to('assets/js/jquery-1.11.3.min.js') }}"></script>
    <![endif]-->
    <!-- inline styles related to this page -->
    <!-- ace settings handler -->
    <script src="{{ URL::to('assets/js/ace-extra.min.js') }}"></script>
    <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->
    <!--[if lte IE 8]>
    <script src="{{ URL::to('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/respond.min.js') }}"></script>
    <![endif]-->
</head>
<body class="skin-2">
<div id="navbar" class="navbar navbar-default" ace-save-state>
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggle" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <div class="navbar-header pull-left">
            <a href="" class="navbar-brand">
                <small>
                    <i class="fa fa-download"></i>
                    IRet Crawler
                </small>
            </a>
        </div>
        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="light-blue2 dropdown-modal">
                    <a data-toggle="dropdown" href="" class="dropdown-toggle">
                        <img class="nav-user-photo" src="{{ URL::to('assets/images/avatars/avatar.png') }}" alt=""/>
                        <span class="user-info">
                            <small>Welcome,</small>
                            Jason Bourne
                        </span>
                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>
                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-user"></i>
                                Hồ sơ cá nhân
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <i class="ace-icon fa fa-power-off"></i>
                                Thoát
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <nav role="navigation" class="navbar-menu pull-left collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        IRet Solution
                        &nbsp;
                        <i class="ace-icon fa fa-angle-down bigger-110"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-light-blue dropdown-caret">
                        <li>
                            <a href="#">
                                <u>C</u>&nbsp;
                                IRet Crawler
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <u>T</u>&nbsp;
                                IRet Tracker
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <u>O</u>&nbsp;
                                IRet Controller
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <u>U</u>&nbsp;
                                IRet Useful
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <u>D</u>&nbsp;
                                IRet Database
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <u>M</u>&nbsp;
                                IRet Media
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <u>S</u>&nbsp;
                                IRet SSO
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div><!-- navbar-container-->
</div>
<div class="main-container ace-save-state" id="main-container">
    <script type="text/javascript">
        // try{ace.settings.loadState('main-container')}cactch(e){}
    </script>
    <div id="sidebar" class="sidebar responsive ace-save-state">
        <script type="text/javascript">
            // try{ace.settings.loadState('sidebar')}cactch(e){}
        </script>
        <div class="sidebar-shortcuts" id="sidebar-shortcuts">
            <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                <button class="btn btn-success">
                    <i class="ace-icon fa fa-signal"></i>
                </button>
                <button class="btn btn-info">
                    <i class="ace-icon fa fa-pencil"></i>
                </button>
                <button class="btn btn-warning">
                    <i class="ace-icon fa fa-users"></i>
                </button>
                <button class="btn btn-danger">
                    <i class="ace-icon fa fa-cogs"></i>
                </button>
            </div>

            <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                <span class="btn btn-success"></span>
                <span class="btn btn-info"></span>
                <span class="btn btn-warning"></span>
                <span class="btn btn-danger"></span>
            </div>
        </div><!-- /.sidebar-shortcuts -->

        <ul class="nav nav-list">
            <li class="active">
                <a href="">
                    <i class="menu-icon fa fa-tachometer"></i>
                    <span class="menu-text">Tổng quan</span>
                </a>
                <b class="arrow"></b>
            </li>
            <li class="">
                <a href="" class="dropdown-toggle">
                    <i class="menu-icon fa fa-desktop"></i>
                    <span class="menu-text">
                        Crawler
                    </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Crawl URL
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="http://localhost/laravel-master/public/website_category">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Phân loại website
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Website hỗ trợ
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Phân loại sản phẩm
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Tên sản phẩm
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Danh sách URL
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="" class="dropdown-toggle">
                    <i class="menu-icon fa fa-pencil-square-o"></i>
                    <span class="menu-text">
                        Data Extractor
                    </span>
                    <b class="arrow fa fa-angle-down"></b>
                </a>
                <b class="arrow"></b>
                <ul class="submenu">
                    <li class="">
                        <a href="">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Thẻ lấy nội dung
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Tách nội dung trang đơn
                        </a>
                        <b class="arrow"></b>
                    </li>
                    <li class="">
                        <a href="/icrawler/public/crawler_data">
                            <i class="menu-icon fa fa-caret-right"></i>
                            Crawl dữ liệu
                        </a>
                        <b class="arrow"></b>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="{{ URL::to('/ic_lite') }}">
                    <i class="menu-icon fa fa-list-alt"></i>
                    <span class="menu-text">
                        IC Lite
                    </span>
                </a>
            </li>
            <li class="">
                <a href="{{ URL::to('/ic_lite_advance') }}">
                    <i class="menu-icon fa fa-list"></i>
                    <span class="menu-text">
                        IC Lite Advance
                    </span>
                </a>
            </li>
        </ul><!-- /.nav-list -->
        <div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
            <i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state"
               data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
        </div>
    </div>
<!------------------------------------------------------------------------------------------------------------->
    <div class="main-content">
        <div class="main-content-inner">
            @yield('content')
        </div>
    </div><!-- /.main-content -->
<!------------------------------------------------------------------------------------------------------------->
    <div class="footer">
        <div class="footer-inner">
            <div class="footer-content">
                <span class="blue bolder">IRet</span>
                Solution &copy; <?php echo date('Y'); ?>
            </div>
        </div>
    </div>
    <a href="" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->
<script type="text/javascript">
    if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="{{ URL::to('assets/js/bootstrap.min.js') }}"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="{{ URL::to('assets/js/excanvas.min.js') }}"></script>
<![endif]-->
<script src="{{ URL::to('assets/js/jquery-ui.custom.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.easypiechart.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.sparkline.index.min.js') }}"></script>

<!-- page specific plugin scripts -->
<script src="{{ URL::to('assets/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::to('assets/js/jquery.dataTables.bootstrap.min.js') }}"></script>
<script src="{{ URL::to('assets/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::to('assets/js/buttons.flash.min.js') }}"></script>
<script src="{{ URL::to('assets/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::to('assets/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::to('assets/js/buttons.colVis.min.js') }}"></script>
<script src="{{ URL::to('assets/js/dataTables.select.min.js') }}"></script>

<!-- ace scripts -->
<script src="{{ URL::to('assets/js/ace-elements.min.js') }}"></script>
<script src="{{ URL::to('assets/js/ace.min.js') }}"></script>

<!-- inline scripts related to this page -->
<script type="text/javascript">
jQuery(function($) {
    $('.easy-pie-chart.percentage').each(function(){
        var $box = $(this).closest('.infobox');
        var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
        var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
        var size = parseInt($(this).data('size')) || 50;
        $(this).easyPieChart({
            barColor: barColor,
            trackColor: trackColor,
            scaleColor: false,
            lineCap: 'butt',
            lineWidth: parseInt(size/10),
            animate: ace.vars['old_ie'] ? false : 1000,
            size: size
        });
    })

    $('.sparkline').each(function(){
        var $box = $(this).closest('.infobox');
        var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
        $(this).sparkline('html',
            {
                tagValuesAttribute:'data-values',
                type: 'bar',
                barColor: barColor ,
                chartRangeMin:$(this).data('min') || 0
            });
    });


    //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
    //but sometimes it brings up errors with normal resize event handlers
    // $.resize.throttleWindow = false;

    var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
    var data = [
        { label: "social networks",  data: 38.7, color: "#68BC31"},
        { label: "search engines",  data: 24.5, color: "#2091CF"},
        { label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
        { label: "direct traffic",  data: 18.6, color: "#DA5430"},
        { label: "other",  data: 10, color: "#FEE074"}
    ]

    /**
     we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
     so that's not needed actually.
     */

    //pie chart tooltip example
    var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
    var previousPoint = null;

    placeholder.on('plothover', function (event, pos, item) {
        if(item) {
            if (previousPoint != item.seriesIndex) {
                previousPoint = item.seriesIndex;
                var tip = item.series['label'] + " : " + item.series['percent']+'%';
                $tooltip.show().children(0).text(tip);
            }
            $tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
        } else {
            $tooltip.hide();
            previousPoint = null;
        }

    });

    /////////////////////////////////////
    $(document).one('ajaxloadstart.page', function(e) {
        $tooltip.remove();
    });




    var d1 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
        d1.push([i, Math.sin(i)]);
    }

    var d2 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.5) {
        d2.push([i, Math.cos(i)]);
    }

    var d3 = [];
    for (var i = 0; i < Math.PI * 2; i += 0.2) {
        d3.push([i, Math.tan(i)]);
    }


    var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});


    $('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
    function tooltip_placement(context, source) {
        var $source = $(source);
        var $parent = $source.closest('.tab-content')
        var off1 = $parent.offset();
        var w1 = $parent.width();

        var off2 = $source.offset();
        //var w2 = $source.width();

        if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
        return 'left';
    }


    $('.dialogs,.comments').ace_scroll({
        size: 300
    });


    //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
    //so disable dragging when clicking on label
    var agent = navigator.userAgent.toLowerCase();
    if(ace.vars['touch'] && ace.vars['android']) {
        $('#tasks').on('touchstart', function(e){
            var li = $(e.target).closest('#tasks li');
            if(li.length == 0)return;
            var label = li.find('label.inline').get(0);
            if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
        });
    }

    $('#tasks').sortable({
            opacity:0.8,
            revert:true,
            forceHelperSize:true,
            placeholder: 'draggable-placeholder',
            forcePlaceholderSize:true,
            tolerance:'pointer',
            stop: function( event, ui ) {
                //just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                $(ui.item).css('z-index', 'auto');
            }
        }
    );
    $('#tasks').disableSelection();
    $('#tasks input:checkbox').removeAttr('checked').on('click', function(){
        if(this.checked) $(this).closest('li').addClass('selected');
        else $(this).closest('li').removeClass('selected');
    });


    //show the dropdowns on top or bottom depending on window height and menu position
    $('#task-tab .dropdown-hover').on('mouseenter', function(e) {
        var offset = $(this).offset();

        var $w = $(window)
        if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
            $(this).addClass('dropup');
        else $(this).removeClass('dropup');
    });

})
</script>
</body>
</html>