<? /*
Template Name: карта

*/?>
<head>
    <link href="<?  echo plugins_url('/mapplic/css/map.css') ?>" rel="stylesheet">
    <link href="<?  echo plugins_url('/mapplic/css/mapplic.css') ?>" rel="stylesheet">
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<? echo plugins_url('/mapplic/js/hammer.min.js') ?>"></script>
<script src="<? echo plugins_url('/mapplic/js/jquery.easing.js') ?>"></script>
<script src="<? echo plugins_url('/mapplic/js/jquery.mousewheel.js') ?>"></script>
<script src="<? echo plugins_url('/mapplic/js/mapplic.js') ?>"></script>
<script src="<? echo plugins_url('/mapplic/js/mapplic.instance.js') ?>"></script>
<?


echo '123';
echo do_shortcode("[mapplic id='3']");
echo do_shortcode('[amcharts id="chart-1"]');

?></body>