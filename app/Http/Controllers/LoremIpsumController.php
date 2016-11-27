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

         # Generate the lorem ipsum text
         $howManyUnits = $request->input('qty');
         $textStyle = $request->input('textStyle');
         # Logic...
         $lorem = new joshtronic\LoremIpsum();
         $text = $lorem->sentences($howManyUnits);
         echo '4 sentences: ' . $text;
        //
        //  # Display the results...
        //  return view('lorem')->with(['text', $text]);

    }
    /**
    * To be disabled when completed. Inserted to test joshtronic Lorem Ipsum package
    */
    public function testLorem($qty,$type)
    {

        # Generate the lorem ipsum text
        $howManyUnits = $qty;
        $lorem = new joshtronic\LoremIpsum();
        if($type == "w") {
            $text = $lorem->words($qty,'p');
            echo $qty.' word(s): ' . $text;
        }
        if($type == "s") {
            $text = $lorem->sentences($qty,'p');
            echo $qty.' sentence(s): ' . $text;
        }

        if($type == "p") {
            $text = $lorem->paragraphs($qty,'p');
            echo $qty.' paragraph(s): ' . $text;
        }

    }



}
