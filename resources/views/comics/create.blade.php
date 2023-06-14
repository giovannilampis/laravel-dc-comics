
@extends('layouts.app')
@section('content')

<form action="/comics/store" method="POST">
    @csrf
    <div class="mb-3">
      <label class="form-label">Title</label>
      <input name="title" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Description</label>
        <input name="description" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Title</label>
        <input name="title" type="text" class="form-control">
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
        <label class="form-label">sale_date</label>
        <input name="sale_date" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Type</label>
        <input name="type" type="text" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

  @endsection
