<div class="min-w-[220px] bg-white shadow rounded-2xl border overflow-hidden">
    @if(!empty($images))
    <div class="h-[220px] w-full bg-red-500 relative overflow-hidden">
        <img
            src="{{$images["url"] ?? ""}}"
            alt="{{$images["alt"] ?? "images"}}"
            class="{{$images["classes"] ?? "w-full absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 object-cover h-full transition duration-200 hover:scale-105"}}"
        >
    </div>
    @endif
    <div class="p-4 space-y-2">
        <div class="min-h-[50px]">
            <a href="{{$permalink["url"] ?? "/"}}" target="{{$permalink["target"] ?? "_blank"}}" title="{{$title}}">
                <h3 class="line-clamp-2 font-semibold">{{$title}}</h3>
            </a>
        </div>
        <p class="text-sm">{{$description ?? "Lorem ipsum dolor sit amet"}}</p>
    </div>
</div>
