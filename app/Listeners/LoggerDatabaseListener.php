<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use DB;
use App\Models\Logger;

class LoggerDatabaseListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        
        $model = $event->data->toArray();
        $action = $event->action;
        $table = DB::table('logger');
        $user = auth()->user();

      $logId = $table->insertGetId([
            'by' => json_encode($user),
            'data_log' => json_encode($model),
            'created_at' => now()
        ]);

      $log = Logger::find($logId);
  

       
    }
}
