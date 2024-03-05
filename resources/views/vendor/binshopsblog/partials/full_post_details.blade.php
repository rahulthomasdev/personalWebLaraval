@if(\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
<a href="{{$post->edit_url()}}" class="btn btn-outline-secondary btn-sm pull-right float-right">Edit
    Post</a>
@endif




<div class="row mx-0">
    <div class="col-md-6 order-1 order-md-2">
        <div class="post-image ms-0 w-100"><?= $post->image_tag("medium", false, 'mh-25 __post_img w-100'); ?></div>
    </div>
    <div class="col-md-6 __title_container">
        <h1 class='__blog_title'>{{$post->title}}</h1>
        <h5 class='__blog_subtitle'>{{$post->subtitle}}</h5>
        <p>{{$post->post->posted_at->diffForHumans()}}</p>

    </div>
</div>

<p class="blog_body_content pt-3">
    {!! $post->post_body_output() !!}

    {{--@if(config("binshopsblog.use_custom_view_files") && $post->use_view_file)--}}
    {{-- // use a custom blade file for the output of those blog post--}}
    {{-- @include("binshopsblog::partials.use_view_file")--}}
    {{--@else--}}
    {{-- {!! $post->post_body !!}        // unsafe, echoing the plain html/js--}}
    {{-- {{ $post->post_body }} // for safe escaping --}}
    {{--@endif--}}
</p>

<hr />


@includeWhen($post->author,"binshopsblog::partials.author",['post'=>$post])
@includeWhen($categories,"binshopsblog::partials.categories",['categories'=>$categories])