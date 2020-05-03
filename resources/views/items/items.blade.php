<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
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
    <script>
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark primary-color">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/admin">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/users">Users table</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/items">Items table</a>
                </li>

            </ul>
        </div>
        @auth
            <div class="dropdown">
                <button class="dropdown-toggle nav-link" type="button" id="dropdownMenu6" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenu6">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        @endauth
    </nav>
    <div class="fix-page">

        <div class="new-item">
            Add New Item
            <a href="{{ '/items/create' }}" ><button class="btn btn-success btn-sm fix-add-btn" type="submit">+</button></a>
        </div>



        <table id="dtBasicExample" class="table table-striped table-bordered table-sm fix-table" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm fix-id">ID
                </th>
                <th class="th-sm">Title
                </th>
                <th class="th-sm fix-stock">Stock
                </th>
                <th class="th-sm fix-brand">Brand
                </th>
                <th class="th-sm">Type
                </th>
                <th class="th-sm">Price
                </th>
                <th class="th-sm fix-buttons">Actions
                </th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->title}}</td>
                    <td>{{$item->in_stock}}</td>
                    <td>{{$item->brand}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->price}}</td>
                    <td class="fix-rowx">
                        <div>
                            <a href="{{ route('items.edit', $item->id)}}">
                                <button class="btn btn-primary btn-sm" type="submit">Edit</button>
                            </a>
                        </div>
                        <div>
                            <form action="{{ route('items.destroy', $item->id)}}" method="post">
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



    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
    <script src="{{asset('js/global.js')}}"></script>
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
</body>
</html>




