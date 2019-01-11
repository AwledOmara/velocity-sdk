<?php namespace Velocity;

use Exception;

class DateRange {
		public $EndDateTime; // dateTime
		public $StartDateTime; // dateTime

    /**
     * DateRange constructor.
     * @param $daterange
     * @throws Exception
     */
    public function __construct($daterange) {
                    try {
                        date_default_timezone_set('UTC'); 
                        $this->EndDateTime = date('Y-m-d\TH:i:s.u\Z',strtotime($daterange['EndDateTime']));
                        $this->StartDateTime = date('Y-m-d\TH:i:s.u\Z',strtotime($daterange['StartDateTime']));
                    } catch (Exception $ex) {
                        throw new Exception(Message::$descriptions['errqtpdaterange']);
                    }
                }
}