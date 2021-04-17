
@component('layouts.site' , ['title' => 'تسک های من'])
    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="{{route('panel')}}">پنل کاربری</a></li>
        <li class="breadcrumb-item active">  تسک های من</li>
    @endslot

    <style>
        ion-icon {
            font-size: 20px;
        }
    </style>
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="pull-left">
                        <a href="{{route('task.create')}}"><ion-icon name="add-circle-outline"></ion-icon></a>
                    </div>
                </div>
        <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>ردیف </th>
                                <th>نام </th>
                                <th>توضیحات </th>
                                <th> زمان ثبت </th>
                                <th><ion-icon name="settings-outline"></ion-icon> </th>

                            </tr>
                            @php($i=1)
                            @foreach($tasks as $item)
                            <tr>
                                <td>{{$i}} </td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->note}}</td>
                                <td>{{$item->created_at}} </td>
                                <td >
                                    <a href="javascript:void(0);" onclick="if(confirm('آیا برای حذف اطمینان دارید؟'))$(this).find('form').submit();" >
                                        <form  action="{{route('task.destroy',$item->id) }}" method="post" >
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                        <i class="fa fa-trash" style="color: red"></i></a>
                                    &nbsp;
                                    <a href="{{route('task.edit',$item->id)}}"><i class="fa fa-pencil-square"></i></a>
                                </td>
                            </tr>
                            @php($i++)
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{$tasks->links()}}
    <!-- /.card-body -->
            <div class="card-footer">
        </div>
    </div>
    <!-- /.card -->
    </div>
</div>


@stop
@endcomponent
