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
                Edit Item
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
                <form class="center" method="post" action="{{ route('items.update', $item->id ) }}">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="type">Type:</label>
                        <select id="type" name="type" class="form-control">
                            <option value="mobile" {{ $item->type == "mobile" ? 'selected' : ''}}>Mobile</option>
                            <option value="PC" {{ $item->type == "PC" ? 'selected' : ''}}>PC</option>
                            <option value="laptop" {{ $item->type == "laptop" ? 'selected' : ''}}>Laptop</option>
                            <option value="TV" {{ $item->type == "TV" ? 'selected' : ''}}>TV</option>
                            <option value="headphones" {{ $item->type == "headphones" ? 'selected' : ''}}>Headphones</option>
                            <option value="other" {{ $item->type == "other" ? 'selected' : ''}}>Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="name">Title:</label>
                        <input type="text" class="form-control" name="title" value="{{ $item->title }}"/>
                    </div>
                    <div class="form-group">
                        <label for="symptoms">In Stock:</label>
                        <input type="text" class="form-control" name="in_stock" value="{{ $item->in_stock }}"/>
                    </div>
                    <div class="form-group">
                        <label for="symptoms">Price:</label>
                        <input type="text" class="form-control" name="price" value="{{ $item->price }}"/>
                    </div>

                    <div class="form-group">
                        <label for="brand">Brand:</label>
                        <input type="text" class="form-control" name="brand" value="{{ $item->brand }}"/>
                    </div>

                    <div class="form-group">
                        <label for="description">Description:</label>
                        <input type="text" class="form-control" name="description" value="{{ $item->description }}"/>
                    </div>
                    <div class="form-group">
                        <label for="review">FAKE REVIEW (FLOAT):</label>
                        <input type="text" class="form-control" name="review" value="{{ $item->review }}"/>
                    </div>

                    <div class="form-group">
                        <label for="dimensions">Dimensions:</label>
                        <input type="text" class="form-control" name="dimensions" value="{{ $item->dimensions }}"/>
                    </div>

                    <div class="form-group">
                        <label for="processor">Processor:</label>
                        <input type="text" class="form-control" name="processor" value="{{ $item->processor }}"/>
                    </div>

                    <div class="form-group">
                        <label for="os">OS:</label>
                        <input type="text" class="form-control" name="os" value="{{ $item->os }}"/>
                    </div>

                    <div class="form-group">
                        <label for="storage_capacity">Storage Capacity:</label>
                        <input type="text" class="form-control" name="storage_capacity" value="{{ $item->storage_capacity }}"/>
                    </div>

                    <div class="form-group">
                        <label for="ram">RAM:</label>
                        <input type="text" class="form-control" name="ram" value="{{ $item->ram }}"/>
                    </div>

                    <div class="form-group">
                        <label for="colour">Colour:</label>
                        <input type="text" class="form-control" name="colour" value="{{ $item->colour }}"/>
                    </div>

                    <div class="form-group">
                        <label for="camera">Camera:</label>
                        <input type="text" class="form-control" name="camera" value="{{ $item->camera }}"/>
                    </div>

                    <div class="form-group">
                        <label for="battery_capacity">Battery Capacity:</label>
                        <input type="text" class="form-control" name="battery_capacity" value="{{ $item->battery_capacity }}"/>
                    </div>

                    <div class="form-group">
                        <label for="images">Images (seperate links by ; ):</label>
                        <input type="text" class="form-control" name="images" value="{{ $item->images }}"/>
                    </div>

                    <button type="submit" class="btn btn-outline-danger">Update Data</button>

                </form>
            </div>
        </div>
    </div>
@endsection
