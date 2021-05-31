@extends('layouts.app')

@section('content')

<section class="section">
  <div class="">
    サークル作成ページ
  </div>
  <div>
    @include("errors.error_group")
  </div>
  <div>
    <form method="POST" action="{{ route('groups.store') }}">
      @csrf
        <div>
          <label>サークル名</label>
          <input type="text" name="name" value="名前入力">
        </div>
        <div>
          <label>開催地区都道府県</label>
          <select name="groups_prefecture">
            @foreach ($prefs as $pref)
              <option value="{{$pref}}">{{$pref}}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label>レベル</label>
          <select name="about_level">
            @foreach ($levels as $level)
              <option value="{{$level}}">{{$level}}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label>年齢層</label>
          <select name="age_group">
            @foreach ($ages as $age)
              <option value="{{$age}}">{{$age}}</option>
            @endforeach
          </select>
        </div>
        {{-- <div>{{ Form::select('groups_prefecture', $prefs, 0, ['class' => 'groups_prefs']) }}</div>
        <div>{{ Form::select('about_level', $levels, 0, ['class' => 'levels']) }}</div> 
        <div>{{ Form::select('age-group', $ages, 0, ['class' => 'levels']) }}</div>  --}}
        <div>
          <label>説明文</label>
          <input type="text" name="description" value="説明文">
        </div>
        <div>
          <label>見出し</label>
          <input type="text" name="desc_mini" value="説明文見出し">
        </div>
        <div>
          <label>参加人数？（ここで設定しなくてもいいかも）</label>
          <input type="text" name="member" value=10>
        </div>
        <button type="submit">投稿する</button>
    </form>
  </div>
</section>
@endsection