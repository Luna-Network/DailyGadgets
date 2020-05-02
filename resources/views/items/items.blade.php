@extends('layouts.app')

@section('content')
    <style>

        .fix-page {
            margin-top: 130px;
            padding: 0 1%;
        }
        .fix-table{
            margin: 0 auto;
            max-width:1500px;
        }
        .fix-id{
            min-width:40px !important;
            max-width:70px !important;
            width:70px !important;
        }
        .fix-stock{
            min-width:40px !important;
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
        .new-item{
            text-align:center;
            margin-bottom:20px;
            font-size: 18px;
        }
        .fix-add-btn{
            font-size:20px !important;
            padding:5px !important;
            width:40px;
            height:40px;
        }

    </style>

    <script>
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>


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








@endsection
