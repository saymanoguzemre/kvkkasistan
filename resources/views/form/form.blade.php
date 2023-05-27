@extends('layouts.main.master')
@section('content')
    @livewire('formwizard.formwizard')
@endsection
@section('js')
    <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/vendor/animejs/anime.min.js"></script>
    <script src="/vendor/jquery-mask/jquery.mask.min.js"></script>
    <script src="/js/form/form.js"></script>
@endsection
