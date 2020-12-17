@extends ('layout')

@section ('content')
    <div class="p-2">Les sujets du thème {{ $theme->name }}:</div>
    @foreach ($theme->topics as $topic)
        <div class="p-2 ml-2">{{ $topic->description }} <span class="float-right">{{ $topic->opinions->count() }}</span></div>
    @endforeach
@endsection
