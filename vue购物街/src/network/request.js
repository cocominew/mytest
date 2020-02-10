// npm i axios --save
import axios from 'axios'

export function request(config){
    const instance=axios.create({
        baseURL:'http://106.54.54.237:8000',
        timeout:5000
    })
    return instance(config)
}
