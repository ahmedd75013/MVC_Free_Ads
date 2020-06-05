import React, { Component } from 'react'
import TableauB from './component/TableauB';
import { BrowserRouter as Router, Route } from "react-router-dom";

class App extends Component{
  render() {
    return (
     
        <div className="App">
         <Router>
        
          <div className="container">
          <Route exact path="/tableauB" component={TableauB} />
          </div>
          </Router>
        </div>
       
     
    )
  }
}

export default App;
