@extends('layout.main')

@section('content')
<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        @foreach($notes as $note)
        <div><p>{{ $note->title }}</p></div>
        @endforeach
    </div>

</div>

@endsection
