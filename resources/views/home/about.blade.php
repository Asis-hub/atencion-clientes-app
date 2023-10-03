@extends('layouts.app')
@section('title', $title)
@section('subtitle', $subtitle)
@section('content')
<div class="container justify-content-center">
<div class="row ">

<p class="lead">{{ $description }}</p>
<br>
<p class="lead">{{ $author }}</p>

</div>
</div>
@endsection