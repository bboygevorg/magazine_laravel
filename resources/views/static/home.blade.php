@extends("layouts.main")

@section("header-title")
Главная страница
@endsection

@section("content")
<div class="hero">
    <div class="hero-overlay">
        <h1>Добро пожаловать в Magazine Dashline</h1>
        <p>все что нужно</p>
        <a href="#" class="hero-btn"></a>
    </div>
</div>

<div class="main-container">
    <div class="main-block">
        <h1>Home page</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt nostrum placeat rerum at quisquam! Quisquam consequatur debitis voluptatum quos magni.</p>
    </div>
    @include("includes.aside")
</div>


@endsection

