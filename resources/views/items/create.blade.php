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

        .card {
            width: 60%;
        }

    </style>
    <div class="main" >
        <div class="card uper">
            <div class="card-header">
                Add New Item
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
                <form class="center" method="POST" action="{{ route('items.store') }}">
                    @csrf

                    <div class="form-group">
                        <label for="type">Type:</label>
                        <select id="type" name="type" class="form-control">
                            <option value="mobile">Mobile</option>
                            <option value="PC">PC</option>
                            <option value="laptop">Laptop</option>
                            <option value="TV">TV</option>
                            <option value="headphones">Headphones</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="title"/>
                    </div>

                    <div class="form-group">
                        <label for="in_stock">In Stock:</label>
                        <input type="text" class="form-control" name="in_stock" />
                    </div>

                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control" name="price" />
                    </div>

                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <input type="text" class="form-control" name="brand" />
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" name="description" />
                    </div>
                    <div class="form-group">
                        <label for="review">FAKE REVIEW (FLOAT):</label>
                        <input type="text" class="form-control" name="review" />
                    </div>

                    <div class="form-group">
                        <label for="dimensions">Dimensions:</label>
                        <input type="text" class="form-control" name="dimensions" />
                    </div>

                    <div class="form-group">
                        <label for="processor">Processor:</label>
                        <input type="text" class="form-control" name="processor" />
                    </div>

                    <div class="form-group">
                        <label for="os">OS:</label>
                        <input type="text" class="form-control" name="os" />
                    </div>

                    <div class="form-group">
                        <label for="storage_capacity">Storage Capacity:</label>
                        <input type="text" class="form-control" name="storage_capacity" />
                    </div>

                    <div class="form-group">
                        <label for="ram">RAM:</label>
                        <input type="text" class="form-control" name="ram" />
                    </div>

                    <div class="form-group">
                        <label for="colour">Colour:</label>
                        <input type="text" class="form-control" name="colour" />
                    </div>

                    <div class="form-group">
                        <label for="camera">Camera:</label>
                        <input type="text" class="form-control" name="camera" />
                    </div>

                    <div class="form-group">
                        <label for="battery_capacity">Battery Capacity:</label>
                        <input type="text" class="form-control" name="battery_capacity" />
                    </div>

                    <div class="form-group">
                        <label for="images">Images (seperate links by ; ):</label>
                        <input type="text" class="form-control" name="images" />
                    </div>

                    <button type="submit" class="btn btn-outline-danger">Create Data</button>

                </form>
            </div>
        </div>
    </div>
@endsection
