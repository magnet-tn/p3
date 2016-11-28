<?php
/**
 * Insert Test
 */

namespace DevelopersBF\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     *
     */
    public function create($users = []) {
        //return 'user form goes here';
        return view('user.create')->with('users', $users);
    }
    /**
    *
    */
    public function generateUsers(Request $request) {

        # Validating user input
        $this->validate($request,[
            'userQty' => 'required|integer|min:1|max:100'
        ]);
        $userQty = $request->input('userQty');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $dob = $request->input('dob');
        $username = $request->input('username');
        $password = $request->input('password');

        $gen = new \RandomUser\Generator();
        $rndUsers = $gen->getUsers(($userQty+20));

        $users = array();
        $count = 0;

        for ($j = 0; $j < 120; $j++){  //loops up to 120 to allow for filtering out non-roman alphabet users.

            if($count==$userQty){
                break;
            } else {
                //filter for roman alphabet
                if(ctype_alpha ( $rndUsers[$j]->getFirstName() )){
                    $fullName = $rndUsers[$j]->getFirstName(). ' ';
                    $fullName.= $rndUsers[$j]->getLastName();
                    $fullName = title_case($fullName);
                    $users[$count]['name'] = $fullName;
                    if ($address) {
                        $users[$count]['address'] = title_case( $rndUsers[$j]->getStreetAddress(). ' / ' .$rndUsers[$j]->getCity(). ' / ' .$rndUsers[$j]->getState(). ' / ' .$rndUsers[$j]->getZip() );
                    }
                    if ($gender) {
                        $users[$count]['gender'] = $rndUsers[$j]->getGender();
                    }
                    if ($dob) {
                        $users[$count]['dob'] = substr($rndUsers[$j]->getDateOfBirth(), 0, 10);
                    }
                    if ($username) {
                        $users[$count]['username'] = $rndUsers[$j]->getUsername();
                    }
                    if ($password) {
                        $users[$count]['password'] = $rndUsers[$j]->getSalt();
                    }

                    $users[$count]['break'] = '&nbsp;';
                    $count++;

                } else{
                    continue;
                }
            }
        }

        return view('user.create',[
            'users' => $users,
        ]);
    }
    // /**
    //  *  This was a test function to verify the RandomUsers elements Disabled for final
    //  */
    // public function testUsers1() {
    //     $numberOfUsers = 7;
    //     $count = 0;
    //     $gen = new \RandomUser\Generator();
    //     $users = $gen->getUsers(($numberOfUsers+10));
    //     dump($users);
    //     for ($j = 0; $j < 120; $j++){
    //         if($count==$numberOfUsers){
    //             break;
    //         } else {
    //             if(ctype_alpha ( $users[$j]->getFirstName() )){
    //                 echo $users[$j]->getFirstName(). ' ';
    //                 $count++;
    //             } else{
    //                 continue;
    //             }
    //             echo $users[$j]->getLastName() . ', ';
    //             // need to check for flags of what user info is sought
    //             //if (genderFlag){ setGender; } .....
    //             echo $users[$j]->getGender() . ', ';
    //             echo $users[$j]->getDateOfBirth() . '<br>'; //need to format this
    //             echo $users[$j]->getUsername() . ', ';
    //             echo $users[$j]->getPhone() . ', ';
    //             echo $users[$j]->getRegistered() . ', ';
    //             echo $users[$j]->getSalt() . '<br><br>';
    //
    //             //add lorem ipsum bio sentence about user
    //         }
    //     }
    // }
    // /**
    //  *  This was a test function to verify the RandomUsers elements Disabled for final
    //  */
    // public function testUsers2() {
    //     $numberOfUsers = 7;
    //     $count = 0;
    //     $gen = new \RandomUser\Generator();
    //     $foousers = $gen->getUsers(($numberOfUsers+10));
    //     foreach($foousers as $foouser) {
    //         $barusers[] = $foouser->getUsername();
    //         $barusers[] = $foouser->getCell();
    //         $barusers[] = '<br>';
    //     }
    //     var_dump($barusers);
    //     dump($barusers[6]);
    //     $users = array();
    //     dump($users);
    // }


}
