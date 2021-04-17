@extends('layouts.site')
@section('content')
    <div class="typrography">
        <div class="container">
            <div class="grid_3 grid_4">
                <h3 class="typo">طبفه بندی ها</h3>
                <div class="bs-example">
                    <table class="table">
                        <tbody>
                        @foreach($categories as $item)

                        <tr>
                            <td><h4 id="h3.-bootstrap-heading"><a class="h3.-bootstrap-headingwe" href="{{route('post_cat',$item->slug)}}">{{$item->title}}</a></h4></td>

                        </tr>
                       @endforeach
                        </tbody>
                    </table>
                    {{$categories->links()}}
                </div>
            </div>
        </div>
            </div><!-- /.row -->

            <!--RTL & Persian LNG & Publicer By Www.20script.ir-->
        </div>
    </div>
@stop
