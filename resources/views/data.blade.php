@extends('welcome')
@section('body')
  <a href="{{url('add')}}">Tambah Data</a>
  <table>
    <thead>
      <th>Nama</th>
      <th>Cerita</th>
      <th>Like</th>
      <th>Action</th>
    </thead>
    @foreach ($contoh as $index => $item)
      <tr>
        <td>{{$item->nama}}</td>
        <td>{{$item->cerita}}</td>
        <td>{{$item->like}}</td>
        <td>
          <a href="{{url('edit',[$item->id])}}"> Edit</a>
          <a href="{{url('delete',[$item->id])}}"> Delete</a>
        </td>
      </tr>
    @endforeach
  </table>
@endsection
