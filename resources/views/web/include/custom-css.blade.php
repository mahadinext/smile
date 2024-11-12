@php
    $webColors = App\Helper\Helper::getWebColor();
@endphp
<style>
    :root {
        --color-primary: {{ $webColors->primary_color ?? '#F68A1F' }}; /* Default to #F68A1F if not found */
        --color-secondary: {{ $webColors->secondary_color ?? '#FDC010' }}; /* Default to #FDC010 if not found */
    }
</style>
