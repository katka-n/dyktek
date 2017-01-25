@extends('layouts.base-layout')

@section('content')
    <div class="global indent">
        <!--content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 thumb-box4">
                    <h2 class="center indent">blog</h2>
                    <div class="thumb-pad7 clearfix">
                        <div class="extra-wrap">
                            <div>
                                <div class="badge">
                                    {!! polDay($posts) !!}
                                    <span>{!! polMonth($posts) !!}</span>
                                        <strong>6 <img src="/img/page2_icon1.png" alt=""></strong>
                                    </div>
                                </div>

                            <a href="/blog/{{$posts['id']}}" class="lnk">{{$posts['title']}}</a>
                            <p class="post">Wysłane {{$posts['created_at']}}, w kategorii {!! categoryName($posts, $categories) !!}
                                <br></p>
                            <div class="thumbnail">
                                <div class="caption">
                                    <p> {!!$posts['body']!!}.</p>
                                </div>
                            </div>
                            <div class="btn-default.btn1" , style="text-align:center;">
                                {{--{{ $posts->render() }}--}}

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 thumb-box4">
                    <h2 class="center indent">Kategorie wpisów</h2>
                    <ul class="list1-1 indent">
                        @foreach($categories as $category)
                            <li><a href="/blog/{{$category['name']}}">{{$category['name']}}</a></li>
                        @endforeach
                    </ul>
                    {{--<h2 class="center indent">Archiwum wpisów</h2>--}}
                    {{--<ul class="list1-1">--}}
                    {{--<li><a href="#">June 2013</a></li>--}}
                    {{--<li><a href="#">May 2013</a></li>--}}
                    {{--<li><a href="#">April 2013</a></li>--}}
                    {{--<li><a href="#">March 2013</a></li>--}}
                    {{--<li><a href="#">February 2013</a></li>--}}
                    {{--<li><a href="#">January 2013</a></li>--}}
                    {{--<li><a href="#">December 2012</a></li>--}}
                    {{--<li><a href="#">November 2012</a></li>--}}
                    {{--<li><a href="#">October 2012</a></li>--}}
                    {{--</ul>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
