@extends("layouts.app")

@section('content')
  <section class="section">
    <div class="groups-show">
      <p>サークル詳細ページ</p>
      <div class="show__img">
        <img src="http://placeimg.com/300/300/nature" alt="失敗">
      </div>
      <div>
        <p>チーム紹介</p>
        <div>
         <p>{{ $group->description }}</p>
        </div>
      </div>
      {{-- infomation --}}
      <div>
        <p>設立日       {{ $group->created_at}}</p>
        {{-- modelで取得 --}}
        <p>男女比       ５：５</p>
        <p>主な年齢層    {{ $group->age_group}}</p>
      </div>

      {{-- グループ主催のイベント一覧 --}}
      <div>
        <li class="event">
          <div>
            <img src="http://placeimg.com/120/120/nature" alt="失敗">
          </div>
          <div>
            <div>
              日付
            </div>
            <div>
              タイトル
            </div>
            <div>
              レベル感、開催場所
            </div>
          </div>
        </li>
      </div>
      @if(Auth::id() === $group->user_id)
        <form method="POST" action="{{ route("groups.destroy", ["group" => $group])}}">
          @method('DELETE')
          @csrf
          <button type="submit">削除する</button>
        </form>
        <a href="{{ route("groups.edit", ['group' => $group]) }}">編集する</a>
      @endif
    </div>
  </section>
@endsection