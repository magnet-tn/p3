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
    public function generateUsers(Request $request) {

        # Validating user input
        $this->validate($request,[
            'userQty' => 'required|integer|min:1|max:200'
        ]);
        $userQty = $request->input('userQty');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $dob = $request->input('dob');
        $username = $request->input('username');
        $password = $request->input('password');

        $count = 0;
        for ($j = 0; $j < 220; $j++){
            $fieldFlag = false;
            $gen = new \RandomUser\Generator();
            $users = $gen->getUser();
            if($count==$userQty){
                break;
            } else {
                //filter for roman alphabet
                if(ctype_alpha ( $users->getFirstName() )){
                    $fullName = $users->getFirstName(). ' ';
                    $fullName.= $users->getLastName();
                    $fullName = title_case($fullName);
                    $count++;
                } else{
                    continue;
                }
                echo $fullName . '<br>';
                // need to check for flags of what user info is sought
                // if (genderFlag){ setGender; } .....
                if ($address) {
                    echo $users->getStreetAddress(). ' / ' .$users->getCity(). ' / ' .$users->getState(). ' / ' .$users->getZip() . '<br>';
                }
                if ($gender) {
                    echo $users->getGender();
                    $fieldFlag = true;
                }
                if ($dob) {
                    if ($fieldFlag) { echo ', ';}
                    echo substr($users->getDateOfBirth(), 0, 10); //need to format this
                    $fieldFlag = true;
                    }
                if ($username) {
                    if ($fieldFlag) { echo ', ';}
                    echo $users->getUsername();
                    $fieldFlag = true;
                }
                if ($password) {
                    if ($fieldFlag) { echo ', ';}
                    echo $users->getSalt();
                    $fieldFlag = true;
                }
                echo '<br><br> ';
                //add lorem ipsum bio sentence about user
            }
        }
    }
    /**
     *  This was a test function to verify the RandomUsers elements Disabled for final
     */
    // public function testUsers() {
    //     $numberOfUsers = 7;
    //     $count = 0;
    //     for ($j = 0; $j < 10; $j++){
    //         $gen = new \RandomUser\Generator();
    //         $user = $gen->getUser();
    //         if($count==$numberOfUsers){
    //             break;
    //         } else {
    //             if(ctype_alpha ( $user->getFirstName() )){
    //                 echo $user->getFirstName(). ' ';
    //                 $count++;
    //             } else{
    //                 continue;
    //             }
    //             echo $user->getLastName() . ', ';
    //             // need to check for flags of what user info is sought
    //             //if (genderFlag){ setGender; } .....
    //             echo $user->getGender() . ', ';
    //             echo $user->getDateOfBirth() . '<br>'; //need to format this
    //             echo $user->getUsername() . ', ';
    //             echo $user->getPhone() . ', ';
    //             echo $user->getRegistered() . ', ';
    //             echo $user->getSalt() . '<br><br>';
    //
    //             //add lorem ipsum bio sentence about user
    //         }
    //     }
    // }

}
