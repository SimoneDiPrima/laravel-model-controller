@extends('layouts.main')
@section('main-section')
<div>
    <section id="Movies" class="d-flex flex-wrap justify-content-center pt-5 p-2">
        @foreach($movies as $movie)
        <div class="card p-4" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$movie->title}}</h5>
                <p class="card-text">{{$movie->originaltitle}}</p>
                <p>{{$movie->nationality}}</p>
                <p>{{$movie->date}}</p>
                <p>{{$movie->vote}}</p>
                <a href="#" class="btn btn-primary">Go description</a>
            </div>
        </div>
        @endforeach
    </section>
</div>
@endsection
