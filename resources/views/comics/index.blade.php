@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row flex-wrap">

        @foreach($rows as $row)

        <div class="col-3">

            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $row->title }}</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="{{route('comics.show', ['comic' => $row->id])}}" class="btn btn-primary">SHOW</a>
                  <form action="{{route('comics.destroy', ['comic' => $row->id])}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger" type="submit">DESTROY</button>
                  </form>
                  
                </div>
              </div>

        </div>

        @endforeach

    </div>
</div>

@endsection