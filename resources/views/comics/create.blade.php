
@extends('layouts.app')
@section('content')

<form action="comics/store" method="POST">
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

  "title" => "Action Comics #1000: The Deluxe Edition",
  "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!",
  "thumb" => "https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY",
  "price" => "$19.99",
  "series" => "Action Comics",
  "sale_date" => "2018-10-02",
  "type" => "comic book",