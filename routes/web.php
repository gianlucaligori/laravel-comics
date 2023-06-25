<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('comics', [
        'comics' => [
            [
                "title" => "Action Comics #1000: The Deluxe Edition",
                "description" => "The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic...",
                "image" => "https://media-assets.wired.it/photos/615d7f55e8750c5fa82958cd/master/w_1600%2Cc_limit/DC_PANINI-COMICS.jpg",
                "price" => "$19.99",
                "series" => "Action Comics",
                "sale_date" => "2018-10-02",
                "type" => "comic book",
                "artists" => [
                    "José Luis García-López",
                    "Clay Mann",
                    "Rafael Albuquerque",
                    "Patrick Gleason",
                    "Dan Jurgens",
                    "Joe Shuster",
                    "Neal Adams",
                    "Curt Swan",
                    "John Cassaday",
                    "Olivier Coipel",
                    "Jim Lee"
                ],
                "writers" => [
                    "Brad Meltzer",
                    "Tom King",
                    "Scott Snyder",
                    "Geoff Johns",
                    "Brian Michael Bendis",
                    "Paul Dini",
                    "Louise Simonson",
                    "Richard Donner",
                    "Marv Wolfman",
                    "Peter J. Tomasi",
                    "Dan Jurgens",
                    "Jerry Siegel",
                    "Paul Levitz"
                ]
            ]
        ]
    ]);
});
