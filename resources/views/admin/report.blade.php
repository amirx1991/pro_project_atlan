
@component('layouts.master' , ['title' => 'گزارش تسک ها'])
    @slot('breadcrumb')
        <li class="breadcrumb-item active"><a href="{{route('dashboard')}}">پنل کاربری</a></li>
        <li class="breadcrumb-item active"> گزارش تسک ها</li>
    @endslot

    <style>
        ion-icon {
            font-size: 20px;
        }
    </style>
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card ">
                <div class="card-header">

                </div>
                <form id="filter" action="{{route('report')}}">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <label class="label">از</label>
                                <input name="az" class="form-control range-from-example" value="{{$report->az}}">


                            </div>
                            <div class="col-3">
                                <label class="label">تا</label>
                                <input name="ta" class="form-control range-to-example" value="{{$report->ta}}">


                            </div>
                            <div class="col-12" style="margin-top: 15px">


                            </div>


                            <div class="col-12">

                                <div class="col-2"> <button type="submit" class="btn btn-info" >فیلتر کردن</button></form></div>


        </div>



    </div>
    </div>
    <!-- /.card-body -->
    </div>
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover">
                <tbody>
                <tr>
                    <th>ردیف </th>
                    <th>نام </th>
                    <th>توضیحات </th>
                    <th> کاربر </th>
                    <th> زمان</th>
                    <th><ion-icon name="settings-outline"></ion-icon> </th>

                </tr>
                @php($i=1)
                @foreach($tasks as $item)
                    <tr>
                        <td>{{$i}} </td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->note}}</td>
                        <td>{{$item->user->name}} </td>
                        <td>{{$item->created_at}} </td>
                        <td >

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
@section('script')
    <script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
    <script>
        var to, from;
        to = $(".range-to-example").datepicker({
            inline: true,
            format: 'dd-mm-yyyy',
            altField: '.range-to-example-alt',
            altFormat: 'LLLL',
            initialValue: false,
            onSelect: function (unix) {
                to.touched = true;
                if (from && from.options && from.options.maxDate != unix) {
                    var cachedValue = from.getState().selected.unixDate;
                    from.options = {maxDate: unix};
                    if (from.touched) {
                        from.setDate(cachedValue);
                    }
                }
            }
        });
        from = $(".range-from-example").datepicker({
            inline: true,
            format: 'dd-mm-yyyy',
            altField: '.range-from-example-alt',
            altFormat: 'LLLL',

            initialValue: false,
            onSelect: function (unix) {
                from.touched = true;
                if (to && to.options && to.options.minDate != unix) {
                    var cachedValue = to.getState().selected.unixDate;
                    to.options = {minDate: unix};
                    if (to.touched) {
                        to.setDate(cachedValue);
                    }
                }
            }
        });
    </script>
    @stop
@endcomponent
