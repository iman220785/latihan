<!DOCTYPE html>
        <html>
          <head>
            <title>Bootstrap Example</title>
            <!-- Include meta tag to ensure proper rendering and touch zooming -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- Include bootstrap stylesheets -->
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
          </head>

          <body>
            <div class="container">
              <h2>Table</h2>
              <p>Create a responsive table (will scroll horizontally on small devices under 768px). In addition: add alternating cell background color:</p>      
              <div class="table-responsive">          
               <table class="table table-striped table-bordered">
                 <thead>
                   <tr>
                     <th>#</th>
                     <th>Name</th>
                     <th>Street</th>
                   </tr>
                 </thead>
                 <tbody>
                   <tr>
                     <td>1</td>
                     <td>Anna Awesome</td>
                     <td>Broome Street</td>
                   </tr>
                   <tr>
                     <td>2</td>
                     <td>Debbie Dallas</td>
                     <td>Houston Street</td>
                   </tr>
                   <tr>
                     <td>3</td>
                     <td>John Doe</td>
                     <td>Madison Street</td>
                   </tr>
                 </tbody>
               </table>
              </div>

              <h2>Image</h2>
              <p>Create a responsive image (will scale to the parent element). In addition: shape the image to a circle:</p>            
              <img src="cinqueterre.jpg" class="img-responsive img-circle" alt="Cinque Terre" width="304" height="236"> 
              
              <h2>Glyphicons</h2>
              <p>Insert icons:</p>      
              <p>Cloud icon: <span class="glyphicon glyphicon-cloud"></span></p>      
              <p>Envelope icon: <span class="glyphicon glyphicon-envelope"></span></p>            
              <p>Search icon: <span class="glyphicon glyphicon-search"></span></p>
              <p>Print icon: <span class="glyphicon glyphicon-print"></span></p>      
              <p>Download icon: <span class="glyphicon glyphicon-download"></span></p>      
            </div>

            <!-- JavaScript placed at the end of the document so the pages load faster -->
            <!-- Optional: Include the jQuery library -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <!-- Optional: Incorporate the Bootstrap JavaScript plugins -->
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
          </body>

        </html>