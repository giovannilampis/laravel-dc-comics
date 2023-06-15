@extends('layouts.app')
@section('content')

<form action="{{ route('comics.update', ['comic'=>$row->id]) }}" method="PUT">
    @csrf
    <div class="mb-3">
      <label class="form-label">Title</label>
      <input name="title" type="text" class="form-control" value="{{$row->title}}">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input name="description" type="text" class="form-control" value="{{$row->description}}">
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

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

  @endsection