import React from 'react'
import Carousel from './Carousel'


const CarouselGrid = () =>{
    return (
        <div style={styles}>
           <Carousel/>
           <Carousel/>
           <Carousel/>
           <Carousel/>

           <Carousel/>
           <Carousel/>
           <Carousel/>
           <Carousel/>
           
        </div>
    )
}

const styles={
    height:'10%',
    width:'100%',
    background:'yellow',
    display:'flex',
    flexWrap:'wrap'
}

export default CarouselGrid