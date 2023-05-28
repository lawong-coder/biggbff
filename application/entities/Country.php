<?php
namespace App;
class Country extends \Illuminate\Database\Eloquent\Model
{
	public $timestamps = false;

	/**
     * The table associated with the model.
     *
     * @var string
     */
	public $table = 'countries';
}