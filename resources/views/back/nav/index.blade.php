@extends('layouts.app')
@section('backContent')
<h1>Hello navbar my old friends, I hope you're doing well</h1>

<section class="grid">

   @foreach ($navlinks as $navlink )

    <aside class="flex ">

        <div class="border p-1">Name : {{ $navlink->name }}</div>
        <div class="border p-1">Href : {{ $navlink->href }}</div>
        <div class="border p-1"><a href="{{ route('nav.edit', $navlink)  }}">Edit</a></div>
        <div class="border p-1"><a href="{{ route('nav.destroy', $navlink) }}">Delete</a></div>
    </aside>

    @endforeach
    <button class="btn">add</button>
</section>
@endsection
