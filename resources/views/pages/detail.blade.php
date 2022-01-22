@extends('pages.index')

@section('title', 'Book Detail - Happy Book Store')

@section('content')
<div class="container-field">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-7" style="position: relative">
            <h3 class="bg-warning text-dark">Contact</h3>
            @foreach ($bookdetail as $book )

            <p style="font-size: 17px; font-family: sans-serif">Title: {{$book->title}}</p>
            {{-- @foreach ($bookdetail as $bd ) --}}
               <p style="font-size: 17px; font-family: sans-serif">Author : {{$book->author}}</p>
               <p style="font-size: 17px; font-family: sans-serif">Publisher : {{$book->publisher}}</p>
               <p style="font-size: 17px; font-family: sans-serif">Year : {{$book->year}}</p>
               <p style="font-size: 17px; font-family: sans-serif">Description : </p>
               <p> {{$book->description}}</p>
            {{-- @endforeach --}}
            @endforeach

        </div>

        <div class="col-md-2" style="align-content: flex-end">
            <h4 class="bg-warning text-dark">Category</h4>
            <ul style="list-style-type: none">
                <li><a href="{{route('fiction')}}">Fiction</a></li>
                <li><a href="{{route('science')}}">Science</a></li>
                <li><a href="{{route('computer')}}">Computer</a></li>
            </ul>
        </div>
    </div>
</div>

@endsection
