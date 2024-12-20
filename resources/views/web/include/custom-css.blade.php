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
</style>
