@extends('layouts.app')

@section('content')
<h1>Home</h1>
<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi error ratione laboriosam blanditiis
 expedita pariatur incidunt, voluptates, obcaecati quae iste provident placeat voluptatem omnis, 
 ipsa a cupiditate sit id nulla?</p>
@endsection
@section('sidebar')
@parent
<p>This is appended to sidebar</p>
@endsection