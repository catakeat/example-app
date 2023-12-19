<x-header  data="acestea sint datelee mele"/>
@include('included_view')
users view

@foreach($users as $item)
  <h3>{{$item}}</h3>
@endforeach


@csrf
<script>
var data=@json($users);
console.warn(data);

    </script>