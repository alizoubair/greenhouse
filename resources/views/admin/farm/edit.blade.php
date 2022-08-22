@extends('layouts.index')

@section('Farm')
<div class="sidebar-content">
    <button id="cancel-farm"><a href="/admin">Annuler</a></button>

    <form method="POST" action="{{ route('admin.farm.update', ['id'=>$viewData['farm']->getId()]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <label>Name:</label>
            <input id="name" type="text" name="name" value="{{ $viewData['farm']->getName() }}" class="form-control">
        </div>
        <div>
            <label>Area:</label>
            <input id="calculated-area" type="text" name="area" value="{{ $viewData['farm']->getArea() }}" class="form-control">
        </div>
        <div>  
            <label>Perimeter:</label>
            <input id="calculated-perimeter" type="text" name="perimeter" value="{{ $viewData['farm']->getPerimeter() }}" class="form-control">
        </div>
        <button type="submit">Save</button>
    </form>
</div>
<div id="map"></div>
<script type="module" src="{{ asset('js/script.js') }}"></script>

@endsection