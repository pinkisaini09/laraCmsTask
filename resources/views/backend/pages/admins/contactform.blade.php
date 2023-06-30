@extends('admin.')

@section('content')
    <div class="content-inner chart-cont">

        <!--***** CONTENT *****-->
        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr class="bg-info text-white">
                        <th>S.No</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $row_num = 0;?>
                    @foreach($result as $list)
                    <?php $row_num++;?>
                    <tr>
                        <th scope="row">{{$row_num}}</th>
                        <td>{{$list->application_select}}</td>
                        <td>{{$list->application_name}}</td>
                        <td>{{$list->email}}</td>
                        <td>{{$list->phone}}</td>
                        <td>{{$list->date}}</td>
                        <td>{{$list->application_exp}}</td>
                        <td>{{$list->current_cmp}}</td>
                        <td>{{$list->current_desg}}</td>
                        <td>{{$list->current_loc}}</td>
                        <td>
                            <img src="{{URL('uploads/applyjob/'.$list->application_file)}}" alt="img" style="width: 50px;" />
                        </td>
                        <td>
                            <!-- <a href="{{ url('edit/'.$list->id) }}" class="btn btn-success">Edit </a> -->
                            <a href="{{route('del.applyjob',$list->id)}}" class="btn btn-danger">Delete </a>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endSection

