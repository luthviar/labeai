<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>LAB dan TUGAS EAI</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">LAB EAI</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container text-center">        
          <p>Ini Merupakan fitur kalkulator dengan fungsi Add dan Substract.</p>
        </div>
      </div>

      <div class="">
        <script type="text/javascript">
          // function showAddSatu(angka1) {
          //     if (angka1.length == 0) { 
          //         document.getElementById("txtHint").innerHTML = "";
          //         return;
          //     } else {
          //         var xmlhttp = new XMLHttpRequest();
          //         xmlhttp.onreadystatechange = function() {
          //             if (this.readyState == 4 && this.status == 200) {
          //                 document.getElementById("txtHint").innerHTML = this.responseText;
          //             }
          //         }
          //         xmlhttp.open("GET", "client_add.php?q1="+angka1, true);
          //         xmlhttp.send();
          //     }
          // }

          // function showAddDua(angka2) {
          //     if (angka2.length == 0) { 
          //         document.getElementById("txtHint").innerHTML = "";
          //         return;
          //     } else {
          //         var xmlhttp = new XMLHttpRequest();
          //         xmlhttp.onreadystatechange = function() {
          //             if (this.readyState == 4 && this.status == 200) {
          //                 document.getElementById("txtHint").innerHTML = this.responseText;
          //             }
          //         }
          //         xmlhttp.open("GET", "client_add.php?q="+angka2, true);
          //         xmlhttp.send();
          //     }
          // }
        </script>

      
      <div class="container">
         <!-- Example row of columns -->
         <div class="row" id="next_row">
            <div class="col-md-2"></div>
            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Fungsi Add</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                     <div class="card-text">
                        <form action="client_add.php" id="ajaxadd" method="POST">
                           <div class="input-group input-group-lg">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroup-sizing-lg">Input angka pertama</span>
                              </div>
                              <input type="text" name="angka1" placeholder="masukkan angka ke-1" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                           </div>
                           <h1 class="text-center">+</h1>
                           <div class="input-group input-group-lg">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroup-sizing-lg">Input angka kedua</span>
                              </div>
                              <input type="text" name="angka2" placeholder="masukkan angka ke-2" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                           </div>
                           <h1 class="text-center">=</h1>
                           <div class="input-group input-group-lg">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroup-sizing-lg">Hasil Add</span>
                              </div>
                              <!-- <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" disabled="true" placeholder="hasil add" id="hasilAdd" value=""> -->

                           </div>
                           <br/>
                           <br/>
                           <div class="input-group input-group-lg">
                              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit - Add">
                           </div>
                        </form>
                        <p id="hasilAdd"></p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Fungsi Substract</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                     <div class="card-text">
                        <div class="input-group input-group-lg">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-lg">Input angka pertama</span>
                           </div>
                           <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <h1 class="text-center">-</h1>
                        <div class="input-group input-group-lg">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-lg">Input angka kedua</span>
                           </div>
                           <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                        </div>
                        <h1 class="text-center">=</h1>
                        <div class="input-group input-group-lg">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroup-sizing-lg">Hasil Add</span>
                           </div>
                           <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm" disabled="true" value="10">
                        </div>
                     </div>
                     <br/>
                     <br/>
                     <div class="input-group input-group-lg">
                        <button type="button" class="btn btn-primary btn-lg btn-block">Submit - Substract</button>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-md-2"></div>
         </div>
         <hr>
      </div> <!-- /container -->

      </div>

    </main>

    <footer class="container">
      <p>&copy; Kelompok 1 EAI 2018</p>
    </footer>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
      
      // $(document).ready(function() {
      //   $('#ajaxadd').submit(function(e){

      //     $.ajax({
      //         type: "POST",
      //         url: "client_add.php",
      //         data: $("#ajaxadd").serialize(),
      //         success: function(data) {
      //             alert(data);
      //         }
      //     })

      //     e.preventDefault();
      //   })
          
      // })

       $(function () {

        $('#ajaxadd').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'client_add.php',
            data: $('#ajaxadd').serialize(),
            success: function (data) {
              console.log(data);
              document.getElementById("hasilAdd").innerHTML = data;
            }
          });

        });

      });

    </script>
    <script type="text/javascript" src="js/main.js"></script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>