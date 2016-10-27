<?php

namespace DevelopersBF\Http\Controllers;

use Illuminate\Http\Request;

class LoremIpsumController extends Controller
{
    /**
     *
     *
     * This was example code I wrote in Lecture 7
     * It shows, roughly, what a controller action for your P3 might look like
     * It is not at all related to the Book resource.
 	*/
     public function getLoremIpsumText(Request $request)
     {

         # Validate the request....

         # Generate the lorem ipsum text
         $howManyParagraphs = $request->input('howManyParagraphs');

         # Logic...
         $loremenator = \SBuck\Loremenator();
         $text = $loremenator->getParagraphs($howManyParagraphs);

         # Display the results...
         return view('lorem')->with(['text', $text]);

     }

    public function create()
    {
        return view('lorem.create'); //->with(['text', $text]);
        //return 'lorem ipsum form goes here';
    }
}
