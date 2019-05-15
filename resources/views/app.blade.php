<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    {!! Khead::getTitle() !!}
    <meta name="description" content="{{ $meta_description }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('/js/app.js') }}" defer></script>
</head>
<body>

@inertia

</body>
</html>
