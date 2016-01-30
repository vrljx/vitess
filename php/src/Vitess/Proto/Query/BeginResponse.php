<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin 1.0
// Source: query.proto
//   Date: 2016-01-22 01:34:42

namespace Vitess\Proto\Query {

  class BeginResponse extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $transaction_id = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'query.BeginResponse');

      // OPTIONAL INT64 transaction_id = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "transaction_id";
      $f->type      = \DrSlump\Protobuf::TYPE_INT64;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <transaction_id> has a value
     *
     * @return boolean
     */
    public function hasTransactionId(){
      return $this->_has(1);
    }
    
    /**
     * Clear <transaction_id> value
     *
     * @return \Vitess\Proto\Query\BeginResponse
     */
    public function clearTransactionId(){
      return $this->_clear(1);
    }
    
    /**
     * Get <transaction_id> value
     *
     * @return int
     */
    public function getTransactionId(){
      return $this->_get(1);
    }
    
    /**
     * Set <transaction_id> value
     *
     * @param int $value
     * @return \Vitess\Proto\Query\BeginResponse
     */
    public function setTransactionId( $value){
      return $this->_set(1, $value);
    }
  }
}
