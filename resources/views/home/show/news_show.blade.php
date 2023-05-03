@extends('layouts.master')
@section('title')
{{ $post->{'title_'.app()->getLocale()} }}
@endsection
@section('content')
    <div class="page-title-section-without-background">
        <div class="black-overlay-70"></div>
    </div>
    <div class="section-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="blog-post pr-lg-4 pr-0">
                        <img src="{{ Storage::url($post->image) }}" alt="" class="mb-15">
                        <h4>{{ $post->{'title_'.app()->getLocale()} }}</h4>
                        <ul class="blog-post-info">
                            <li><i class="far fa-user"></i><span>Admin</span></li>
                            <li><i class="far fa-calendar-alt"></i><span>{{ $post->created_at->format('Y.m.d') }}</span></li>
                        </ul>
                        <p>{!! $post->{'full_text_'.app()->getLocale()} !!}</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="blog-post-right">
                        <h4>@lang('n_news_RecentNews')</h4>
                        <div class="recent-post mt-20">
                            @php $recentnews = App\Models\Post::where('id', '!=', $post->id)->limit(5)->get() @endphp
                            @foreach($recentnews as $news)
                            <div class="recent-post-info">
                                <div class="row align-items-center">
                                    <div class="col-md-4 col-sm-4 col-12 pr-0">
                                        <img src="{{ Storage::url($news->image) }}" alt="">
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-12">
                                        <h3><a href="/news/{{ $news->id }}">{{ Str::limit($news->{'title_'.app()->getLocale()}, 35) }}</a></h3>
                                        <h6>{{ $news->created_at->format('Y.m.d') }}</h6>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection