<!-- 
    CS405_Group 03
    "The Workplace of Today" (Static Website)

    Members:
    Aguilar, Edward John    ->  Assistant Developer
    Batu, Laurence Angelo   ->  Project Leader
                                Main Developer
       
    Chiangco, Crista Mae    ->  Website and Pages Layout Handler
                                Main Designer                         
    Casi, Maria Kyla        ->  Content Gatherer (News, Informations and Blogs)
                                Assistant Designer
    Inodeo, Chara Mae       ->  Content Gatherer (News, Informations and Blogs)
                                Assistant Designer
-->

@extends('bacci_frontpage')

@section('meta')
    <title> Workplace of Today </title>
    
    <meta charset = "utf-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1">
@endsection

@section('footer_body')
    @include('layouts/bacci_footer')
@endsection

@section('header_body')
    @include('layouts/bacci_header')
@endsection

@section('web_bg')
    @include('layouts/bacci_web_bg')
@endsection