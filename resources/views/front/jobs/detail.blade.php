@extends('front.layout')

@section('content')

<article>
<header>
    <h1>{{ $job->title }}</h1>
    <p>{{ $job->company->name }} • {{ $job->location->name }}</p>
</header>

<section aria-label="Description">
    {!! $job->description !!}
</section>

<section aria-label="Apply">
    <a href="#">Lamar via WhatsApp</a>
</section>
</article>

@endsection
