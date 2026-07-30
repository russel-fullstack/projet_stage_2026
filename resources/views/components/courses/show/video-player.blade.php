
<div  class=" rounded-2xl shadow-xl overflow-hidden ">
    <video
        id='course-video'
        class="plyr-video w-full rounded-xl"
        playsinline
        controls
        preload="metadata"
        @if($poster)
            poster="{{ $poster }}"
        @endif
    >
       @if($src) <source src="{{ $src }}" type="video/webm" > @endif
    </video>

</div>
