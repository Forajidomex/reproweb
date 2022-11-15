
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/lunaradio-sincors.js"></script>

<div style="position:absolute;overflow:hidden;width:100%;height:100%;top:0;left:0;z-index:2">
 <video autoplay="true" muted="true" loop="true">
  <source src="" type="video/mp4">
 </video>
</div>

<div id="lunaradio" style="width:100%;height:100%;position:absolute;left:0px;top:0px;z-index:300;overflow:hidden;display:block">Cargando ...</div>

<!-- <div id="lunaradio" style="width:100%; height:600px;background: #000000 url(https://i.imgur.com/CTQdbqh.jpg) bottom / cover no-repeat;">Cargando ...</div> -->	

<script>
  $("#lunaradio").lunaradio({
  userinterface: "big",
  backgroundcolor: "transparent",
  fontcolor: "#ffffff",
  hightlightcolor: "#CC0000",
  fontname: "Anton",
  googlefont: "Anton&display=swap",
  fontratio: "0.4",
  radioname: "La Warida", //nombre de radio
  scroll: "true",
  coverimage: "https://i.imgur.com/Gml03gJ.png", //link o ruta de logo radio
  onlycoverimage: "false", //true para mostrar solo logo radio
  coverstyle: "animated",
  usevisualizer: "real",
  visualizertype: "7",
  metadatatechnic: "corsproxy",
  ownmetadataurl: "",
  usestreamcorsproxy: "false", //true o false
  corsproxy: "https://cors-anywhere.herokuapp.com/",
  streamurl: "https://sonic01.instainternet.com:7069",
  streamtype: "icecast2", //shoutcast2, icecast2, radiozeno, radionomy, radiojar, radioco
  icecastmountpoint: "/radio.mp3",
  shoutcastpath: "/stream",
  shoutcastid: "",
  streamsuffix: "",
  radionomyid: "",
  radionomyapikey: "",
  radiozenoid: "",
  radiojarid: "",
  radiocoid: "",
  itunestoken: "1000lIPN",
  metadatainterval: "20000",
  volume: "85",
  debug: "false",
  });
</script>