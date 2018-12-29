import React, { Component } from 'react';
import { View, Text } from 'react-native';

class Blink extends Component {
  constructor(props) {
    super(props);
    this.state = { isShowingText: true, deneme: "erhan" };

    // Toggle the state every second
    setInterval(() => (
      this.setState(previousState => (
        { isShowingText: !previousState.isShowingText }
      ))
    ), 1000);
  }

  render() {
    if (!this.state.isShowingText) {
      return null;
    }
    if (this.state.deneme == )
    return (
      <Text>{this.props.text}</Text>
    );
  }
}

export default class App extends Component {
  render(){
    return(
      <View>
        <Blink text='burasi blinkten geldi'></Blink>
        <Blink text="deneme"></Blink>
      </View>
    );
  }
}