@extends('layouts.web')

@section('title', 'Search')

@section('content')
<div class="inner-heros-warp">
    <div class="container-fluid">
        <div class="inner-hero-content">
            <h2>Search Results for: <span>{{ $query }}</span></h2>
            <ul class="inner-hero-list">
                <li class="d-inline-block position-relative text-uppercase"><a href="{{ route('get.home') }}">Home</a></li>
                <li class="d-inline-block position-relative text-uppercase active">Faculty Outreach</li>
            </ul>
        </div>
    </div>
    <div class="all-shapes">
        <img src="{{ URL::cdn('images/inner-page-shape-light.png') }}" class="inner-page-shape1" alt="images">
    </div>
</div>
<div class="page-wrapper">
    <div class="blog-area ptb-100">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-md-12">
                    <div class="row">

                        <section class="no-results not-found">
                            <header class="page-header">
                                <h1 class="page-title">Nothing Found</h1>
                            </header>


                            <div class="page-content">

                                <p>Sorry, but nothing matched your search terms. Please try again with some different keywords.</p>
                                <div class="blog-input">
                                    <form role="search" method="get" class="search-form" id="search" action="{{ route('get.search') }}">
                                        <label>
                                            <input type="search" class="form-control search-field" placeholder="Find Posts" value="" name="q" id="q" required="">
                                        </label>
                                        <button class="search-btn" type="submit"><i class="ri-search-line"></i></button>
                                    </form>
                                </div>
                                <div class="search-tags">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <span class="search-list">Quick Search:</span>
                                        </div>
                                        <div class="col-lg-8">
                                            <ul class="program-list">
                                                <li>
                                                    <a href="javascript:void();">
                                                Art &amp; Design                            </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void();">
                                                Career                            </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void();">
                                                Community                            </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>

                    </div>
                </div>

                <div class="col-lg-4 col-md-12">
                    <div class="title sidebar blog-small-widget widget-area">
                        <div class="widget all-box box widget_search">
                            <h2 class="widget-title">Search</h2>
                            <div class="blog-input">
                                <form role="search" method="get" class="search-form" id="search" action="{{ route('get.search') }}">
                                    <label>
                                        <input type="search" class="form-control search-field" placeholder="Find article" name="q" id="q" required="">
                                    </label>
                                    <button class="search-btn" type="submit"><i class="ri-search-line"></i></button>
                                </form>
                            </div>
                            <div class="search-tags">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <span class="search-list">Quick Search:</span>
                                    </div>
                                    <div class="col-lg-8">
                                        <ul class="program-list">
                                            <li>
                                                <a href="#">Courses</a>
                                            </li>
                                            <li>
                                                <a href="#">Outreach</a>
                                            </li>
                                            <li>
                                                <a href="#">Research Forum</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="" class="widget all-box box widget_doc_posts_thumbs">
                            <h2 class="widget-title">Recent posts</h2>
                            @foreach($latestNews as $item)
                            <article class="item type-post">
                                <div class="blog-article-item">
                                    <ul class="ps-0 mb-0 list-unstyled cat">
                                        <li><a >{{ $item->label }}</a></li>
                                    </ul>
                                    <h3 class="title usmall"><a href="{{ $item->full_url }}">{{ $item->title }}</a></h3>
                                    <ul class="ps-0 mb-0 list-unstyled article-list">
                                        <li class="d-inline-block">
                                            {{ $item->formatted_created_at }}
                                        </li>
                                        <li>
                                            2 min read
                                        </li>
                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </article>
                            @endforeach

                        </div>
                        <div id="tag_cloud-2" class="widget all-box box widget_tag_cloud">
                            <h2 class="widget-title">Tags</h2>
                            <div class="tagcloud"><a href="#" class="tag-cloud-link tag-link-13 tag-link-position-1" >Art &amp; Design</a>
                                <a href="#" class="tag-cloud-link" aria-label="Career (2 items)">Career</a>
                                <a href="#" class="tag-cloud-link" aria-label="Community (1 item)">Community</a>
                                <a href="#" class="tag-cloud-link" aria-label="Education (3 items)">Education</a>
                                <a href="#" class="tag-cloud-link" aria-label="Job (2 items)">Job</a>
                                <a href="#" class="tag-cloud-link" aria-label="Online Education (1 item)">Online Education</a>
                                <a href="#" class="tag-cloud-link" aria-label="Uni History (2 items)">Uni History</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
