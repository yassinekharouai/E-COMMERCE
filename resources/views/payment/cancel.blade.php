@extends('layout.app')

@section('content')
<div class="alert alert-warning">
    Payment Cancelled. You didn’t complete the process.
</div>
<a href="{{ route('payment.form') }}" class="btn btn-primary">Try Again</a>
@endsection