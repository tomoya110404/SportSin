@extends('layouts.app')

@section('content')
<section class="section">
  <div class="groups">
    <h1>サークル一覧ページ</h1>
    <ul class="groups__content">
      {{-- 仮の値 --}}
      @foreach($groups as $group)
      <a href="{{ route("groups.show", ['group' => $group]) }}">
        <li class="groups__content-post">
          <div>
            <img src="http://placeimg.com/100/100/nature" alt="失敗">
          </div>
          <div>
            <p>{{ $group->name }}</p>
          </div>
          <div>
            <span>{{ $group->groups_prefecture }}</span><span>  10人</span>
          </div>
          <div>
            <p>{{ $group->desc_mini }}</p>
          </div>
        </li>
      </a>
      @endforeach
    </ul>
  </div>
  <p><a href="{{ route("groups.create")}}">サークルを作成するンゴ</a></p> 
</section>
@endsection