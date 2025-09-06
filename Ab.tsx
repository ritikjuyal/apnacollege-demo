/*<html>
    <head>
        <script src="https://unpkg.com/react@18/umd/react.development.js"></script>
        <script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"></script>
        <script src="https://unpkg.com/@babel/standalone/babel.min.js"></script>
    </head>
    <body>
        <script type="text/babel">
*/            import React from 'react'
            import {StyleSheet,View,Text} from 'react-native'
            const Ab=(props)=>{
                return(
                    <View>
                        <Text style={c.b}>{props.b}</Text>        
                    </View>
                )
            }
            export default Ab
            const c=StyleSheet.create({
                b:{
                    color:'#fff',
                    backgroundColor:'#0f0',
                    textAlign:'center'
                }
            })
/*        </script>
    </body>
</html>*/