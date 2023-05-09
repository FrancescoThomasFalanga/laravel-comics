@extends('layouts/mainLayout')

@section('content')

    <div class="bg-blue-terziary">

        <div class="container single-thumb">

            <img src="{{$comics[0]['thumb']}}" alt="">

        </div>

    </div>

    <div class="bordino">
    
            <div class="info-flex">

                <div class="container">

                    <div class="principal">
        
                        <div class="title">
        
                            <h2>{{ $comics[0]['title'] }}</h2>
        
                        </div>
        
                        <div class="price">
        
                            <div class="left">
        
                                <span class="us">U.S. Price: <strong>{{$comics[0]['price']}}</strong></span>
        
                                <span class="available">AVAILABLE</span>
        
                            </div>
        
                            <div class="right">
        
                                <span>Check Availability</span>
        
                            </div>
        
                        </div>
        
                        <div class="desc">
        
                            <p>{{$comics[0]['description']}}</p>
        
                        </div>
        
                    </div>
        
                    <div class="random">
        
                        <div class="random-text">
        
                            <span>ADVERTISEMENT</span>
        
                        </div>
        
                        <div class="random-img">
        
                            <img class="d-block" src="{{ asset('img/nunMeLaCarica.jpg') }}" alt="">
        
                        </div>
        
                    </div>

                </div>
    
            </div>

            <div class="row container mi-serve" style="margin: auto">

                <div class="talent col-7">
        
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Talent</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                          <tr>
                            <th scope="row" colspan="2">Art by:</th>
                            <td style="padding-left: 100px">

                                @foreach ($comics[0]['artists'] as $artist)

                                <a href="">
                                    {{$artist}}
                                </a>,

                                @endforeach

                            </td>
                          </tr>
                          <tr>
                            <th scope="row" colspan="2">Written by:</th>
                            <td style="padding-left: 100px">

                                @foreach ($comics[0]['writers'] as $artist)

                                <a href="">
                                    {{$artist}}
                                </a>,

                                @endforeach

                            </td>
                          </tr>
                        </tbody>
                      </table>
        
                </div>

                <div class="specs col-5">

                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Specs</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                          <tr>
                            <th scope="row">Series:</th>
                            <td> <a href="">{{$comics[0]['series']}}</a></td>
                          </tr>
                          <tr>
                            <th scope="row">U.S. Price:</th>
                            <td>{{$comics[0]['price']}}</td>
                          </tr>
                          <tr>
                            <th scope="row">On Sale</th>
                            <td>{{$comics[0]['sale_date']}}</td>
                          </tr>
                        </tbody>
                      </table>

                </div>

            </div>

    </div>


@endsection