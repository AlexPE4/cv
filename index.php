<html>
    <head>
        <meta charset="utf-8">
        <title>BullBoxer</title>
        <link rel="icon" href="favicon.ico">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Comforter&family=Dosis:wght@800&family=Roboto:wght@900&family=Ubuntu&display=swap" rel="stylesheet">
         <style type="text/css">
            
            




            body {
                 background-color: #142F43;
                 margin: 0 ;
                text-align: center;
                font-family: 'Roboto', sans-serif;
            }
            
            h1 {
                font-family: 'Comforter', cursive;
                font-size: 7rem;
                text-align: center;
                color: #142F43;
                margin: 0 auto 0 auto;
                line-height: 1.5;
            }
            
            h2 {
                color: #FFAB4C;
                font-size: 45px;
                font-family: 'Comforter', cursive;
                font-weight: normal;
                text-align: center;
            }
            
             h3 {
                color: #FF5F7E;
                font-size: 25px;
                font-family: 'Dosis', cursive;
                text-align: left;
                margin-top: 20px;
            }
            
            h4 {
                color: #142F43;
                font-size: 55px;
                font-family: 'Comforter', cursive;
                font-weight: bold;
                text-align: center;
                margin: auto;
            }
            
            h5 {
                text-align: center;
                color: #FF5F7E;
                font-size: 25px;
                font-family: 'Dosis', cursive;
                margin-top: 20px;
            }
            
            h6 {
                text-align: center;
                color: #142F43;
                font-size: 15px;
                font-family: 'Dosis', cursive;
                margin-top: 20px;
            }
            
            p {
                 color: #7E7E7E;
                 text-align: left;
                 clear: left;
            }
            .chapter-p {
                color:  #aaaaaa;
                  text-align: right;
                  padding: 2%;
            }
            
            a{
                color: #344F63;
                display:inline-block;
                margin:10px 20px;
                text-decoration: none;
            }
            
            a:hover {
                color: #B000F9;
            }
            
            .top-container {
                background-color: #FFAB4C;
                padding-top:1px;
                padding-bottom: 0 ;
                padding-left: 20% ;
                padding-right: 15% ;                
            }
                        
            
            .mid-container {
                display:inline-block;
             
            }
            
            .bottom-container {
                background-color: #FFAB4C;
                padding-top: 2% ;
                padding-bottom: 2% ;
                padding-left: 20% ;
                padding-right: 15% ;    
            }
            .pro {
                font-family: 'Dosis', sans-serif;
                text-decoration: underline;
                font-size: 20px;
            }
            .bull {
                color: #B000F9;
            }
            
            .imgTop {
                width: 150px;
                float:left;
                padding: 10px;
            }
            
            .imgBot {
                width: 150px;
                float:right;
                padding: 10px;
            }
            
            .imgL {
                width: 60px;
                float:left;
                margin-right: 30px;
                padding: 10px;
            }
            
            .imgR {
                width: 60px;
                float:right;
                padding: 10px;
            }
            
            .massive-img {
                width: 100%;
                display: block;
            }
            
            .chapter {
                color: #FFAB4C; 
                padding-left: 10% ;
                padding-right: 5% ;
            }
            
            .info-row {
              padding-left: 10% ;
              padding-right: 5% ;
             padding-bottom: 2% ; 
            }
            
            hr {
                border-style: dotted none none;
                border-width:10px;
                width: 80px;
                border-color: #243F53;
                padding: 15px;
            }
            
            .btn {
  background: #FFAB4C;
  background-image: -webkit-linear-gradient(top, #FFAB4C, #FF5F7E);
  background-image: -moz-linear-gradient(top, #FFAB4C, #FF5F7E);
  background-image: -ms-linear-gradient(top, #FFAB4C, #FF5F7E);
  background-image: -o-linear-gradient(top, #FFAB4C, #FF5F7E);
  background-image: linear-gradient(to bottom, #FFAB4C, #FF5F7E);
  -webkit-border-radius: 11;
  -moz-border-radius: 11;
  border-radius: 11px;
  text-shadow: 1px 1px 3px #666666;
  font-family: 'Dosis', monospace;
  color: #142F43;
  font-size: 32px;
  padding: 10px 36px 10px 20px;
  margin:auto;
  border: solid #B000F9 2px;
  text-decoration: none;
  width: 25%;
}

.btn:hover {
  background: #B000F9;
  background-image: -webkit-linear-gradient(top, #B000F9, #B000F9);
  background-image: -moz-linear-gradient(top, #B000F9, #B000F9);
  background-image: -ms-linear-gradient(top, #B000F9, #B000F9);
  background-image: -o-linear-gradient(top, #B000F9, #B000F9);
  background-image: linear-gradient(to bottom, #B000F9, #B000F9);
  text-decoration: none;
}

.svg-wrapper {
  height: 60px;
	margin: 0 auto;
  position: relative;
  top: 50%;
  transform: translateY(-50%);
  width: 320px;
}

.shape {
  fill: green;
  stroke-dasharray: 140 540;
  stroke-dashoffset: -474;
  stroke-width: 8px;
  stroke: #FFAB4C;
}

.want {
  color: #FFAB4C;
  font-family: 'Roboto', sans-serif;
  font-size: 22px;
  font-weight: bold;
  letter-spacing: 8px;
  line-height: 32px;
  position: relative;
  top: -48px;
}

@keyframes draw {
  0% {
    stroke-dasharray: 140 540;
    stroke-dashoffset: -474;
    stroke-width: 8px;
  }
  100% {
    stroke-dasharray: 760;
    stroke-dashoffset: 0;
    stroke-width: 2px;
  }
}

.svg-wrapper:hover .shape {
  -webkit-animation: 0.5s draw linear forwards;
  animation: 0.5s draw linear forwards;
}

         </style>
    </head>

<body>
        <div class= "top-container">
            <img class="imgTop" src="images/premium-icon-punch-928655.png" alt="">
            <h1><span class="bull">Bull</span>Boxer</h1>
            </div>
        
<div class= "mid-container">             
          
  <div class="chapter">
    <h2>Набей руку!</h2>
    <p  class="chapter-p">Это такой силомер. Lorem ipsum dolor sit amet, vitae volutpat, dui conubia, dolor urna. Non auctor, montes nulla distinctio.</p>
            
  </div>
  
  <div class="chapter">
    <hr>
    <h2>I can do Monitoring</h2>
    <img class="imgR" src="images/premium-icon-boxing.png" alt="">
   <p  class="chapter-p">Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
   </div>
  
    <div class="info-row">
       <img class="imgL" src="images/free-icon-monitoring.png" alt="">
      <h3>Simple Results</h3>  
      <p>Lorem ipsum dolor sit amet, quis in duis, iaculis id felis. Consectetuer vestibulum, nunc urna lectus, erat ligula. Hendrerit nam, lectus ante, ut lorem eros.</p>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
    </div>
    
    <div class="info-row">
      <img class="imgL" src="images/premium-icon-monitoring-3097876.png" alt="">
      <h3>Extended Results</h3>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
    </div>
    
 
    
       <hr>
        <div class="chapter">
      <h2>Usability</h2>
      <img class="imgR" src="images/premium-icon-gym-3485290.png" alt="">
       <p  class="chapter-p">Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
       </div>
      
      <div class="info-row">
      <h3>Placement Recommend</h3>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
    </div>
      


 <hr>
      <div class="chapter">
      <h2>Why Must Have?</h2>
      <img class="imgR" src="images/chillies.png" alt="">
       <p  class="chapter-p">Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
       </div>
      
    <div class="info-row">   
      <img class="imgL" src="images/free-icon-treadmill-3220534.png" alt="">
      <h3>Usage Benefits</h3>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
       
      <img class="imgL" src="images/premium-icon-competition-150299.png" alt="">
      <h3>Competitive Winnership</h3>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
      <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
    </div>
    
    <hr> 
      <div class="chapter">
      <h2>Final Prerarations</h2>
      <img class="imgR" src="images/premium-icon-muay-thai-3587327.png" alt="">
      <p  class="chapter-p">Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
    </div>
      
    <div class="info-row">
      <img class="imgL" src="images/free-icon-call-to-action-2036962.png" alt="">
      <h3>Call to action!</h3>
       <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
    </div>
    
    <div class="info-row">
     <img class="imgL" src="images/premium-icon-phone-call-1429044.png" alt="">
      <h3>Call us if any question</h3>
       <p>Lorem ipsum dolor sit amet, mauris sed consectetuer. Etiam et eu, bibendum interdum, lacus quis mauris. Curabitur wisi, quisque vel eu, rutrum nam.</p>
    </div>

<div class="svg-wrapper">
  <svg height="60" width="320" xmlns="http://www.w3.org/2000/svg">
    <rect class="shape" height="60" width="320" />
  </svg>
   <div class="want">ХОЧУ</div>
</div>

</div>


   
   
<div class="bottom-container">
  <div class="chapter">
    <h4>На связи!</h4>
    <img class="imgBot" src="images/premium-icon-boxing-928657.png" alt="">
    <h5>Lorem ipsum dolor sit amet, non elit.</h5>  
    <h6>Lorem ipsum dolor sit amet, in quis, aenean amet. Phasellus sodales, tellus donec dui, ornare erat.</h6>
  </div>

    <div class="btn" href="mailto:name@email.com">CONTACT ME</div>
    
  <a class="footer-link" href="https://www.linkedin.com/">LinkedIn</a>
  <a class="footer-link" href="https://twitter.com/">Twitter</a>
  <a class="footer-link" href="https://www.appbrewery.co/">Website</a>
</div>
  <a>© 2021 NameSurname. </a>  <a href="https://www.freepik.com" title="Freepik">  Автор иконок: Freepik</a>  <a href="https://www.flaticon.com/ru/" title="Flaticon">www.flaticon.com</a>



</body>
</html>