@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table border mt-2" id="myTable">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">email</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                       
                      </table>
                      <div>
                        {{$users->links()}}
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
