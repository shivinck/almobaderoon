@extends('layouts.web')

@section('title', '')
@section('description', '')

@section('content')
<style>
    h4, .h4 {
        font-weight: bold;
    }
</style>
<section class="title-banner mb-80">
    <div class="container-fluid">
        <h1 class="h2">Services</h1>
    </div>
</section>
<section class="services-detail-sec mb-120">
    <div class="container-fluid">
        <h3 class="light-black mb-24">Senior Home Care in Tampa, Florida</h3>
        <p class="mb-24">At AgingCareTampa, we know the unique challenges families have when a relative requires additional care. That’s why we provide a full range of compassionate, in-home senior care services to support the emotional, physical, and practical needs of elderly people in the Tampa Bay area. Our goal is simple: to help seniors live with dignity, independence, and comfort—in the place they call home.
        </p>
        <p class="mb-24">Lorem ipsum dolor sit amet consectetur. Molestie cras volutpat fringilla pellentesque
            lobortis tempor id. Purus dolor in augue habitant. Natoque ornare proin egestas porttitor sed. Nunc
            egestas est augue cursus ac tincidunt dui. Nunc enim integer faucibus et amet dolor. Diam volutpat
            ultricies quam et metus turpis ultricies.</p>
        <h4 class="mb-16">In-Home Personal Care</h4>
        <p class="mb-24">Our in-home care services help seniors with the everyday tasks that have become more difficult due to aging or disabilities. Whether it’s assisting with bathing and dressing, medication reminders, meal preparation, light housekeeping, and laundry, our trained caregivers give respectful, hands-on help while encouraging the client’s sense of independence.</p>
        <h4 class="mb-16">Transportation for Seniors</h4>
        <p class="mb-16">Getting to a doctor’s office, running errands, or meeting up with a friend shouldn’t be a barrier to independence. Our caregivers offer safe, door-through-door transportation within Tampa and surrounding communities, complete with a helping hand and a listening ear. </p>
        <h4 class="mb-16">Care Plans That Fit Unique Needs</h4>
        <p class="mb-16">Every senior has different needs, health situations, and preferences. That’s why we start every client relationship with an in-home care assessment. Hand in hand with you and your family, we design a personalized house care plan that adapts as needs change to ensure the best quality of life. </p>
        <h4 class="mb-16">Proudly Serving Tampa Bay</h4>
        <p class="mb-16">Serving Tampa, Riverview, Brandon, Clearwater, St. Petersburg, and the surrounding areas, AgingCareTampa delivers compassionate, expert senior home care that goes beyond the ordinary. We are locally owned, deeply committed, and passionate about partnering with families to help them thrive.</p>

        <p>
            Whether your loved one needs just a few hours of help each week or 24-hour support, AgingCareTampa is here to provide peace of mind and exceptional care every step of the way. Contact us today for a free consultation about how we can help your family thrive.
        </p>

    </div>
</section>
<section class="service-sec mb-120">
    <div class="container-fluid">
        <div class="text-center mb-48">
            <p class="text-uppercase color-primary mb-4p">Our SERVICES</p>
            <h3 class="dark-gray">Our Services are to<br>Make Your Senior Happy</h3>
        </div>
        <div class="row row-gap-4">
            @foreach ($services as $service)
            <div class="col-xl-4 col-md-6">
                <div class="service-card">
                    <div class="icon mb-16">
                        <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41"
                                fill="none">
                                <g clip-path="url(#clip0_11630_1776)">
                                    <path
                                        d="M31.6245 2.23647C30.6294 1.29985 29.3558 0.850098 28.0722 0.850098C26.6273 0.850098 25.1681 1.41978 24.0802 2.50917L23.6133 2.97605L23.1464 2.50774C22.0584 1.41978 20.5993 0.850098 19.1544 0.850098C17.8708 0.850098 16.5972 1.29985 15.602 2.23647C13.4133 4.29675 13.3747 7.74339 15.485 9.85365L23.6133 17.982L31.7416 9.85365C33.8519 7.74339 33.8133 4.29675 31.6245 2.23647Z"
                                        fill="#3ca586" />
                                    <path
                                        d="M39.603 22.121C38.3537 21.2743 36.8816 21.5142 35.5781 22.2666C34.2745 23.0191 26.7901 29.4184 26.7901 29.4184L19.4228 29.4198C19.0801 29.4198 18.7089 29.0343 18.7089 28.6931C18.7089 28.2919 19.0587 27.9792 19.4228 27.9792H23.9303C25.508 27.9792 27.2741 26.9512 27.2741 25.1236C27.2741 23.1818 25.508 22.2681 23.9303 22.2681C21.1932 22.2681 20.6607 22.2795 20.6607 22.2795C19.5642 22.2795 18.4519 22.2138 17.5953 21.7555C16.453 21.1701 15.1366 20.8389 13.7317 20.8389C11.373 20.8389 9.26133 21.7798 7.81357 23.2632L0.125 30.8333L8.69165 39.3999L11.5472 36.5444H26.0063C27.4455 36.5444 28.8347 36.0161 29.9098 35.0609L39.7001 24.0785C40.2983 23.5474 40.264 22.5708 39.603 22.121Z"
                                        fill="#3ca586" />
                                </g>
                                <defs>
                                    <clipPath>
                                        <rect width="40" height="40" fill="white"
                                            transform="translate(0.125 0.125)" />
                                    </clipPath>
                                </defs>
                            </svg>
                    </div>
                    <a href="{{  $service->full_url }}" class="h6 fw-bold hover-content mb-4p">{{ $service->name }}</a>
                    <p class="mb-16"> {{ $service->short_description}}</p>

                    <a href="{{  $service->full_url }}" class="card-btn">
                        <svg class="right" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none">
                            <path
                                d="M15.8975 19.1028C15.8975 16.1028 18.6975 12.1028 21.8975 12.1028M21.8975 12.1028C20.0641 12.1028 15.8975 11.1028 15.8975 5.10278M21.8975 12.1028H2.89746"
                                stroke="#769F6B" stroke-width="2" />
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<style>
    .f-title {
        text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    min-height: 40px;
    }

    .f-description {
        text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 4;
    overflow: hidden;
    min-height: 80px;
    }
</style>

<section class="blog-sec mb-80">
    <div class="container-fluid">
        <div class="text-center mb-48">
            <p class="text-uppercase color-primary">News and Blog</p>
            <h3 class="fw-bold">Our Latest News & Articles</h3>
        </div>
        <div class="row row-gap-4 mb-48">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <a href="{{ $blog->full_url }}" class="card-img image-effect">
                        <img src="{{ $blog->image }}" alt="card-img">
                        <span class="date">
                            <img src="{{ URL::cdn('media/vector/calender.webp') }}" alt="">
                            {{ $blog->formatted_created_at }}
                        </span>
                    </a>
                    <div class="card-content">
                        <a href="{{ $blog->full_url }}" class="h6 fw-bold hover-content f-title mb-12">{{ $blog->title }}</a>
                        <p class="light-gray mb-16 f-description">{{ $blog->short_description }}</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <a href="{{ $blog->full_url }}" class="card-btn order-2 order-2">Read More <svg
                                    xmlns="http://www.w3.org/2000/svg" width="19" height="14"
                                    viewBox="0 0 19 14" fill="none">
                                    <path d="M13 14C13 11 15.8 7 19 7M19 7C17.1667 7 13 6 13 0M19 7H0"
                                        stroke="#3ca586" stroke-width="2" />
                                </svg></a>
                            <div class="user"><img src="{{ $blog->author->avatar }}" alt="">
                                <p> {{ $blog->author->name }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="text-center">
            <a href="{{ route('get.blogs') }}" class="cus-btn">
                <svg class="arr-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#FAFAFA" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="text">View All</span>
                <span class="circle"></span>
                <svg class="arr-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none">
                    <path d="M7 17L17 7M17 7H7M17 7V17" stroke="#FAFAFA" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection
