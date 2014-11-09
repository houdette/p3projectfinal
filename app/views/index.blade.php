
@extends ('_master')

  @section ('image')
  
                <div class="heather">
                
                <img id="image" src="{{ asset('images/generator.jpeg')}}" alt="Generator" />
                
                </div>
                
  @stop


      @section ('active')
     
                <div class = "active"
                 
                 <h4><a href="/" target="_blank">Home</a> | <a href="/paragraph-generator" target="_blank">Lorem Generator</a> |
                
                <a href="/user-generator" target="_blank">User Generator</a> </h4> </div>
                
                
      @stop
      
      
      
             @section ('content')
          
          <div class = "body">

             <h4> Lorem Ipsum </h4> <br>
           
                <p> Lorem Ipsum is simply dummy text used in the Web Development industry as a filler text. Below is a Lorum Ipsum example to give you an idea: <br>
                "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."<br>
                
                 Generate your Own here:<a href="/paragraph-generator"> Here.</a></p> <br>
           
 
             <h4> User Generator </h4> <br>
           
               <p> User Generation is a free tool that generates Fake user information, with options to include their birthday and address information. Below, is a fake user information: <br> Elias Crona III
58881 Keshawn Branch Owenborough, UT 04561
1997-03-27 22:33 <br>

               
                Generate your Own users: <a href="/user-generator"> Here.</a></p>
                                                 
          
          </div>
  

            @stop