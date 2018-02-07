
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/blog.css') }}" rel="stylesheet">
</head>

<body>

@include('layouts.nav')

<div class="container">
    <div class="row">

    @yield('content')

    @include('layouts.sidebar')
    </div>
</div>




@include('layouts.footer')

</body>
<!-- Bootstrap core JavaScript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
{{--<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>--}}
{{--<script>window.jQuery || document.write('<script src="/js/jquery.min.js"><\/script>')</script>--}}
{{--<script src="/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>--}}
{{--<script src="/js/holder.min.js"></script>--}}
{{--<script>--}}
    {{--$(function () {--}}
        {{--Holder.addTheme("thumb", { background: "#55595c", foreground: "#eceeef", text: "Thumbnail" });--}}
    {{--});--}}
{{--</script>--}}
{{--<script src="/js/bootstrap.min.js"></script>--}}
{{--<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->--}}
{{--<script src="/js/ie10-viewport-bug-workaround.js"></script>--}}
</html>
