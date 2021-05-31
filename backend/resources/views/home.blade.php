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
    <button form="logout-button" class="dropdown-item" type="submit">
      ログアウト
    </button>
    <form id="logout-button" method="POST" action="{{ route('logout') }}">
      @csrf 
    </form>
    @endauth
  </div>
</section>

@endsection
