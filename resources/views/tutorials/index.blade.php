@extends('layouts.default')

@section('content')
    <div class="my-10 max-w-3xl mx-auto">
        <h1 class="text-center">
            Les tutoriels
        </h1>

        <div class="mt-3  text-right">
            <a href="{{ route('tutorials.create') }}" class="py-3 px-6 no-underline bg-orange-dark text-white">
                Ajouter un tutoriel
            </a>
        </div>

        <div class="mt-5 flex flex-col items-center justify-center">
            @foreach($tutorials as $tutorial)
               <div class="my-5 border-2 border-grey-lighter rounded-lg p-2">
                   <h3 class="text-2xl">
                       <a href="{{ route('tutorials.show', $tutorial) }}" class="text-indigo-dark no-underline">
                           {{ $tutorial->name }}
                       </a>
                   </h3>

                   <div class="mt-3 text-lg">
                       {!! $tutorial->body !!}
                   </div>

                   <div class="mt-3 text-right text-grey-darker">
                       Publié par
                       <a href="" class="font-bold text-blue-dark no-underline">
                          {{ $tutorial->user->name }}
                       </a>
                   </div>
               </div>
            @endforeach
        </div>
    </div>

@stop
