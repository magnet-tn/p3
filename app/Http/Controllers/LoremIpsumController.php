<?php

namespace DevelopersBF\Http\Controllers;

use Illuminate\Http\Request;
use \joshtronic;

class LoremIpsumController extends Controller
{
    /**
     *
     *
 	*/
    public function create() {
        return view('lorem.create'); //->with(['text', $text]);
        //return 'lorem ipsum form goes here';
    }
    /**
    *
    */
    public function generateLorem(Request $request)
    {

        # Validate the request....
        $this->validate($request,[
            'unitQty' => 'required|integer|min:1|max:20'
        ]);
        $unitQty = $request->input('unitQty');
        $unitType = $request->input('unitType');

        # Generate the lorem ipsum text
        $lorem = new joshtronic\LoremIpsum();

        if($unitType=='paragraph') {
            $text = $lorem->paragraphs($unitQty,'p');
            echo $unitQty.' paragraphs: ' .$text;
        }
        if($unitType=='sentence') {
            $text = $lorem->sentences($unitQty,'p');
            echo $unitQty.' sentences: ' .$text;
        }
        if($unitType=='word') {
            $text = $lorem->words($unitQty,'p');
            echo $unitQty.' words: ' .$text;
        }

        //
        //  # Display the results...
        return view('lorem.create')->with(['text', $text]);

    }
    /**
    * To be disabled when completed. Inserted to test joshtronic Lorem Ipsum package
    */
    // public function testLorem($qty,$type)
    // {
    //
    //     # Generate the lorem ipsum text
    //     $howManyUnits = $qty;
    //     $lorem = new joshtronic\LoremIpsum();
    //     if($type == "w") {
    //         $text = $lorem->words($qty,'p');
    //         echo $qty.' word(s): ' . $text;
    //     }
    //     if($type == "s") {
    //         $text = $lorem->sentences($qty,'p');
    //         echo $qty.' sentence(s): ' . $text;
    //     }
    //
    //     if($type == "p") {
    //         $text = $lorem->paragraphs($qty,'p');
    //         echo $qty.' paragraph(s): ' . $text;
    //     }
    //
    // }



}
