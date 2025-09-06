import React from 'react'
import {StyleSheet,View,Text} from 'react-native'
import Ab from './Ab'        
export default class App extends React.Component{
    a={
        b:'Hello World!'
    }
    render(){
        return(
            <View>
                <Ab b={this.a.b}/>
            </View>
        );
    }
}