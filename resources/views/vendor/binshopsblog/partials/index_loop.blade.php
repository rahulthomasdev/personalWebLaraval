{{--Used on the index page (so shows a small summary--}}
{{--See the guide on binshops.com for how to copy these files to your /resources/views/ directory--}}

<div class="col-md-6 py-3">
    <div class="blog-item">

        <div class='text-center blog-image'>
            <?= $post->image_tag("medium", true, 'w-100'); ?>
        </div>
        <div class="blog-inner-item">
            <a href="{{$post->url($locale, $routeWithoutLocale)}}" class="text-decoration-none">
                <h3 class='__blog_title'><a href='{{$post->url($locale, $routeWithoutLocale)}}' class="text-decoration-none">{{$post->title}}</a></h3>
                <h5 class='__blog_subtitle'>{{$post->subtitle}}</h5>
                <!-- @if (config('binshopsblog.show_full_text_at_list'))
                    <p>{!! $post->post_body_output() !!}</p>
                @else
                    <p>{!! mb_strimwidth($post->post_body_output(), 0, 400, "...") !!}</p>
                @endif -->
                <div class="post-details-bottom">
                    <span class="light-text">Authored by: </span> {{$post->post->author->name}} <span class="light-text">Posted at: </span> {{date('d M Y ', strtotime($post->post->posted_at))}}
                </div>
            </a>
        </div>
    </div>

</div>