@extends('layoutes.main-layoute')

@section('script-section')
@vite(['resources/js/blades/home.js'])
@endsection
<style>
.content{
    align-items: center; display: flex; flex-direction: column;margin-top: 100px;
}
</style>
@section('body-content')
<div class="content">
<a href="/match-simulation" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm mt-3 hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Handle The Match</a>

<a href="/live-match-view" class="rounded-md bg-green-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm mt-3 hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Watch Live Match</a>

</div>
@endsection
