<html lang="zh-TW">
    <head>
        <title>Database Project</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatiable" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/index.css">
    </head>

    <body>
    <form>
            Salary: <input type = "text" name = "Salary">
                        <br/>
            Nationality: <input type = "text" name = "Nationality">
                        <br/>
            Name: <input type = "text" name = "Name">
                        <br/>
            M_SSID: <input type = "text" name = "M_SSID">
                        <br/>
    </form>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            
            <a class="navbar-brand" href="../index.php"><img src="../img/db.png" class="logo">Esports Database</a>
           
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                       Team
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./team.php">List</a>
                        <a class="dropdown-item" href="./Manager.php">Manager</a>
                        <a class="dropdown-item" href="./playerlist.php">Player</a>
                        <a class="dropdown-item" href="./Sponsor.php">Sponsor</a>
                        <a class="dropdown-item" href="./coach.php">coach</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                        Esports
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="./competition.php">Competition</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                    Game
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="./Game.php">List</a>
                    <a class="dropdown-item" href="./producer.php">Producer</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                      Relation
                    </a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="./Has_joined.php">Has Joined</a>
                    </div>
                  </li>
              </ul>
          
                       
            
        </nav>
        <table class="tableform" align="center" >
            <th>M_SSID</th>
            <th>Name</th>
            <th>Salary</th>
            <th>Nationality</th>
        <tr>
            <td >001</td>
            <td>Honoka</td>
            <td>320000</td>
            <td>JP</td>
        </tr>
        <tr>
            <td >002</td>
            <td>umi</td>
            <td>310002</td>
            <td>TW</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
         </tr>
    </table><br>
    <div align=center>
        <a class="btn" href="#">1</a>
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>