@extends('welcome')
@section('body')
  <form method="post" action="{{action('ContohController@save')}}">
    {{ csrf_field() }}
    <input type="text" name="nama">
    <input type="text" name="cerita">
    <button name="submit">Simpan</button>
  </form>
@endsection
