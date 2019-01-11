<?php
namespace Velocity;

/*
 * This class represents a TransactionClassTypePair.
 * It can be used to set Transactionsclass & TransactionType as single object.
 */
use Exception;

class TransactionClassTypePair {
    
		public $TransactionClass; // int
		public $TransactionType; // int
                /*
                 * TransactionClassPairType set after call the construtor
                 * @param array $tctp holds the 'TransactionClass' & 'TransactionType'.
                 */
    /**
     * TransactionClassTypePair constructor.
     * @param $tctp
     * @throws Exception
     */
    public function __construct($tctp) {
                    try {
                        $this->TransactionClass = $tctp['TransactionClass'];
                        $this->TransactionType = $tctp['TransactionType'];
                    } catch (Exception $ex) {
                        throw new Exception(Message::$descriptions['errqtdtctp']);
                    }
                }
                
}
