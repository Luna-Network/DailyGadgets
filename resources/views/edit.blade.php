@extends('layouts.app')

@section('content')

    <style>
        .main {
            display:flex;
            justify-content:center;
            padding-top: 112px;
        }
        .center{
            display:flex;
            flex-direction:column;
            justify-content:center;
        }
        
    </style>
    <div class="main" >
        <div class="card uper">
            <div class="card-header">
                Edit Corona Virus Data
            </div>
            <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form class="center" method="post" action="{{ route('users.update', $users->id ) }}">
                    <div class="form-group">
                        @csrf
                        @method('PATCH')
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ $users->name }}"/>
                    </div>
                    <div class="form-group">
                        <label for="symptoms">Email:</label>
                        <input type="text" class="form-control" name="email" value="{{ $users->email }}"/>
                    </div>
                    
                        <button type="submit" class="btn btn-outline-danger">Update Data</button>
                    
                </form>
            </div>
        </div>
    </div>
@endsection
