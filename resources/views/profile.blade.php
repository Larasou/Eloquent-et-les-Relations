@extends('layouts/default')

@section('content')
    <div class="my-10 max-w-3xl mx-auto">
        <h1 class="text-center">
            {{ $user->name }} <br>
            <span class="text-lg text-orange-dark">
                {{ $user->email }}
            </span>
        </h1>

       <div class="flex justify-center items-center">
           <div class="mt-5 w-3/5 text-xl">
               <h3 class="p-3">
                   Site web: {{ $user->profile->website }}
               </h3>

               <h3 class="p-3">
                   Google+: {{ $user->profile->google }}
               </h3>

               <h3 class="p-3">
                   Twitter: {{ $user->profile->twitter }}
               </h3>

               <h3 class="p-3">
                   Facebook: {{ $user->profile->facebook }}
               </h3>

           </div>
       </div>
    </div>
@stop
