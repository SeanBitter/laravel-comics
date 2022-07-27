@extends('layouts.app')

@section('page_title', 'Card')

@section('main-section')
<div class="section">
  <div class="jumbotron"></div>
  <div class="container py-4 position-relative">

    <h2>{{ $card["title"] }}</h2>
    <p>{{ $card["description"] }}</p>
    <h5>Price: {{ $card["price"] }}</h5>
    <h5>Series: {{ $card["series"] }}</h5>
    <h5>Sale date: {{ $card["sale_date"] }}</h5>
    <h5>Type: {{ $card["type"] }}</h5>

  </div>
</div>
@endsection