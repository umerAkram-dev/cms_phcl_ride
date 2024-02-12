@extends('admin.layouts.app')
@section('css_after')
    <style>
        .border_right {
            border-right: 2px solid #dee2e6;
        }
    </style>
@endsection
@section('content')
    {{-- @foreach ($program_highlights as $key => $program_highlight) --}}
        <main id="main" class="main">
            <section class="section">
                <div class="card">
                    <div class="card-body p-4">
                        <h3>Program Highlights Cooking Class (<a href="{{ route('programhighlights',$type)}}">{{route('programhighlights',$type)}}</a>)</h3>
                        <div class="row">
                            @include('admin.home.parts.highlights.header')
                            @include('admin.home.parts.highlights.program_highlight')
                            @include('admin.home.parts.highlights.advantages')
                        </div>
                    </div>
                </div>
            </section>
        </main>
    {{-- @endforeach --}}
@endsection

