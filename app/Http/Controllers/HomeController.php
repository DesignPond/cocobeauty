<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Requests\SendMessage;
use App\Coco\Bloc\Repo\BlocInterface;
use App\Coco\Page\Repo\PageInterface;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    protected $page;
    protected $helper;
    protected $bloc;

    public function __construct(PageInterface $page, BlocInterface $bloc)
    {
        $this->page   = $page;
        $this->bloc   = $bloc;

        $this->helper = new \App\Helper\Helper;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function accueil()
    {
        $page   = $this->page->getBySlug('accueil');
        $blocs  = $this->bloc->getAll();

        return view('frontend.accueil')->with([ 'page' => $page, 'blocs' => $blocs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function contact()
    {
        return view('frontend.contact');
    }

    /**
     * Send contact message
     *
     * @return Response
     */
    public function sendMessage(SendMessage $request){

        $data = array('email' => $request->email, 'nom' => $request->nom, 'remarque' => $request->remarque , 'telephone' => $request->telephone, 'societe' => $request->societe);

        Mail::send('emails.contact', $data, function ($message) use ($data) {

            $message->from($data['email'], $data['nom']);

            $message->to('info@cocobeauty.ch')->subject('Message depuis le site www.cocobeauty.ch');
        });

        return redirect()->back()->with(array('status' => 'success', 'message' => '<strong>Merci pour votre message</strong><br/>Nous vous contacterons dès que possible.'));

    }
}
