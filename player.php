<?php

  class Player
  {

    const VERSION = 'Superstar poker php-player';

    public function bet($gamestate){

      //
      // $gamestate contains info about the state of the game.
      // check the documentation at https://bot-poker.herokuapp.com/wiki#gamestate for further info about the data structure.

      //
      // you just have to return the amount that you want to bet.



      // enjoy the game!



      //
      // currently we just fold every single hand.

      $tournamentId = $gamestate['tournamentId'];

      error_log("Currently playing tournament $tournamentId");

      return 0;

    }

  }
