@extends('layouts.app')

@section('title', 'Accueil')

@push('css')
    <!-- style sheets and font icons  -->
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Bienvenue sur notre site !</h1>
                <p>Ceci est la page d'accueil.</p>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- slider revolution core javaScript files -->
    <script type="text/javascript" src="{{ asset('r/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('r/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src=" {{ asset('r/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('r/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script type="text/javascript" src="{{  asset('r/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('r/js/extensions/revolution.extension.parallax.min.js') }}"></script>
@endpush
