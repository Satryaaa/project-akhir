@extends('layout.navbar2')
@push('cssjsexternal')
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
@endpush
@section('content2')
<section class="max-w-screen-md mx-auto mt-10">
    @csrf
    <div class="flex flex-wrap flex-container" id="exploredata">
    </div>
</section>
@endsection
@push('footerjsexternal')
<script src="/javascript/explore.js"></script>
@endpush
