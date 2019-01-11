<?php
namespace Velocity;
/*
 * This class represents Query Transactions Detail.
 * It can be used to set different parameters with different datatype.
 */
use Exception;

class QueryTransactionsDetail {
    
		public $IncludeRelated; // boolean
		public $PagingParameters; // PagingParameters
		public $QueryTransactionsParameters; // QueryTransactionsParameters
		public $TransactionDetailFormat; // TransactionDetailFormat
                
                /*
                 * QueryTransactionsDetail set the different parameter.
                 * @param boolean $includeRelated hold true/false.
                 * @param object $pagingParameters holds page & page size.
                 * @param object $Qtxnparams holds transactionid, ammount, order number, capturestate etc.
                 * @param string $transactionDetailFormat holds CWSTransaction/SerializedCWS.
                 */
    /**
     * QueryTransactionsDetail constructor.
     * @param $includeRelated
     * @param $pagingParameters
     * @param $Qtxnparams
     * @param $transactionDetailFormat
     * @throws Exception
     */
    public function __construct($includeRelated, $pagingParameters, $Qtxnparams, $transactionDetailFormat) {
                    
                    try {
                        $this->IncludeRelated = $includeRelated;
                        $this->PagingParameters = $pagingParameters;
                        $this->QueryTransactionsParameters = $Qtxnparams;
                        $this->TransactionDetailFormat = $transactionDetailFormat;
                    } catch (Exception $ex) {
                        throw new Exception(Message::$descriptions['errqtd']);
                    }
                  
                }

}