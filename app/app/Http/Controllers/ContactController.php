<?php
/**
 * Created by PhpStorm.
 * User: kaFFe
 * Date: 20.04.2018
 * Time: 10:53
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    /**
     * Gets all contact-entities.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function get()
    {
        return response()->json(Contact::all());
    }

    public function find($id)
    {
        return response()->json(Contact::find($id));
    }

    public function delete($id)
    {
        return response()->json(Contact::find($id).delete());
    }

    public function create(Request $request)
    {
        $contact = Contact::create($request->all());
        return response()->json($contact);
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $contact->first_name = $request->input('first_name');
        $contact->last_name= $request->input('last_name');
        $contact->phone= $request->input('phone');
        $contact->birthdate= $request->input('birthdate');
        $contact->level= $request->input('level');

        $contact.save();

        return response()->json($contact);
    }
}