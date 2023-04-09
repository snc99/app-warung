@if ($errors->any())
    <div class="alet alert-danger"></div>
    <ul>
        @foreach ($errors->all() as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    @include('sweetalert::alert')
@endif
