@extends('pages.index')

@section('title', 'Science - Happy Book Store')

@section('content')
<div class="container-field">
    <div class="row">
        <div class="col-md-2"></div>

        <div class="col-md-7" style="position: relative">
            <h3 class="bg-warning text-dark">Book List</h3>
            <table class='table'>
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody style="background:lightgray">
                    @forelse ($cat as $cat)
                    @foreach ($cat->books as $category )
                    <tr>

                            <td><a style="color: black" href="{{route('detail')}}">{{$category->title}}</a></td>

                            <td>
                                @foreach ($category -> bookdetail as $bookdetail)
                                {{$bookdetail->author}}
                                @endforeach
                            </td>
                            @endforeach

                        </tr>
                        @empty
                        <td class="bg-warning text-dark">No Data...</td>

                        @endforelse
                </tbody>
            </table>
            {{-- {{$b->links()}} --}}
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
