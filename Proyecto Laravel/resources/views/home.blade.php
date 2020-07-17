@extends('layouts.app')

@section('content')




@if(Auth::user())
<script>window.location = "/";</script>
@else
<script>window.location = "/";</script>
@endif

@endsection
