<head>
    <meta charset="UTF-8">
    <title> Historia Clinica @yield('htmlheader_title', 'Historia Clinica') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />

  



    <!-- Include CSS for JQuery Frontier Calendar plugin (Required for calendar plugin) -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/frontierCalendar/jquery-frontier-cal-1.3.2.css') }}" />
    <!-- Include CSS for color picker plugin (Not required for calendar plugin. Used for example.) -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/colorpicker/colorpicker.css') }}" />
    <!-- Include CSS for JQuery UI (Required for calendar plugin.) -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery-ui/smoothness/jquery-ui-1.8.1.custom.css') }}" />
    <!--
    Include JQuery Core (Required for calendar plugin)
    ** This is our IE fix version which enables drag-and-drop to work correctly in IE. See README file in js/jquery-core folder. **
    -->
    <script type="text/javascript" src="{{ asset('/js/jquery-core/jquery-1.4.2-ie-fix.min.js') }}"></script>
    <!-- Include JQuery UI (Required for calendar plugin.) -->
    <script type="text/javascript" src="{{ asset('/js/jquery-ui/smoothness/jquery-ui-1.8.1.custom.min.js') }}"></script>
    <!-- Include color picker plugin (Not required for calendar plugin. Used for example.) -->
    <script type="text/javascript" src="{{ asset('/js/colorpicker/colorpicker.js') }}"></script>
    <!-- Include jquery tooltip plugin (Not required for calendar plugin. Used for example.) -->
    <script type="text/javascript" src="{{ asset('/js/jquery-qtip-1.0.0-rc3140944/jquery.qtip-1.0.js') }}"></script>
    <!--
        (Required for plugin)
        Dependancies for JQuery Frontier Calendar plugin.
        ** THESE MUST BE INCLUDED BEFORE THE FRONTIER CALENDAR PLUGIN. **
    -->
    <script type="text/javascript" src="{{ asset('/js/lib/jshashtable-2.1.js') }}"></script>
    <!-- Include JQuery Frontier Calendar plugin -->
    <script type="text/javascript" src="{{ asset('/js/frontierCalendar/jquery-frontier-cal-1.3.2.min.js') }}"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
