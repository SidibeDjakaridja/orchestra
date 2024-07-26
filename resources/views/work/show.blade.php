@include('layouts.header')
@include('layouts.menu')

<div class="container-fluid">
    <div class="content-work" style="margin-top:200px">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-xs-12">
                <h1 style="color:#4776a2;">Unilever</h1>
                <h1 style="color:#4776a2;" class="mb-5">About the projet</h1>
                <div class="paragram-blog"> 
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                </div>
            </div>
            <div class="col-xl-9 col-md-6 col-xs-12">
                {{-- <div class="content-image-show-work">
                    <video width="640" height="500" controls autoplay="true">
                        <source src="../videos/video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                      </video>                      
                </div> --}}
                <div class="content-image-show-work video-container">
                    <video height="500" controls>
                        <source src="../videos/video.mp4" type="video/mp4">
                      Your browser does not support the video tag.
                    </video>
                    <button id="playPauseButton" class="play-button" onclick="togglePlayPause()"></button>
                  </div>
                  
            </div>
        </div>
    </div>
</div>
<script>
    function togglePlayPause() {
  var video = document.getElementById('videoPlayer');
  var button = document.getElementById('playPauseButton');
  
  if (video.paused) {
    video.play();
    button.classList.add('pause');
  } else {
    video.pause();
    button.classList.remove('pause');
  }
}

</script>
@include('layouts.footer')