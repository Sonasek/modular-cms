<!doctype html>
<html class="has-navbar-fixed-top" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('modular-cms::master.layout.head')
    </head>
    <body>
        @include('modular-cms::master.layout.datalayer')
        @include('modular-cms::master.layout.menu')
        @include('modular-cms::master.layout.hero')
        @include('modular-cms::master.layout.sections')
        @include('modular-cms::master.layout.footer')
        @include('modular-cms::master.layout.scripts')
    </body>
</html>

