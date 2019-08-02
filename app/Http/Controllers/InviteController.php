<?php

namespace App\Http\Controllers;

use App\Invite;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInviteRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SentInviteEmail;

class InviteController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Show the form for creating new Question.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $relations = [
            'topics' => \App\Topic::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $correct_options = [
            'option1' => 'Option #1',
            'option2' => 'Option #2',
            'option3' => 'Option #3',
            'option4' => 'Option #4',
            'option5' => 'Option #5'
        ];

        return view('invite.create', compact('correct_options') + $relations);
    }

    /**
     * Store a newly created Question in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInviteRequest $request)
    {
        $email = '';
        $invite = Invite::create($request->except('option1','option2','option3','option4','option5'));
        foreach ($request->input() as $key => $value) {
            if(strpos($key, 'option') !== false && $value != '') {
                $status = $request->input('correct') == $key ? 1 : 0;
                $email = $email.','.$value;
                $invite->link = route('tests.index');
                // send email
                Mail::to($value)
                    ->send(new SentInviteEmail(route('tests.index')));
            }
        }
        $upd_invite = Invite::findOrFail($invite->id);
        $upd_invite->update([
            'email' => substr($email, 1)
        ]);
        return redirect()->back() ->with('alert', 'Email has been sent !');
    }

}
