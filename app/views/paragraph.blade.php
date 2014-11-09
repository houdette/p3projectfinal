paragraph.blade.php

@extends ('_master')

        @section ('image')

                <div class="heather">
                
                <img id="image" src="{{ asset('images/generator.jpeg')}}" alt="Generator" />
                
                </div>
        @stop
                
                
                 @section ('active')
                 
                <div class = "active"
                 
                 <h4><a href="/" target="_blank">Home</a> | <a href="/user-generator" target="_blank">User Generator</a> </h4>
               
                </div>
                
                 @stop 
                 
                    
                              
                
      @section ('content')

          <div class = "body">
 
             <h4> Lorem Ipsum </h4>
  
          <form action = "{{url('/paragraph-generator')}}" method = "post">
       
 
            <fieldset>
    
                 <label for="paragraphLength"><b>Enter the Number of Paragraphs you wish to generate: </b><br></label>
         
		     <p>Paragraphs: <input class="text" type="number" min="1" max="99" value="2" name="paraNum" /> Between 1 and 99</p>
		 
		 
		         <input type="submit" id="loremlength"value="Generate Text"><br></br>
		  
		  		 
		  </fieldset>

    
         <fieldset>

       
              <legend> Random text below:</legend>
           
               
                <p id="randomlorem"><?=$randlorem?></p> 
 
         </fieldset>

    
         </div>
    
      @stop
