<?php
/**
 * 
 *
 * @author Anze Znidarsic <a@anze.com>
 */

namespace Meetup;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Attendee extends Eloquent
{
    protected $fillable = ['name', 'experience'];
}