@extends("layouts.layout",['title'=>$title])

@section('blog-custom-css')
<link type="text/css" href="{{ asset('binshops-blog.css') }}" rel="stylesheet">
@endsection

@section("content")

<div class='col-sm-12 binshopsblog_container'>
    @if(\Auth::check() && \Auth::user()->canManageBinshopsBlogPosts())
    <div class="text-center">
        <p class='mb-1'>You are logged in as a blog admin user.
            <br>
            <a href='{{route("binshopsblog.admin.index")}}' class='btn border  btn-outline-primary btn-sm '>
                <i class="fa fa-cogs" aria-hidden="true"></i>
                Go To Blog Admin Panel</a>
        </p>
    </div>
    @endif

    <div class="row mx-0 pb-5">
        <div class="col-md-9">

            @if($category_chain)
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @forelse($category_chain as $cat)
                        / <a href="{{$cat->categoryTranslations[0]->url($locale)}}">
                            <span class="cat1">{{$cat->categoryTranslations[0]['category_name']}}</span>
                        </a>
                        @empty @endforelse
                    </div>
                </div>
            </div>
            @endif

            @if(isset($binshopsblog_category) && $binshopsblog_category)
            <h2 class='text-center'> {{$binshopsblog_category->category_name}}</h2>

            @if($binshopsblog_category->category_description)
            <p class='text-center'>{{$binshopsblog_category->category_description}}</p>
            @endif

            @endif

            <div class="container">
                <div class="row">
                    @forelse($posts as $index => $post)
                    @if($index <=3) @include("binshopsblog::partials.index_loop") @endif @empty <div class="col-md-12">
                        <div class='alert alert-danger'>No posts!</div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <!-- <h6>Blog Categories</h6>
            <ul class="binshops-cat-hierarchy">
                @if($categories)
                @include("binshopsblog::partials._category_partial", [
                'category_tree' => $categories,
                'name_chain' => $nameChain = "",
                'routeWithoutLocale' => $routeWithoutLocale
                ])
                @else
                <span>No Categories</span>
                @endif
            </ul> -->
        <div class="py-3 px-4 px-md-0">
            <h3>Recent Posts</h1>
                <ul class="nav">
                    @foreach(\BinshopsBlog\Models\BinshopsPost::orderBy("posted_at","desc")->limit(5)->get() as $post)
                    <li class="nav-item">
                        <a class='nav-link __post_link' href='/en/blog/{{$post->postTranslations[0]["slug"]}}'>{{$post->postTranslations[0]["title"]}}</a>
                    </li>
                    @endforeach
                </ul>
        </div>
    </div>
</div>

<!-- @if (config('binshopsblog.search.search_enabled') )
    @include('binshopsblog::sitewide.search_form')
    @endif
    <div class="row">
        <div class="col-md-12 text-center">
            @foreach($lang_list as $lang)
            <a href="{{route("binshopsblog.index" , $lang->locale)}}">
                <span>{{$lang->name}}</span>
            </a>
            @endforeach
        </div>
    </div> -->
</div>

@endsection