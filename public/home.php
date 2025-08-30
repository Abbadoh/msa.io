
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Humanitarian News</title>
  <link rel="stylesheet" href="style.css" />
<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.advert-con {
  width: 100%;
  height: 10rem;
  background-color: #f2f2f2;
  display: flex;
  justify-content: center; /* horizontal centering */
  align-items: center;     /* vertical centering */
}

.advert-inner-wrapper {
  width: 50%;
  height: 80px;
  background-color: #818181;
  display: grid;
  place-items: center;     /* centers content inside the box */
}

.navbar {
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #f8f8f8;
  padding: 10px 20px;
  border-bottom: 1px solid #ddd;
  position:sticky;
}

.logo {
  font-size: 1.5em;
  font-weight: bold;
 color: #262626;
}

.nav-links a {
  margin: 0 10px;
  text-decoration: none;
  color: #333;
  font-weight: 500;
}

.nav-actions {
  display: flex;
  align-items: center;
  gap: 10px;
}

.live-btn {
  background-color: brown;
  color: white;
  border: none;
  padding: 6px 12px;
  font-weight: bold;
  cursor: pointer;
}

.search-btn,
.signup-btn {
  background-color: #212121;
  color: white;
  border: none;
  padding: 6px 12px;
  cursor: pointer;
border-radius:5px;
}


.search-bar {
  position: absolute;
  top: 60px;
  right: 20px;
}

.search-bar input {
  padding: 8px;
  width: 200px;
  border: 1px solid #ccc;
}

.hidden {
  display: none;
}

.abb-banner{
 width:100%;
height:340px;
background:#f2f2f2;
}
.abb-us{
 width:100%;
height:440px;
background:#fff;
}
.flex-con-2{
width:90%;
height:fit-content;
margin:50px auto;
display:flex;
flex-direction:row;
gap:5%;
margin-bottom:20px;
}
.abb-lft-con{width:55%; height:800px; border:1px solid red;}
.abb-rgt-con{width:35%; height:400px;background:#f3f3f3; z-index:5px;}

</style>
</head>
<body>
<section class="advert-con">
<div class="advert-inner-wrapper"></div>
</section>
  <header class="navbar">
    <div class="logo">Abbadoh</div>
    <nav class="nav-links">
      <a href="#">Home</a>
      <a href="#">News</a>
      <a href="#">TV Shows</a>
      <a href="#">Music</a>
      <a href="#">Stories</a>
      <a href="#">Contact Us</a>
    </nav>
    <div class="nav-actions">
      <button class="live-btn">Live</button>
      <button class="search-btn" onclick="toggleSearch()">🔍</button>
      <button class="signup-btn">Sign Up</button>
    </div>
    <div id="search-bar" class="search-bar hidden">
      <input type="text" placeholder="Search..." />
    </div>
  </header>

  <script>
  function toggleSearch() {
    const searchBar = document.getElementById("search-bar");
    searchBar.classList.toggle("hidden");
  }
</script>

<div class="abb-banner">
</div>

<div class="abb-us">
 <div class="flex-con-2">
<div class="abb-lft-con"></div>
<div class="abb-rgt-con"></div>
 </div>
</div>

</body>
</html>
