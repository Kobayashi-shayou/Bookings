@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <x-parts.admin_basic_card_layout>
                <x-slot name="cardHeader">
                    <h4 class="my-2">ログイン画面：TORiX管理画面</h4>
                </x-slot>
                <x-slot name="cardBody">
                    <form method="POST" action="{{ route('admin.login') }}"  enctype="multipart/form-data">
                        @csrf

                        <div class="col-md-8 mb-3 mx-auto">
                            <label class="" for="email">メールアドレス</label>
                            @include('components.form.text', ['name' => 'email', 'required' => true])
                            @include('components.form.error', ['name' => 'email'])
                        </div>

                        <div class="col-md-8 mb-3 mx-auto">
                            <label class="" for="password">パスワード</label>
                            @include('components.form.password', ['name' => 'password', 'required' => true])
                            @include('components.form.error', ['name' => 'password'])
                        </div>

                        <div class="col-md-8 mb-3 mx-auto">
                            @include('components.form.checkbox', ['name' => 'remember', 'data' => ['ログイン状態を保持する']])
                        </div>

                        <div class="text-center my-4">
                            <button type="submit" class="btn btn-dark">
                                ログイン
                            </button>
                        </div>
                    </form>
                    <div class="text-center">
                        <a href="{{ route('admin.password.request') }}">パスワードを忘れた方</a>
                        <br>
                    </div>

                    @if (app()->environment('local'))
                        <a href="{{ route('admin_dev_login') }}" class="btn btn-dark">開発中ログイン</a>
                    @endif
                </x-slot>
            </x-parts.admin_basic_card_layout>
        </div>
    </div>
</div>
@endsection