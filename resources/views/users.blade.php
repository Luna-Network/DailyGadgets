@extends('layouts.app')

@section('content')
    <style>
        .uper {
            margin-top: 170px;
        }
    </style>

    <div class="table-data">
    <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm">Id
            </th>
            <th class="th-sm">Name
            </th>
            <th class="th-sm">Email
            </th>
            <th class="th-sm">
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td style="display: flex; flex-direction: row"><a href="{{ route('users.edit', $user->id)}}" class="btn btn-primary btn-sm">Edit</a>

                    <form action="{{ route('users.destroy', $user->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>

    </div>








@endsection
