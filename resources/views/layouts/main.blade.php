<!DOCTYPE html>
<html lang="en" dir="ltr">
    @include("layouts.head")
    <body>
        @yield('content')

        @include("layouts.footer")
        <script src="{{ asset("js/app.js")}}" charset="utf-8"></script>
    </body>
</html>
