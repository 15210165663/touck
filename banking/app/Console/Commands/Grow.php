<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;


class Grow extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'grow';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        for ($i=1; $i < 135; $i++) { 
        $zhi  = file_get_contents('http://web.juhe.cn:8080/finance/stock/usaall?page='.$i.'&type=3&key=e7953b51094bdac7dc4468d46358824e');
         $zhi = json_decode($zhi,true);
        if ($zhi['error_code'] == 0) {
                 $meigu_list = $zhi['result']['data'];
                 foreach ($meigu_list as $key => $value) {

                      $row['cname'] = $value['cname'];
                      $row['category'] = $value['category'];
                      $row['symbol'] = $value['symbol'];
                      $row['price'] = $value['price'];
                      $row['diff'] = $value['diff'];
                      $row['chg'] = $value['chg'];
                      $row['preclose'] = $value['preclose'];
                      $row['open'] = $value['open'];
                      $row['high'] = $value['high'];
                      $row['low'] = $value['low'];
                      $row['amplitude'] = $value['amplitude'];
                      $row['volume'] = $value['volume'];
                      $row['mktcap'] = $value['mktcap'];
                      $row['market'] = $value['market'];
                      $row['date'] = date('Ymd');

                      DB::table('stock_meigu_list')->insert($row);

                 }

                
                
            }else{

            }   
    
    }
    



    }
}
