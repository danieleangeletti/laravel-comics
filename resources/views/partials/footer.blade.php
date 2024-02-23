@php
$dc_comics = [
        [
            'link' => 'Characters',
        ],
        [
            'link' => 'Comics',
        ],
        [
            'link' => 'Movies',
        ],
        [
            'link' => 'Tv',
        ],
        [
            'link' => 'Games',
        ],
        [
            'link' => 'Videos',
        ],
        [
            'link' => 'News',
        ]
    ];
$shop = [
        [
            'link' => 'Shop DC',
        ],
        [
            'link' => 'Shop DC Collectibles',
        ]
    ];
$dc = [
        [
            'link' => 'Terms of Use',
        ],
        [
            'link' => 'Privacy policy',
        ],
        [
            'link' => 'Add choices',
        ],
        [
            'link' => 'Advertising',
        ],
        [
            'link' => 'Jobs',
        ],
        [
            'link' => 'Subscriptions',
        ],
        [
            'link' => 'Talent Workshops',
        ],
        [
            'link' => 'CPSC Certificates',
        ],
        [
            'link' => 'Ratings',
        ],
        [
            'link' => 'Shop Help',
        ],
        [
            'link' => 'Contact us',
        ]
    ];
$sites = [
        [
            'link' => 'DC',
        ],
        [
            'link' => 'MAD Magazine',
        ],
        [
            'link' => 'DC Kids',
        ],
        [
            'link' => 'DC Universe',
        ],
        [
            'link' => 'DC Power Visa',
        ]
    ];
@endphp
<footer>
    <div class="d-flex justify-content-center footer-one-height footer-one-bg">
      <div class="h-100 my-container">
        <div class="h-100 d-flex">
          <div class="col-footer-width white pt-24 pb-24">
            <div class="mb-8">DC COMICS</div>
            <ul class="no-decoration mb-16 p-0">
            @foreach ($dc_comics as $elem)
                <li>
                    <a class="no-underlining footer-grey smaller-plus" href="">{{$elem['link']}}</a>
                </li>
            @endforeach
            </ul>
            <div class="mb-8">SHOP</div>
            <ul class="no-decoration p-0">
              @foreach ($shop as $elem)
                <li>
                    <a class="no-underlining footer-grey smaller-plus" href="">{{$elem['link']}}</a>
                </li>
            @endforeach
            </ul>
          </div>
          <div class="col-footer-width white pt-24 pb-24">
            <div class="mb-8">DC</div>
            <ul class="no-decoration p-0">
              @foreach ($dc as $elem)
                <li>
                    <a class="no-underlining footer-grey smaller-plus" href="">{{$elem['link']}}</a>
                </li>
            @endforeach
            </ul>
          </div>
          <div class="col-footer-width white pt-24 pb-24">
            <div class="mb-8">SITES</div>
            <ul class="no-decoration p-0">
              @foreach ($sites as $elem)
                <li>
                    <a class="no-underlining footer-grey smaller-plus" href="">{{$elem['link']}}</a>
                </li>
            @endforeach
            </ul>
          </div>
          <div class="grow-one dc-logo-bg"></div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-center footer-two-height footer-two-bg">
      <div class="my-container h-100 d-flex justify-content-between align-items-center">
        <div class="h-100 d-flex align-items-center">
          <div>
            <button
              class="border-botton-color footer-two-bg white ps-8 pt-8 pb-8 pe-8"
            >
              SIGN-UP NOW!
            </button>
          </div>
        </div>
        <div class="h-100 d-flex align-items-center">
          <div class="footer-blu ps-8 pe-8">FOLLOW US</div>
          <div class="ps-2 pe-2">
            <a href=""><img src="{{Vite::asset('resources/img/footer-facebook.png')}}" alt="" /></a>
          </div>
          <div class="ps-2 pe-2">
            <a href=""><img src="{{Vite::asset('resources/img/footer-twitter.png')}}" alt="" /></a>
          </div>
          <div class="ps-2 pe-2">
            <a href=""><img src="{{Vite::asset('resources/img/footer-youtube.png')}}" alt="" /></a>
          </div>
          <div class="ps-2 pe-2">
            <a href=""><img src="{{Vite::asset('resources/img/footer-pinterest.png')}}" alt="" /></a>
          </div>
          <div class="ps-2 pe-2">
            <a href=""><img src="{{Vite::asset('resources/img/footer-periscope.png')}}" alt="" /></a>
          </div>
        </div>
      </div>
    </div>
</footer>
