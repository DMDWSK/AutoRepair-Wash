<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $fillable = [
        'name', 'links', 'password', 'photo', 'join_date', 'status', 'post',
    ];
    public function appointment() {
        return $this->hasOne('App\Appointment');
    }

    public function social_teams(){
      return $this->hasOne('App\Social_team');
    }

    public function team_task() {
      return $this->hasOne('App\Team_task');
    }
}
