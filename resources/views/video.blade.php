<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<style>
    .hero{
        height: 100%;
        width: 100%;
        position: relative;
       
        margin-left: 20px;
        float: top;
        display: flex;
        right: 0;
        bottom: 0;
        margin-bottom: 80px;
        margin-left: 580px;
        opacity: 0.8;
       
    
    }
    .back-video{
       
        position: absolute;
        display: flex;
    
        z-index: -1;
        -moz-transform:scale(2.4) rotate(-90deg);
        -webkit-transform:scale(2.4) rotate(-90deg);
        -o-transform:scale(2.4) rotate(-90deg);
        -ms-transform:scale(2.4) rotate(-90deg);
        transform:scale(2.4) rotate(-90deg);
    }
    hii{
        float: top;
        
    }
    .temp{
       
        background-color: rgba(6, 2, 2, 0.61);
        color: #ffa600;;
        position: absolute;
        padding: 20px;
        top:0;
        left: 0;
        align-items: center;
        position: relative;
        z-index: 10;
        align-content: center;
        border-radius: 30px;
        float: top;
        

    
    }
    .text a{
        align-content: center;
        padding-left: 85px;
        height: 20px;
        widows: 20px;
    }
       
    
</style>    
</head>
<body bgcolor="black">
  <header>

   <div class="hero" >
     <div class="hii">
     <video loop autoplay play-inline class="back-video">
        <source  src="Doctorstrange.mp4" type="video/mp4" >
     </video>
     </div>
    
      <div class="temp">
        <div class="text">
            <h2 align="center">Thanks for ordering</h2>
            <h3 align="center">Visit again</h3>
            <a href="/cartlist">Exit</a>
        </div>
     </div>  
   </div> 
  </header>
</body>
</html>