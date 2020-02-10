import {request} from './request'

export function getHomeMultidata(){
    return request({
        url:'/api/hy/home/multidata'
    })
}
export function getHomeGoods(type,page){
    return request({
        url:'/api/hy/home/data',
        params:{
            type,
            page
        }
    })
}