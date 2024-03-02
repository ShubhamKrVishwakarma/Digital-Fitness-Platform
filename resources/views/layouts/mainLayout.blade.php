<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @stack("styles")
</head>

<body class="bg-light">
    <!-- Header -->
    @include('includes.header')

    <!-- Page Content -->
    @yield("content")

    <!-- Footer -->
    @include('includes.footer')

    @stack("scripts")
</body>

</html>