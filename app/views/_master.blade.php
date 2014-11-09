

<!DOCTYPE html>

<html>

   <body>
          <head> 
               @yield ('title')

                 <title>P3 - Developer's Best Friend</title>
	               <meta charset="UTF-8">
	                 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
                     <link rel='stylesheet' href='{{ asset('css/p3.css') }}'type = 'text/css'>

          </head>

                    <div id= "top">
                    <div class="main">
               
               
               @yield ('image')
                 
              
                  </div>
  

                   <div class ="topbanner">
               
                     @yield('active')
              
                   </div>
                
                 @yield ('content')
               
           
               
