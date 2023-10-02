const apiKey = 'HLW89LSRtdoBhfq5C5WewIIk88VbPkx7IZCqp56w';
const sol = 1000; 
// El número de sol que deseas consultar
// URL del API de la NASA
const apiUrl = `https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=${sol}&api_key=${apiKey}`;
console.log(apiUrl)
// Realizar una solicitud GET utilizando Fetch API
fetch(apiUrl)
  .then((response) => response.json())
  .then((json) => {
    var divElement = document.getElementById("container");
    var fotosHTML = '';
    console.log(json)
    for (var i = 0; i < json.photos.length; i++) {
      var fotos = json.photos[i].img_src;
      var name = json.photos[i].camera.name;
      var id = json.photos[i].id;
      var sol = json.photos[i].sol;
      var camera = json.photos[i].camera.full_name;
      var earth_date = json.photos[i].earth_date;
      var rover = json.photos[i].rover.name;
      var status = json.photos[i].rover.status;
      fotosHTML += `
        <div class="card">
          <img src="${fotos}" alt="Mars Rover Image"/>
          <h1>Id: ${id}</h1>
          <h1>Sol: ${sol}</h1>
          <h1>Name: ${name}</h1>
          <h1>Camera: ${camera}</h1>
          <h1>Earth Date: ${earth_date}</h1>
          <h1>Rover: ${rover}</h1>
          <h1>Status: ${status}</h1>
        </div>
      `;
    }
    divElement.innerHTML = fotosHTML;
  })
  .catch((error) => {
    console.error('Error:', error);
  });
   
