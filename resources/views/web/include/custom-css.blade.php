@php
    $webColors = App\Helper\Helper::getWebColor();
@endphp
<style>
    :root {
        --color-primary: {{ $webColors->primary_color ?? '#F68A1F' }}; /* Default to #F68A1F if not found */
        --color-secondary: {{ $webColors->secondary_color ?? '#FDC010' }}; /* Default to #FDC010 if not found */
    }

    .page-list li a {
        color: #ffffff;
    }

    .page-list li.active {
        color: #ffffff;
        opacity: 0.8;
    }

    .page-list li a:hover {
        color: #ffffff;
    }

    .rbt-accordion-style.rbt-accordion-04 .card {
        border: 2px solid #f38b051f;
    }

    .rbt-accordion-style.rbt-accordion-04 .card .card-body {
        border-top: 2px solid #f38b051f;
    }

    body {
        color: #000000c9;
    }

    .page-list li .icon-right i {
        color: #ffffff;
    }

    .rbt-swiper-pagination .swiper-pagination-bullet {
        box-shadow: inset 0 0 0 5px #000000;
    }

    .rbt-swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
        box-shadow: inset 0 0 0 1px #ffffff;
    }

    .rbt-author-meta .rbt-author-info a:hover {
        color: #000000;
        transition: all 0.3s ease;
        font-weight: bold;
        font-size: 1.1em;
    }
</style>
