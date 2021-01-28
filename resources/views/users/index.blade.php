@extends ('layout')

@section ('content')
    <h1 class="text-center p-5">Listes des utilisateurs</h1>
    @forelse ($users as $user)
        <div class="border border-light p-2 ml-2 text-decoration-none">{{$user->pseudo}}
            @if($user->role->slug !== 'ADMI')
                <a href="{{ route('users.edit',$user->id) }}">Nommer Admin
            @elseif($user->id !== Auth::user()->id)
                <a href="{{ route('users.edit',$user->id) }}">Destituer
            @endif</div></a>
    @empty
        <p>(Aucune opinion n'a été soumise pour l'instant sur ce sujet)</p>
    @endforelse
@endsection
