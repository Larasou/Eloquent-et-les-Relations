@extends('layouts.default')

@section('content')
    <div class="my-10 max-w-3xl mx-auto">
        <h1 class="text-center">
            Ajouter un nouveau tutoriel
        </h1>

        <div class="mt-5 flex flex-col items-center justify-center">
            <form class="w-4/5" action="/posts" method="POST">
                @csrf

                <div class="my-5">
                    <input type="text"
                           name="name"
                           placeholder="Title de l'article"
                           class="w-full rounded-lg py-3 px-5 bg-grey focus:bg-grey-light">
                    {!! $errors->first('name', '<p class="text-red">:message</p>') !!}
                </div>

                <div class="my-5">
                    <textarea
                        name="body"
                        placeholder="Contenu de l'article"
                        rows="9"
                        class="w-full rounded-lg py-3 px-5 bg-grey focus:bg-grey-light"></textarea>
                    {!! $errors->first('body', '<p class="text-red">:message</p>') !!}
                </div>

                <div class="mt-3">
                    <button class="w-full text-lg py-3 px-6 no-underline bg-orange-dark text-white">
                        Ajouter l'article
                    </button>
                </div>
            </form>
        </div>
    </div>

@stop
