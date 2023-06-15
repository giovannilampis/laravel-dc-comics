@extends('layouts.app')
@section('content')

<div class="container">

    <div class="row justify-content-center flex-wrap text-center">

        <div class="col-6 mt-5">

            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $row->title }}</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>

        </div>

    </div>
</div>

@endsection