<div class="py-4 card-section">
  <div>
    <a href="{{ route("comics.show", $card['id']) }}"><img src="{{ $card['thumb'] }}" alt="{{ $card['title'] }}" class="img-cards"></a>
  </div>
  <div class="pt-3">{{ strtoupper($card['title']) }}</div>
</div>