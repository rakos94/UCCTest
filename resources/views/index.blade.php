@extends('layout')
@section('container')
    <div class="container">
        <div class="card" style="min-height: 100vh">
            <div class="card-body p-0">
                <div class="d-flex" style="min-height: 100vh">
                    <div class="col col-8">
                        <div class="p-2">
                            @include('list')
                        </div>
                    </div>
                    
                    <div class="col col-4 text-white" style="background: #67adf8">
                        <div class="p-2">
                            @include('register')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection