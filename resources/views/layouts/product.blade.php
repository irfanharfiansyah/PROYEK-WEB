@extends('layouts.main')

@section('body')

<section class="product" id="product">
    <div class="container">
        <div class="title col-lg-12 mx-auto">
            <h1>Product</h1>
        </div>
        <div class="list-product">
            <div class="filter text-center">
                <button class="btn filter-btn active" data-filter="all">All</button>
                <button class="btn filter-btn" data-filter="gelas">Gelas</button>
                <button class="btn filter-btn" data-filter="pot">Pot Bunga</button>
                <button class="btn filter-btn" data-filter="celengan">Celengan</button>
            </div>
            <div class="row">
                <div class="gallery col-md-4 filter center nature">
                    <img src="https://i.pinimg.com/originals/7b/89/7a/7b897a5fe701e78f8ab44b9c5d29d310.png" alt="">
                </div>
                <div class="gallery col-md-4 filter center nature">
                    <img src="https://i.pinimg.com/originals/7b/89/7a/7b897a5fe701e78f8ab44b9c5d29d310.png" alt="">
                </div>
                <div class="gallery col-md-4 filter center nature">
                    <img src="https://i.pinimg.com/originals/7b/89/7a/7b897a5fe701e78f8ab44b9c5d29d310.png" alt="">
                </div>
                <div class="gallery col-md-4 filter center nature">
                    <img src="https://i.pinimg.com/originals/7b/89/7a/7b897a5fe701e78f8ab44b9c5d29d310.png" alt="">
                </div>
                <div class="gallery col-md-4 filter center nature">
                    <img src="https://i.pinimg.com/originals/7b/89/7a/7b897a5fe701e78f8ab44b9c5d29d310.png" alt="">
                </div>
                <div class="gallery col-md-4 filter center gelas">
                    <img src="https://img.bestdealplus.com/ae04/kf/Hb4bc4f62d10a496ea3c0b9c773bc205bv.jpg" alt="">
                </div>
                <div class="gallery col-md-4 filter center gelas">
                    <img src="https://img.bestdealplus.com/ae04/kf/Hb4bc4f62d10a496ea3c0b9c773bc205bv.jpg" alt="">
                </div>
            </div>
        </div>

    </div>
</section>

@endsection