
const apiKey = 'HLW89LSRtdoBhfq5C5WewIIk88VbPkx7IZCqp56w';
const sol = 1000; // El número de sol que deseas consultar

// URL del API de la NASA
const apiUrl = `https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=${sol}&api_key=${apiKey}`;
//const apiUrl = 'js\data.json';

// Realizar una solicitud GET utilizando Fetch API
fetch(apiUrl)
  .then(response => response.json())
  .then(json => {
    console.log(json)
    for(var i = 1; i < json.photos.length; i++) {
      console.log(json.photos[i].img_src)
    }

  })
  .catch((error) => {
    console.error('Cristiano Ronaldo:', "siuuu");
  });
