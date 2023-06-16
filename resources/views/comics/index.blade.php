@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row flex-wrap">

        @foreach($rows as $row)

        <div class="col-3">

            <div class="card text-center" style="width: 18rem;">
                <img src="{{ $row->thumb }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $row->title }}</h5>
                  <h6 class="card-title">{{ $row->type }}</h6>
                  <p>{{ $row->sale_date }}</p>
                  <h5 class="card-title">{{ $row->price }}</h5>
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