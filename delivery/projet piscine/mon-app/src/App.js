import React, { Component } from 'react';
import {BrowserRouter as Router ,Route } from 'react-router-dom'


import Add from './component/Add';

import { Link, withRouter } from 'react-router-dom';


class App extends Component {
  render() {
    return (
         <Router>
        <div className="App">
     
         
          <div className="container">
          <Route exact path="/add" component={Add} />
          
      
          
          </div>
        </div>
      </Router>
    )
  }
}

export default App;

