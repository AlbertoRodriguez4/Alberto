import React, { useEffect, useState } from "react";
import { View, Text, FlatList } from "react-native";

const PokemonList = () => {
  const [pokemons, setPokemons] = useState([]);
  useEffect(() => {
    fetch("http://192.168.104.66/products/")
      .then((response) => response.json())
      .then((data) => setPokemons(data));
  }, []); // Add an empty dependency array here to fetch data only once

  return (
    <FlatList
      data={pokemons}
      keyExtractor={(item) => item.id.toString()}
      renderItem={({ item }) =>  // Destructure item from the argument
        <View>
          <Text>{item.name}</Text>
        </View>
      }
    />
  );
};
export default PokemonList;