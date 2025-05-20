@php use Carbon\Carbon; @endphp
@push('styles')
    <link rel="stylesheet" href="{{ asset("assets/css/web/homepage/reviews.css?v=".now()->toDateTimeString())}}">
@endpush
@push('scripts')
    <script type="module" src="{{ asset("assets/js/web/homepage/reviews.js?v=".now()->toDateTimeString()) }}"></script>
@endpush


@props(['reviews'])

<section class="reviews">

    <div class="section_content">

        <div class="title_container">
            <h2 class="title">
                Ce que disent mes clients
            </h2>
        </div>


        <div class="reviews_list_container">

            <div class="nav prev">
                <x-icons.chevron-right-light/>
            </div>

            <ul class="reviews_list">

                @php
                $status = [
                    "to_come",
                    "current",
                    "passed",
                    "waiting"];
                @endphp

                @foreach($reviews as $index=>$review)

                    <li class="review {{ $status[min(3, $index)] }}">

                        <div class="review_content">

                            <div class="review_text">
                                "{{ $review->content }}"
                            </div>

                            <div class="review_author">
                                {{ $review->name }}
                            </div>

                        </div>

                        <div class="review_date">
                            {{ Carbon::parse($review->date)->format('Y/m/d') }}
                        </div>
                    </li>

                @endforeach

            </ul>

            <div class="nav next">
                <x-icons.chevron-right-light/>
            </div>


        </div>


    </div>

</section>
