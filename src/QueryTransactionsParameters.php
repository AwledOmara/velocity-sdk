<?php
namespace Velocity;


/*
 * This class represents a Velocity QueryTransactionsParameters.
 * It can be used to set Query Transactions Parameters and use as single object.
 */
 
use Exception;

class QueryTransactionsParameters {
    
		public $Amounts; // ArrayOfdecimal
		public $ApprovalCodes; // ArrayOfstring
		public $BatchIds; // ArrayOfstring
		public $CaptureDateRange; // DateRange
		public $CaptureStates; // ArrayOfCaptureState
		public $CardTypes; // ArrayOfTypeCardType
		public $IsAcknowledged = 'false'; // BooleanParameter
		public $MerchantProfileIds; // ArrayOfstring
		public $OrderNumbers; // ArrayOfstring
		public $QueryType = 'OR'; // QueryType
		public $ServiceIds; // ArrayOfstring
		public $ServiceKeys; // ArrayOfstring
		public $TransactionClassTypePairs; // ArrayOfTransactionClassTypePair
		public $TransactionDateRange; // DateRange
		public $TransactionIds; // ArrayOfstring
		public $TransactionStates; // ArrayOfTransactionState
                
                /*
                 * QueryTransactionsParameters set after call the construtor
                 * @param array $qtp holds the Transactionparameters.
                 */
    /**
     * QueryTransactionsParameters constructor.
     * @param $qtp
     * @throws \Exception
     */
    public function __construct($qtp) {
                    
                    if (isset($qtp['TransactionClassTypePairs']) && $qtp['TransactionClassTypePairs'] != NULL){
                        $tctp = array(); // set TransactionClass & TransactionType in object
                        foreach ($qtp['TransactionClassTypePairs'] as $key => $vartctp) {
                           $tctp[$key] = new TransactionClassTypePair($vartctp);
                        }
                    } else {
                        $tctp = NULL;
                    }
                    
                    try { // set CaptureDateRange in object
                        if (isset($qtp['CaptureDateRange'])){
							$CaptureDateRange = new DateRange($qtp['CaptureDateRange']);
						}
                    } catch (Exception $ex) {
                        throw new Exception($ex->getMessage());
                    }
                    
                    try { // set TransactionDateRange in object
                        if (isset($qtp['TransactionDateRange'])){
							$TransactionDateRange = new DateRange($qtp['TransactionDateRange']);
						}
                    } catch (Exception $ex) {
                        throw new Exception($ex->getMessage());
                    }
                    
                    try {
                        if (isset($qtp['Amounts'])){
							$this->Amounts = $qtp['Amounts']; // ArrayOfdecimal
						}
						if (isset($qtp['ApprovalCodes'])){
							$this->ApprovalCodes = $qtp['ApprovalCodes']; // ArrayOfstring
						}
						if (isset($qtp['BatchIds'])){
							$this->BatchIds = $qtp['BatchIds']; // ArrayOfstring
						}
						if (isset($qtp['CaptureDateRange'])){
							$this->CaptureDateRange = $qtp['CaptureDateRange']; // DateRange
						}
						if (isset($qtp['CaptureStates'])){
							$this->CaptureStates = $qtp['CaptureStates'];
						}
						if (isset($qtp['CardTypes'])){
							$this->CardTypes = $qtp['CardTypes']; // ArrayOfTypeCardType
						}
						if (isset($qtp['MerchantProfileIds'])){
							$this->MerchantProfileIds = $qtp['MerchantProfileIds']; // ArrayOfstring
						}
						if (isset($qtp['OrderNumbers'])){
							$this->OrderNumbers = $qtp['OrderNumbers']; // ArrayOfstring
						}
						if (isset($qtp['ServiceIds'])){
							$this->ServiceIds = $qtp['ServiceIds']; // ArrayOfstring
						}
						if (isset($qtp['ServiceKeys'])){
							$this->ServiceKeys = $qtp['ServiceKeys']; // ArrayOfstring
						}
                        $this->TransactionClassTypePairs = $tctp; // ArrayOfTransactionClassTypePair*/
                        if (isset($qtp['TransactionDateRange'])){
							$this->TransactionDateRange = $qtp['TransactionDateRange'];//$txnDateRange; // DateRange
						}
						if (isset($qtp['TransactionIds'])){
							$this->TransactionIds = $qtp['TransactionIds'];
						}
						if (isset($qtp['TransactionStates'])){
							$this->TransactionStates = $qtp['TransactionStates']; // ArrayOfTransactionState
						}
                    } catch (Exception $ex) {
                        throw new Exception(Message::$descriptions['errqtp']);
                    }
                    
                }
}