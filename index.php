<?php
    include_once("./controllers/requireLogin.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

</head>

<body>
    <div id="slide-out" class="side-nav2 side">
        <ul class="custom-scrollbar">
          <!-- Logo -->
          <li>
            <div class="logo-wrapper waves-light">
              <a href="#"><img src="https://mdbootstrap.com/img/logo/mdb-transparent.png"
                  class="img-fluid flex-center"></a>
            </div>
          </li>
          <!--/. Logo -->
          <!--Social-->
          <li>
            <ul class="social">
              <li><a href="#" class="icons-sm fb-ic"><i class="fab fa-facebook-f"> </i></a></li>
              <li><a href="#" class="icons-sm pin-ic"><i class="fab fa-pinterest"> </i></a></li>
              <li><a href="#" class="icons-sm gplus-ic"><i class="fab fa-google-plus-g"> </i></a></li>
              <li><a href="#" class="icons-sm tw-ic"><i class="fab fa-twitter"> </i></a></li>
            </ul>
          </li>
          <!--/Social-->
          <!--Search Form-->
          <li>
            <form class="search-form" role="search">
              <div class="form-group md-form mt-0 pt-1 waves-light">
                <input type="text" class="form-control" placeholder="Search">
              </div>
            </form>
          </li>
          <!--/.Search Form-->
          <!-- Side navigation links -->
          <li>
            <ul class="collapsible collapsible-accordion">
              <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-chevron-right"></i> Submit
                  blog<i class="fas fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#" class="waves-effect">Submit listing</a>
                    </li>
                    <li><a href="#" class="waves-effect">Registration form</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-hand-pointer"></i>
                  Instruction<i class="fas fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#" class="waves-effect">For bloggers</a>
                    </li>
                    <li><a href="#" class="waves-effect">For authors</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a class="collapsible-header waves-effect arrow-r"><i class="fas fa-eye"></i> About<i
                    class="fas fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#" class="waves-effect">Introduction</a>
                    </li>
                    <li><a href="#" class="waves-effect">Monthly meetings</a>
                    </li>
                  </ul>
                </div>
              </li>
              <li><a class="collapsible-header waves-effect arrow-r"><i class="far fa-envelope"></i> Contact me<i
                    class="fas fa-angle-down rotate-icon"></i></a>
                <div class="collapsible-body">
                  <ul>
                    <li><a href="#" class="waves-effect">FAQ</a>
                    </li>
                    <li><a href="#" class="waves-effect">Write a message</a>
                    </li>
                    <li><a href="#" class="waves-effect">FAQ</a>
                    </li>
                    <li><a href="#" class="waves-effect">Write a message</a>
                    </li>
                    <li><a href="#" class="waves-effect">FAQ</a>
                    </li>
                    <li><a href="#" class="waves-effect">Write a message</a>
                    </li>
                    <li><a href="#" class="waves-effect">FAQ</a>
                    </li>
                    <li><a href="#" class="waves-effect">Write a message</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </li>
          <!--/. Side navigation links -->
        </ul>
        <div class="sidenav-bg rgba-blue-strong"></div>
      </div>
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
            Editable table
        </h3>
        <div class="card-body">
            <div id="table" class="table-editable">
                <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
                        <i
                            class="fas fa-plus fa-2x" aria-hidden="true"></i>
                      </button></a></span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <thead>
                        <tr>
                            <th class="text-center">Person Name</th>
                            <th class="text-center">Age</th>
                            <th class="text-center">Company Name</th>
                            <th class="text-center">Country</th>
                            <th class="text-center">City</th>
                            <th class="text-center">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="pt-3-half">Aurelia Vega</td>
                            <td class="pt-3-half">30</td>
                            <td class="pt-3-half">Deepends</td>
                            <td class="pt-3-half">Spain</td>
                            <td class="pt-3-half">Madrid</td>
                     
                            <td>
                                <span class="table-remove"><button type="button"
                                        class="btn btn-danger btn-rounded btn-sm my-0">
                                        Remove
                                    </button></span>
                            </td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half">Guerra Cortez</td>
                            <td class="pt-3-half">45</td>
                            <td class="pt-3-half">Insectus</td>
                            <td class="pt-3-half">USA</td>
                            <td class="pt-3-half">San Francisco</td>
                     
                            <td>
                                <span class="table-remove"><button type="button"
                                        class="btn btn-danger btn-rounded btn-sm my-0">
                                        Remove
                                    </button></span>
                            </td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr>
                            <td class="pt-3-half">Guadalupe House</td>
                            <td class="pt-3-half">26</td>
                            <td class="pt-3-half">Isotronic</td>
                            <td class="pt-3-half">Germany</td>
                            <td class="pt-3-half">Frankfurt am Main</td>
                     
                            <td>
                                <span class="table-remove"><button type="button"
                                        class="btn btn-danger btn-rounded btn-sm my-0">
                                        Remove
                                    </button></span>
                            </td>
                        </tr>
                        <!-- This is our clonable table line -->
                        <tr class="hide">
                            <td class="pt-3-half">Elisa Gallagher</td>
                            <td class="pt-3-half">31</td>
                            <td class="pt-3-half">Portica</td>
                            <td class="pt-3-half">United Kingdom</td>
                            <td class="pt-3-half">London</td>
 
                            <td>
                                <span class="table-remove"><button type="button"
                                    class="btn btn-primary btn-rounded btn-sm my-0">
                                    Edit
                                </button><button type="button"
                                        class="btn btn-danger btn-rounded btn-sm my-0">
                                        Remove
                                    </button></span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
                          aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                      </div>
                      
                      <label for="basic-url">Your vanity URL</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                      </div>
                      
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                          <span class="input-group-text">.00</span>
                        </div>
                      </div>
                      
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">With textarea</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Editable table -->
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>