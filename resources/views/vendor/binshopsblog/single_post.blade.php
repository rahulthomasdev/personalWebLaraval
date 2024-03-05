@extends("layouts.layout",['title'=>$post->gen_seo_title()])

@section('blog-custom-css')
<link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endsection

@section("content")

@if(config("binshopsblog.reading_progress_bar"))
<div id="scrollbar">
    <div id="scrollbar-bg"></div>
</div>
@endif

{{--https://github.com/binshops/laravel-blog--}}

<div class='container my-4 pb-5 __single_post'>
    <div class='row mx-0'>
        <div class='col-sm-12 col-md-12 col-lg-12'>
            <div class="blog-posts single-post">

                @include("binshopsblog::partials.show_errors")
                @include("binshopsblog::partials.full_post_details")


                @if(config("binshopsblog.comments.type_of_comments_to_show","built_in") !== 'disabled')
                <div class="" id='maincommentscontainer'>
                    <h2 class='text-center' id='binshopsblogcomments'>Comments</h2>
                    @include("binshopsblog::partials.show_comments")
                </div>
                @else
                {{--Comments are disabled--}}
                @endif

            </div>

        </div>
    </div>
</div>

@endsection

@section('blog-custom-js')
<script src="{{asset('binshops-blog.js')}}"></script>
@endsection