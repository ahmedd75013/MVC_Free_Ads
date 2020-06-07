import React, { Component } from 'react'
import ActiveCarousel from './Active-carousel'
import CarouselGrid from './Carousel-grid'



export default class CarouselF extends Component{
    render(){
        return(
            <div style={carouselStyle}>
              {/*left */}
              <div style={{ flex:1}}>
                  <ActiveCarousel/>
                  <CarouselGrid/>
              </div>
              {/*Right */}
              <div style={{ flex:1 , padding:'40px'}}>
                TEXT
              </div>
            </div>
        )
    }
}

const carouselStyle ={
    background:'#ddd',
    height:'500px',
    width:'1024px',
    margin:'40px auto',
    display:'flex',

}