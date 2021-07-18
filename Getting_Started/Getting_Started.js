var myvid = document.getElementById('mideo');
var myvids = [
    "./Videos/1.mp4", 
    "./Videos/5.mp4",
    "./Videos/7.mp4",
    "./Videos/3.mp4",
    "./Videos/8.mp4",    
    "./Videos/4.mp4",    
    "./Videos/6.mp4",
  ];
var activeVideo = 0;

myvid.addEventListener('ended', function(e) {
  // update the new active video index
  activeVideo = (++activeVideo) % myvids.length;

  // update the video source and play
  myvid.src = myvids[activeVideo];
  myvid.playbackRate = 2;
  myvid.play();
});