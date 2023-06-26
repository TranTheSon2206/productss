@extends('contacts.layout')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Create Page</span>
                        <a href="{{ url('/contactt') }}" class="btn btn-success btn-sm ml-auto">List Product</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ url('contactt') }}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="color">Color</label>
                            <input type="color" name="color" id="color" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="weight">Weight</label>
                                <input type="text" name="weight" id="weight" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" name="description" id="description" class="form-control"></textarea>
                        </div>

                        <input type="submit" value="Save" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
