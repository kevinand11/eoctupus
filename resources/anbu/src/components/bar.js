import React from 'react';
import { Link } from "@reach/router";


function Bar() {
  return (
    <div>
<div className="w3-bar w3-border w3-blue w3-xxlarge">
 <Link to="/" style={{textDecoration : "none"}}>
 <h1>ADMIN DASHBOARD</h1>
 </Link>
</div>
    </div>
  );
}

export default Bar;
