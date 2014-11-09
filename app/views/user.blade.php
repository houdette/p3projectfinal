
@extends ('_master')

       @section ('image')

           <div class="heather">
                
                <img id="image" src="{{ asset('images/generator.jpeg')}}" alt="Generator" />
                
           </div>
      
       @stop
                
                
                 @section ('active')
                 
           <div class = "active">
                
                <h4><a href="/" target="_blank">Home</a> | <a href="/paragraph-generator" target="_blank">Lorem Generator</a> </h4>
               
           </div>
                
                 @stop 
                 
                 
                 
          @section ('content')

           <div class = "body">

                <h4> User Generator </h4>
  
         
    
                        {{Form::open(array('url'=>'/user-generator','method'=>'post'))}}
         
         <div class= "form-group>"
             
             <label for="form-group"><b>Enter the Number of Users you wish to generate: </b><br></label>
      
                 <p> Users <input class="form-control" id="userlength" type="number" min="1" max="10" value="1" name="userlength" placeholder="<?php echo      isset($_POST["userlenght"])? $_POST["userlenght"] : "" ?> "/> between 1 and 10</p> <br>
		 
       
            <div class="form-group">
        
       
            <label for="">include birthday?</label>
      
                <input type="checkbox" class="form-control" id="includebirthday" name="includebirthday" placeholder="<?php echo isset($_POST["includebirthday"])? "checked=\"checked\"" : "" ?>">
    
                
            <label for="">include address?</label>
      
                  <input type="checkbox" class="form-control" id="includeaddress" name="includeaddress" placeholder="<?php echo isset($_POST["includeaddress"])? "checked=\"checked\""  : "" ?>">
       
    
            
      
               <input type="submit" class="form-control" value="Generate" id = "button">
    
     
            </div>

                   {{Form::close()}}
                               
    
    
    <div id="result" class="block">

 
  
         <legend> Random users below:</legend>
               
               
                   <?php
                   
                      foreach ($results as $user)
                      {
                      foreach ($user as $value)
                      {
                         echo $value;
                         echo "<br>";
                      }
                         echo "<br>";
                      }

                        ?>       	
		  
   </div>
    
    @stop
              
               