import React from 'react'
import Countdownbox2 from './Countdownbox2.js'



export default function Home() {
  return (
    <div>
    
    
    <div id="main">
    <div id="particles-js"></div>

    <header>
       <img src='https://usict.acm.org/assets/images/acm-logo.svg'/>
    </header>

      <div class="container-fluid">
        <div class="row outer">
          <div class="main-body text-center pt-3" >

            <div class="maintitle">
               <h2 class="hero glitch layers" id="in-down" data-text="HashTech"><span>HashTech</span></h2>
            </div>

            <div class="dateandplace">
              <h1 class="fs-28 text-white  fw-600 h-text">University School of <span class="text-base-color">Information & Communication</span>  Technology</h1>
            </div> 
            

            
            <div>
               {<Countdownbox2/>}
            </div>

            </div>
        </div>

      </div>
    </div>
    
    
    </div>
  )
}
