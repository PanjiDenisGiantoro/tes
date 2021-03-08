<div>
    <h1>this is header component</h1>
<h3>hello {{ $name }}</h3>
<h3>fruit</h3>
<ul>
    @foreach ($fruits as $f)
    <li>{{ $f }}</li>
    @endforeach
</ul>
</div>