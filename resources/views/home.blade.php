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

                    <!-- {{ __('You are logged in!') }} -->
                    @if(Auth::check() && Auth::user()->role_id == 1 )
                            
                                <h1>Admin</h1>
                            
                            @else
                            
                                <h1>User</h1>
                            
                            @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
