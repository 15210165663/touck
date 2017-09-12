<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zixuan extends Model
{
    //指定表名
	protected $table = 'zixuan';
	//指定id
	protected $primaryKey = 'id';
	//自动维护时间戳
	public $timestamps = false;
	//指定批量赋值的字段
	protected $fillable = ['name','lastestpri','openpri','formpri','maxpri','minpri','uppic','limit','traAmount','avgTraNumber','markValue','max52','min52','EPS','priearn','beta','divident','ROR','capital','afterpic','afterlimit','afteruppic','aftertime','ustime','chtime'];
}
