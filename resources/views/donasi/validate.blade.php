@extends('layouts.front')

@section('container')
    @livewire('validate-donation',['id_donasi' => $id])
@endsection
