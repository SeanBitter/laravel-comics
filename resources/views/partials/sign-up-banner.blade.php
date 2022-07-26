@php

$socialNetworks = [
  [
      "name" => "facebook",
      "href" => "#",
      "img" => "/img/footer-facebook.png"
  ],

  [
      "name" => "twitter",
      "href" => "#",
      "img" => "/img/footer-twitter.png"
  ],

  [
      "name" => "youtube",
      "href" => "#",
      "img" => "/img/footer-youtube.png"
  ],

  [
      "name" => "pinterest",
      "href" => "#",
      "img" => "/img/footer-pinterest.png"
  ],

  [
      "name" => "periscope",
      "href" => "#",
      "img" => "/img/footer-periscope.png"
  ],
];

@endphp

<div class="section-sign-up">
  <div class="container">
      <div class="d-flex justify-content-between">
          <div class="btn-section">
              <button class="sign-up-btn fw-bold">SIGN-UP NOW!</button>
          </div>
          <div class="social-section d-flex">
              <ul class="list-unstyled d-flex align-items-center">

                  <li class="text-primary fw-bold follow-us">FOLLOW US</li>
                  <li>
                    @foreach ($socialNetworks as $social)
                      <a href="{{ $social['href'] }}"><img src="{{ $social['img'] }}" alt="{{ $social['name'] }}"></a>
                    @endforeach
                  </li>

              </ul>
          </div>
      </div>
  </div>
</div>