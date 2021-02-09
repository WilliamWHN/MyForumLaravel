@extends ('layout')

@section ('content')
    @foreach ($themes as $theme)
<<<<<<< HEAD
        <a href="{{ route('themes.show',$theme->id) }}"><div class="border border-dark p-2">{{ $theme->name }} <span class="badge badge-light float-right">{{ $theme->topics->count() }}</span></div></a>
=======
        <a href="{{ route('themes.show',$theme->id) }}"><div class="p-2">{{ $theme->name }} <span class="float-right">{{ $theme->topics->count() }}</span></div></a>
>>>>>>> Dev
    @endforeach
@endsection
