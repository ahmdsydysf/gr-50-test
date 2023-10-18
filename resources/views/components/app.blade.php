@include('layout.header' , ['page_title' => $pager_title])


{{ $pager_title}}
{{ $slot }}


@include('layout.footer')
