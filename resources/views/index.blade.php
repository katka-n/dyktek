@extends('layouts.base-layout')

@section('content')


    <div class="bg_pic">
        <div class="container">
            <p class="title wow fadeInDown" data-wow-delay="0.2s">OD ZERA <br>DO WEBDEVA</p>
            <p class="description wow fadeInUp"><i></i>kursy programowania: online i stacjonarne<em></em></p>

        </div>
    </div>

    <div class="global2">
        <!--content-->

        <div class="thumb-box8 center">
            <div class="container">
                <h2 class="center">Najnowszy wpis na blogu</h2>
                @for ($i = 0; $i < 1; $i++)
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12 date-box wow fadeInLeft" data-wow-delay="0.2s">
                            <div>
                                <div class="badge">
                                    {!! polDay($posts[$i]) !!}
                                    <span>{!! polMonth($posts[$i]) !!}</span>
                                    <strong>6 <img src="img/page1_icon4.png" alt=""></strong>
                                </div>
                                <div class="extra-wrap">
                                    <p>{{$posts[$i]['excerpt']}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12 col-sm-12 wow fadeInLeft">
                            <figure><img src="/storage/{!! $posts[$i]['image'] !!}" alt=""></figure>
                        </div>
                    </div>
                    <a href="{{ URL::action('PostController@blog_index') }}" class="btn-default btn1">Zobacz wszystkie
                        wpisy</a>
            </div>
            @endfor

        </div>

        <div class="thumb-box2">
            <div class="container">
                <h2 class="center">Absolwenci moich kursów</h2>
                <p class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu libero scelerisque
                    ligula sagittis faucibus eget quis lacus. <br>Suspendisse sodales sed orci ac feugiat. </p>
                <div class="row">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="thumb-pad2 wow fadeInRight">
                                <div class="thumbnail">
                                    <img src="/storage/{{$graduates[$i]['photo']}}" class="thumbnail" alt=""></figure>
                                    <div class="caption">
                                        <p><b>{{$graduates[$i]['name']}}</b></p>
                                        <p>{{$graduates[$i]['description']}}</p>
                                        <a href="/absolwent/{{$graduates[$i]['id']}}" class="btn-default btn1">Czytaj
                                            dalej...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>


        <div class="thumb-box1 center">
            <div class="container">
                <h2 class="center">Najnowsze wpisy</h2>
                <br><br>
                @foreach($posts as $post)
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="thumb-pad1 maxheight wow fadeIn" data-wow-delay="0.1s">
                            <div class="badge"><img src="{{ URL::asset('img/page1_icon2.png') }}" alt=""></div>
                            <div class="thumbnail">
                                <div class="caption">
                                    <a href="/blog/{{$post['id']}}" class="title">{{$post['title']}}</a>
                                    <br><br>
                                    <p>{!! postTruncate($post) !!}</p>
                                    <a href="/blog/{{$post['id']}}" class="btn-default btn1">Więcej...</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="thumb-box3">
            <div class="container">
                <h2 class="wow fadeInUp">newsletter</h2>
                <p class="wow fadeInUp">Jeżeli chcesz otrzymywać powiadomienia o najnowszych wpisach, kursach - wpisz
                    swój
                    adres e-mail.</p>

                <div class="row" id="newsletter">
                    <div class="col-lg-12 wow fadeInUp">

                        {!! Form::open(['method' => 'POST',
                         'route' => 'email.save',
                          'id' => 'newsletter']) !!}
                        {!! Form::email('email', '', array()) !!}
                        <br> <br>
                        {!! Form::submit('Wyślij!', array()) !!}

                        {!! Form::close() !!}

                    </div>
                    <h2 class="wow fadeInUp">{{ Session::get('message') }}</h2>


                </div>
            </div>
        </div>
    </div>
@endsection
