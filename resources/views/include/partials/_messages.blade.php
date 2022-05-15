@if (session()->has('confirmMessage'))
    <script>
        $.atomNotification('{{ session()->get('confirmMessage') }}', "success");
    </script>
@endif


@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            $.atomNotification('{{ $error }}', "error");
        </script>
    @endforeach
@endif