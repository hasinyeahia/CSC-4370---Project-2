<?php header("Content-type: text/css; charset: UTF-8");?>


@charset "UTF-8";
/* Variables
-------------------------------------------------------------- */
/* Body and Notice styling
-------------------------------------------------------------- */
body {
  background-color: thistle;
  color: #b6b5ca;
  font-family: 'Arial', sans-serif;
  margin: 0;
  text-align: center;
}


#addplayer {
  float:left;
  padding:5px;
  border:dashed 1px gray
}

a {
  text-decoration:none;
  color:#6495ed
}

i {
  color:#6495ed
}

#leaderboard {
  float:left;
  padding:5px;
  border:dashed 1px gray
}

a {
  text-decoration:none;
  color:#6495ed
}

i {
  color:#6495ed
}

#logout {
  float:right;
  padding:5px;
  border:dashed 1px gray
}

a {
  text-decoration:none;
  color:#6495ed
}

i {
  color:#6495ed
}

/* Tic-tac-toe game
-------------------------------------------------------------- */
.tic-tac-toe {
  font-family: 'Open Sans', sans-serif;
  height: 300px;
  overflow: hidden;
  margin: 50px auto 30px auto;
  position: relative;
  width: 300px;
}
@media (min-width: 450px) {
  .tic-tac-toe {
    height: 450px;
    width: 450px;
  }
}
.tic-tac-toe input[type="radio"] {
  display: none;
}
.tic-tac-toe input[type="radio"]:checked + label {
  cursor: default;
  z-index: 10 !important;
}
.tic-tac-toe input[type="radio"].player-1 + label:after {
  content: "X";
}
.tic-tac-toe input[type="radio"].player-2 + label:after {
  content: "O";
}
.tic-tac-toe input[type="radio"].player-1:checked + label:after, .tic-tac-toe input[type="radio"].player-2:checked + label:after {
  opacity: 1;
}
.tic-tac-toe input[type="radio"].player-1:checked + label {
  background-color: #dc685a;
}
.tic-tac-toe input[type="radio"].player-2:checked + label {
  background-color: #ecaf4f;
}
.tic-tac-toe input[type="radio"].turn-1 + label {
  z-index: 1;
}
.tic-tac-toe input[type="radio"].turn-2 + label {
  z-index: 2;
}
.tic-tac-toe input[type="radio"].turn-3 + label {
  z-index: 3;
}
.tic-tac-toe input[type="radio"].turn-4 + label {
  z-index: 4;
}
.tic-tac-toe input[type="radio"].turn-5 + label {
  z-index: 5;
}
.tic-tac-toe input[type="radio"].turn-6 + label {
  z-index: 6;
}
.tic-tac-toe input[type="radio"].turn-7 + label {
  z-index: 7;
}
.tic-tac-toe input[type="radio"].turn-8 + label {
  z-index: 8;
}
.tic-tac-toe input[type="radio"].turn-9 + label {
  z-index: 9;
}
.tic-tac-toe input[type="radio"].turn-1 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-1:checked ~ .turn-2 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-2:checked ~ .turn-3 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-3:checked ~ .turn-4 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-4:checked ~ .turn-5 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-5:checked ~ .turn-6 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-6:checked ~ .turn-7 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-7:checked ~ .turn-8 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].turn-8:checked ~ .turn-9 + label {
  display: block;
}
.tic-tac-toe input[type="radio"].left + label {
  left: 0;
}
.tic-tac-toe input[type="radio"].top + label {
  top: 0;
}
.tic-tac-toe input[type="radio"].middle + label {
  left: 100px;
}
.tic-tac-toe input[type="radio"].right + label {
  left: 200px;
}
.tic-tac-toe input[type="radio"].center + label {
  top: 100px;
}
.tic-tac-toe input[type="radio"].bottom + label {
  top: 200px;
}
@media (min-width: 450px) {
  .tic-tac-toe input[type="radio"].middle + label {
    left: 150px;
  }
  .tic-tac-toe input[type="radio"].right + label {
    left: 300px;
  }
  .tic-tac-toe input[type="radio"].center + label {
    top: 150px;
  }
  .tic-tac-toe input[type="radio"].bottom + label {
    top: 300px;
  }
}
.tic-tac-toe input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~
input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~
input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~ .end {
  display: block;
}
.tic-tac-toe input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~
input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~
input[type="radio"]:checked ~ input[type="radio"]:checked ~ input[type="radio"]:checked ~ .end > h3:before {
  content: "It is a tie!";
}
.tic-tac-toe .player-1.first-column:checked ~ .player-1.first-column:checked ~ .player-1.first-column:checked ~ .end,
.tic-tac-toe .player-1.second-column:checked ~ .player-1.second-column:checked ~ .player-1.second-column:checked ~ .end,
.tic-tac-toe .player-1.third-column:checked ~ .player-1.third-column:checked ~ .player-1.third-column:checked ~ .end,
.tic-tac-toe .player-1.first-row:checked ~ .player-1.first-row:checked ~ .player-1.first-row:checked ~ .end,
.tic-tac-toe .player-1.second-row:checked ~ .player-1.second-row:checked ~ .player-1.second-row:checked ~ .end,
.tic-tac-toe .player-1.third-row:checked ~ .player-1.third-row:checked ~ .player-1.third-row:checked ~ .end,
.tic-tac-toe .player-1.first-diagonal:checked ~ .player-1.first-diagonal:checked ~ .player-1.first-diagonal:checked ~ .end,
.tic-tac-toe .player-1.second-diagonal:checked ~ .player-1.second-diagonal:checked ~ .player-1.second-diagonal:checked ~ .end {
  display: block;
}
.tic-tac-toe .player-1.first-column:checked ~ .player-1.first-column:checked ~ .player-1.first-column:checked ~ .end h3:before,
.tic-tac-toe .player-1.second-column:checked ~ .player-1.second-column:checked ~ .player-1.second-column:checked ~ .end h3:before,
.tic-tac-toe .player-1.third-column:checked ~ .player-1.third-column:checked ~ .player-1.third-column:checked ~ .end h3:before,
.tic-tac-toe .player-1.first-row:checked ~ .player-1.first-row:checked ~ .player-1.first-row:checked ~ .end h3:before,
.tic-tac-toe .player-1.second-row:checked ~ .player-1.second-row:checked ~ .player-1.second-row:checked ~ .end h3:before,
.tic-tac-toe .player-1.third-row:checked ~ .player-1.third-row:checked ~ .player-1.third-row:checked ~ .end h3:before,
.tic-tac-toe .player-1.first-diagonal:checked ~ .player-1.first-diagonal:checked ~ .player-1.first-diagonal:checked ~ .end h3:before,
.tic-tac-toe .player-1.second-diagonal:checked ~ .player-1.second-diagonal:checked ~ .player-1.second-diagonal:checked ~ .end h3:before {
  content: "Player 1 wins!" !important;
    <?=$one++?>;
}
.tic-tac-toe .player-2.first-column:checked ~ .player-2.first-column:checked ~ .player-2.first-column:checked ~ .end,
.tic-tac-toe .player-2.second-column:checked ~ .player-2.second-column:checked ~ .player-2.second-column:checked ~ .end,
.tic-tac-toe .player-2.third-column:checked ~ .player-2.third-column:checked ~ .player-2.third-column:checked ~ .end,
.tic-tac-toe .player-2.first-row:checked ~ .player-2.first-row:checked ~ .player-2.first-row:checked ~ .end,
.tic-tac-toe .player-2.second-row:checked ~ .player-2.second-row:checked ~ .player-2.second-row:checked ~ .end,
.tic-tac-toe .player-2.third-row:checked ~ .player-2.third-row:checked ~ .player-2.third-row:checked ~ .end,
.tic-tac-toe .player-2.first-diagonal:checked ~ .player-2.first-diagonal:checked ~ .player-2.first-diagonal:checked ~ .end,
.tic-tac-toe .player-2.second-diagonal:checked ~ .player-2.second-diagonal:checked ~ .player-2.second-diagonal:checked ~ .end {
  display: block;
}
.tic-tac-toe .player-2.first-column:checked ~ .player-2.first-column:checked ~ .player-2.first-column:checked ~ .end h3:before,
.tic-tac-toe .player-2.second-column:checked ~ .player-2.second-column:checked ~ .player-2.second-column:checked ~ .end h3:before,
.tic-tac-toe .player-2.third-column:checked ~ .player-2.third-column:checked ~ .player-2.third-column:checked ~ .end h3:before,
.tic-tac-toe .player-2.first-row:checked ~ .player-2.first-row:checked ~ .player-2.first-row:checked ~ .end h3:before,
.tic-tac-toe .player-2.second-row:checked ~ .player-2.second-row:checked ~ .player-2.second-row:checked ~ .end h3:before,
.tic-tac-toe .player-2.third-row:checked ~ .player-2.third-row:checked ~ .player-2.third-row:checked ~ .end h3:before,
.tic-tac-toe .player-2.first-diagonal:checked ~ .player-2.first-diagonal:checked ~ .player-2.first-diagonal:checked ~ .end h3:before,
.tic-tac-toe .player-2.second-diagonal:checked ~ .player-2.second-diagonal:checked ~ .player-2.second-diagonal:checked ~ .end h3:before {
  content: "Player 2 wins!" !important;
    <?=$two++?>;
}
.tic-tac-toe label {
  background-color: #78bec5;
  border-radius: 14px;
  cursor: pointer;
  color: #fff;
  display: none;
  height: 90px;
  margin: 5px;
  position: absolute;
  width: 90px;
  -moz-transition: background-color 0.3s;
  -o-transition: background-color 0.3s;
  -webkit-transition: background-color 0.3s;
  transition: background-color 0.3s;
}
@media (min-width: 450px) {
  .tic-tac-toe label {
    height: 140px;
    width: 140px;
  }
}
.tic-tac-toe label:hover {
  background-color: #3d4250;
}
.tic-tac-toe label:hover:after {
  opacity: .4;
}
.tic-tac-toe label:after {
  left: 0;
  font-family: "FontAwesome";
  font-size: 45px;
  margin-top: -22.5px;
  opacity: 0;
  position: absolute;
  text-align: center;
  text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
  top: 50%;
  width: 100%;
}
@media (min-width: 450px) {
  .tic-tac-toe label:after {
    font-size: 70px;
    margin-top: -35px;
  }
}
.tic-tac-toe .end {
  background: rgba(255, 255, 255, 0.8);
  bottom: 5px;
  color: #3d4250;
  display: none;
  left: 5px;
  padding-top: 55px;
  position: absolute;
  right: 5px;
  top: 5px;
  text-align: center;
  z-index: 11;
}
@media (min-width: 450px) {
  .tic-tac-toe .end {
    padding-top: 110px;
  }
}
.tic-tac-toe .end h3 {
  font-size: 30px;
  font-weight: 300;
}
@media (min-width: 450px) {
  .tic-tac-toe .end h3 {
    font-size: 40px;
  }
}
.tic-tac-toe .end a {
  background-color: #3d4250;
  border-radius: 4px;
  color: #fff;
  padding: 14px 45px;
  text-decoration: none;
  -moz-transition: background-color 0.2s;
  -o-transition: background-color 0.2s;
  -webkit-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.tic-tac-toe .end a:hover {
  background-color: #262934;
  cursor: pointer;
}


<?php

require_once('connect.php');

$query = "UPDATE playersss SET score = '$one' WHERE first_name = 'kevin';";
$queryy = "UPDATE playersss SET score = '$two' WHERE first_name = 'lebron';";

$stmt = mysqli_prepare($dbc, $query);
/*mysqli_stmt_bind_param($stmt, "ii", $rank, $score);*/
mysqli_stmt_execute($stmt);
$stmt = mysqli_prepare($dbc, $queryy);
mysqli_stmt_execute($stmt);


/*$affected_rows = mysqli_stmt_affected_rows($stmt);
    if($affected_rows == 1){
        echo 'Score Recorded';
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
    } else {
        echo 'Error Occurred<br />';
        echo mysqli_error();
        mysqli_stmt_close($stmt);
        mysqli_close($dbc);
        }*/
?>



