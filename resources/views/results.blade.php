@extends('master')

@section('content')

<section class="flex flex-wrap" style="padding-top: 64px;">
@for ($i = 0; $i < 10; $i++)
    <div class="w-1/4 p-4">
        <div class="shadow-lg rounded">
            <div>
                <img class="rounded-t" src="/build/img/img.jpeg" alt="">
            </div>
            <div class="p-4 card__body">
                <svg class="w-6 mr-2" aria-labelledby="simpleicons-facebook-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-facebook-icon">Facebook icon</title><path fill="#3D5A96" d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg>
                <div class="inline-block align-top">
                    <span class="text-blue text-2xl mb-1 block">Facebook</span>    
                    <span class="block">Joined 30th March</span>
                </div>
            </div>
        </div>
    </div>
@endfor
</section>

@endsection