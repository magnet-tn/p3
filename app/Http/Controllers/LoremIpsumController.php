<?php

namespace DevelopersBF\Http\Controllers;

use Illuminate\Http\Request;
use \joshtronic;

class LoremIpsumController extends Controller
{
    /**
     *
     *
     * This was example code I wrote in Lecture 7
     * It shows, roughly, what a controller action for your P3 might look like
     * It is not at all related to the Book resource.
 	*/
    public function testLorem($qty)
    {

        # Generate the lorem ipsum text
        $howManyUnits = $qty;
        $lorem = new joshtronic\LoremIpsum();
        $text = $lorem->sentences($qty,'p');
        echo $qty.' sentences: ' . $text;
    }



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

    public function create() {
        return view('lorem.create'); //->with(['text', $text]);
        //return 'lorem ipsum form goes here';
    }
}
