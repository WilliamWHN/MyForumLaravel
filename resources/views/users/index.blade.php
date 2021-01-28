@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">Listes des utilisateurs</h1>
    @forelse ($users as $user)
        @if ($admins < 5)
        <div class="border border-light p-2 ml-2 text-decoration-none"><div class="text-uppercase">{{$user->pseudo}} - {{$user->role->name}}</div>
            @if($user->role->slug !== 'ADMI')
                <a href="{{ route('users.edit',$user->id) }}"><div><button type="button" class="btn btn-sm btn-success">Nommer Admin</button></div>
            @elseif($user->id !== Auth::user()->id)
                <a href="{{ route('users.edit',$user->id) }}"><div><button type="button" class="btn btn-sm btn-danger">Destituer</button></div>
            @endif</div></a>
        @else
            <div class="border border-light p-2 ml-2 text-decoration-none"><div>{{$user->pseudo}} - {{$user->role->name}}</div>
            @if($user->role->slug === 'ADMI')
                    <a href="{{ route('users.edit',$user->id) }}"><div><button type="button" class="btn btn-sm btn-danger">Destituer</button></div>
            @endif
            </div>
        @endif
    @empty
        <p>(Aucune opinion n'a été soumise pour l'instant sur ce sujet)</p>
    @endforelse
@endsection
