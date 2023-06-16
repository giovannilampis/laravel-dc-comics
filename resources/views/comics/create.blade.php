
@extends('layouts.app')
@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container">
    <p class="text-center fs-2 my-5 text-uppercase">add a comic book to this collection</p>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input name="title" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" id="" style="width: 100%"></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Thumb</label>
            <input name="thumb" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input name="price" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">series</label>
            <input name="series" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Sale Date</label>
            <input name="sale_date" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Type</label>
            <input name="type" type="text" class="form-control">
        </div>
    
        <button type="submit" class="btn btn-primary">CREATE</button>
    
      </form>
</div>

  @endsection
