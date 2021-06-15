@extends('layout.theme')
<h2>Welcome client: {{ $client -> username }}</h2>
@php dd($client);@endphp
