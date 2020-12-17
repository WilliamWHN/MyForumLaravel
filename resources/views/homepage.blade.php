@extends ('layout')

@section ('content')
    @foreach ($themes as $theme)
        <a href="{{ route('themes.show',$theme->id) }}"><div class="p-2">{{ $theme->name }} <span class="float-right">{{ $theme->topics->count() }}</span></div></a>
    @endforeach
@endsection
