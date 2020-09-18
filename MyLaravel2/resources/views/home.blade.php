@extends('layouts.main-layout')

  @section('content')


    @foreach ($data as $d => $value)
      {{ $d }}
    @endforeach


@endsection
