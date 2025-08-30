<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Bronizah – Kimenoga</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #f0f2f5;
      font-family: 'Segoe UI', Roboto, sans-serif;
    }

    .video-card {
      max-width: 500px;
      margin: 40px auto;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .video-card:hover {
      transform: scale(1.02);
    }

    .video-wrapper {
      position: relative;
      width: 100%;
    }

    video {
      width: 100%;
      height: auto;
      display: block;
      background-color: #000;
    }

    .custom-controls {
      position: absolute;
      bottom: 12px;
      left: 12px;
      right: 12px;
      display: flex;
      justify-content: flex-start;
      align-items: center;
      gap: 8px;
      z-index: 10;
    }

    .custom-controls button {
      background-color: rgba(34, 34, 34, 0.85);
      color: #fff;
      border: none;
      padding: 6px 10px;
      font-size: 12px;
      border-radius: 4px;
      cursor: pointer;
      box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
      transition: all 0.3s ease;
      min-width: 40px;
      text-align: center;
    }

    .custom-controls button:hover {
      background-color: #444;
      transform: scale(1.05);
    }

    .video-info {
      padding: 20px;
      border-top: 1px solid #eee;
      background-color: #f4f6f8;
    }

    .video-info h3 {
      margin: 0 0 10px;
      font-size: 20px;
      color: #222;
    }

    .video-info p {
      margin: 0;
      font-size: 14px;
      color: #555;
    }

    ::cue {
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
      font-size: 16px;
      font-family: 'Segoe UI', sans-serif;
      text-shadow: 1px 1px 2px #000;
      padding: 2px 6px;
      border-radius: 4px;
    }
  </style>
</head>
<body>

  <div class="video-card">
    <div class="video-wrapper" id="videoContainer">
      <video id="myVideo" poster="https://i.imgur.com/8Km9tLL.jpg">
        <source src="movie.mp4" type="video/mp4" />
        <track src="subtitles_en.vtt" kind="subtitles" srclang="en" label="English" default />
        Your browser does not support the video tag.
      </video>

      <div class="custom-controls">
        <button id="playPause">▶️</button>
        <button id="ccToggle">CC</button>
        <button id="fullscreenToggle">⛶</button>
      </div>
    </div>

    <div class="video-info">
      <h3>🎵 Bronizah – Kimenoga (Official Music Video)</h3>
      <p><strong>Author:</strong> Leilah</p>
    </div>
  </div>

  <script>
    const video = document.getElementById('myVideo');
    const playPause = document.getElementById('playPause');
    const ccToggle = document.getElementById('ccToggle');
    const fullscreenToggle = document.getElementById('fullscreenToggle');
    const videoContainer = document.getElementById('videoContainer');
    const track = video.textTracks[0];
    track.mode = 'hidden';

    playPause.addEventListener('click', () => {
      if (video.paused) {
        video.play();
        playPause.textContent = '⏸️';
      } else {
        video.pause();
        playPause.textContent = '▶️';
      }
    });

    ccToggle.addEventListener('click', () => {
      track.mode = track.mode === 'showing' ? 'hidden' : 'showing';
      ccToggle.textContent = track.mode === 'showing' ? 'CC On' : 'CC';
    });

    fullscreenToggle.addEventListener('click', () => {
      if (!document.fullscreenElement) {
        videoContainer.requestFullscreen();
      } else {
        document.exitFullscreen();
      }
    });
  </script>

</body>
</html>
