@extends('layouts.base', ['subtitle' => 'La page des blogs'])

@section('body')

 <div class="row">
     <div class="col-10">
        <h1>Wesh {{ Auth::user()->name }}</h1>
     </div>
 </div>
@endsection