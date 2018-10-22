@extends('layouts.default')

@section('content')
    <div class="my-10 max-w-3xl mx-auto">
        <h1 class="text-center">
            Les articles
        </h1>

        <div class="mt-3  text-right">
            <a href="{{ route('posts.create') }}" class="py-3 px-6 no-underline bg-orange-dark text-white">
                Ajouter un article
            </a>
        </div>

        <div class="mt-5 flex flex-col items-center justify-center">
            @foreach($posts as $post)
               <div class="my-5 border-2 border-grey-lighter rounded-lg p-2">
                   <h3 class="text-2xl">
                       <a href="/posts/{{ $post->id }}" class="text-indigo-dark no-underline">
                           {{ $post->name }}
                       </a>
                   </h3>

                   <div class="mt-3 text-lg">
                       {!! $post->body !!}
                   </div>

                   <div class="mt-3 text-right text-grey-darker">
                       Publié par
                       <a href="" class="font-bold text-blue-dark no-underline">
                          {{ $post->user->name }}
                       </a>
                   </div>
               </div>
            @endforeach
        </div>
    </div>

@stop
