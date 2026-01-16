import React from 'react'
import {Stylesheet,Text,View} from 'react-native'
const Ab=(props)=>{
    return(
        <View>
            <Text style={c.b}>
                {props.b}
            </Text>
        </View>
    )
}
export default Ab
    const c=Stylesheet.create({
        b:{
            backgroundColor:'#0f0',
            color:'#fff'
        },
})