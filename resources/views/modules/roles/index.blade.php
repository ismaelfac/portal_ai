@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/home">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Roles</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">{{ __('Roles') }}</div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
