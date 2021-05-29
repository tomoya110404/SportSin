@extends('layouts.app')

@section('content')
<section class="section">
  <div>
    hello world
  </div>
  <a href="{{ route("groups")}}">グループ一覧</a>
  <div>
    @guest
    <a href="{{ route('login') }}">ログイン</a>   
    <a href="{{ route('register') }}">新規登録</a>  
    @endguest
    @auth
    <a href="{{ route('logout') }}">ログアウト</a> 
    @endauth
  </div>
</section>

@endsection
