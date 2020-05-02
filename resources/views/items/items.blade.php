@extends('layouts.app')

@section('content')
    <style>

        .top-spacing {
            margin-top: 130px;
        }

        .center {
            margin-left: 10%;
        }

    </style>



    <div class="top-spacing">

        <a href="{{ '/items/create' }}" type="button" class="btn btn-success btn-lg center">+</a>


        <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th class="th-sm">Id
            </th>
            <th class="th-sm">Title
            </th>
            <th class="th-sm">In_stock
            </th>
            <th class="th-sm">Brand
            </th>
            <th class="th-sm">Type
            </th>
            <th class="th-sm">Price
            </th>
            <th class="th-sm">
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
                <td style="display: flex; flex-direction: row"><a href="{{ route('items.edit', $item->id)}}" class="btn btn-primary btn-sm">Edit</a>

                    <form action="{{ route('items.destroy', $item->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </table>


    </div>








@endsection
