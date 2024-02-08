import { StyleSheet, Text, View } from 'react-native';
import PokemonList from './src/screens/PokemonList';

export default function App() {
  return <PokemonList/>
  
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});