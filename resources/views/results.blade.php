@extends('master')

@section('content')

<section class="flex flex-wrap" style="padding-top: 64px;">
@foreach($networks as $network)
    <div class="w-1/4 p-4">
    <a class="inline-block no-underline text-grey" href="{{ $network['url'] }}">
        <div class="shadow-lg rounded">
            <div>
                <img class="rounded-t" src="{{ $network['img'] }}" alt="">
            </div>
            <div class="p-4 card__body">
                <img class="w-6 mr-2" src="{{ $network['icon'] }}" alt="">
                <div class="inline-block align-top">
                    <span class="text-blue text-2xl mb-1 block">{{ $network['name'] }}</span>    
                    <span class="block">Last seen: {{ $network['created_date'] }}</span>
                </div>
            </div>
        </div>
        </a>
    </div>
@endforeach
</section>

@endsection