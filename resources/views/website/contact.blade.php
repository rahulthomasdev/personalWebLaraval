@extends('layouts.layout')

@section('title', 'Contact')


@section('content')
<section>
    <div class="container w-100 h-100 d-flex align-items-center justify-content-center ">
        <div class="row mx-0">
            <div class="col-12 col-md-6 p-3">
                <div class="text-start ">
                    <div class="">
                        <h5 class="fs-1">Ready to Talk?</h5>
                        <p class="card-text fs-5">If you have any questions or would like to discuss your project, feel free to reach out to us.</p>

                        <div class="py-3">
                            <ul class=" list-unstyled d-flex align-items-center">
                                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-twitter-x"></i></a></li>
                                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram"></i></a></li>
                                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-3">
                <h2 class="fs-1">Contact Us</h2>
                <p>Fill out the form below to get in touch with us.</p>
                <form action="{{route('contact.submit')}}" method="post" id='contactForm'>
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary my-3 w-100 bg-dark">Submit</button>
                    @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                    <script>
                        document.getElementById("contactForm").scrollIntoView();
                    </script>
                    @endif
                </form>
            </div>
        </div>
    </div>
</section>
@endsection