@extends('layouts.app')

@section('content')

    <div class="container">
        <x-parts.basic_card_layout>
            <x-slot name="cardHeader">
                <h4 class="my-2">案内ページ</h4>
                <div class="d-md-flex gap-3">
                    {{-- <a href="{{ route('#') }}" class="btn btn-outline-primary">個別登録</a> --}}
                </div>
            </x-slot>

            <x-slot name="cardBody">
                <div class="row justify-content-center">
                    {{-- {{ $customers->links('pagination::bootstrap-4') }} --}}
                    <a href="{{ route('#') }}" class="btn btn-outline-primary"></a>
                </div>
            </x-slot>
        </x-parts.basic_card_layout>
    </div>
@endsection