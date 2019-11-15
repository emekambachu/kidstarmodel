@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Total Applications</div>

                    <div class="card-body">
                       {{ $countAllApplications }}
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Paid Applications</div>

                    <div class="card-body">
                        {{ $countPaidApplications }}
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection
