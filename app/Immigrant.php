<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use DB;

class Immigrant extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'immigrant_data';

    /**
     * The primary key associated with the model
     *
     * @var int
     */
    protected $primaryKey = 'arrival_id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function image()
    {
        switch($this->arrival_id % 4){
            case 0:
                return URL::asset("img/profile1.gif");
            case 1:
                return URL::asset("img/profile2.gif");
            case 2:
                return URL::asset("img/profile3.gif");
            case 3:
                return URL::asset("img/profile4.gif");
        }

    }


    /*qsa and soundex don't seem to match up between immigrant and links
    public function record()
    {
        $record = DB::table('links')->where('qsa_item_id',$this->qsa_item_id)->where('soundex_value',$this->soundex_value)->first();
        return $record->ship_name;

    }*/
}