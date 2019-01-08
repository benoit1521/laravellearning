@extends('layout')
@section('contenu')
<div class="card col-12 col-sm-6">
    <div class="card-body">
        <h4 class="card-title">Les utilisateurs agés de plus de {{$age}} ans sont : </h4>

        @foreach ($utilisateurs as $user)
        <p class="card-text">{{ $user->email }}</p>
        @endforeach
    </div>
</div>
@endsection

