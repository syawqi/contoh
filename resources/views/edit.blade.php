@extends('welcome')
@section('body')
  <form method="post" action="{{action('ContohController@update', $id)}}">
    {{ csrf_field() }}
    <input type="text" name="nama" value="{{$contoh->nama}}">
    <input type="text" name="cerita" value="{{$contoh->cerita}}">
    <button name="submit">Simpan</button>
  </form>
@endsection
