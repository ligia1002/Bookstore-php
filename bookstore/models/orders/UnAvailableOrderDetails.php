<?php
/**
 * this class  coded  by Lidia Andrei in  10  NOV  2023
 */

class UnAvailableOrderDetails extends OrderDetails
{
   public function __construct ($book, $quantity, $openion = NULL, $reviewDegree = NULL)
   {
       parent::__construct($book, $quantity, $openion, $reviewDegree);
   }


}