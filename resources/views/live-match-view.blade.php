@extends('layoutes.main-layoute')

@section('script-section')
@vite(['resources/js/blades/live-match-view.js'])
@endsection

@section('body-content')
<h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-red-900">Live Match Team A VS Team B</h2>
<div class="flex min-h-full flex-row justify-center px-6 py-4">
    <span  id="timmer" class="inline-flex items-center rounded-md bg-green-50 px-4 py-4 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Timmer</span>
</div>
<div class="flex min-h-full flex-row justify-center px-6 py-4">
    <span id="teamA" class="inline-flex items-center rounded-md bg-yellow-50 px-6 py-2 mr-2 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20">Team A: 0</span>
    <span id="status" class="inline-flex items-center rounded-md bg-gray-50 px-2 py-2 mr-2 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">To begin</span>
    <span id="teamB" class="inline-flex items-center rounded-md bg-purple-50 px-6 py-2 text-xs font-medium text-purple-700 ring-1 ring-inset ring-purple-700/10">Team B: 0</span>
</div>
@endsection