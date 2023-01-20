@include('header.header')
@include('nav.nav')

@isset($Page)
    @include($Page)
@endisset





@include('footer.footer')
@include('scripts.scripts')
