<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $menuLinks = [
        [
            'name' => 'Characters',
            'status' => 'false',
            'link' => '#'
        ],
        [
            'name' => 'Comics',
            'status' => 'true',
            'link' => '#'
        ],
        [
            'name' => 'Movies',
            'status' => 'false',
            'link' => '#'
        ],
        [
            'name' => 'TV',
            'status' => 'false',
            'link' => '#'
        ],
        [
            'name' => 'Games',
            'status' => 'false',
            'link' => '#'
        ],
        [
            'name' => 'Collectibles',
            'status' => 'false',
            'link' => '#'
        ],
        [
            'name' => 'Videos',
            'status' => 'false',
            'link' => '#'
        ],
        [
            'name' => 'Fans',
            'status' => 'false',
            'link' => '#'
        ],
        [
            'name' => 'News',
            'status' => 'false',
            'link' => '#'
        ],
        [
            'name' => 'Shop',
            'status' => 'false',
            'link' => '#'
        ]
    ];
    $menuItems = [
        [
            'name' => 'Digital Comics',
            'image' => 'buy-comics-digitals-comics.png'
        ],
        [
            'name' => 'DC Merchandise',
            'image' => 'buy-comics-merchandise.png'
        ],
        [
            'name' => 'Subscriptions',
            'image' => 'buy-comics-subscriptions.png'
        ],
        [
            'name' => 'Comic Shop Locator',
            'image' => 'buy-comics-shop-locator.png'
        ],
        [
            'name' => 'DC Power Visa',
            'image' => 'buy-dc-power-visa.png'
        ]
    ];
    $menuLinkDcComics = [
        [
            'name' => 'Characters',
            'link' => '#'
        ],
        [
            'name' => 'Comics',
            'link' => '#'
        ],
        [
            'name' => 'Movies',
            'link' => '#'
        ],
        [
            'name' => 'TV',
            'link' => '#'
        ],
        [
            'name' => 'Games',
            'link' => '#'
        ],
        [
            'name' => 'Videos',
            'link' => '#'
        ],
        [
            'name' => 'News',
            'link' => '#'
        ]
    ];
    $menuLinkShop = [
        [
            'name' => 'Shop DC Collectibles',
            'link' => '#'
        ],
        [
            'name' => 'Shop DC',
            'link' => '#'
        ]
    ];
    $menuLinkDc = [
        [
            'name' => 'Therms of Use',
            'link' => '#'
        ],
        [
            'name' => 'Privacy Policy',
            'link' => '#'
        ],
        [
            'name' => 'Ad Choices',
            'link' => '#'
        ],
        [
            'name' => 'Advertising',
            'link' => '#'
        ],
        [
            'name' => 'Jobs',
            'link' => '#'
        ],
        [
            'name' => 'Subscriptions',
            'link' => '#'
        ],
        [
            'name' => 'Talent Workshops',
            'link' => '#'
        ],
        [
            'name' => 'CPSC Certificates',
            'link' => '#'
        ],
        [
            'name' => 'Ratings',
            'link' => '#'
        ],
        [
            'name' => 'Shop Help',
            'link' => '#'
        ],
        [
            'name' => 'Contact Us',
            'link' => '#'
        ]
    ];
    $menuLinkSites = [
        [
            'name' => 'DC',
            'link' => '#'
        ],
        [
            'name' => 'MAD Magazine',
            'link' => '#'
        ],
        [
            'name' => 'DC Kids',
            'link' => '#'
        ],
        [
            'name' => 'DC Universe',
            'link' => '#'
        ],
        [
            'name' => 'DC Power Visa',
            'link' => '#'
        ]
    ];

    $comics = config('comics');

    return view('pages.welcome', compact('menuLinks', 'comics', 'menuItems', 'menuLinkDcComics', 'menuLinkShop', 'menuLinkDc', 'menuLinkSites' ));
})-> name('homePage');

Route::get('/chi-siamo', function () {
    return view('subpages.about');
});

// Route::get(PERCORSO CON CUI ARRIVARE ALLA PAGINA, FUNZIONE DI CALLBACK CHE MI CREA LA RISPOSTA DA DARE ALL UTENTE)
