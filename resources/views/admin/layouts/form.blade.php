<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('title') Administration - form @show</title>
    @section('meta_keywords')
        <meta name="keywords" content="your, awesome, keywords, here"/>
    @show @section('meta_author')
        <meta name="author" content="Jon Doe"/>
    @show @section('meta_description')
        <meta name="description"
              content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei."/>
    @show
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    
    @yield('styles')
</head>
<body>
<div id="wrapper">
    @include('admin.partials.nav')
    <div id="page-wrapper">
        <!-- Content -->
        @yield('content')
        <!-- ./ content -->
    </div>
</div>




<script type="text/javascript">
    $(function () {
        $('textarea').summernote({height: 200});
        $('form').submit(function (event) {
            event.preventDefault();
            var form = $(this);

            if (form.attr('id') == '' || form.attr('id') != 'fupload') {
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: form.serialize()
                }).success(function () {
                    setTimeout(function () {
                        parent.$.colorbox.close();
                    }, 10);
                }).fail(function (jqXHR, textStatus, errorThrown) {
                    // Optionally alert the user of an error here...
                    var textResponse = jqXHR.responseText;
                    var alertText = "One of the following conditions is not met:\n\n";
                    var jsonResponse = jQuery.parseJSON(textResponse);

                    $.each(jsonResponse, function (n, elem) {
                        alertText = alertText + elem + "\n";
                    });
                    alert(alertText);
                });
            }
            else {
                var formData = new FormData(this);
                $.ajax({
                    type: form.attr('method'),
                    url: form.attr('action'),
                    data: formData,
                    mimeType: "multipart/form-data",
                    contentType: false,
                    cache: false,
                    processData: false
                }).success(function () {
                    window.location.href = '/admin/article';

                }).fail(function (jqXHR, textStatus, errorThrown) {
                    // Optionally alert the user of an error here...
                    var textResponse = jqXHR.responseText;
                    var alertText = "One of the following conditions is not met:\n\n";
                    var jsonResponse = jQuery.parseJSON(textResponse);

                    $.each(jsonResponse, function (n, elem) {
                        alertText = alertText + elem + "\n";
                    });

                    alert(alertText);
                });
            }
            ;
        });
    });
</script>

@yield('scripts')
<script src="{{ asset('js/admin.js') }}"></script>

</body>

</html>