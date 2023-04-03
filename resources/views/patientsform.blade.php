<!DOCTYPE html>
<html>
    <head>
        <title>Patient Information App</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="root"></div>
        <script src="{{ asset ('patient-information/src/App.js') }}"></script>
    </body>
</html>