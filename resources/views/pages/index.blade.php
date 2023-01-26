@extends('layout')

@section('content')
    <div class="content">
        <h2> Form parameters parsing demo </h2>
        <ul class="menu">
            <li><a href="/from-body">Manual parsing</a></li>
            <li><a href="/model-binding">Model binding</a></li>
            <li><a href="/model-binding-parameters">Model binding(parameters)</a></li>
        </ul>
    </div>
@endsection
