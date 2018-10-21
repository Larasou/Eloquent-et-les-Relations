@extends('layouts/default')

@section('content')
    <div class="my-10 max-w-3xl mx-auto">
        <h1 class="text-center">
           Les profiles
        </h1>

        <div class="mt-5 flex flex-col items-center justify-center">
            @foreach($profiles as $profile)
                <div class="text-xl my-2 font-semibold border-2 rounded-lg flex justify-between w-3/5 border-hrey-dark py-3 px-5">
                    <a href="/profile/{{ $profile->user->id }}" class="text-indigo-dark no-underline mx-3">
                        {{ $profile->firstname }}
                    </a>

                    <div class="mx-3 text-orange-dark">
                        {{ $profile->user->email }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="my-10 max-w-3xl mx-auto">
        <h1 class="text-center">
            Liste des membres
        </h1>

        <div class="mt-5 flex flex-col items-center justify-center">
            @foreach($users as $user)
                <div class="text-xl my-2 font-semibold border-2 rounded-lg flex justify-between w-3/5 border-hrey-dark py-3 px-5">
                    <a href="/profile/{{ $user->id }}" class="text-indigo-dark no-underline mx-3">
                        {{ $user->name }}
                    </a>

                    <div class="mx-3 text-orange-dark">
                       {{ $user->email }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@stop
