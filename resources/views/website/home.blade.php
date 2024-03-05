@extends('layouts.layout')

@section('title', 'Home')


@section('content')
<section>
    <div class="h-75 bg-secondary bg-gradient">
        <div class="h-100 text-white d-flex flex-column justify-content-center row mx-0">
            <div class="col-sm-12 col-md-6">
                <h1 class="mx-5 __c_h1">John Doe</h1>
                <p class="py-2 mx-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsam sapiente, ipsa labore error voluptatibus fugiat. Necessitatibus at quo, id mollitia exercitationem quam dolorum delectus tenetur architecto laborum enim dolores earum.</p>
                <p class="mx-5 py-2">Tag Line</p>
                <div class="mx-5"><button type="button" class="text-uppercase bg-dark text-white border-0 wrap px-3 py-2" onclick="window.location.href='{{route('about')}}'">Learn More</button></div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-flex h-100 align-items-center justify-content-center">
                <img src="https://cdn.pixabay.com/photo/2024/02/06/09/36/laptop-8556518_1280.png" class="img-fluid mh-100" />
            </div>
        </div>
    </div>
    <div class="h-auto bg-white my-2">
        <div class="h-100 text-dark d-flex flex-column justify-content-center align-items-center">
            <div class="rounded-circle __circle_div"></div>
            <h2 class="mx-5 __c_h1">Hi there!</h2>
            <p class="py-1 mx-5 fs-3">Welcome to my bio page. I'm excited to share a bit about myself with you.</p>
            <p class="py-1 mx-5">I am <b>Nick</b>, a Profession based in Location. I have a passion for Expertise and enjoy Hobbies or Interests.</p>
            <p class="py-1 mx-5">On this website, you'll find information about my background, experiences, and projects. Feel free to explore and reach out if you have any questions or would like to connect.</p>
            <div class="mx-5"><button type="button" class="text-uppercase bg-white text-dark wrap border-warning p-2">Read More</button></div>
        </div>
    </div>
    <div class="h-auto bg-light  my-2">
        <div class="h-100 text-dark d-flex flex-column justify-content-center align-items-center">
            <h2 class="mx-5 __c_h1">Here Are Some of My Skills</h2>
            <p class="py-1 mx-5 fs-3">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="container">
                <div class="accordion w-100" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Skill 1
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Skill 2
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Skill 3
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="h-auto mt-2" style="background-image: url('{{ asset('dark-bg-shadow.jpg') }}');">
        <div class="text-white d-flex flex-column justify-content-center align-items-center py-5">
            <div class="row mx-0">
                <div class="col-md-6">
                    <h2 class="mx-5 __c_h1" style="color:orangered">Skills and Experiences</h2>
                    <p class="py-1 mx-5 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus odio, dolorem nam repudiandae optio veniam, tempore, amet quaerat dolore consectetur est tempora eum sapiente deserunt nemo? Qui eos delectus sint.</p>
                </div>
                <div class="col-md-6"></div>
            </div>
            <div class="row mx-0">
                <div class="col-md-6">
                    <p class="py-1 mx-5 fs-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum voluptatibus ipsum modi esse reprehenderit, tempora minima eaque reiciendis placeat eveniet! At aliquid perferendis modi velit nesciunt est cum, repellat magnam!</p>
                </div>
                <div class="col-md-6  px-5">
                    <div class="row mx-0">
                        <div class="__skills_bold col-6 pb-5"><span>5K</span>
                            <div class="fs-6 text-white">Sample Headline</div>
                        </div>
                        <div class="__skills_bold col-6 pb-5">60% <div class="fs-6 text-white">Sample Headline</div>
                        </div>
                    </div>
                    <div class="row mx-0">
                        <div class="__skills_bold col-6 py-5">100 <div class="fs-6 text-white">Sample Headline</div>
                        </div>
                        <div class="__skills_bold col-6 py-5">1230 <div class="fs-6 text-white">Sample Headline</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark text-white py-5 mb-4  d-flex align-items-center justify-content-center">
        <div class="row container w-100 h-100 d-flex align-items-center">
            <div class="col-md-6">
                <div class="text-start">
                    <div class="">
                        <h5 class="fs-1">Ready to Talk?</h5>
                        <p class="card-text fs-5">If you have any questions or would like to discuss your project, feel free to reach out to us.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 py-3">
                <h2>Contact Us</h2>
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