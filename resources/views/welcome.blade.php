@extends("app.app")
@section('og.site_name','SITE NAME KU')
@section('og.type','website')
@section('og.title','Home Page | Media masa untuk masyarakat')
@section('twitter.creator','@yuyuid__')
@section('twitter.image','https://images.unsplash.com/photo-1625591342274-013866180475?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=741&q=80 741w')

g
@section("layout")
    <div class="space-y-6 w-full h-full py-4">
        @component('components.container.index', ['classes'=> 'space-y-6'])

            @component("components.grid.default", ['gap'=>"gap-4 lg:gap-6"])
                @component("components.grid.item")
                    @include('components.card.default', [
                    'title'=>'Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet',
                    'permalink'=>['url'=> \App\Helpers\Utils::getPermalink('/app/','Lorem ipsum dolor sit amet lorem ipsum dolor sit amet lorem ipsum dolor sit amet')],
                    'images'=>[
                        'url'=>'https://images.unsplash.com/photo-1625591342274-013866180475?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=741&q=80 741w',
                        'alt'=>'Lorem ipsum dolor sit amet'
]])
                @endcomponent

            @endcomponent
        @endcomponent
    </div>

@endsection
