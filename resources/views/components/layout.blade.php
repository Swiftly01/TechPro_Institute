<!DOCTYPE html>
<html lang="en">
@include('includes.head')
<body>

    @include('includes.navbar')

    {{ $slot }}

    @include('includes.footer')

    @include('includes.scripts')
    
</body>
</html>