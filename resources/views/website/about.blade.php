@extends('layouts.layout')

@section('title', 'About')


@section('content')
<section id="about" class="py-5 d-flex h-100 align-items-center justify-content-center">
    <div class="container my-5 pb-5">
        <div class="row mx-0">
            <div class="col-lg-6">
                <h2 class="display-4">About Me</h2>
                <p class="lead">Hi, I'm John Doe, a passionate web developer with a keen eye for design. I specialize in crafting beautiful and functional websites that leave a lasting impression.</p>
                <p>I have a strong background in front-end development, with expertise in HTML, CSS, and JavaScript. I also have experience working with various web technologies and frameworks, including Bootstrap, React, and Vue.js.</p>
                <p>When I'm not coding, you can find me exploring the great outdoors, experimenting in the kitchen, or diving into a good book.</p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center grow">
                <img src="https://cdn.pixabay.com/photo/2024/02/06/09/36/laptop-8556518_1280.png" class="img-fluid rounded-circle" alt="John Doe" width="400">
            </div>
        </div>
    </div>
</section>
@endsection