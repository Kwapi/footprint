@extends('master')

@section('content')
    <section class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-md">
            <h2 class="mb-2">Discover your digital footprint</h1>
            <form action="/fullcontact/email" method="POST" class="text-center">
                <div class="form-group">
                    <input type="email" name="email" class="shadow border rounded py-2 px-3 text-grey-darker w-4/5" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <button type="submit" class="shadow bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 rounded w-1/6">Search</button>
                </div>
            </form>
        </div>
    </section>
@endsection