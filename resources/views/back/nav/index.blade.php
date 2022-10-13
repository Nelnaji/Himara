@extends('layouts.app')
@section('backContent')
<h1>Hello navbar my old friends, I hope you're doing well</h1>

@foreach ($navlinks as $navlink )

<aside>

    <div>{{ $navlink->name }}</div>
    <div>{{ $navlink->href }}</div>
    <div></div>
    <div></div>
</aside>

@endforeach
@endsection
