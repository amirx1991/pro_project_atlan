@component('layouts.master' , ['title' => 'کاربران'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item"><a href="{{route('user.index')}}">لیست کاربران </a></li>
        <li class="breadcrumb-item active"> ویرایش کاربر</li>
    @endslot
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> {{$user->name}}</h3>


                </div>
                <form action="{{route('user.update',$user->id)}}" method="POST">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"> نوع کاربری ادمین</label>
                            <input type="text" name="admin" class="form-control" id="inputEmail3" value="{{$user->admin}}" >
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش کاربر</button>
                    </div>


                </form>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">

                </div>
                <!-- /.card-body -->
                <div class="card-footer">

                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@stop
@endcomponent
