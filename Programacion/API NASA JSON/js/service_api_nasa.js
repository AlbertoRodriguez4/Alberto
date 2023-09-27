
const apiKey = 'HLW89LSRtdoBhfq5C5WewIIk88VbPkx7IZCqp56w';
const sol = 1000; // El número de sol que deseas consultar

// URL del API de la NASA
const apiUrl = `https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=${sol}&api_key=${apiKey}`;
//const apiUrl = 'js\data.json';

// Realizar una solicitud GET utilizando Fetch API
fetch(apiUrl)
  .then((response) => {
    if (!response.ok) {
      throw new Error('Cristiano Ronaldo');
    }
    return response.json();
  })
  .then((data) => {
    // Los datos de las fotos se encuentran en el objeto 'data'
    console.log(data);
    // Aquí puedes procesar los datos o mostrar las imágenes en tu aplicación
    for (var i = 1; i < 100; i++) {
      console.log("hola")
    }
  })

  .catch((error) => {
    console.error('Cristiano Ronaldo:', "siuuu");
  });
