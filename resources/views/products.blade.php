@extends('layouts.main')
@section('title', 'eDuta - Products')
@section('content')
    @for($i=1;$i<=5;$i++)
        <div class="media border-top">
          <img class="align-self-center mr-2" 
          src="https://media.istockphoto.com/id/1271880314/vector/lost-items-line-vector-icon-unidentified-items-outline-isolated-icon.jpg?s=170667a&w=0&k=20&c=vAhxAXkunUhmCqj90QcyIvH9AI5YVJkjeDBvfpaZ9Fo=" 
          height='100' alt="Generic placeholder image">
          <div class="media-body">
            <b class="mt-3">Lorem, ipsum dolor.</b><br>
            <small>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Id ipsam fugit praesentium maxime 
                suscipit, dolor facere nesciunt aliquam eveniet excepturi?
            </small>
          </div>
          @include('layouts.unordered')
        </div>
    @endfor
@endsection
