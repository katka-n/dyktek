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
                            @foreach($posts as $post)
                                <div class="badge">
                                    {!! polDay($post) !!}
                                    <span>{!! polMonth($post) !!}</span>
                                    <div class="badge_small">
                                        <strong>6 <img src="img/page2_icon1.png" alt=""></strong>
                                    </div>
                                </div>
                                <a href="/blog/{{$post['id']}}" class="lnk">{{$post['title']}}</a>
                                <p class="post">Wysłane {{$post['created_at']}}, w
                                    kategorii {!! categoryName($post, $categories) !!}
                                    <br></p>
                                <div class="thumbnail">
                                    <div class="caption">
                                        <p> {!!$post['body']!!}.</p>
                                    </div>
                                </div>
                            @endforeach
                            <div class="btn-default.btn1" , style="text-align:center;">
                                {{ $posts->render() }}
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
                    <h2 class="center indent">Archiwum wpisów</h2>
                    <ul class="list1-1">
                        @for ($i = 0; $i < 3; $i++)
                            <li><a href="/blog/{!! fullMonth($postsByDates) !!}">{!! fullMonth($postsByDates) !!}</a></li>
                            {{--{{ dd(get_defined_vars()['__data']) }}--}}
                        @endfor
                    </ul>
                </div>

            </div>

        </div>
    </div>
@endsection
