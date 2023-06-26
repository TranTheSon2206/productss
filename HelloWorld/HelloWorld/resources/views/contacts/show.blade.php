@extends('contacts.layout')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Show Page</span>
                        <a href="{{ url('/contactt') }}" class="btn btn-success btn-sm">List Product</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <label>Name</label>
                        <p class="card">{{ $contacts->name }}</p>

                        <div class="form-group" style="margin-bottom: 20px;">
                            <label for="color">Color:</label>
                            <div class="form-group" style="background-color: {{ $contacts->color }}; width: 882px; height: 20px;"></div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <label>Weight</label>
                                <p class="card">{{ $contacts->weight }}</p>
                            </div>
                            <div class="col-md-6">
                                <label>Price</label>
                                <p class="card">{{ $contacts->price }}</p>
                            </div>
                        </div>
                        
                        <label>Description</label>
                        <textarea class="card form-control" readonly>{{ $contacts->description }}</textarea>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
