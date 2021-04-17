@component('layouts.master' , ['title' => 'کاربران'])
    @slot('breadcrumb')
        <li class="breadcrumb-item"><a href="{{route('home')}}">پنل مدیریت</a></li>
        <li class="breadcrumb-item active">لیست کاربران</li>
    @endslot
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> کاربران</h3>

                    <div class="card-tools d-flex">
                        <form action="">
                            <div class="input-group input-group-sm" style="width: 150px;">


                            </div>
                        </form>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <th>ردیف </th>
                            <th> نام  </th>
                            <th>ایمیل  </th>
                            <th>ادمین </th>
                            <th>   </th>

                        </tr>
                        @php($i=1)
                        @foreach($users as $user)

                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->admin}}</td>

                                    <td class="a-center " >

                                        <a  href="{{route('user.edit',$user->id)}}"  style="color: #0a0a0a"><i class="fa fa-pencil " title="ویرایش"></i></a>

                                </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                    {{$users->links()}}
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
