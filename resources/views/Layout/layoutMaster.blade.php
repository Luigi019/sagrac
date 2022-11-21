<!doctype html>
    <html class="no-js" lang="es">

    <head>
        <title> @yield("title")  </title>
        @include('Layout.inc.linksMeta')
        @include('Layout.inc.linksCss')
    </head>
    <body id="page-top">

        @yield("content")


        @include('Layout.inc.linksJs')

    </body>
    </html>
