@extends('master')

@section('content')
    <form action="/fullcontact/email" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
@endsection