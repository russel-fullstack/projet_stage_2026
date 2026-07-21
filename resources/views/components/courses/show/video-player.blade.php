
<div  class=" rounded-2xl shadow-xl overflow-hidden ">
    <video
        class="plyr-video w-full rounded-xl"
        playsinline
        controls
        @if($poster)
            poster="{{ $poster }}"
        @endif
    >
        <source
            src="{{ $src }}"
            type="video/mp4" />
    </video>

</div>
