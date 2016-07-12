
<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="{{asset('js/plugin/pace/pace.min.js')}}"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="{{asset('js/libs/jquery-2.0.2.min.js')}}"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="{{asset('js/libs/jquery-ui-1.10.3.min.js')}}"><\/script>');
    }
</script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

<!-- BOOTSTRAP JS -->
<script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="{{asset('js/notification/SmartNotification.min.js')}}"></script>

<!-- JARVIS WIDGETS -->
<script src="{{asset('js/smartwidgets/jarvis.widget.min.js')}}"></script>

<!-- EASY PIE CHARTS -->
<script src="{{asset('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>

<!-- SPARKLINES -->
{{--<script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>--}}

        <!-- JQUERY VALIDATE -->
<script src="{{asset('js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>

<!-- JQUERY MASKED INPUT -->
<script src="{{asset('js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="{{asset('js/plugin/select2/select2.min.js')}}"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="{{asset('js/plugin/bootstrap-slider/bootstrap-slider.min.js')}}"></script>

<!-- browser msie issue fix -->
<script src="{{asset('js/plugin/msie-fix/jquery.mb.browser.min.js')}}"></script>

<!-- FastClick: For mobile devices -->
<script src="{{asset('js/plugin/fastclick/fastclick.js')}}"></script>

<!-- Angular js -->
<script src="{{asset('js/vendor/angular.js')}}"></script>
<script src="{{asset('js/vendor/angular-ui-router.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('js/build/controllers.min.js')}}"></script>

<!--[if IE 7]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src="{{asset('js/demo.js')}}"></script>

<!-- PAGE RELATED PLUGIN(S)
<script src="..."></script>-->

<script type="text/javascript">

    // DO NOT REMOVE : GLOBAL FUNCTIONS!

    $(document).ready(function() {

        /*pageSetUp();*/

        function hide_divs(search) {
            $(".demo-icon-font").hide(); // hide all divs
            $("#all-icons-demo h2").hide();
            $("#all-icons-demo .alert").hide();
            $('.demo-icon-font > i[class*="'+search+'"]').parent().show(); // show the ones that match
        }

        function show_all() {
            $(".demo-icon-font").show()
            $("#all-icons-demo h2").show();
            $("#all-icons-demo .alert").show();
        }


        $("#fa-icon-search").keyup(function() {
            var search = $.trim(this.value);
            if (search === "") {
                show_all();
            }
            else {
                hide_divs(search);
            }
        });

    })

</script>