@extends('layouts.app')

@section('content')
    <style>
        .fix-page {
            margin-top: 130px;
            padding: 0 1%;
        }
        .fix-table{
            margin: 0 auto;
            max-width:1400px;
        }
        .fix-id{
            min-width:70px !important;
            max-width:70px !important;
            width:70px !important;
        }
        .fix-buttons{
            min-width:200px !important;
            max-width:200px !important;
            width:200px !important;
        }
        .fix-rowx{
            display:flex;
            flex-direction:row;
        }
    </style>

    <div class="fix-page">



        <table id="dtBasicExample" class="table table-striped table-bordered table-sm fix-table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm fix-id">Id
                </th>
                <th class="th-sm">Name
                </th>
                <th class="th-sm">Email
                </th>
                <th class="th-sm fix-buttons">Actions
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="fix-rowx">
                        <div class="">
                            <a href="{{ route('users.edit', $user->id)}}">
                                <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                            </a>
                        </div>

                        <div class="">
                            <form action="{{ route('users.destroy', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>



        </table>



    </div>








@endsection

