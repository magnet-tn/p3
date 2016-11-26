<?php

namespace DevelopersBF\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *
     */
    public function create($users = null) {
        //return 'user form goes here';
        return view('user.create')->with('users', $users);
    }
    /**
    *
    */
    public function testUsers() {
        $numberOfUsers = 7;
        $count = 0;
        for ($j = 0; $j < 10; $j++){
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
                echo $user->getDateOfBirth() . '<br>'; //need to format this
                echo $user->getUsername() . ', ';
                echo $user->getPhone() . ', ';
                echo $user->getRegistered() . ', ';
                echo $user->getSalt() . '<br><br>';

                //add lorem ipsum bio sentence about user
            }
        }
    }
    public function generateUsers(Request $request) {

        # Validating user input
        $this->validate($request,[
            'userQty' => 'required|integer|min:1|max:200'
        ]);
        $userQty = $request->input('userQty');
        $count = 0;
        for ($j = 0; $j < 220; $j++){
            $gen = new \RandomUser\Generator();
            $users = $gen->getUser();
            if($count==$userQty){
                break;
            } else {
                //filter for non-english alphabet
                if(ctype_alpha ( $users->getFirstName() )){
                    echo $users->getFirstName(). ' ';
                    $count++;
                } else{
                    continue;
                }
                echo $users->getLastName() . ', ';
                // need to check for flags of what user info is sought
                //if (genderFlag){ setGender; } .....
                echo $users->getGender() . ', ';
                echo $users->getDateOfBirth() . ', '; //need to format this
                echo $users->getUsername() . ', ';
                echo $users->getSalt() . '<br>';

                //add lorem ipsum bio sentence about user
            }
        }
    }


}
