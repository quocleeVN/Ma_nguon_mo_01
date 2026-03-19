@foreach($vote as $row)
Tên phim: {{$row->movie_name}}, Ngày phát hành: {{$row->release_date}}, Mô tả: {{$row->overview}}, Ảnh: <img src="{{$row->image_link}}" alt="">
<br>
@endforeach