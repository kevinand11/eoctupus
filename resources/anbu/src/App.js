import React from 'react';
import { Router } from "@reach/router";
import Home from './components/Home'
import About from './components/About'


function App() {
  return (
    <div>
      <Router> 
       <Home path="/"/>
       <About path="/:id"/>
    </Router>
    
 
    </div>
  );
}

export default App;
