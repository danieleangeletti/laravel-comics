@php
    $nav = [
        [
            'name' => 'CHARACTERS',
        ],
        [
            'name' => 'COMICS',
        ],
        [
            'name' => 'MOVIES',
        ],
        [
            'name' => 'TV',
        ],
        [
            'name' => 'GAMES',
        ],
        [
            'name' => 'COLLECTIBLES',
        ],
        [
            'name' => 'VIDEOS',
        ],
        [
            'name' => 'FANS',
        ],
        [
            'name' => 'NEWS',
        ],
        [
            'name' => 'SHOP',
        ],
    ];
@endphp

<header>
    <div class="center nav-height">
      <div class="h-100 container d-flex justify-content-between align-items-center">
        <div class="h-100">
          <div class="h-100 d-flex align-items-center">
            <img class="h-75" src="{{Vite::asset('resources/img/dc-logo.png')}}" alt="" />
          </div>
        </div>
        <div class="h-100 d-flex align-items-center">
        @foreach ($nav as $elem)
            <div class="h-100 d-flex align-items-center ps-2 pe-2">
                {{$elem['name']}}
            </div>
        @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="jumbo-height"></div>
</header>
