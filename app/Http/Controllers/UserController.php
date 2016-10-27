<?php

namespace DevelopersBF\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *
     */
    public function create()
    {
        //return 'user form goes here';
            return view('user.create'); //->with(['text', $text]);
            //return 'lorem ipsum form goes here';
    }//
    /**
    *
    */
    public function generateUsers() {
        $numberOfUsers = 5;
        $count = 0;
        for ($j = 0; $j < 8; $j++){
            $gen = new \RandomUser\Generator();
            $user = $gen->getUser();
            if($count==$numberOfUsers){
                break;
            } else {
                if(ctype_alpha ( $user->getFirstName() )){
                    echo $user->getFirstName(). ' ';
                    $count++;
                } else{
                    continue;
                }
                echo $user->getLastName() . ', ';
                // need to check for flags of what user info is sought
                //if (genderFlag){ setGender; } .....
                echo $user->getGender() . ', ';
                echo $user->getDateOfBirth() . ', '; //need to format this
                echo $user->getUsername() . ', ';
                echo $user->getSalt() . '<br>';

                //add lorem ipsum bio sentence about user
            }
        }
    }


}
