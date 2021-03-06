<?php

$domain = "//ci.quannh.dev/themes/smartadmin";
$config['css'] = array(
    "$domain/css/bootstrap.min.css",
    "$domain/css/font-awesome.min.css",

    //SmartAdmin Styles : Caution! DO NOT change the order
    "$domain/css/smartadmin-production-plugins.min.css",
    "$domain/css/smartadmin-production.css",
    "$domain/css/smartadmin-skins.min.css",

    //SmartAdmin RTL Support
    "$domain/css/smartadmin-rtl.min.css",

    //Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp
    "$domain/css/demo.min.css",
    "$domain/css/ict.css",
//     "//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700"
);

$config['js'] = array(
    //PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
    "$domain/js/plugin/pace/pace.min.js",

    "$domain/js/libs/jquery-2.1.1.min.js",
    "$domain/js/libs/jquery-ui-1.10.3.min.js",

    //IMPORTANT: APP CONFIG
    "$domain/js/app.config.js",

    //JS TOUCH : include this plugin for mobile drag / drop touch events
    //"js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"

    "$domain/js/bootstrap/bootstrap.min.js",

    "$domain/js/plugin/jquery-validate/jquery.validate.min.js",
    "$domain/js/plugin/masked-input/jquery.maskedinput.min.js",

    //  EASY PIE CHARTS
    "$domain/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js",
    //  SPARKLINES
    "$domain/js/plugin/sparkline/jquery.sparkline.min.js",


    //MAIN APP JS FILE
    "$domain/js/app.min.js",
    "$domain/js/demo.min.js",


    "$domain/js/speech/voicecommand.min.js",

    //SmartChat UI : plugin
    "$domain/js/smart-chat-ui/smart.chat.ui.min.js",
    "$domain/js/smart-chat-ui/smart.chat.manager.min.js",



    "$domain/js/plugin/datatables/jquery.dataTables.min.js",
    "$domain/js/plugin/datatables/dataTables.colVis.min.js",
    "$domain/js/plugin/datatables/dataTables.tableTools.min.js",
    "$domain/js/plugin/datatables/dataTables.bootstrap.min.js",
    "$domain/js/plugin/datatable-responsive/datatables.responsive.min.js",

    "$domain/js/plugin/summernote/summernote.min.js",

    "$domain/js/ict.js",



);