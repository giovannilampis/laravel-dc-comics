@extends('layouts.app')
@section('content')

<div class="container">
    <p class="text-center fs-2 my-5 text-uppercase">edit informations about this comic</p>
    <form action="{{ route('comics.update', ['comic'=>$row->id]) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label class="form-label">Title</label>
          <input name="title" type="text" class="form-control @error('title') is-invalid @enderror"" value="{{$row->title}}">
          @error('title')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" id="" style="width: 100%">{{$row->description}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Thumb</label>
            <input name="thumb" type="text" class="form-control" value="{{$row->thumb}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Price</label>
            <input name="price" type="text" class="form-control" value="{{$row->price}}">
        </div>
        <div class="mb-3">
            <label class="form-label">series</label>
            <input name="series" type="text" class="form-control" value="{{$row->series}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Sale Date</label>
            <input name="sale_date" type="text" class="form-control" value="{{$row->sale_date}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Type</label>
            <input name="type" type="text" class="form-control" value="{{$row->type}}">
        </div>
    
        <button type="submit" class="btn btn-warning">EDIT</button>
    
      </form>
</div>


  @endsection