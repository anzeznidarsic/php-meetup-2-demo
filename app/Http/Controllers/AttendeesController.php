<?php namespace Meetup\Http\Controllers;

use Meetup\Attendee;
use Meetup\Http\Requests\CreateAttendeeRequest;

class AttendeesController {

    /**
     * List attendees
     *
     * @return \Illuminate\View\View
     */
	public function index()
	{
		$attendees = Attendee::get();
        
        return view('attendees.index', compact('attendees'));
	}

    /**
     * Show attendee's details
     *
     * @param Attendee $attendee
     * @return \Illuminate\View\View
     */
    public function show(Attendee $attendee)
    {
        return view('attendees.show', compact('attendee'));
    }

    /**
     * Show form to add new attendee
     *
     * @return \Illuminate\View\View
     */
	public function create()
	{
		return view('attendees.create');
	}

    /**
     * Save new attendee to the data store
     *
     * @param Attendee $attendee
     * @param CreateAttendeeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
	public function store(Attendee $attendee, CreateAttendeeRequest $request)
	{
        $attendee->create($request->all());

        return redirect()->route('attendees.index');
	}

    /**
     * Show form to edit attendee
     *
     * @param Attendee $attendee
     * @return \Illuminate\View\View
     */

	public function edit(Attendee $attendee)
	{
		return view('attendees.edit', compact('attendee'));
	}

    /**
     * Save updated attendee to the data store
     *
     * @param Attendee $attendee
     * @param CreateAttendeeRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
	public function update(Attendee $attendee, CreateAttendeeRequest $request)
	{
        $attendee->update($request->all());

        return redirect()->route('attendees.index');
	}

    /**
     * Delete attendee
     *
     * @param Attendee $attendee
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
	public function destroy(Attendee $attendee)
	{
        $attendee->delete();

        return redirect()->route('attendees.index');
	}

}
