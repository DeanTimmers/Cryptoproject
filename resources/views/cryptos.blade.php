<h1>data list </h1>

<ul>
@foreach($data as $item)
<li>{{$item['currency']}}</li>
<p>{{$item['price']}}</p> 
<p>{{$item['logo_url']}}</p>
@endforeach
</ul>

