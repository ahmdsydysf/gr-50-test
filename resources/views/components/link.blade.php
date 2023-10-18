{{-- @dd($attributes) --}}
{{-- @props(['toWhere'])
<a href=""> {{ $toWhere }} </a>
@dd($attributes) --}}

@extends('layout.app')
@props(['pageT'])

@section('page_title' , $pageT)

@section('page_content')
<a {{ $attributes }}> {{ $attributes['toWhere'] }} </a>
@endsection
