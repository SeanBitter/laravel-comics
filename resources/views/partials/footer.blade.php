@php
    
$dcComics = [
  [
      "name" => "Characters",
      "href" => "#",
  ],

  [
      "name" =>"Comics",
      "href" => "#"
  ],

  [
      "name" => "Movies",
      "href" => "#",
  ],

  [
      "name" => "TV",
      "href" => "#",
  ],

  [
      "name" => "Games",
      "href" => "#",
  ],

  [
      "name" => "Video",
      "href" => "#",
  ],

  [
      "name" => "News",
      "href" => "#",
  ],
];

$shop = [
  [
      "name" => "Shop DC",
      "href" => "#",
  ],

  [
      "name" => "Shop DC Collectibies",
      "href" => "#",
  ],
];

$dc = [
  [
      "name" => "Terms of Use",
      "href" => "#",
  ],

  [
      "name" => "Privacy Policy (New)",
      "href" => "#",
  ],

  [
      "name" => "Ad Choices",
      "href" => "#",
  ],

  [
      "name" => "Advertising",
      "href" => "#",
  ],

  [
      "name" => "Jobs",
      "href" => "#",
  ],

  [
      "name" => "Subscriptions",
      "href" => "#",
  ],

  [
      "name" => "Talent Workshops",
      "href" => "#",
  ],

  [
      "name" => "CPSC Certificates",
      "href" => "#",
  ],

  [
      "name" => "Ratings",
      "href" => "#",
  ],

  [
      "name" => "Show help",
      "href" => "#",
  ],

  [
      "name" => "Contacs Us",
      "href" => "#",
  ],
];

$sites = [
  [
      "name" => "DC",
      "href" => "#",
  ],

  [
      "name" => "Mad magazine",
      "href" => "#",
  ],

  [
      "name" => "DC Kids",
      "href" => "#",
  ],

  [
      "name" => "DC Universe",
      "href" => "#",
  ],

  [
      "name" => "DC Power Visa",
      "href" => "#",
  ],
];

@endphp

<footer>
  <div class="container">
      <div class="row">
          <div class="col-2">
              <div>
                  <h6>DC COMICS</h6>
                  <ul class="list-unstyled">
                    @foreach ($dcComics as $link)
                      <li>
                          <a href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                      </li>
                    @endforeach
                  </ul>
                  <h6>SHOP</h6>
                  <ul class="list-unstyled">
                    @foreach ($shop as $link)
                      <li>
                          <a href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                      </li>
                    @endforeach
                  </ul>
              </div>
          </div>
          <div class="col-2">
              <div>
                  <h6>DC</h6>
                  <ul class="list-unstyled">
                    @foreach ($dc as $link)
                      <li>
                          <a href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                      </li>
                    @endforeach
                  </ul>
              </div>
          </div>
          <div class="col-2">
              <div>
                  <h6>SITES</h6>
                  <ul class="list-unstyled">
                    @foreach ($sites as $link)
                      <li>
                          <a href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                      </li>
                    @endforeach
                  </ul>
              </div>
          </div>
          <div class="col-6">
              <div class="d-flex align-items-center position-relative">
                  <img src="{{ asset('img/dc-logo-bg.png') }}" alt="Logo DC footer" class="logo-footer w-75 position-absolute">
              </div>
          </div>
      </div>
  </div>
</footer>