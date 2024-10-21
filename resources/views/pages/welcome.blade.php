@extends('layouts.app')

@section('title', 'DC Comics | Home')

@section('main-content')
    <main>
        <div class="jumbotron">
            <figure >
                <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="Jumbotron">
            </figure>
        </div>

        <div class="container">

            <h2>
                current series
            </h2>

            <div class="row">
                
                @foreach ($comics as $element)
                    <div class="col-2">
                        <figure>
                            <img src="{{ $element['thumb'] }}" alt="{{ $element['title'] }}">
                        </figure>
                        <h4>
                            {{ $element['title'] }}
                        </h4>
                    </div>
                @endforeach

            </div>

            <div class="bg-blue">
                <div>
                    <ul>
                        @foreach($menuItems as $item)
                            <li>
                                <figure>
                                    <img src="{{ Vite::asset('resources/img' . $item['image'] ) }}" alt="">
                                </figure>
                                <span>
                                   {{ $item['name'] }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            
        </div>
        



    </main>
@endsection

