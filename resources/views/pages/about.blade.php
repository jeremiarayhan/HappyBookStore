@extends('pages.index')

@section('title', 'About - Happy Book Store')

@section('content')
<div class="container-field">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-7" style="position: relative">
            <h3 class="bg-warning text-dark">Contact</h3>
            <p style="font-size: 17px; font-family: sans-serif">Store address :</p>
            <p style="font-size: 12px; font-family: sans-serif">Jalan Pembangunan Baru Raya</p>
            <p style="font-size: 12px; font-family: sans-serif">Kompleks Pertokoan Emerald Blok III/12</p>
            <p style="font-size: 12px; font-family: sans-serif">Bintaro, Tangerang Selatan</p>
            <p style="font-size: 12px; font-family: sans-serif">Indonesia</p>
            <p style="font-size: 17px; font-family: sans-serif">Open Daily:</p>
            <p style="font-size: 12px; font-family: sans-serif">08.00 - 20.00</p>
            <p style="font-size: 17px; font-family: sans-serif">Contact :</p>
            <p style="font-size: 12px; font-family: sans-serif">Phone : 021-08899776655</p>
            <p style="font-size: 12px; font-family: sans-serif">Email : happybookstore@happy.com</p>

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
