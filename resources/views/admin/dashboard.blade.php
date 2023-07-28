@extends('layouts.app')

@push('css')
@endpush

@section('content')
<div class="d-flex">
    @include('layouts.sidebar')

    <div class="px-5 py-3">
        <h1>Dashboard</h1>
    </div>
</div>

@endsection

@push('js')
<script>
    // inits


    // functions

    function deviceTransform() {
        if (detectBreakpoint() <= 2) {
        } else {
        }
    }

    // caller
    
    // listeners
    window.addEventListener('resize', function () {
        deviceTransform()
    });

    document.addEventListener('DOMContentLoaded', function () {
        deviceTransform()
    });


</script>
@endpush