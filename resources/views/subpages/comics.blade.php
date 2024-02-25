@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
    <main>
        <div class="my-container-two pt-5 pb-5">
            <div class="row">
                <div class="col-8">
                    <h5 class="mb-4">
                        ACTION COMICS #1000: THE DELUXE EDITION
                    </h5>
                    <div class="d-flex green text-white mb-2">
                        <div class="width-70 d-flex align-items-center justify-content-between border-end p-2">
                            <span>U.S. Price:$19.99</span>
                            <span class="pe-1 opacity-50">AVAILABLE</span>
                        </div>
                        <div class="width-30 d-flex align-items-center p-2">
                            <p class="ps-1 m-0">
                                Check Availability <i class="fa-solid fa-chevron-down"></i>
                            </p>
                        </div>
                    </div>
                    <p>
                        The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman's new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!
                    </p>
                </div>
                <div class="col-4">
                    <h5 class="text-end">ADVERTISEMENT</h5>
                    <img src="{{Vite::asset('resources/img/adv.jpg')}}" alt="adv" class="w-100"/>
                </div> 
            </div>
        </div>
        
        <div class="my-light-grey">
            <div class="my-container-two pt-5 pb-5">
                <div class="row">
                    <div class="col-6">
                        <h5>
                            Talent
                        </h5>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                Art by:
                            </div>
                            <div class="col-8">
                                José Luis García-López, Clay Mann, Rafael Albuquerque, Patrick Gleason, Dan Jurgens, Joe Shuster, Neal Adams, Curt Swan, John Cassaday, Olivier Coipel, Jim Lee
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                Written by:
                            </div>
                            <div class="col-8">
                                Brad Meltzer, Tom King, Scott Snyder, Geoff Johns, Brian Michael Bendis, Paul Dini, Louise Simonson, Richard Donner, Marv Wolfman, Peter J. Tomasi, Dan Jurgens, Jerry Siegel, Paul Levitz
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-6">
                        <h5>
                            Specs
                        </h5>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
