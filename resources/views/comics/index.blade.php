@extends('layouts.app')

@section('page_title', 'Comics')

@section('main-section')
<div class="section">
  <div class="jumbotron"></div>
  <div class="container py-4 position-relative">

      <div class="btn main-button btn-position">CURRENT SERIES</div>
      <div class="row gx-3">
        @foreach ($comics as $card)
          <div class="col-sm-6 col-md-4 col-lg-2">
            @include('partials.dccard', [
                    "card" => $card
            ])
          </div>
        @endforeach
      </div>
      <div class="d-flex justify-content-center">
          <div class="btn main-button px-5">LOAD MORE</div>
      </div>
      
  </div>
</div>
@endsection