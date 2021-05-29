@extends('layouts.app')

@section('content')
<section class="section">
  <div class="groups">
    <ul class="groups__content">
      {{-- 仮の値 --}}
      <li>
        <div>
          <img src="http://placeimg.com/100/100/nature" alt="失敗">
        </div>
        <div>
          <p>チーム名</p>
        </div>
        <div>
          <span>東京</span><span>10人</span>
        </div>
        <div>
          <p>よろしくお願いします</p>
        </div>
      </li>
      <li>
        <div>
          <img src="http://placeimg.com/100/100/nature" alt="失敗">
        </div>
        <div>
          <p>チーム名</p>
        </div>
        <div>
          <span>東京</span><span>10人</span>
        </div>
        <div>
          <p>よろしくお願いします</p>
        </div>
      </li>
      <li>
        @foreach($groups as $group)
        <p>{{ $group->name }}</p>
        @endforeach
      </li>
    </ul>
  </div>
  <p><a href="{{ route("groups.create")}}">サークルを作成するンゴ</a></p> 
</section>
@endsection