@php
    
$navBar = [
  [
      "name" => "CHARACTERS",
      "href" => "#",
  ],

  [
      "name" => "COMICS",
      "href" => "#",
  ],

  [
      "name" => "MOVIES",
      "href" => "#",
  ],

  [
      "name" => "TV",
      "href" => "#",
  ],

  [
      "name" => "GAMES",
      "href" => "#",
  ],

  [
      "name" => "COLLECTIBLES",
      "href" => "#",
  ],

  [
      "name" => "VIDEOS",
      "href" => "#",
  ],

  [
      "name" => "FANS",
      "href" => "#",
      "name" => "NEWS",
      "href" => "#",
  ],

  [
      "name" => "SHOP",
      "href" => "#",
  ],
];

@endphp

<div class="container">
  <div class="d-flex justify-content-between">
      <div class="d-flex align-items-center">
          <a href="#">
              <img src="{{ asset('img/dc-logo.png') }}" alt="DC Comics" width="60" height="60">
          </a>
      </div>
      <div class="pt-5">
          <ul class="list-unstyled d-flex mb-0">
            @foreach ($navBar as $link)
              <li>
                  <a href="{{ $link['href'] }}">{{ $link['name'] }}</a>
              </li>
            @endforeach
          </ul>
      </div>
  </div>
</div>