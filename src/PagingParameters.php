<?php
namespace Velocity;
/*
 * This class represents PagingParameters.
 * It can be used to set Pages & PageSize as single object.
 */

class PagingParameters {
    
		public $Page; // int
		public $PageSize; // int
                /*
                 * PagingParameters set page number & pagesize after call the construtor
                 * @param array $pp holds the page & page size.
                 */
    /**
     * PagingParameters constructor.
     * @param $pp
     * @throws \Exception
     */
    public function __construct($pp) {
                    try {
                        $this->Page = $pp['page'];
                        $this->PageSize = $pp['pagesize'];
                    } catch (\Exception $ex) {
                        throw new \Exception(Message::$descriptions['errpp']);
                    }
                }
                
}