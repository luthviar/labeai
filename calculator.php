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
    <style type="text/css">
      .navbar-header {
          float: left;
          padding: 15px;
          text-align: center;
          width: 100%;
      }
      .navbar-brand {float:none;}

    </style>
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark navbar-default">
      <a class="navbar-brand" href="/">LAB EAI</a>
    </nav>

    <main role="main">
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
                     <h6 class="card-subtitle mb-2 text-muted">Kalkulator untuk menambahkan 2 angka</h6>
                     <div class="card-text">
                        <form action="client_add.php" id="ajaxadd" method="POST">
                           <div class="input-group input-group-lg">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroup-sizing-lg">Input angka pertama</span>
                              </div>
                              <input type="text" name="angka1" placeholder="1st" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                           </div>
                           <h1 class="text-center">+</h1>
                           <div class="input-group input-group-lg">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroup-sizing-lg">Input angka kedua</span>
                              </div>
                              <input type="text" name="angka2" placeholder="2nd" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                           </div>
                           <h1 class="text-center">=</h1>
                           <div class="input-group input-group-lg">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroup-sizing-lg">Hasil Add :</span>
                                 <h1 id="hasilAdd"></h1>
                              </div>
                           </div>

                           <br/>
                           <br/>
                           <div class="input-group input-group-lg">
                              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit - Add">
                           </div>
                        </form>
                        
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-4">
               <div class="card">
                  <div class="card-body">
                     <h5 class="card-title">Fungsi Subtract</h5>
                     <h6 class="card-subtitle mb-2 text-muted">Kalkulator untuk mengurangkan 2 angka</h6>
                     <div class="card-text">
                        <form action="client_subtract.php" id="ajaxsubtract" method="POST">
                           <div class="input-group input-group-lg">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroup-sizing-lg">Input angka pertama</span>
                              </div>
                              <input type="text" name="angka1" placeholder="1st" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                           </div>
                           <h1 class="text-center">+</h1>
                           <div class="input-group input-group-lg">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroup-sizing-lg">Input angka kedua</span>
                              </div>
                              <input type="text" name="angka2" placeholder="2nd" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                           </div>
                           <h1 class="text-center">=</h1>
                           <div class="input-group input-group-lg">
                              <div class="input-group-prepend">
                                 <span class="input-group-text" id="inputGroup-sizing-lg">Hasil Subtract :</span>
                                 <h1 id="hasilSubtract"></h1>
                              </div>
                           </div>

                           <br/>
                           <br/>
                           <div class="input-group input-group-lg">
                              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit - Subtract">
                           </div>
                        </form>
                        
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
      <p class="text-center">&copy; Kelompok 1 EAI 2018</p>
    </footer>

    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
      
      $(function () {

        $('#ajaxsubtract').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'client_subtract.php',
            data: $('#ajaxsubtract').serialize(),
            success: function (data) {
              console.log(data);
              document.getElementById("hasilSubtract").innerHTML = data;
            }
          });

        });

      });


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