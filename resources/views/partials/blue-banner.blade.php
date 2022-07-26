@php

$blueBannerIcon = [
    [
      "name" => "DIGITAL COMICS",
      "img" => "/img/buy-comics-digital-comics.png",
    ],

    [
      "name" => "DC MERCHANDISE",
      "img" => "/img/buy-comics-merchandise.png",
    ],

    [
      "name" => "SUBSCRIPTION",
      "img" => "/img/buy-comics-subscriptions.png",
    ],

    [
      "name" => "COMIC SHOP LOCATOR",
      "img" => "/img/buy-comics-shop-locator.png",
    ],

    [
      "name" => "DC POWER VISA",
      "img" => "/img/buy-dc-power-visa.svg",
    ],
];

@endphp

<div class="section-blue-banner">
  <div class="container">
      <div class="row justify-content-md-center">
        @foreach ($blueBannerIcon as $icon)
          <div class="col-sm-4 col-md-3 col-lg-2 d-flex align-items-center">

              <div class="py-2 icon-name">
                  <a href="#"><img src="{{ $icon['img'] }}" alt="{{ $icon['name'] }}" width="40"></a>
              </div>
              <div class="ps-3">{{ $icon['name'] }}</div>
              
          </div>
        @endforeach
      </div>
  </div>
</div>