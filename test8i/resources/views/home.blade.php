@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <dev class="col-md-12">
                <h1> DATA DE API </h1>
            </dev>
        </div>
        <div class="row">
            @foreach($response as $value)
            <dev class="col-md-3">
                <h6> {{ $value['title']}} </h6>
            </dev>
            @endforeach
        </div>
    </div>
</div>
@endsection