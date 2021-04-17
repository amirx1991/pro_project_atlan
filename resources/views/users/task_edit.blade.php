
@component('layouts.site' , ['title' => 'پنل کاربری'])
    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="{{route('panel')}}">پنل کاربری</a></li>
        <li class="breadcrumb-item active">ایجاد تسک</li>
    @endslot

@section('content')
    <style>
        .required:after {
            content:" *";
            color: red;
        }
    </style>
    <div class="row">
        <div class="col-lg-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> ایجاد تسک</h3>
                    <br>
                    @foreach($errors->all() as $item)

                        <p class="text-red" style="color: red">{{$item}}</p>

                    @endforeach
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" action="{{ route('task.update',$task->id) }}" method="POST">
                    @csrf
                    <input type="hidden" name="_method" value="PUT">

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label required" >نام </label>
                            <input type="text"  name="name" class="form-control" id="inputEmail3" value="{{$task->name}}" >
                            <input type="hidden"  name="user_id" value="{{\Illuminate\Support\Facades\Auth::user()->id}}">

                        </div>


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">توضیحات</label>
                            <textarea name="note" class="form-control">{!! $task->note !!}</textarea>
                        </div>

                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info">ویرایش تسک</button>
                        <a href="{{route('panel')}}" class="btn btn-default float-left">لغو</a>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
        </div>
    </div>



@stop
@section('script')

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>
@stop

@endcomponent
