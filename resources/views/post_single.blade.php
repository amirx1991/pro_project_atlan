@extends('layouts.site')
@section('content')
    <div class="main-content">
        <div class="container">
            <div class="mag-inner">
                <div class="col-md-10 mag-innert-right">
                    <div class="banner-bottom-right-grids">
                        <div class="single-right-grid">
                            <img src="{{asset($post->pic)}}" alt="">
                            <h4>{{$post->title}}</h4>
                            <p class="text">{!! $post->description !!}</p>
                            <div class="single-bottom">
                                <ul>

                                    <li>{{$post->created_at}}</li>

                                    <li><a href="#">   {{count($post->comments)}} نظر</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post">
                        <a href="#"><h3>
                                آخرین پست ها
                            </h3></a>
                        @foreach($post->comments as $item)
                        <div class="post-grids">

                            <div class="col-md-9 post-left">
                                <h4>{{$item->user->name}}</h4>
                                <p class="comments">{{$item->created_at}}
                                <p class="text">{{$item->content}}</p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        @endforeach

                        <!--leave-->
                        <div class="leave">
                            <h4>
                                ارسال نظر
                            </h4>
                            <form id="commentform" action="{{route('add.comment')}}" method="POST">

                                @csrf
                                <p class="comment-form-comment">
                                    <input type="hidden" value="{{$post->id}}" name="post_id">
                                    <label class="comment">نظر</label>
                                    <textarea name="comment"></textarea>
                                </p>
                                <div class="clearfix"></div>
                                <p class="form-submit">
                                    <input type="submit" id="submit" value="ارسال">
                                </p>
                                <div class="clearfix"></div>
                            </form>

                        </div>
                    </div>
                    <!--//leave-->
                    <!--RTL & Persian LNG & Publicer By Www.20script.ir-->
                </div>
                <div class="col-md-4 mag-inner-left">


                    <!--/start-sign-up-->

                    <!--//end-sign-up-->

                    <!--//edit-pics-->
                    <!--/top-news-->

                    <!--//top-news-->
                </div>
                <div class="clearfix"></div>
            </div>
            <!--//end-mag-inner-->
            <!--/mag-bottom-->
            <!--RTL & Persian LNG & Publicer By Www.20script.ir-->

            </div>
            <!--//mag-bottom-->
            <!--RTL & Persian LNG & Publicer By Www.20script.ir-->
        </div>
    </div>
@stop
