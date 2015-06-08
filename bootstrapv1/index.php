
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Phone Contacts</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/sb-admin.css">

    <!-- jQuery UI - Mobile -->
    <link rel="stylesheet" href="css/jquery-ui.css">
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/jquery.ui.touch-punch.min.js"></script>

    <!-- Custom styles for this template -->
    <style>
      body {
        background: white;
        min-height: 2000px;
        padding-top: 70px;
      }
      .prophoto{
        width: auto;
        height: 200px;
        border-radius: 10px;
      }
      .huge {
          font-size: 25px;
          line-height: normal;
      }

      .titlebar{
        font-size: 50px;
      }
      .connectedSortable{
        padding-top: 10px;
        min-height: 100px;
      }
    </style>

  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/">Default</a></li>
            <li><a href="../navbar-static-top/">Static top</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Contacts</h1>
      </div>

      <div class="titlebar" style="background-color:green">Station 20</div>
      <div class="row connectedSortable" id="sortable1" style="background-color:green">
      </div>

      <div class="titlebar" style="background-color:red">Station 21</div>
      <div class="row connectedSortable" id="sortable2" style="background-color:red">
          <div class="col-lg-4 col-md-6">
              <div class="panel panel-primary">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-3" >
                            <img src="me.jpg" class="prophoto">
                          </div>
                          <div class="col-xs-9 text-right">
                              <div class="huge">Kris Occhipinti</div>
                              <div>Fire Fighter</div>
                          </div>
                      </div>
                  </div>
                  <a href="#">
                      <div class="panel-footer">
                          <span class="pull-left">View Details</span>
                          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                          <div class="clearfix"></div>
                      </div>
                  </a>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="panel panel-green">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-3">
                            <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcScs608G5eMUvWkk9KowlMI56Fn5JYRSWifBqfKTkNcEjD4lhh_Uw" class="prophoto">
                          </div>
                          <div class="col-xs-9 text-right">
                              <div class="huge">12</div>
                              <div>New Tasks!</div>
                          </div>
                      </div>
                  </div>
                  <a href="#">
                      <div class="panel-footer">
                          <span class="pull-left">View Details</span>
                          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                          <div class="clearfix"></div>
                      </div>
                  </a>
              </div>
          </div>
      </div>

      <div class="titlebar" style="background-color:blue">Station 22</div>
      <div class="row connectedSortable" id="sortable3" style="background-color:blue">
          <div class="col-lg-4 col-md-6">
            <a href="#">
              <div class="panel panel-yellow">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-3">
                            <img src="http://static1.squarespace.com/static/5092bcb8e4b05d6afda0fbdf/5092dbc1e4b05d6afda1572a/519a4181e4b0be74de0ccb1c/1369064447976/firefighter_profile_002.jpg" class="prophoto">
                          </div>
                          <div class="col-xs-9 text-right">
                              <div class="huge">124</div>
                              <div>New Orders!</div>
                          </div>
                      </div>
                  </div>
                      <div class="panel-footer">
                          <span class="pull-left">View Details</span>
                          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                          <div class="clearfix"></div>
                      </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="panel panel-red">
                  <div class="panel-heading">
                      <div class="row">
                          <div class="col-xs-3 photodiv">
                            <img src="http://cmsimg.statesmanjournal.com/apps/pbcsi.dll/bilde?Site=J0&Date=20110123&Category=NEWS&ArtNo=101230321&Ref=AR&MaxW=640&Border=0&Sunday-Profile-Chuck-Ettel" class="prophoto">
                          </div>
                          <div class="col-xs-9 text-right">
                              <div class="huge">13</div>
                              <div>Support Tickets!</div>
                          </div>
                      </div>
                  </div>
                  <a href="#">
                      <div class="panel-footer">
                          <span class="pull-left">View Details</span>
                          <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                          <div class="clearfix"></div>
                      </div>
                  </a>
              </div>
          </div>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <script>
      var xx;
      $(document).ready(function(){

        $.getJSON( "list.php", function( data ) {
          for(var i=0;i<data.length;i++){
            if(data[i].rank == "fire fighter"){
              var color="red";
            }else if(data[i].rank == "driver"){
              var color="green";
            }else if(data[i].rank == "lieutenant"){
              var color="yellow";
            }else{
              var color="blue";
            }

            var html = '<div class="col-lg-4 col-md-6">' + 
              '<a href="#">' + 
              '<div class="panel panel-'+color+'">' + 
              '<div class="panel-heading">' + 
              '<div class="row">' + 
              '<div class="col-xs-3">' + 
              '<img src="'+data[i].image+'" class="prophoto">' + 
              '</div>' + 
              '<div class="col-xs-9 text-right">' + 
              '<div class="huge">'+data[i].name+'</div>' + 
              '<div>'+data[i].rank+'</div>' + 
              '</div>' + 
              '</div>' + 
              '</div>' + 
              '<div class="panel-footer">' + 
              '<span class="pull-left">View Details</span>' + 
              '<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>' + 
              '<div class="clearfix"></div>' + 
              '</div>' + 
              '</div>' + 
              '</a>' + 
              '</div>';
            $("#sortable1").append(html);
            console.log(data[i].rank);
          };
        });

      $( "#sortable1, #sortable2, #sortable3" ).sortable({
        connectWith: ".connectedSortable"
      }).disableSelection();

    });

    </script>

  </body>
</html>

