@extends('layouts.app')

@section('content')

<section class="section">
  <div class="">
    サークル作成ページ
  </div>
  <div>
    <form methods="POST" action="{{ route('groups.store')}}">
      @csrf
        <div>
          <label>サークル名</label>
          <input type="text" name="name" value="名前入力">
        </div>
        {{-- <div>
          <label>開催地区都道府県</label>
          <select>
            @foreach ($prefs as $pref)
              <option value="{{$pref}}">{{$pref}}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label>レベル</label>
          <select>
            @foreach ($levels as $level)
              <option value="{{$level}}">{{$level}}</option>
            @endforeach
          </select>
        </div>
        <div>
          <label>年齢層</label>
          <select>
            @foreach ($ages as $age)
              <option value="{{$age}}">{{$age}}</option>
            @endforeach
          </select>
        </div> --}}
        {{ Form::select('groups_prefecture', $prefs, 1, ['prefs' => 'prefs']) }}
        <div><input type="text" name="descrption" value="説明文"></div>
        <div><input type="text" name="desc_mini" value="説明文見出し"></div>

        <button type="submit">投稿する</button>
    </form>
  </div>
</section>
@endsection